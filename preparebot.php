<?php
require('bdd.php');
?>

<?php

$nom = $_POST['name'];
$nom = ucfirst(strtolower($nom));

$age = $_POST['age'];
$age = ucfirst(strtolower($age));
  
  

$requete = $bdd->prepare('INSERT INTO utilisateur(nom, age) VALUES(:nom, :age)');

$requete->bindValue(':nom', $nom, PDO::PARAM_STR); 

$requete->bindValue(':age', $age, PDO::PARAM_STR);

$requete->execute();
header("refresh:2;url=bot.php");
?>
