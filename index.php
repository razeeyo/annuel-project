<!DOCTYPE html>
<html class="h-100">

	<?php
    $title = '24H Music - Accueil';
    include('includes/head.php')  ?>

<body>
	<?php include('includes/header.php');?>


    <main>
      <div class="bienvenue">
        <h1>24h Music</h1>

        <h1 class="titre-mobile">24h Music</h1>

        <video autoplay muted loop>
          <source src="Videos/Tomorrowland Belgium 2019 _ Official Aftermovie.mp4" type=video/mp4>
        </video>
      </div>
        
      <!-- concert -->
      <div id="concert-important" class="concert-important">
        <img src="Pictures/stromae.jpg" alt="stromae">
        <b>Le concert de l'année</b>
      </div>

      <!-- Festivals incontournables -->
      <div id="festivals-favoris" class="festivals-favoris">
        <h2>les Festivals incontournables</h2>
        <table>
          <tr>
            <td>
              <div class="overlay"><p>Faire chavirer les cœurs. Voilà l’ambition de cette 24e édition qui s’annonce exceptionnelle.

                Rendez-vous les 24-26 juin 2022 à Paris-Longchamp.</p></div>
              <img src="Pictures/solidays.jpg" alt="1er Festival">
            </td>
            <td>
              <div class="overlay"><p>Lollapalooza : Retrouver IMAGINE DRAGONS, DAVID GUETTA, A$AP ROCKY? VALD et bien d'autres artistes à  Paris du 16 au 17 juillet 2022. </p></div>
              <img src="Pictures/festival-fnac.jpeg" alt="2ème Festival">
            </td>
            <td>
              <div class="overlay"><p>Les ardentes : Retrouvez de nombreux artistes du RAP francais & internationnal tel que PNL ORELSAN ou encpre tyler the creator a Liège du 7 u 10 juillet 2022</p></div>
              <img src="Pictures/Les ardentes.jpg" alt="3ème Festival">
            </td>
          </tr>
          <tr>
            <td>
              <div class="overlay"><p>Tomorrowland : pendant trois week-end vivez la techno a fond en belgique avec en line-up de nombreux artiste tel que YOTTO, EPTIC, FUZZ, VOLVOX, Ransom et plein d'autres. du 15 au 31 juillet.</p></div>
              <img src="Pictures/tomorrowland.jpg" alt="4ème Festival">
            </td>
            <td>
              <div class="overlay"><p> Les Francofolies : Retrouvez du 13 au 17 juillet 2022 a la rochelle angele, ORELSAN, BOOBA, CALOGERO, MIKA, JULIEN DORE et beaucoup d'autre.</p></div>
              <img src="Pictures/francofolies.jpg" alt="5ème Festival">
            </td>
            <td>
              <div class="overlay"><p>Les Eurockéennes de Belfort, en France du 30 juin au 3 juillet 2022. Venez vivre l'experience de la musique europeenes.</p></div>
              <img src="Pictures/eurocks.jpg" alt="6ème Festival">
            </td>
          </tr>
        </table>
      </div>

        <!-- Theatre et spectacles -->
        <div id="Theatre" class="Theatre">
          <h2>Theatre et Spectacle</h2>
          <p>Retrouvez ici les dernières actualités des spectacles et théâtres.</p>

        <!-- Slideshow theatres et spectacles -->
        <div class="slideshow" style="max-width:500px">
          <div class="slide animation">
            <img src="Pictures/spectacle-celtic-spirit.jpg" style="width:100%">
            <p>Celtic Spirit of Ireland</p>  
          </div>
          <div class="slide animation">
            <img src="Pictures/Chablais.jpg" style="width:100%">
            <p>Chablais</p>
          </div>
          <div class="slide animation">
            <img src="Pictures/Les Fourberie (S).jpg" style="width:100%">
            <p>Les Fourberie (S)</p>  
          </div>
          <div class="slide animation">
            <img src="Pictures/Les Naufragés.webp" style="width:100%">
            <p>Les Naufragés</p>
          </div>
        </div>
          
        <!-- JavaScript pour le slideshow -->
        <script>
          var myIndex = 0;
          carousel();
          
          function carousel()
          {
              var i;
              var x = document.getElementsByClassName("slide");

              for (i = 0; i < x.length; i++)
                  x[i].style.display = "none";  
              
              myIndex++;

              if (myIndex > x.length)
                  myIndex = 1;   

              x[myIndex-1].style.display = "block";  
              
              setTimeout(carousel, 4000);    
          }
        </script>
      </div>
    </main>



</body>


	<?php include('includes/footer.php');?>
</html>