<?php

namespace App\Http\Controllers;

use App\Models\patient_appointments;
use Illuminate\Http\Request;

class webPages extends Controller
{
    public function home()
    {
        return view('web-pages.home');
    }
    public function about()
    {
        return view('web-pages.about');
    }
    public function contact()
    {
        return view('web-pages.contact');
    }
    public function privacyPolicy()
    {
        return view('web-pages.privacy_policy');
    }
    public function services()
    {
        return view('web-pages.services');
    }
    public function appointment()
    {
        return view('web-pages.appointment');
    }
    public function store_appointment(Request $req)
    {
        $appointment = new patient_appointments();
        $appointment->user_id = auth()->user()->id;
        $appointment->patient_id = auth()->user()->id;
        $appointment->patient_name = auth()->user()->name;
        $appointment->patient_email = auth()->user()->email;
        $appointment->patient_phone_no = auth()->user()->phone_no;
        $appointment->patient_date_of_appointment = $req->appointment_date;
        $appointment->appointment_reason = $req->reason_for_appointment;
        $appointment->save();
        return redirect('/');
    }
}
