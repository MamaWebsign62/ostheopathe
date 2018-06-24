<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Site, Osthéopathe" />
    <meta name="keywords" content="HTML, CSS, Bootstrap, JavaScript" />
    <meta name="author" content="Marianne" />
    <title>Jean Eymare, osthéopathe</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet" />
    <link href="./css/bootstrap-theme.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./js/scrollbox-slider/style-scrollbox.css" />
    <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <style>
       /* Set the size of the div element that contains the map */
      #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>

  </head>


  <body>
    <div class="container-fluid">
      <!-- BURGER -->
      <div id="menu-burger">
          <div class="logo">
            <img src="./img/ostheo.png" alt="logo">
            <div class="burger">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
          <ul>
            <li rel="accueil">
              <a href="index.php">Accueil</a>
            </li>
            <li rel="nourrisson">
              <a href="nourrisson.php">Nourrisson</a>
            </li>
            <li rel="femme">
              <a href="femme-enceinte.php">Femme enceinte</a>
            </li>
            <li rel="medecine">
              <a href="medecine-chinoise.php">Médecine chinoise</a>
            </li>
            <li rel="agee">
              <a href="personne-agee.php">Personne âgée</a>
            </li>
            <li rel="contact">
              <a href="contact.php">Nous contacter</a>
            </li>
            <li rel="plan">
              <a href="plan-acces.php">Plan d'accès</a>
            </li>
          </ul>
      </div>

      <!-- MENU -->
            <div id="menu">
                <div class="logo">
                  <img src="img/ostheo.png" alt="logo">
                </div>
                <ul>
                  <li>
                    <a href="index.php" rel="accueil">Accueil</a>
                  </li>
                  <li>
                    <a href="nourrisson.php" rel="nourrisson">Nourrisson</a>
                  </li>
                  <li>
                    <a href="femme-enceinte.php" rel="femme">Femme enceinte</a>
                  </li>
                  <li>
                    <a href="medecine-chinoise.php" rel="medecine">Médecine chinoise</a>
                  </li>
                  <li>
                    <a href="personne-agee.php" rel="agee">Personne âgée</a>
                  </li>
                  <li>
                    <a href="contact.php" rel="contact">Nous contacter</a>
                  </li>
                  <li>
                    <a href="plan-acces.php"rel="plan">Plan d'accès</a>
                  </li>
                </ul>
            </div>

            <!-- SCROLLBOX SLIDER -->

            <div class="bxslider">
              <div>
                <img src="./img/slide1.jpg"/>
                <div class="button-slide-left">
                  <a href="nourrisson.php">En savoir plus</a>
                </div>
              </div>
              <div>
                <img src="./img/slide2.jpg"/>
                <div class="button-slide-right">
                  <a href="femme-enceinte.php">Découvrir l'offre</a>
                </div>
              </div>
              <div>
                <img src="./img/slide3.jpg"/>
                <div class="button-slide-left">
                  <a href="medecine-chinoise.php">En savoir plus</a>
                </div>
              </div>
            </div>
            <!-- BANDEAU -->
            <div class="bandeau">
              <p class="bold">Le cabinet est situé 26 rue de la République à Lyon</p>
              <p class="bold">Pour nous joindre : appelez-le 04.74.01.02.03.</p>
            </div>

        <!-- SECTION -->
        <section id="plan-acces">
          <h1>Plan d'accès du cabinet</h1>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.4160911903386!2d4.833388750611594!3d45.76285082138509!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea56125502c9%3A0xaf5762cf732a4c68!2s26+Rue+de+la+R%C3%A9publique%2C+69000+Lyon!5e0!3m2!1sfr!2sfr!4v1529841623353" width="100%" height="450" frameborder="0" style="border: 1px solid #b50829;" allowfullscreen></iframe>
        </section>
   </div>   <!--container-fluid -->

    <!-- FOOTER -->
    <footer class="footer">
      <div class="colon-foot">
        <!-- <div class="info-footer"> -->
          <ul>
            <h3>Plan du site</h3>
            <li>
              <a href="index.php">Accueil</a>
            </li>
            <li>
              <a href="nourrisson.php" target="_blank">Nourrisson</a>
            </li>
            <li>
              <a href="femme-enceinte.php" target="_blank">Femme enceinte</a>
            </li>
            <li>
              <a href="medecine-chinoise.php" target="_blank">Médecine chinoise</a>
            </li>
            <li>
              <a href="personne-agee.php" target="_blank">Personne âgée</a>
            </li>
            <li>
              <a href="contact.php" target="_blank">Contact</a>
            </li>
            <li>
              <a href="plan-acces.php">Plan d'accès</a>
            </li>
          </ul>

          <ul>
            <h3>Contactez-nous</h3>
            <li>
              <a href="contact.php">Accédez au formulaire</a>
            </li>
          </ul>

          <ul>
            <h3>Suivez-nous</h3>
            <li>
              <i class="fa fa-facebook-square" aria-hidden="true">
                <a href="#" target="_blank">sur Facebook</a>
              </i>
            </li>
          </ul>
        <!-- </div> -->
      </div>
      <div class="copyright">
        <i class="fa fa-copyright" aria-hidden="true"></i>
        Copyright 2018 |
          <a href="mentions.php">Mentions légales</a>
          | <a href="https://www.ostheopathe-jeaneymare.fr">www.ostheopathe-jeaneymare.fr</a>
      </div>
    </footer>

    <!-- BACK-TOP -->
    <div id="back-top">
     <a href="#top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
    </div>



  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.css" rel="stylesheet" />
    <script type="text/javascript" src="./js/scrollbox-slider/scrollbox.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>
    <script type="text/javascript" src="./js/jq.js"></script>
</html>
