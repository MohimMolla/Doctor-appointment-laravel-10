<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DoctorCommentController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });

// test dashboard
// Route::get('/home', function () {
//     return view('admin.home');
// });


//defoult route start
// Route::get('/dashboard', function () {
//     return view('admin.home');
// })->middleware(['auth', 'verified'])->name('dashboard');

// user route start

Route::get('/home', [HomeController::class, 'redirect'])->middleware('auth', 'verified');
Route::get('/', [HomeController::class, 'index']);

Route::get('/doctor', [HomeController::class, 'doctor']);

Route::get('/doctor-detailes/{id}', [HomeController::class, 'show']);


//appointment get specaility
 Route::get('/appoint_sp/{id}', [HomeController::class, 'apGetSpciality']);

// search get specility
Route::get('/speciality/{id}', [HomeController::class, 'get_speciality']);
// search get doctor by name
Route::post('/search-doctors-by-name', [HomeController::class, 'searchByName'])->name('search-doctors-by-name');



Route::post('/appointment', [HomeController::class, 'appointment']);
Route::get('/myappoinment', [HomeController::class, 'myappoinment']);
Route::get('/cancel_appoint/{id}', [HomeController::class, 'cancel_appoint']);

//serch url
Route::get('/search', [HomeController::class, 'search'])->name('search');

// user route end

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//defoult route end

//User route start
// Route::get('/', function () {
//     return view('layouts.templete');
// });
// Route::get('/', function () {
//     return view('user.home');
// });
Route::get('/about', function () {
    return view('user.about');
});

//Event News Route
Route::get('/news', [HomeController::class, 'event'])->name('news');
Route::get('/news/{id}', [HomeController::class, 'singleEvent'])->name('singleEvent');

Route::get('/contact', function () {
    return view('user.contact');
});
//User route end

//Admin route start
//admin home page
//Route::get('/home', [AdminController::class, 'index']);


Route::get('/add_doctor_view', [AdminController::class, 'addview']);
Route::post('/store_doctor', [AdminController::class, 'adddoctor']);
Route::get('/alldoctor', [AdminController::class, 'alldoctor']);
Route::get('/editdoctor/{id}', [AdminController::class, 'Editdoctor']);
Route::post('/updatedoctor/{id}', [AdminController::class, 'Updatedoctor']);
Route::get('/deleted/{id}', [AdminController::class, 'Doctordeleted']);

Route::get('/showappoinment', [AdminController::class, 'showappoinment']);
Route::get('/approved/{id}', [AdminController::class, 'Approved']);
Route::get('/canceled/{id}', [AdminController::class, 'Canceled']);
Route::get('/emailview/{id}', [AdminController::class, 'emailview']);
Route::post('/sendemail/{id}', [AdminController::class, 'sendemail']);

//patient list show
Route::get('/patient-list', [AdminController::class, 'patient_doctor_list'])->name('patient_list');

//insert patient
Route::get('/insert_patient/{id}', [AdminController::class, 'insert_patient'])->name('insert_patient');

//delet patient
Route::get('/delet-patient/{id}', [AdminController::class, 'delet_patient'])->name('delet_patient');

//edit patient
Route::get('/edit-patient/{id}', [AdminController::class, 'edit_patient'])->name('edit_patient');

//update patient
Route::post('/update-patient/{id}', [AdminController::class, 'update_patient'])->name('update_patient');

//admin show speciality
Route::get('/show-speciality', [AdminController::class, 'speciality_show'])->name('speciality');

Route::get('/add-speciality', [AdminController::class, 'add_speciality'])->name('addSpeciality');

Route::post('/add-speciality-view', [AdminController::class, 'speciality_add'])->name('addspeciality');

Route::get('/edit-speciality/{id}', [AdminController::class, 'speciality_edit'])->name('editspeciality');

Route::post('/update-speciality/{id}', [AdminController::class, 'update_speciality'])->name('updatespeciality');

Route::get('/delet-speciality/{id}', [AdminController::class, 'speciality_delete'])->name('speciality_delete');



//Admin route end



//User Controller routes
Route::controller(UserController::class)->group(function(){
    Route::get('/user-list','index')->name('user_list');
    Route::get('/user-list-edit/{id}','user_edit')->name('user_edit');
    Route::get('/user-list-delete/{id}','user_delete')->name('user_delete');
    Route::post('/user-list-update/{id}','user_update')->name('user_update');
       
});


//start DoctorComment controller 
// route for comment 

Route::get('doctors/comments', [DoctorCommentController::class,'index'])->name('all-comments');
Route::post('doctors/{doctor}/comments', [DoctorCommentController::class,'store'])->name('comment');
//edit comment
Route::get('comments/edit/{id}', [DoctorCommentController::class, 'editComment'])->name('comments_edit');
//update comment
Route::post('doctors/comments/update/{id}', [DoctorCommentController::class,'commentupdate'])->name('commentupdate');
//delet comment
Route::get('doctors/comments/delet/{id}', [DoctorCommentController::class,'commentdelet'])->name('commentdelet');


// route for reply 
Route::post('comments/{commentId}/reply', [DoctorCommentController::class, 'reply'])->name('reply');
//all reply
Route::get('/allreply', [DoctorCommentController::class, 'allreply'])->name('allreply');
//edit reply
Route::get('/reply/edit/{id}', [DoctorCommentController::class, 'editreply'])->name('editreply');
//update reply
Route::post('/reply/update/{id}', [DoctorCommentController::class, 'updatereply'])->name('updatereply');

//delete reply
Route::get('/reply/delet/{id}', [DoctorCommentController::class, 'deletereply'])->name('deletereply');

//event controller




Route::resources([
    'event'=>EventController::class,
]);









require __DIR__ . '/auth.php';
