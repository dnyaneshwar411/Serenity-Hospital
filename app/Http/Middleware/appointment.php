<?php

namespace App\Http\Middleware;

use App\Models\patient_appointments;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class appointment
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (patient_appointments::find(auth()->user()) && patient_appointments::find(auth()->user()->id)) {
            $message = 'You already have an appointment scheduled';
            return redirect('/')->with(compact('message'));
        } elseif (auth()->check()) {
            return $next($request);
        } else {
            $message = 'Please Login to book an appointment';
            return redirect('/login')->with(compact('message'));
        }
    }
}
