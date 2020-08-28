<?php
require_once('menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="Stylesheet" type="text/css" href="../CSS/menu.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  require('DB.php');
  $espagne=$db->prepare('SELECT* FROM ARTICLES WHERE pays="italie"');
  $espagne->execute();
  while($reponse=$espagne->fetch()){?>
   <div id="espagnecadre">
   <?php echo " Date de l'anonce:".$reponse['dates']?><br>
  <h2> <?php echo $reponse['titres']?></h2><br>
  <?php echo $reponse['descs']?>;
   </div>
   <img  class="ig"src="../IMAGES/<?php echo $reponse['photos']?>">

 <?php
  }
  ?>
 <a href="https://dailysport.pw/">liste des matchs du jours</a>
</body>
</html>