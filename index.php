<?php
if(isset($_POST['submit'])){
  print_r($_POST);
  $genre=$_POST['genre'];
  $nom=$_POST['nom'];
  $prenom=$_POST['prenom'];
  $Pays=$_POST['Pays'];
  $email=$_POST['email'];
  $test_email=$_POST['test_email'];
  $sujet=$_POST['sujet'];
  $message_mail=$_POST['Message'];
  //mail
  // $to = "ludovic.ceccotti@gmail.com";
  // $subject = $_POST['sujet'];
  // $message = "Nom: ".$_POST['nom']."\r\n";
  // $message .= "Prénom: ".$_POST['prenom']."\r\n";
  // $message .= "Pays: ".$_POST['Pays']."\r\n";
  // $message .= 'E-mail: '.$_POST['email']."\r\n";
  // $message .= "Sexe: ".$_POST['genre']."\r\n";
  // $message .= "Message: \r\n\r\n\r\n\r\n" .$_POST["Message"]."\r\n\r\n--\r\n\r\n";
  // $headers = 'From: client@example.com' . "\r\n" .
  // 'Reply-To: client@example.com' . "\r\n" .
  // 'X-Mailer: PHP/' . phpversion();
  //mail("ludovic@becode.org", "test", "coucou");
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="projet-1-formulaire-style.css">
    <title>Contact Hackers Poulette</title>
  </head>
  <body>
  <section class="logo">
    <img src="logo.png" alt="logo hackers-poulettes">
  </section>
  <br>
  <section class="form">
    <h1>Contactez notre support technique</h1>
    <h2>Contactez-nous à tout moment <br>
    et nous vous répondrons <br>
    le plus rapidement possible.</h2>
    <form action="projet-1-reponse.php" method="post">
      <fieldset>
        <legend>Envoyez un message au support technique</legend>
        <section class="info">
          <section class="genre">
            <label for="Genre">GENRE*</label><br>
            <input type="radio" name="genre" value="Monsieur">Monsieur
            <input type="radio" name="genre" value="Madame">Madame<br>
          </section>
          <section class="nom">
            <label for="nom">NOM*:</label><input name="nom" type="text" placeholder="Nom*" ><br>
          </section>
          <section class="prenom">
            <label for="prenom">PRENOM*:</label><input name="prenom" type="text" placeholder="Prenom*" ><br>
          </section>
          <section class="Pays">
            <label for="Pays">PAYS*</label><input name="Pays" type="text"  placeholder="Pays*" ><br>
          </section>
          <section class="email">
            <label for="adresse e-mail">EMAIL*</label><input name="email" type="email" placeholder="nom@mail.com*" d><br>
          </section>
        <!-- Ne pas afficher/adresse-test -->
          <input name="test_email" class="test_email" type="email" name="test-email">
        </section>
        <!--0 droite du formulaire-->
      <section class="message">
        <label for="sujet">SUJET*:</label><br>
        <select name="sujet" >
          <option value="Information-produit">Informations sur un produit</option>
          <option value="Problème-montage">Problème sur un montage </option>
          <option value="Activation-garantie">Activation de la garantie</option>
          <option value="Autre">Autre</option>
        </select><br>
        MESSAGE:<br>
        <textarea name="Message" rows="20" cols="80">Votre message</textarea><br>
        <section class="button">
        <input  type="submit" name="submit" value="Envoyer">
        <input type="reset" name="reset" value="réinitialiser le formulaire">
        </section>
        Les champs suivis d'un * sont obligatoires.
        </section>
      </fieldset>
    </form>
  </section>
  <footer>
    Copyright 2018 L&S Developement. All rights reserved.
  </footer>
  </body>
</html>
