<?php

//new project admin
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Speciality;
use App\Models\User;
use App\Notifications\SendEmailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Notification;



class AdminController extends Controller
{
    
    // speciality section start
    public function speciality_show()
    {
        $data = Speciality::paginate(10);

        return view('admin.show_speciality', compact('data'));
    }

    public function speciality_add(Request $request)
    {
        $data = new Speciality;
        $data->name = $request->name;
        $data->save();
        return redirect()->back()->with('success', 'Doctor Speciality Added Successfully');
    }

    public function add_speciality()
    {
        return view('admin.add_speciality');
    }

    public function speciality_edit($id)
    {
        $speciality = Speciality::find($id);
        return view('admin.edit_speciality', compact('speciality'));
    }
    public function update_speciality(Request $request, $id)
    {
        $speciality = Speciality::find($id);

        $speciality->name = $request->name;

        $speciality->save();
        return redirect()->route('speciality')->with('info', 'Speciality updated successfully');
    }


    public function speciality_delete($id)
    {
        Speciality::find($id)->delete();

        return redirect()->back()->with('error', 'Speciality deleted successfully');
    }


    // speciality section end


    public function addview()
    {
        $speciality = Speciality::all();
        return view('admin.add_doctor', compact('speciality'));
    }

    // all doctor show here
    public function alldoctor()
    {
        //$doctor = Doctor::all()->paginate(10);
        $doctor = Doctor::paginate(5);
        $specialities = Speciality::all();
        // return view('your_view_name', compact('specialities'));




        return view('admin.alldoctor', compact('doctor', 'specialities'));
    }

    // Doctor deleted code here

    public function Editdoctor($id)
    {
        $doctor = Doctor::find($id);
        $speciality = Speciality::all();

        return  view('admin.editdoctor', compact('doctor', 'speciality'));
    }
    // Doctor update code here

    public function Updatedoctor(Request $request, $id)
    {
        $doctor = Doctor::find($id);
        if (!$doctor) {
            return redirect()->back()->with('error', 'Doctor not found');
        }

        $request->validate([
            'speciality_id' => 'required|integer',
            // Add validation rules for other fields...
        ]);

        $image = $request->file('file');
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('doctorimage'), $imagename);

        // Assign properties
        $doctor->image = $imagename;
        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->speciality_id = $request->speciality_id; // Use the speciality_id from the input
        $doctor->room_number = $request->room_number;
        $doctor->achievement = $request->achievement;
        $doctor->institute = $request->institute;
        $doctor->doctor_details = $request->doctor_details;
        $doctor->save();

        return redirect('/alldoctor')->with('message', 'Doctor Information Updated Successfully');
    }


    // Doctor delete code here
    public function Doctordeleted($id)
    {
        $doctor = Doctor::find($id);

        $doctor->delete();

        return  redirect()->back()->with('warning', 'Doctor deleted successfully.');
    }



    public function adddoctor(Request $request)
    {
        $doctor = new Doctor;

        $speciality_id = $request->speciality_id;
        $speciality = Speciality::where('id', $speciality_id)->first();

        if ($speciality) {

            $speciality_id = $speciality->id;
            $speciality_name = $speciality->name;
        } else {

            $speciality_id = null;
            $speciality_name = null;
        }

        // Handle image upload
        $image = $request->file('file');
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('doctorimage'), $imagename);

        // Assign properties
        $doctor->image = $imagename;
        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->speciality_id = $speciality_id;
        $doctor->speciality = $speciality_name;
        $doctor->room_number = $request->room_number;
        $doctor->achievement = $request->achievement;
        $doctor->institute = $request->institute;
        $doctor->doctor_details = $request->doctor_details;

        $doctor->save();

        return redirect()->back()->with('message', 'Doctor Information Added Successfully');
    }

    public function showappoinment()
    {
        // $user=User::user()->name;
        // $data= Appointment::where('user_id',$user)->get();
        $data = Appointment::paginate(5);


        // dd($data);
        return view('admin.showappoinment', compact('data',));
    }

    public function Approved($id)
    {
        $approved = Appointment::find($id);
        $approved->status = 'approved';
        $approved->save();

        return redirect()->back();
    }

    public function Canceled($id)
    {
        $canceled = Appointment::find($id);
        $canceled->status = 'canceled';
        $canceled->save();

        return redirect()->back();
    }

    // email view email
    public function emailview($id)
    {
        $data = Appointment::find($id);

        return view('admin.email_view', compact('data'));
    }

    // send mail
    public function sendemail(Request $request, $id)
    {
        $data = Appointment::find($id);
        $details = [
            'greeting' => $request->greeting,
            'body' => $request->body,
            'actiontext' => $request->actiontext,
            'actionurl' => $request->actionurl,
            'endpart' => $request->endpart,
        ];

        Notification::send($data, new SendEmailNotification($details));
        // $emailAddress = $data->email; // Adjust this according to your actual column name for the email address.
        // Notification::route('mail', $emailAddress)->notify(new SendEmailNotification($details));

        return redirect()->back()->with('message', 'Email sent successfully');
    }

    //patient & doctor list show

    public function patient_doctor_list()
    {

        $patient = Patient::paginate(5);
        //dd($patient);

        return view('admin.patient', compact('patient'));
    }

    //this funtion for insert patient 
    public function insert_patient($id)
    {
        $appointment = Appointment::find($id);
        $appointmentId = $appointment->id;
        $doctorId = $appointment->doctor_id;
        $specialityId = $appointment->speciality_id;

        $patient = new Patient();
        $patient->appointment_id = $appointmentId;
        $patient->doctor_id = $doctorId;
        $patient->speciality_id = $specialityId;

        $patient->image = "Defualt Image";
        $patient->advice = "";
        $patient->comments = "";
        $patient->save();

        return redirect()->back()->with('message',"Patient Information Insert Successfully");
    }

    //delete patient section
    public function delet_patient($id)
    {
        $patient = Patient::find($id);
        $patient->delete();

        return redirect()->back()->with('warning', "Patient list deleted successfully");
    }

    //edit patient section
    public function edit_patient($id)
    {
        $patient = Patient::find($id);
        return view('admin.edit-patient', compact('patient'));
    }

    //update patient 
    public function update_patient(Request $request, $id)
    {
        $patient = Patient::find($id);
        if (!$patient) {
            return redirect()->back()->with('error', "Patient not found");
        }
    
        $appointment = Appointment::find($patient->appointment_id);
        if (!$appointment) {
            return redirect()->back()->with('info', "Appointment not found");
        }
    
        $doctorId = $appointment->doctor_id;
        $specialityId = $appointment->speciality_id;
    
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('prescription'), $imagename);
            $patient->image = $imagename;
        }
    
        $patient->doctor_id = $doctorId;
        $patient->speciality_id = $specialityId;
        $patient->advice = $request->input('advice');
        $patient->comments = $request->input('comments');
        $patient->save();
    
        return redirect()->route('patient_list')->with('message', "Patient information updated successfully");
    }
    



}
