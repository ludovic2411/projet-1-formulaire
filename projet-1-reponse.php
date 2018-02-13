
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
     ?>
   <br>
   <section class="Champ_réponse">
     <h2>Nous vous remercions de l'intérêt<br>
     que vous portez à Hackers-Poulettes<br>
     <?php
        if (empty($genre)){
          $error = true;
          $errorGenre = "Pas de Genre";
        }
       if(empty($nom)){
         $error = true;
         $errorNom = "Pas de Nom ";
       }
       if(empty($prenom)){
         $error = true;
         $errorPrenom = "Pas de prenom ";
       }
       if(empty($Pays)){
         $error = true;
         $errorPays = "Pas de Pays ";
       }
       if($error){
         $error =$errorGenre . $errorNom . $errorPrenom . $errorPays;
         header("Location: projet-1-formulaire.php?erreur=". $error);
         //php?=>méthode "get". .$error =>définition de la variable error
       }
       else {
         echo "$genre $nom";
       }
     ?>
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
