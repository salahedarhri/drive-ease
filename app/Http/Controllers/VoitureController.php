<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Voiture;
use App\Models\Reservation;
use Illuminate\Http\Request;

class VoitureController extends Controller
{
    public function index()
    {
        $voitures = Voiture::all();
        return view('voitures', compact('voitures'));
    }

    public function show($id)
    {
        $voiture = Voiture::find($id);

        return view('components.voiture', compact('voiture'));
    }

    public function search(Request $request)
    {
        $datedebut = $request->input('datedebut');
        $datefin = $request->input('datefin');

        return view('voiture.selection',compact('datedebut' , 'datefin')) ;
    }
    public function disponibilite (Request $request){
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');

        $availableCars = Voiture::whereDoesntHave('reservations', function ($query) use ($start_date, $end_date) {
            $query->where('datedebut', '<=', $end_date)
                ->where('datefin', '>=', $start_date);
        })->get();

        return view('disponibilite', compact('availableCars', 'start_date', 'end_date'));
    }
    
    /*
        public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required',
            // Add more validation rules for other attributes
        ]);

        // Create a new Voiture instance and save it
        Voiture::create($request->all());

        return redirect()->route('oitures.index')->with('success', 'Voiture created successfully.');
    }

    public function edit(Voiture $voiture)
    {
        return view('admin.voitures.edit', compact('voiture'));
    }

    public function update(Request $request, Voiture $voiture)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required',
            // Add more validation rules for other attributes
        ]);

        // Update the Voiture instance with the new data
        $voiture->update($request->all());

        return redirect()->route('admin.voitures.index')->with('success', 'Voiture updated successfully.');
    }

    public function destroy(Voiture $voiture)
    {
        // Delete the Voiture instance
        $voiture->delete();

        return redirect()->route('admin.voitures.index')->with('success', 'Voiture deleted successfully.');
    }
    */

}
