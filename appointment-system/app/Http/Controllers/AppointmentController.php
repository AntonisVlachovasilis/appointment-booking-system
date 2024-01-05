<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class AppointmentController extends Controller
{
    public function index()
    {

        $appointments = Appointment::paginate(5);
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

        if ($overlappingAppointments) {

            return redirect(route('appointment.create'))->with('warning', 'The appointment date and hour already exists');
        }


        $newAppointment = Appointment::create(['date' => $proposedDate]);
        return redirect((route('appointment.index')))->with('success', 'Appointment created successfully');
    }

    public function edit(Appointment $appointment)
    {
        return view('appointments.edit', ['appointment' => $appointment]);
    }

    public function update(Appointment $appointment, Request $request)
    {

        $data = $request->validate([
            'date' => 'required'
        ]);

        $proposedDate = $data['date'];

        // Check for overlapping appointments
        $overlappingAppointments = Appointment::where('date', $proposedDate)->exists();

        if ($overlappingAppointments) {

            return redirect()->back()->withInput()->with('warning', 'The appointment date and hour already exists');
        }

        $appointment->update($data);

        return redirect(route('appointment.index'))->with('success', 'Appointment updated successfully');
    }

    public function destroy(Appointment $appointment)
    {
        $appointment->delete();

        return redirect(route('appointment.index'))->with('success', 'Appointment deleted successfully');
    }
}
