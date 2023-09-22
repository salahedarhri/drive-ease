<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Voiture;
use App\Models\User;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'voiture_id' => 'required',
            'datedebut' => 'required|date',
            'datefin' => 'required|date',
        ]);

        $reservation = new Reservation();
        $reservation->user_id = auth()->user()->id; 
        $reservation->voiture_id = $request->voiture_id;
        $reservation->datedebut = $request->datedebut;
        $reservation->datefin = $request->datefin;
        $reservation->nbJours = strtotime($request->datefin) - strtotime($request->datedebut);
        $reservation->save();

        // Redirection vers page de reservations :
        return redirect()->route('reservations.index')->with('success', 'La réservation a été créée avec succès.');
    }

    public function index()
    {
        $reservations = Reservation::all();
        return view('admin.reservations.index', compact('reservations'));
    }


    public function create(Request $request)
    {
        $start_date = $request->input('datedebut');
        $end_date = $request->input('datefin');
        
        return view('reservation.create', compact('datedebut', 'datefin'));
    }

    public function edit(Reservation $reservation)
    {
        return view('reservations.edit', compact('reservation'));
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

        return redirect()->route('reservations.index')->with('success', 'Reservation deleted successfully.');
    }
}

    /*
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
    */
