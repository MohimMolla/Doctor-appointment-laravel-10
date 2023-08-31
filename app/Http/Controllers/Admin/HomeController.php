<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Appointment;
use App\Models\Comments;
use App\Models\Doctor;
use App\Models\Event;
use App\Models\Patient;
use App\Models\Reply;
use App\Models\Speciality;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::check()) {
            $userRole = Auth::user()->role;

            if ($userRole === 1) { // Assuming '1' corresponds to the admin role
                $userCount = User::count();
                $doctor = Doctor::count();
                $appointment = Appointment::count();
                $patient = Patient::count();
                $speciality = Speciality::count();
                return view('admin.home', compact('userCount', 'doctor', 'appointment', 'patient', 'speciality'));
            } else {
                $doctors = Doctor::all();
                $sp = Speciality::all();
                $events = Event::all();
                return view('user.home', compact('doctors', 'sp', 'events'));
            }
        } else {
            return redirect()->back();
        }
    }


    public function index()
    {
        if (Auth::check()) {
            return redirect('home'); // Redirect to a route named 'home'
        } else {
            $doctors = Doctor::all();
            $sp = Speciality::all();
            $events = Event::all();
            return view('user.home', compact('doctors', 'sp', 'events'));
        }
    }


    //   event section
    public function event()
    {
       
        $events = Event::all();
        return view('user.news', compact('events'));
    }


    // single Event News show   
    public function singleEvent($id)
    {
        $event = Event::find($id);
        return view('user.single-news', compact('event'));
    }

    // single page doctor show   

    public function show($id)
    {
        $doctor = Doctor::find($id);
        //$sp = Speciality::find($id);

        // Get the comments for the specific doctor
        $comments = Comments::where('doctor_id', $doctor->id)->get();

        // Create an array to store the replies for each comment
        $commentReplies = [];
        foreach ($comments as $comment) {
            // Get the replies for each comment
            $replies = Reply::where('comment_id', $comment->id)->get();
            $commentReplies[$comment->id] = $replies;
        }

        return view('user.singale', compact('doctor','comments', 'commentReplies'));
    }

    // Doctor page doctor show

    public function doctor()
    {

        $doctors = Doctor::all();
        $sp = Speciality::all();
        return view('user.doctor', compact('doctors', 'sp'));
    }

    public function appointment(Request $request)
    {
        $appoin = new Appointment();

        $appoin->name = $request->name;
        $appoin->email = $request->email;
        $appoin->phone = $request->phone;
        $appoin->speciality_id = $request->speciality;
        $appoin->date = $request->date;
        $appoin->doctor_id = $request->doctor_name;
        $appoin->message = $request->message;
        $appoin->status = 'Pending';

        if (Auth::id()) {
            $appoin->user_id = Auth::user()->id;
        }
        if (Auth::check()) {
            $appoin->save();
            return redirect()->back()->with('message', 'Thank you!!, Appoinment sucessfully. We will contact with you soon.');
        } else {
            return redirect()->back()->with('message', "You are not a valide  in user, please login and try again");
        }
    }
    public function  myappoinment()
    {
        if (Auth::id()) {

            $userid = Auth::user()->id;
            //$appoints = Appointment::with(['doctor', 'speciality'])->get();
            $appoints = appointment::where('user_id', $userid)->get();
            //$appointments = Appointment::where('user_id', $userid)->get();


            return view('user.myappoinment', compact('appoints',));
        } else {
            return redirect()->back()->with('message', " You are not a valide in user, please login");
        }
    }

    public function cancel_appoint($id)
    {
        $data = Appointment::find($id);
        $data->delete();
        return redirect()->back();
    }
    // search get specility
    public function get_speciality($id)
    {
        $sc = Doctor::where("speciality_id", $id)->get();
        return response()->json($sc);
    }

    //appointment get specaility
    public function apGetSpciality($id)
    {
        $aps = Doctor::where("speciality_id", $id)->pluck('name', 'id');
        return response()->json($aps);
    }
    //search doctor by name
    public function searchByName(Request $request)
    {
        $doctorName = $request->input('doctor_name');

        // Perform the search based on doctor's name
        $doctors = Doctor::where('name', 'LIKE', '%' . $doctorName . '%')->get();

        // Return the search results as JSON response
        return response()->json($doctors);
    }
}
