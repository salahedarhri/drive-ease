@extends('layout')

<!-- MAIN FILE --> 

@section('content')

<style>
  body {
    background: url(../images/silhouette-of-car-96c7aaaf194f74e2fcf6003e07843406.jpg) no-repeat center center fixed;
    background-size:cover;
  }
</style>

<div class="accueil-glob">
  <div class="accueil_1">

    <section class="part-princ">
      <div class="recherche">
        <h3 class="recherche-titre">Louez votre voiture dès maintenant !</h3>
        <div class="recherche-composants">
          <input class="date-deb" type="date" placeholder="Date de début" required>
          <input class="date-fin"  type="date" placeholder="Date de fin">
          <input class="date-cher" type="submit" value="Chercher">
        </div>
      </div>
    </section>

  </div>


</div>
  
@endsection