
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="projet-1-reponse-style.css">
    <title>Merci de nous avoir contacté!</title>
  </head>
  <body>
    <section class="logo">
      <img src="logo.png" alt="logo hackers-poulettes">
    </section>
    <?php
    $genre=$_POST['genre'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $Pays=$_POST['Pays'];
    $email=$_POST['email'];
    $test_email=$_POST['test_email'];
    $sujet=$_POST['sujet'];
    $message=$_POST['Message'];
    //array pour sanitiser
    $champs = array(
      'nom' => FILTER_SANITIZE_STRING,
      'prenom' => FILTER_SANITIZE_STRING,
      'Pays' => FILTER_SANITIZE_STRING,
      'email' => FILTER_VALIDATE_EMAIL,
      'Message' => FILTER_SANITIZE_STRING,
      );
      $champclean = filter_input_array (INPUT_POST, $champs);
      if ($champclean !=FALSE) {
        echo "Tous les champs ont été nettoyés!";
      }
     ?>
   <br>
   <section class="Champ_réponse">
     <h2>Nous vous remercions de l'intérêt<br>
     que vous portez à Hackers-Poulettes<br>
     <?php
     if (empty($genre)){
      echo "Pas de genre";
      }
     elseif(empty($nom)){
       echo "Précisez votre <u>nom dans le formulaire de contact</u>,<br> sauf si vous travaillez pour Anonymous.";
     }
     elseif(empty($prenom)){
       echo "Précisez votre <u>prenom dans le formulaire de contact</u>,<br> sauf si vous travaillez pour Anonymous. ";
     }
     elseif(empty($Pays)){
       echo "Veuillez préciser <u>votre pays dans le formulaire de contact</u>, <br> sauf si vous <br> vivez au pays imaginaire.";
     }
     elseif (empty($email)) {
       echo "Veuillez préciser <u>votre email dans le formulaire de Contact</u>,<br> sauf si vous êtes espionné par la CIA.";
     }
     else {
       echo "$prenom $genre $nom";
     }
     ?>
     <form>
       <input type="button" value="Retourner au formulaire de contact"
       onclick="window.location.href='index.php'"/>
     </form>
   </h2>
     <p>Nous vous recontacterons dans les plus brefs délais.</p>
     <h3>Vos informations:</h3>
     <section class="informations_clients">
     <ul class="informations_clients">
       <li class="Pays"><?php echo "Pays:$Pays"; ?></li>
       <li class="Email"><?php echo "Votre email: $email"; ?></li>
       <li class="Sujet"><?php echo "Le sujet de votre demande: $sujet"; ?></li>
       <li class="Message"><?php echo "Votre demande: $message"; ?></li>
     </ul>
   </section>
   </section>
  </body>
</html>
