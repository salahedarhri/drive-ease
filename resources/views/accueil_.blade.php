<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- CSS -->
  <link rel="stylesheet" href="{{ asset('css/shit_styled.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style3.css') }}">

  <title>Drive-Ease</title>

</head>
<body>

  <!-- En tete -->
  <div class="navbar" id="myNavbar">
    <a href="/" class="logo"><img src="images/logo.png" alt=" "></a>
    
    <ul>
      <li><a href="/" >Accueil</a></li>
      <li><a href="/voitures" class="voitures">Voitures</a></li>
      <li><a href="/a_propos" class="apropos">À propos</a></li>
      <li><a href="/login" class="connexion">Connexion</a></li>
      <li><a href="/register" class="inscription">S'inscrire</a></li>
    </ul>
    
    <i class="navbar-icon" onclick="toggleNav()">&#9776;</i>
  </div>
  
  <script>
    function toggleNav() {
      var navbar = document.getElementById("myNavbar");
      if (navbar.className === "navbar") {
        navbar.className += " responsive";
      } else {
        navbar.className = "navbar";
      }
    }
  </script>
  
  <!-- Partie Principale -->
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

          <form action=" {{ route('disponibilite') }}" method="post">
            @csrf
            <input class="date-deb" type="date" id="start_date" name="start_date" placeholder="Date de début" required>
            <input class="date-fin"  type="date" id="end_date" name="end_date" placeholder="Date de fin" required>
            <input class="date-cher" type="submit" value="Chercher">
          </form>

        </div>
      </div>
    </section>

  </div>

  <div class="kiwi2">
    <h4>
      À propos de Drive Ease
    </h4>
    <div class="kiwi2-2">
      <p>
        &emsp;Drive Ease est votre partenaire de confiance
        pour tous vos besoins de location de voitures
        à Agadir. <br><br>&emsp;Que vous souhaitiez louer une 
        voiture pour vos déplacements professionnels ou
        pour explorer les magnifiques paysages de la région
        , Drive Ease vous garantit les meilleures offres et
        une expérience pratique et facile depuis votre smartphone
        ou votre ordinateur.<br><br>&emsp;Avec une large gamme de véhicules
        de qualité et un service client exceptionnel, Drive Ease
        vous accompagne tout au long de votre voyage en vous
        offrant confort et tranquillité d'esprit.
      </p>
      
      <div class="kiwi2-img">
        <img src="{{ asset('images/car_pnj.png')}}" alt="illust5">
      </div>
    </div>
  </div>

  @include('voitures_')

</div>

<div class="footer">
  <p>&copy; 2023 DriveEase. All rights reserved.</p>
</div>


</body>
</html>