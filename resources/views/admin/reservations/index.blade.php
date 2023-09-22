@extends('admin.layout')

@section('content')
    <h1>Réservations</h1>

    <a href="{{ route('admin.reservations.create') }}">Créer un réservation</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Utilisateur</th>
                <th>Voiture</th>
                <th>Date de début</th>
                <th>Date de fin</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reservations as $reservation )
                <tr>
                    <td>{{ $reservation->id }}</td>
                    <td>{{ $reservation->user->name}}</td>
                    <td>{{ $reservation->voiture->marqueVoiture}}</td>
                    <td>{{ $reservation->datedebut }}</td>
                    <td>{{ $reservation->datefin }}</td>
                    <td>{{ $reservation->statut }}</td>
                    <td>
                        <a href="{{ route('admin.reservations.edit', $reservation->id) }}">Modifier</a>
                        <form action="{{ route('admin.reservations.destroy', $reservation->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
