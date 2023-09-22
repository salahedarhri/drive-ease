@extends('layout')

@section('content')
<html>
<body>
  <style> body{ background-color:rgb(190, 216, 238);} </style>


<div class="kiwi">

  <!-- Les dates  -->
  <div class="custom-container">
    <div class="custom-row">
        <div class="custom-col">
            <h2>Voitures disponibles pour les dates suivantes:</h2><br>
            <p>&rarr; Date de début : {{ $start_date }}</p>
            <p>&rarr; Date de fin : {{ $end_date }}</p>
        </div>
    </div>
  </div>

  <!-- Voitures Disponibles -->
  @if ($availableCars->count() > 0)
    <div class="product-grid">
        @foreach ($availableCars as $voiture)
          <div class="container">

            <img src="{{ asset('images/car-2.jpg')}}" alt="Product Image" class="image">
    
            <a href="/voiture/{{$voiture['id']}}" class="name" >{{$voiture['marqueVoiture']}}</a>
            
            <p class="price">Sièges : {{$voiture['nbSieges']}}</p>
            <p class="price"> {{$voiture['prixVoiture']}} DH/jour </p>
    
            <a href="/voiture/{{$voiture['id']}}"  >
              <form action="{{ route('confirmation')}}">

                <button class="decouv-btn">Choisir</button>
              </form>
            </a>
            
          </div>
        @endforeach
    </div>

  @else
      <p>No cars available for the selected dates.</p>
  @endif
</div>

</body>
</html>


@endsection