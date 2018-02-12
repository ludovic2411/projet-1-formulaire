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
    <form action="projet-1-formulaire.php" method="post">
      <fieldset>
        <legend>Envoyez un un message au support technique</legend>
        <section class="info">
          <section class="genre">
            <label for="Genre">GENRE*</label><br>
            <input type="radio" name="genre" value="Homme">Homme
            <input type="radio" name="genre" value="Femme">Femme<br>
          </section>
          <section class="nom">
            <label for="nom">NOM*:</label><input type="text" value="Nom*" required><br>
          </section>
          <section class="prenom">
            <label for="prenom">PRENOM*:</label><input type="text" value="Prenom*" required><br>
          </section>
          <section class="Pays">
            <label for="Pays">PAYS*</label><input type="text"  value="Pays*" required><br>
          </section>
          <section class="email">
            <label for="adresse e-mail">EMAIL*</label><input type="email" value="nom@mail.com*" required><br>
          </section>
        <!-- Ne pas afficher/adresse-test -->
          <input class="test_email" type="email" name="test-email">

        </section>
        <section class="message">
        <label for="sujet">SUJET*:</label><br>
        <select name="sujet" required>
          <option value="Information-produit">Informations sur un produit</option>
          <option value="Problème-montage">Problème sur un montage </option>
          <option value="Activation-garantie">Activation de la garantie</option>
          <option value="Autre">Autre</option>
        </select><br>
        MESSAGE:<br>
        <textarea name="Message" rows="20" cols="80">Votre message</textarea><br>
        <section class="button">
        <input  type="submit" name="submit" value="Envoyer">
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
