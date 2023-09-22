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
  @yield('content')  


  <div class="footer">
    <p>&copy; 2023 DriveEase. All rights reserved.</p>
  </div>



</body>
</html>