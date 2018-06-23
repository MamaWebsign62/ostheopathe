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
  </head>


  <body>
    <div class="container-fluid">
<!-- BURGER -->
<div id="menu-burger">
    <div class="logo">
      <a href="index.php">
        <img src="./img/ostheo.png" alt="logo">
      </a>
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
            <a href="index.php">
              <img src="./img/ostheo.png" alt="logo">
            </a>
          </div>
          <ul>
            <li>
              <a href="./index.php" rel="accueil">Accueil</a>
            </li>
            <li>
              <a href="./nourrisson.php" rel="nourrisson">Nourrisson</a>
            </li>
            <li>
              <a href="femme-enceinte.php" rel="femme">Femme enceinte</a>
            </li>
            <li>
              <a href="./medecine-chinoise.php" rel="medecine">Médecine chinoise</a>
            </li>
            <li>
              <a href="./personne-agee.php" rel="agee">Personne âgée</a>
            </li>
            <li>
              <a href="./contact.php" rel="contact">Nous contacter</a>
            </li>
            <li>
              <a href="./plan-acces.php"rel="plan">Plan d'accès</a>
            </li>
          </ul>
      </div>

      <!-- SCROLLBOX SLIDER -->

      <div class="bxslider">
        <div>
          <img src="./img/slide1.jpg" />
          <div class="button-slide-left">
            <a href="nourrisson.php">En savoir plus</a>
          </div>
        </div>
        <div>
          <img src="img/slide2.jpg" />
          <div class="button-slide-right">
            <a href="femme-enceinte.php">Découvrir l'offre</a>
          </div>
        </div>
        <div>
          <img src="./img/slide3.jpg" />
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
      <!-- PRESENTATION -->
      <div class="presentation">
        <div class="opacity">
          <h1>Osthéopathe Lyon - Jean Eymare</h1>
          <br/>
          <p>Nous vous souhaitons la bienvenue sur le site Internet de mon cabinet d'Ostéopathie de Lyon. Vous y trouverez toutes les informations indispensables et un ensemble de réponses à vos questions sur l'ostéopathie et ses pratiques.</p>
          <br/>
          <div class="button-right">
            <a href="#qui-sommes-nous">En savoir plus</a>
          </div>
        </div>
      </div>
      <!-- NOURRISSON -->
      <div class="baby">
        <div class="opacity opacity-nourrisson">
          <h2>Osthéopathie pour nourrissons</h2>
          <br/>
          <p>Au moyen d'une approche naturelle, l'ostéopathe diagnostiquera et rectifiera les dysfonctionnements mineurs à l'origine des troubles. Grâce aux mains de l'ostéopathe, votre nouveau-né regagnera toute la joie de vivre que vous lui souhaitez.</p>
          <br/>
          <div class="button-left">
            <a href="nourrissons.php">En savoir plus</a>
          </div>
        </div>
      </div>
      <!-- FEMME ENCEINTE -->
      <div class="praignant">
        <div class="opacity opacity-femme">
          <h2>Osthéopathie pour femmes enceintes</h2>
          <br/>
          <p>Si vous attendez un bébé, notre cabinet d'ostéopathie dispense des consultations adaptées à l'état de grossesse. N'hésitez pas à nous contacter pour davantage d'informations ou bien prendre un rendez-vous.</p>
          <br/>
          <div class="button-right">
            <a href="femme-enceinte.php">En savoir plus</a>
          </div>
        </div>
      </div>
      <!-- MEDECINE CHINOISE -->
      <div class="medecine">
        <div class="opacity opacity-medecine">
          <h2>Médecine chinoise</h2>
          <br/>
          <p>Indéniablement, la Médecine Traditionnelle Chinoise apporte aujourd'hui à notre société une réponse crédible quant aux grands problèmes de santé.</p>
          <br/>
          <div class="button-left">
            <a href="medecine-chinoise.php">En savoir plus</a>
          </div>
        </div>
      </div>
      <!-- PERSONNE AGEE -->
      <div class="agee">
        <div class="opacity">
          <h2>Osthéopathie pour personne âgée</h2>
          <br/>
          <p>Promouvoir le « mieux vieillir » en maintenant un bon état global, physique, et psychique de l’individu par une action de prévention tout au long de la vie, garantit son capital santé. Par exemple, les traitements ostéopathiques améliorent l’équilibre, diminuent les douleurs ressenties à court et long termes et ainsi participent à l’amélioration de la qualité de vie.</p>
          <br/>
          <div class="button-right">
            <a href="personne-agee.php">En savoir plus</a>
          </div>
        </div>
      </div>
      <!-- QUI SOMMES-NOUS ? -->
      <div class="qui" id="qui-sommes-nous">
        <div class="opacity-bg">
          <h2>Qui sommes-nous ?</h2>
          <br/>
          <p>Indéniablement, la Médecine Traditionnelle Chinoise apporte aujourd'hui à notre société une réponse crédible quant aux grands problèmes de santé.</p>
          <br/>
          <p>J'ai suivi une formation d'ostéopathe DO, formation agréée par le Ministère de la Santé. Le cursus d'ostéopathie dépasse les 5000 heures cumulant des cours théoriques en anatomie, biomécanique, sémiologie, cours pratiques permettant l'acquisition des savoir-faire spécifiques de l'ostéopathie, trois ans de pratique en clinique ostéopathique ainsi qu'une succession de stages en milieu hospitalier, en club sportif et en entreprise.</p>
          <br/>
          <p>Votre ostéopathe à Lyon est en mesure de vous soigner en cas de douleurs articulaires et orthopédiques comme des maux de dos, des problèmes de cervicales, des problèmes lombaires. Le praticien de l'ostéopathie peut également traiter les troubles ayant une cause neurologique, comme les sciatiques, les problèmes d'origine intercostale ou cervico-brachiale . Il obtient aussi d'excellents résultats sur les problèmes ORL, neuro-végétatifs ou concernant les viscères. Il sera aussi bénéfique de vous faire traiter par votre ostéopathe après un traumatisme comme un accident de voiture. Dans certains cas il peut être recommandé de consulter votre ostéopathe sans attendre l'apparition des douleurs.</p>
          <br/>
          <p>L'ostéopathie est une pratique manuelle qui s'emploie à déterminer et traiter les troubles fonctionnels qui peuvent toucher des structures de l'organisme : dysfonctionnements de tête, du squelette, etc. Elle traite aussi les sportifs ou les femmes en situation de grossesse. L'ostéopathe considère le corps humain dans son intégralité. Son action consiste à rendre de la capacité de mouvement là où n'y en a plus. L'ostéopathie a parmi ses fondements la découverte de la cause. L'intervention de l'ostéopathe est celle d'un intervenant de première intention, ce qui veut dire que la personne à soigner entre en relation directe avec lui sans passer d'abord par un médecin.</p>
          <br/>
          <p>Je reçois mes patients dans mon cabinet à Lyon. <span>Les horaires d'ouverture du cabinet d'ostéopathie sont du Lundi au Vendredi, de 8h à 20h et le samedi, de 8h à 14h sur rendez-vous.</span> Les urgences, en cas de nécessité, peuvent être traitées à tout moment de la journée. Le cabinet est accessible aux personnes à mobilité réduite.</p>
          <br/>
        </div>
      </div>
    </div>

    <!-- FOOTER -->
    <footer class="footer">
      <div class="colon-foot">
        <div class="info-footer">
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
        </div>
      </div>
      <div class="copyright">
        <i class="fa fa-copyright" aria-hidden="true"></i>
        Copyright 2018 |
          <a href="mentions.php" target="_blank">Mentions légales</a>
          | <a href="https://www.ostheopathe-jeaneymare.fr" target="_blank">www.ostheopathe-jeaneymare.fr</a>
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
    <script type="text/javascript" src=".js/main.js"></script>
    <script type="text/javascript" src="./js/jq.js"></script>
</html>
