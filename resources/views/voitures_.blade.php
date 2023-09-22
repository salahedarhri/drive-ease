<div class="kiwi">
  
  @if(count($voitures) == 0)
  <p> aucune offre de voitures pour le moment</p> 
  @endif

  <p class="titre-selection">Sélection de voitures :</p>

  <div class="product-grid">

    @foreach($voitures as $voiture)

      <div class="container">

        <img src="{{ asset('images/car-2.jpg')}}" alt="Product Image" class="image">

        <a href="/voiture/{{$voiture['id']}}" class="name" >{{$voiture['marqueVoiture']}}</a>
        
        <p class="price">Sièges : {{$voiture['nbSieges']}}</p>
        <p class="price"> {{$voiture['prixVoiture']}} DH/jour </p>

        <a href="/voiture/{{$voiture['id']}}"  >
          <button class="decouv-btn">Découvrir</button>
        </a>
      
      </div>

    @endforeach 

  </div>

</div>