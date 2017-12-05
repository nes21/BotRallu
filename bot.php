<?php
require('bdd.php');

$query=$bdd->prepare('SELECT nom FROM utilisateur');
        $query->execute();
         $data=$query->fetch();
        
        echo 'Bonjour ' . $data['nom'] .' Posez une question sur n'importe quelle sujet. je connais toutes les réponses (sauf pour Linux)';
?>

<form action="opbot.php" method="post">
      <label for="text">Votre question</label>
      <input type="text" class="form-control" id="laquestion" placeholder="Entrer votre question" name="laquestion">
  
  
<button type="submit" class="btn btn-warning" style="text-align: center;">Envoyer la question</button>
  </form>
