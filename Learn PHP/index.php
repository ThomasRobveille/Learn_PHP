<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cours PHP</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Page web en html pour php</h1>

  <?php 
    require_once(__DIR__ . '/headers.php');
  ?>

  <h2>Introduction</h2>
  <p>Le PHP est un langage de programmation qui permet de créer des pages web dynamiques. Il est exécuté côté serveur et permet de générer du contenu HTML, CSS et JavaScript.</p>

  <h2>Les balises PHP</h2>
  <p>Les balises PHP permettent d'indiquer au serveur que le code qu'elles contiennent doit être interprété par le langage PHP.</p>
  <p>Il existe trois types de balises PHP :</p>
  <ul>
    <li><code>&lt;?php ... ?></code> : balise d'ouverture standard</li>
    <li><code>&lt;? ... ?></code> : balise d'ouverture courte</li>
    <li><code>&lt;% ... %></code> : balise d'ouverture ASP</li>
  </ul>

  <h2 id="variable">Les variables</h2>
  <p>Les variables permettent de stocker des valeurs en mémoire pour les réutiliser plus tard dans le code.</p>
  <p>En PHP, une variable est déclarée avec le symbole <code>$</code> suivi du nom de la variable. On affecte ensuite une valeur à cette valeur via le symbole mathémmatique =.</p>
  <p>Il existe plusieurs types de variables en PHP :</p>
  <ul>
    <li>Les variables de type string : <code>$nom = "Thomas";</code></li>
    <li>Les variables de type integer : <code>$age = 18;</code></li>
    <li>Les variables de type float : <code>$prix = 12.5;</code></li>
    <li>Les variables de type boolean : <code>$estMajeur = true;</code></li>
    <li>Les variables de type array : <code>$prenoms = ["Thomas", "Julie", "Pierre", "Paul"];</code></li>
  </ul>  

  <h3>Exemple</h3>
  <?php
    $nom = "Thomas";
    $age = 18;
    $prix = 12.5;
    $estMajeur = true;
    $prenoms = ["Thomas", "Julie", "Pierre", "Paul"];

    echo "Bonjour <b>$nom</b>, vous avez <b>$age</b> ans et le prix est de <b>$prix</b> €";
  ?>

  <p>Ici dans cette phrase les mots <b>Thomas</b>, <b>18</b> et <b>12.5</b> sont des variables affichés directement dans la page web via l'instruction <b>echo</b></p>

  <h2>Les conditions</h2>
  <p>Les conditions permettent d'exécuter un bloc de code si une condition est vraie.</p>
  <p>Il existe 3 façon d'écrire des conditions en PHP</p>
  <ul>
    <li>Ecrire avec les mots-cles <code>if</code> et <code>else</code></li>
    <li>Ecrire avec les mots-cles <code>switch</code> et <code>case</code></li>
    <li>Ecrire via des opérateurs ternaires</li>
  </ul>

  <h3>Exemple</h3>
  <?php
    $age = 18;

    if ($age >= 18) {
      echo "Vous êtes majeur";
    } else {
      echo "Vous êtes mineur";
    }
  ?>

  <p>Avec les mots-cles if et else :</p>
  <p><code>if(condition) { <br><pre>  echo "Rouge";</pre>} else { <br><pre>  echo "Bleu";</pre>}</code></p>
  <p>Ici si la condition est vrai alors on affiche "Rouge" sinon on affiche "Bleu"</p>

  
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