<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contact Hackers Poulette</title>
  </head>
  <body>
    <img src="logo.png" alt="logo hackers-poulettes">
    <h1>Contactez notre support technique</h1>
    <h2>Contactez-nous à tout moment <br>
    et nous vous répondrons <br>
    le plus rapidement possible.</h2>
    <form action="projet-1-formulaire.php" method="post">
      <fieldset>
        <legend>Envoyez un un message au support technique</legend>
        <label for="Genre">Genre*</label><br>
        <input type="radio" name="genre" value="Homme">Homme<br>
        <input type="radio" name="genre" value="Femme">Femme<br>
        <label for="nom">NOM*:</label><input type="text" value="Nom*" required><br>
        <label for="prenom">PRENOM*:</label><input type="text" value="Prenom*" required><br>
        <label for="Pays">Pays*</label><input type="text"  value="Pays*" required><br>
        <label for="adresse e-mail">EMAIL*</label><input type="email" value="nom@mail.com*" required><br>
        <!-- Ne pas afficher/adresse-test -->
        <input class="test_email" type="email" name="test-email"><br>
        <label for="sujet">SUJET*:</label><br>
        <select  name="" required>
          <option value="Information-produit">Informations sur un produit</option>
          <option value="Problème-montage">Problème sur un montage </option>
          <option value="Activation-garantie">Activation de la garantie</option>
          <option value="Autre">Autre</option>
        </select><br>
        <textarea name="Message" rows="20" cols="80">Votre message</textarea><br>
        <input type="submit" name="submit" value="Envoyer">Les champs suivis d'un * sont obligatoires.
      </fieldset>
    </form>
  </body>
</html>
