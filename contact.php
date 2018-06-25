<?php
$config = array(
  'title' => 'Contact',
  'keywords' => 'Contactez-nous',
  'desc' => 'La page contact vous permet de prendre contact avec nous via le formulaire de contact. Elle vous indique également les coordonnées du cabinet d\'osthéopathie de Jean Eymare situé à Lyon.'
);
?>
<?php require_once("./includes/header.php");?>
<?php require_once("./includes/menu.php");?>
<?php require_once("./includes/slider.php");?>
<!-- BANDEAU -->
<div class="bandeau">
  <p class="bold">Le cabinet est situé 26 rue de la République à Lyon</p>
  <p class="bold">Pour nous joindre : appelez-le 04.74.01.02.03.</p>
</div>

            <!-- SECTION -->
            <?php
      // S'il y des données de postées
      if ($_SERVER['REQUEST_METHOD']=='POST') {
        // Code PHP pour traiter l'envoi de l'email

        $nombreErreur = 0; // Variable qui compte le nombre d'erreur

        // Définit toutes les erreurs possibles
        if (!isset($_POST['email'])) { // Si la variable "email" du formulaire n'existe pas (il y a un problème)
          $nombreErreur++; // On incrémente la variable qui compte les erreurs
          $erreur1 = '<p>Il y a un problème avec la variable "email".</p>';
        } else { // Sinon, cela signifie que la variable existe (c'est normal)
          if (empty($_POST['email'])) { // Si la variable est vide
            $nombreErreur++; // On incrémente la variable qui compte les erreurs
            $erreur2 = '<p>Vous avez oublié de donner votre email.</p>';
          } else {
            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
              $nombreErreur++; // On incrémente la variable qui compte les erreurs
              $erreur3 = '<p>Cet email ne ressemble pas un email.</p>';
            }
          }
        }

        if (!isset($_POST['message'])) {
          $nombreErreur++;
          $erreur4 = '<p>Il y a un problème avec la variable "message".</p>';
        } else {
          if (empty($_POST['message'])) {
            $nombreErreur++;
            $erreur5 = '<p>Vous avez oublié de donner un message.</p>';
          }
        }

        if (!isset($_POST['captcha'])) {
          $nombreErreur++;
          $erreur6 = '<p>Il y a un problème avec la variable "captcha".</p>';
        } else {
          if ($_POST['captcha']!=4) {
            $nombreErreur++;
            $erreur7 = '<p>Désolé, le captcha anti-spam est erroné.</p>';
          }
        }

        if ($nombreErreur==0) { // S'il n'y a pas d'erreur
          // Récupération des variables et sécurisation des données
          $nom = htmlentities($_POST['nom']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
          $email = htmlentities($_POST['email']);
          $message = htmlentities($_POST['message']);

          // Variables concernant l'email
          $destinataire = 'contact@example.com'; // Adresse email du webmaster
          $sujet = 'Titre du message'; // Titre de l'email
          $contenu = '<html><head><title>Titre du message</title></head><body>';
          $contenu .= '<p>Bonjour, vous avez reçu un message à partir de votre site web.</p>';
          $contenu .= '<p><strong>Nom</strong>: '.$nom.'</p>';
          $contenu .= '<p><strong>Email</strong>: '.$email.'</p>';
          $contenu .= '<p><strong>Message</strong>: '.$message.'</p>';
          $contenu .= '</body></html>'; // Contenu du message de l'email

          // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
          $headers = 'MIME-Version: 1.0'."\r\n";
          $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";

          @mail($destinataire, $sujet, $contenu, $headers); // Fonction principale qui envoi l'email

          echo '<h2>Message envoyé!</h2>'; // Afficher un message pour indiquer que le message a été envoyé
        } else { // S'il y a un moins une erreur
          echo '<div style="border:1px solid #b50829; padding:5px;">';
          echo '<p style="color:#b50829;">Désolé, il y a eu '.$nombreErreur.' erreur(s). Voici le détail des erreurs:</p>';
          if (isset($erreur1)) echo '<p>'.$erreur1.'</p>';
          if (isset($erreur2)) echo '<p>'.$erreur2.'</p>';
          if (isset($erreur3)) echo '<p>'.$erreur3.'</p>';
          if (isset($erreur4)) echo '<p>'.$erreur4.'</p>';
          if (isset($erreur5)) echo '<p>'.$erreur5.'</p>';
      	if (isset($erreur6)) echo '<p>'.$erreur6.'</p>';
      	if (isset($erreur7)) echo '<p>'.$erreur7.'</p>';
          echo '</div>';
        }
      }
      ?>


      <!-- PAGE CONTACT -->
    <section id="form">
      <h1>Contactez-nous...</h1>
      <div class="info-form">
        <!-- INFORMATION SUR LE CABINET -->
        <div class="twobox info-form-left">
          <!--PRESENTATION-->
          <div id="bloc_presentation">
                <p>Jean EYMARE, Osthéopathe</p>
            </div>

            <!--PHONE-->
  		    <div id="bloc_phone">
           <p>
  		        <i class="fa fa-phone" style="font-size:18px;" aria-hidden="true"></i>
              Téléphone : </p>
           <p>04.74.01.02.03.</p>
  		    </div>

  		    <!--ADRESSE-->
  		    <div id="bloc_adresse">
            <p>
              <i class="fa fa-envelope" aria-hidden="true"></i>
              Adresse :</p>
            <p>26 rue de la République</p>
            <p>69103 Lyon</p>
  		    </div>

          <!--HORAIRES-->
  		    <div id="bloc_horaires">
            <p>
              <i class="fa fa-clock-o" aria-hidden="true"></i>
              Horaires :</p>
                 <table>
                    <tbody>
                         <tr>
                             <td style="width:60%;">Lundi</td>
                             <td>8h - 20h</td>
                         </tr>
                         <tr>
                             <td>Mardi</td>
                             <td>8h - 20h</td>
                         </tr>
                         <tr>
                             <td>Mercredi</td>
                             <td>8h - 20h</td>
                         </tr>
                         <tr>
                             <td>Jeudi</td>
                             <td>8h - 20h</td>
                         </tr>
                         <tr>
                             <td>Vendredi</td>
                             <td>8h - 20h</td>
                         </tr>
                         <tr style="margin-bottom:18px">
                             <td>Samedi</td>
                             <td>8h - 14h</td>
                         </tr>
                         <tr>
                             <td style="height:14px;"></td>
                         </tr>
                     </tbody>
                 </table>
              </div>
        </div>  <!-- info-form-left -->

        <!-- FORMULAIRE DE CONTACT -->
        <div class="twobox info-form-right">
          <form method="post" action="<?php echo strip_tags($_SERVER['REQUEST_URI']); ?>" class="formulaire">
            <p><span>Votre nom et prénom : </span><input type="text" name="nom" size="30" /></p>
            <p><span>Votre email <span style="color:#b50829;">*</span> :  </span><input type="text" name="email" size="30" /></p>
            <p><span>Message <span style="color:#b50829;">*</span> :</span></p>
            <textarea name="message" cols="41" rows="10" placeholder="Saississez votre message"></textarea>
            <p><span>Combien font 1+3 <span style="color:#b50829;">*</span> : <input type="text" name="captcha" size="2" class="captcha" /></span></p>
            <p><input class="send" type="submit" name="submit" value="Envoyer" /></p>
          </form>
        </div>  <!-- info-form-right -->
      </div>  <!-- info-form -->
    </section>

  <?php require_once('./includes/footer.php'); ?>
