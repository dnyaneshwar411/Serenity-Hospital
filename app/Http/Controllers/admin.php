<?php

namespace App\Http\Controllers;

use App\Models\patient_appointments;
use App\Models\User;
use Illuminate\Http\Request;

class admin extends Controller
{
    public function home()
    {
        $patients = User::where('user_type', '=', 'patient')->get();
        $doctors = User::where('user_type', '=', 'doctor')->get();
        return view('admin.home')->with(compact('patients', 'doctors'));
    }
    public function new_appointments()
    {
        $requests = patient_appointments::where('appointment_status', '=', 'in-queue')->get();
        return view('admin.appointments-requests')->with(compact('requests'));
    }
    public function accepted_appointments()
    {
        $accepted = patient_appointments::where('appointment_status', '=', 'allocated')->get();
        return view('admin.appointments-accepted')->with(compact('accepted'));
    }
    public function completed_appointments()
    {
        $accepted = patient_appointments::where('appointment_status', '=', 'allocated')->get();
        return view('admin.appointments-completed')->with(compact('accepted'));
    }
    public function accept_appointments(Request $req, $id)
    {
        $appointment = patient_appointments::find($id);
        $appointment->appointment_status = 'allocated';
        $appointment->save();
        $requests = patient_appointments::where('appointment_status', '=', 'in-queue')->get();
        return redirect()->back()->with(compact('accepted'))->with(compact('requests'));
    }
}
