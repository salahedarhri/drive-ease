@extends('admin.layout')

@section('content')
    <h1>Créer une réservation</h1>

    <form action="{{ route('admin.reservations.store') }}" method="POST">
        @csrf

        <div>
            <label for="user_id">Utilisateur :</label>
            <select name="user_id" id="user_id">
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="voiture_id">Voiture :</label>
            <select name="voiture_id" id="voiture_id">
                @foreach($voitures as $voiture)
                    <option value="{{ $voiture->id }}">{{ $voiture->marqueVoiture }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="datedebut">Date de début :</label>
            <input type="date" name="datedebut" id="datedebut">
        </div>

        <div>
            <label for="datefin">Date de fin :</label>
            <input type="date" name="datefin" id="datefin">
        </div>

        <!-- <div>
            <label for="nbJours">Nombre de jours :</label>
            <input type="number" name="nbJours" id="nbJours">
        </div> -->
        <button type="submit">Créer</button>
    </form>
@endsection
