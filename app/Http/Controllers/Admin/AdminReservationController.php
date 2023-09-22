<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\User;
use App\Models\Voiture;
use Illuminate\Http\Request;

class AdminReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();
        return view('admin.reservations.index', compact('reservations'));
    }

    public function create()
    {
        $users = User::all();
        $voitures = Voiture::all();
        return view('admin.reservations.create', compact('users', 'voitures'));
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'user_id' => 'required',
            'voiture_id' => 'required',
            // Add more validation rules for other attributes
        ]);
        // Create a new Reservation instance and save it
        Reservation::create($request->all());
        return redirect()->route('admin.reservations.index')->with('success', 'Reservation created successfully.');
    }


    public function show($id)
    {
        $reservation = Reservation::with('voiture', 'user')->find($id);
    
        if (!$reservation) {
            return redirect()->route('admin.reservations.index')->with('error', 'Reservation not found.');
        }
    
        return view('admin.reservations.show', compact('reservation'));
    }
    public function edit(Reservation $reservation)
    {
        return view('admin.reservations.edit', compact('reservation'));
    }

    public function update(Request $request, Reservation $reservation)
    {
        // Validate the request data
        $request->validate([
            'user_id' => 'required',
            'voiture_id' => 'required',
            // Add more validation rules for other attributes
        ]);

        // Update the Reservation instance with the new data
        $reservation->update($request->all());

        return redirect()->route('admin.reservations.index')->with('success', 'Reservation updated successfully.');
    }

    public function destroy(Reservation $reservation)
    {
        // Delete the Reservation instance
        $reservation->delete();

        return redirect()->route('admin.reservations.index')->with('success', 'Reservation deleted successfully.');
    }
}

