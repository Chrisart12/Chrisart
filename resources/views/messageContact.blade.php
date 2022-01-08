<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h2>MESSAGE DU CONTACT</h2>
    <p>Voici le message qui vous a été adressé:</p>
    <ul>
      <li><strong>Nom</strong> : {{ $nom }}</li>
      <li><strong>Email</strong> : {{ $email }}</li>
      <li><strong>Tel</strong> : {{ $tel }}</li>
      <li><strong>Sujet</strong> : {{ $sujet }}</li>
      <li><strong>Message</strong> : {{ $texte }}</li>
    </ul>
  </body>
</html>