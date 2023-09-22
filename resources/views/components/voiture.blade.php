@extends('layout')

@section('content')

<div class="kiwi3">

  <div class="kiwi3_1">
    <img src="../images/car-2.jpg" class="kiwi3_image">
  </div>
  

  <div class="kiwi3_2">
    <p>
      {{$voiture['marqueVoiture']}}
    </p><br>
    <p>
      <b>Description</b> : <br>
      {{$voiture['descriptionVoiture']}}
    </p><br>
    <p>
      <b>Nombre de sièges</b> :<br> {{$voiture['nbSieges']}}
    </p><br>
    <p>
      <b>Prix de location :</b><br>
      {{$voiture['prixVoiture']}} DH/jour
    </p><br>
  

  </div>

</div>



@endsection