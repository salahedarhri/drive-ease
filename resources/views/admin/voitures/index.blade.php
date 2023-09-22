@extends('admin.layout')

@section('content')
    <h1>Voitures</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Marque</th>
                <th>Modèle</th>
                <th>Année</th>
                <th>Sièges</th>
                <th>Prix</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($voitures as $voiture)
                <tr>
                    <td>{{ $voiture->id }}</td>
                    <td>{{ $voiture->marqueVoiture }}</td>
                    <td>{{ $voiture->modeleVoiture }}</td>
                    <td>{{ $voiture->anneeVoiture }}</td>
                    <td>{{ $voiture->nbSieges}}</td>
                    <td>{{ $voiture->prixVoiture }}</td>
                    <td>
                        <a href="{{ route('admin.voitures.edit', $voiture->id) }}">Modifier</a>
                        <form action="{{ route('admin.voitures.destroy', $voiture->id) }}" method="POST" onsubmit="return confirm('Vous etes sure de supprimer cette voiture ?')">
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
