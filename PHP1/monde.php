<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="Stylesheet" type="text/css" href="../CSS/menu.css">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<h1>INFORMATION</h1>
<body>
  <?php
  require('DB.php');
  $espagne=$db->prepare('SELECT* FROM ARTICLES ORDER BY  dates DESC ');
  $espagne->execute();
  while($reponse=$espagne->fetch()){?>
   <div id="espagnecadre">
   <?php echo "<h3>Date de publication:</h3>" .$reponse['dates']." PAYS:".$reponse['pays']?><br>
  <h3> <?php echo $reponse['titres']?></h3><br>
  <?php echo $reponse['descs']?>;
   </div>
   <img  class="ig"src="../IMAGES/<?php echo $reponse['photos']?>">

 <?php
  }
  ?>
 <a href="https://dailysport.pw/">liste des matchs du jours</a>
<a href=" https://youtu.be/LcsePdutn1U">TRADING</a>
<a href="https://discord.com/channels/@me/739416322433089546">LIE POUR ALLER DANS DISCORD</a>
(11) 9 6928-5626 sao paulo programation
</body>
</html>