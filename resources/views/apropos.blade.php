@extends('layout')

@section('content')

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


  <div class="kiwi2-3">

    <p>Trouvez nous dans cette adresse :<br><br>
      &emsp;&emsp;OU <br><br>
      &emsp;Contactez nous :<br>
      Num Tél : (+212)61122334455<br>
      email : driveease@entreprise.ma<br>
    </p>

    <div class="kiwi2-map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1446.5264149015634!2d-9.595706853603746!3d30.423682761304278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sma!4v1689077588327!5m2!1sfr!2sma" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>

</div>




@endsection