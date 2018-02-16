
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
    $Message=$_POST['Message'];
    //variables mail
     $to = "ludovic.ceccotti@gmail.com";
     $subject = $_POST['sujet'];
     $message = "Nom: ".$_POST['nom']."\r\n";
     $message .= "Prénom: ".$_POST['prenom']."\r\n";
     $message .= "Pays: ".$_POST['Pays']."\r\n";
     $message .= 'E-mail: '.$_POST['email']."\r\n";
     $message .= 'E-mail-test: '.$_POST['test_email']."\r\n";
     $message .= "Sexe: ".$_POST['genre']."\r\n";
     $message .= "Message: \r\n\r\n\r\n\r\n" .$_POST["Message"]."\r\n\r\n--\r\n\r\n";
     $headers = 'From: client@example.com' . "\r\n" .
     'Reply-To: client@example.com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();
     //array pour sanitiser
     $champs = array(
      'nom' => FILTER_SANITIZE_STRING,
      'prenom' => FILTER_SANITIZE_STRING,
      'Pays' => FILTER_SANITIZE_STRING,
      'email' => FILTER_VALIDATE_EMAIL,
      'Message' => FILTER_SANITIZE_STRING,
      );
      $champclean = filter_input_array (INPUT_POST, $champs);
      if ($champclean !=FALSE and $genre !=NULL and $nom !=NULL and $prenom !=NULL and $Pays != NULL and $email != NULl)
      {
        echo "Tous les champs ont été nettoyés!";
        mail($to, $subject , $message ,$headers);
      }
     ?>
   <br>
   <section class="Champ_réponse">
     <h2>Nous vous remercions de l'intérêt<br>
     que vous portez à Hackers-Poulettes<br>
     <?php
     if (empty($genre)){
      echo "Pas de genre";
      echo "Veuillez remplir le formulaire de contact en cliquant <br> dans le bouton ci-dessous.";
      }
     elseif(empty($nom)){
       echo "Précisez votre <u>nom dans le formulaire de contact</u>,<br> sauf si vous travaillez pour Anonymous.";
       echo "Veuillez remplir le formulaire de contact en cliquant <br> dans le bouton ci-dessous.";
     }
     elseif(empty($prenom)){
       echo "Précisez votre <u>prenom dans le formulaire de contact</u>,<br> sauf si vous travaillez pour Anonymous. ";
       echo "Veuillez remplir le formulaire de contact en cliquant <br> dans le bouton ci-dessous.";
     }
     elseif(empty($Pays)){
       echo "Veuillez préciser <u>votre pays dans le formulaire de contact</u>, <br> sauf si vous <br> vivez au pays imaginaire.";
       echo "Veuillez remplir le formulaire de contact en cliquant <br> dans le bouton ci-dessous.";
     }
     elseif (empty($email)) {
       echo "Veuillez préciser <u>votre email dans le formulaire de Contact</u>,<br> sauf si vous êtes espionné par la CIA.";
       echo "Veuillez remplir le formulaire de contact en cliquant <br> dans le bouton ci-dessous.";
     }
     else {
       echo " $genre $prenom $nom <br>";
       echo "Nous vous recontacterons le plus vite possible.";
     }
     ?>
     <br>
     <form>
       <input type="button" value="Retourner au formulaire de contact"
       onclick="window.location.href='index.php'"/>
     </form>
   </h2>
     <h3>Vos informations:</h3>
     <section class="informations_clients">
     <ul class="informations_clients">
       <li class="Pays"><?php echo "Pays:$Pays"; ?></li>
       <li class="Email"><?php echo "Votre email: $email"; ?></li>
       <li class="Sujet"><?php echo "Le sujet de votre demande: $sujet"; ?></li>
       <li class="Message"><?php echo "Votre demande: $Message"; ?></li>
     </ul>
   </section>
   </section>
  </body>
</html>
