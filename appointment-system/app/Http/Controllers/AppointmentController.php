<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {

        $appointments = Appointment::all();
        return view('appointments.index', ['appointments' => $appointments]);
    }

    public function create()
    {
        return view('appointments.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'date' => 'required'
        ]);

        $proposedDate = $data['date'];

        // Check for overlapping appointments
        $overlappingAppointments = Appointment::where('date', $proposedDate)->exists();

        // if ($overlappingAppointments) {
        //     return redirect()->back()->with('error', 'The appointment date overlaps with an existing appointment.');
        // }


        $newAppointment = Appointment::create(['date' => $proposedDate]);
        return redirect((route('appointment.index')));
    }
}
