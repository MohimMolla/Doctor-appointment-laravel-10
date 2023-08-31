<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comments;
use App\Models\Patient;
use App\Models\Reply;
use Illuminate\Http\Request;

class DoctorCommentController extends Controller
{

    public function index()
    {
        $comments = Comments::paginate(5);
        $replies = Reply::with('comment')->get();

        return view('admin.all-comments', compact('comments', 'replies'));
    }

    public function store(Request $request, $doctor_id)
    {
        $comment = new Comments();


        $comment->user_id = auth()->user()->id;

        $comment->doctor_id = $doctor_id;
        $comment->rating = $request->input('rating');
        $comment->comment = $request->input('comment');
        $comment->save();

        return redirect()->back();
    }

    //edit comment
   
    public function editComment($id)
{
    $comment = Comments::findOrFail($id);
    return view('admin.edit-comment', compact('comment'));
}

//update comment
public function commentupdate(Request $request,$id){
    $comment = Comments::findOrFail($id);

  
    $comment->comment = $request->input('comment');
    $comment->save();
    // return redirect()->back()->with('message',"Comment updated successfully");
    return redirect()->route('all-comments')->with('message',"Comment updated successfully");

}

//delet comment
public function commentdelet($id){
$comment = Comments::findOrFail($id);
$comment->delete();
return redirect()->back()->with('message',"Comment deleted successfully");
}



    // funtion for reply 
    public function reply(Request $request, $commentId)
    {
        $comment = Comments::findOrFail($commentId);

        $reply = new Reply();
        $reply->comment_id = $comment->id;
        $reply->user_id = auth()->id();
        $reply->doctor_id = $comment->doctor_id;
        $reply->reply = $request->input('reply');
        $reply->save();

        //dd($comment);

        return redirect()->back();
    }

    //all reply
    public function allreply(){
        // $replies = Reply::all();
        $replies = Reply::paginate(5);
        return view('admin.all-reply', compact('replies'));
    }
    //edit reply
    public function editreply($id){
        $replies = Reply::find($id);
        return view('admin.edit-reply', compact('replies'));
    }
    //update reply
    public function updatereply(Request $request,$id){
      
        $replies = Reply::findOrFail($id);

        $replies->reply = $request->input('reply');
        $replies->save();

        return redirect()->route('allreply')->with('message', 'Reply updated successfully.');
    }
    //Delet reply
    public function deletereply($id){
      
        $replies = Reply::findOrFail($id);

       $replies->delete();

        return redirect()->back()->with('message', 'Reply updated successfully.');
    }

   
}
