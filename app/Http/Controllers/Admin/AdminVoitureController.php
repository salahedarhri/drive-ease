<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Voiture;
use Illuminate\Http\Request;

class AdminVoitureController extends Controller
{
    public function index()
    {
        $voitures = Voiture::all();
        return view('admin.voitures.index', compact('voitures'));
    }

    public function create()
    {
        return view('admin.voitures.create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'marqueVoiture' => 'required',
            'modeleVoiture' => 'required',
            'anneeVoiture' => 'required',
            'prixVoiture' => 'required',
            'nbSieges' => 'required',
            'descriptionVoiture' => 'required',
        ]);

        // Create a new Voiture instance and save it
        Voiture::create($request->all());

        return redirect()->route('admin.voitures.index')->with('success', 'Voiture created successfully.');
    }

    public function edit(Voiture $voiture)
    {
        return view('admin.voitures.edit', compact('voiture'));
    }

    public function update(Request $request, Voiture $voiture)
    {
        // Validate the request data
        $request->validate([
            'marqueVoiture' => 'required',
            'modeleVoiture' => 'required',
            'anneeVoiture' => 'required',
            'prixVoiture' => 'required',
            'nbSieges' => 'required',
            'descriptionVoiture' => 'required',
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
}
