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
require_once("DB.php");
$perpage=4;
$affichepage=$db->query("SELECT  COUNT(*) AS total FROM ARTICLES");
$resultat=$affichepage->fetch();
$total=$resultat['total'];
$nbpage=ceil($total/$perpage);
if(isset($_GET['p']) && !empty($_GET['p']) && ctype_digit($_GET['p'])==1){
if($_GET['p'] > $nbpage){
  $pagecourante=$nbpage;
}
else{
  $pagecourante=$_GET['p'];
}
}else
{
  $pagecourante=1;
}
$premier=($pagecourante-1)*$perpage;
$espagne=$db->query("SELECT * FROM ARTICLES WHERE pays='ESPAGNE' ORDER BY id ASC LIMIT $premier,$perpage");
?>
  <?php
while($reponse=$espagne->fetch()){?>
   <div id="espagnecadre">
   <?php echo " Date de l'anonce:".$reponse['dates']." PAYS:".$reponse['pays']?><br>
  <h2> <?php echo $reponse['titres']?></h2><br>
  <?php echo $reponse['descs']?>;
   </div>
   <img  class="ig"src="../IMAGES/<?php echo $reponse['photos']?>">

 <?php
  }
  ?>
 Nous allons vous envoyer le contrat d'ici peu de temps pour que vous verifiez les informations.Apres cette etape,vous devez signe le contrat et nous reenvoyez ça demain matin avec le reçu du paiement des 20 euros
<ul>
    <?php
    for($i=1;$i<=$nbpage;++$i){

      if($i==$pagecourante){
       ?>
        <li class="lien"><a href="espagne.php ?p=<?php echo $i ?>"><?php echo $i++ ?></a></li>
       <?php

      }
      else
      {
        ?>
        <li class="lien"><a href="espagne.php ?p=<?php echo $i++ ?>">
        <?php echo $i ?></a></li>
      
       <?php
      }
    }

     ?>
  <li></li>
</ul>
</body>
</html>