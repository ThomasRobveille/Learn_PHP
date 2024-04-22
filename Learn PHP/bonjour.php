<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Envoi de paramètre via URL</title>
</head>
<body>
  <?php 
  try {
    $mysqlClient = new PDO('mysql:host=localhost;dbname=liste_jeux;charset=utf8', 'root', '');
    echo "Connexion à la base de données réussie !<br>";
  } catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
  }

  $usersStatement = $mysqlClient->prepare('SELECT * FROM users WHERE prenom = :prenom');
  $usersStatement->execute([
    'prenom' => 'Thomas'  
  ]);
  $users = $usersStatement->fetchAll();

  foreach ($users as $user) {
    echo $user['nom'] . '<br>';
  }

  $getData = $_GET;
  if( !isset($getData['nom']) ) {
    echo "Aucun nom n'a été transmis";  
    return;
  } else {
    echo "Bonjour " . $_GET['nom'];
  }
  ?>
</body>
</html>