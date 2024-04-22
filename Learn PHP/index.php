<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cours PHP</title>
</head>
<body>
  <h1>Page web en html pour php</h1>

  <?php 
    require_once(__DIR__ . '/headers.php');
  ?>

  <h2>Les variables</h2>
  <?php
    $nom = "Thomas";

    echo "Bonjour $nom";
  ?>

  <h2>Les conditions</h2>
  <?php
    $age = 18;

    if ($age >= 18) {
      echo "Vous êtes majeur";
    } else {
      echo "Vous êtes mineur";
    }
  ?>

  <h2>Les tableaux</h2>
  <?php
    $prenoms = ["Thomas", "Julie", "Pierre", "Paul"];

    foreach ($prenoms as $prenom) {
      echo "Bonjour $prenom<br>";
    }

    $personne = [
      "nom" => "Dupont",
      "prenom" => "Jean",
      "age" => 30
    ];

    echo "Bonjour $personne[prenom] $personne[nom]";

    array_key_exists("nom", $personne); // true
    in_array("Jean", $personne); // false
    array_search("Jean", $personne); // "prenom"
  ?>

  <h2>Les boucles</h2>
  <?php
    $age = 0;
    while ($age < 3) {
      echo "Vous êtes un bébé<br>";
      $age++;
    }

    for ($i = 0; $i < 10; $i++) {
      echo "Itération n°$i<br>";
    }
  ?>

  <h2>Les fonctions</h2>
  <?php
    function direBonjour($nom) {
      echo "Bonjour $nom";
    }

    direBonjour("Thomas");
  ?>

  <h2>Les formulaires</h2>
  <a href="bonjour.php?nom=Pierre">Envoi de paramètre via URL</a>
  <br>
  <form action="bonjour.php" method="GET">
    <input type="text" name="nom" placeholder="Votre nom"/>
    <input type="submit" value="Valider"/>
  </form>
</body>
</html>