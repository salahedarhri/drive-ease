@extends('admin.layout')

@section('content')
  <form action="{{ route('admin.voitures.update', $voiture->id) }}" method="POST" >
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="marque">Marque de la voiture</label>
        <input type="text" class="form-control" id="marque" name="marqueVoiture" value="{{ $voiture->marqueVoiture }}">
    </div>

    <div class="form-group">
        <label for="modele">Modèle de la voiture</label>
        <input type="text" class="form-control" id="modele" name="modeleVoiture" value="{{ $voiture->modeleVoiture }}">
    </div>

    <div class="form-group">
        <label for="annee">Année de la voiture</label>
        <input type="text" class="form-control" id="annee" name="anneeVoiture" value="{{ $voiture->anneeVoiture }}">
    </div>

    <div class="form-group">
        <label for="prix">Prix de la voiture</label>
        <input type="number" class="form-control" step='any' id="prix" name="prixVoiture" value="{{ $voiture->prixVoiture }}">
    </div>

    <div class="form-group">
        <label for="sieges">Nombre de sièges</label>
        <input type="number" class="form-control" id="sieges" name="nbSieges" value="{{ $voiture->nbSieges }}">
    </div>

    <div class="form-group">
        <label for="description">Description de la voiture</label>
        <textarea class="form-control" id="description" name="descriptionVoiture">{{ $voiture->descriptionVoiture }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Modifier</button>
  </form>

@endsection

