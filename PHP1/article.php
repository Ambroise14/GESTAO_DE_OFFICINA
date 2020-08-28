<?php
require_once('menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <?php

if(isset($_POST['vb'])){
  require('DB.php');
  $pho=  htmlspecialchars($_FILES['photo']['name']);
  $chemin=  htmlspecialchars($_FILES['photo']['tmp_name']);
  move_uploaded_file($chemin, "../IMAGES/$pho");
  $datte=$_POST['dates'];
  $des=$_POST['des'];
  $nom=$_POST['nom'];
  $titre=$_POST['titred'];
  $article=$db->prepare("INSERT INTO ARTICLES(descs,photos,dates,pays,titres)Values('$des','$pho','$datte','$nom','$titre')");
  $article->execute();
  echo 'toto';
}
  ?>
<fieldset>
 <form action="" method="POST" name="f" class="f"  enctype="multipart/form-data">
  <div id="cadset">
      <input type="checkbox" class="checkbox" onclick="lucienne();" value="ESPAGNE">ESPAGNE
      <input type="checkbox" class="checkbox" onclick="lucienne();"  value="ANGLETERE">ANGLETERE
      <input type="checkbox" class="checkbox" onclick="lucienne();"  value="ITALIE">ITALIE
      <input type="checkbox" class="checkbox" onclick="lucienne();"  value="ALLEMAGNE">ALLEMEGNE
      <input type="checkbox" class="checkbox" onclick="lucienne();"  value="FRANCE">FRANCE
      <input type="text"  name="nom" id="nom" class="nom" placeholder="Selectionner un pays *">
      Titre:<input type="text" name="titred" id="titred" class="titre" placeholder="Resumer de votre anonce *">
  </div>
  <div id="hortense">
     <label>Date:</label>
     <input type="text" name="dates" id="dates" class="long"/>
     <label>DESCRIPTION:</label>
     <textarea name="des" id="des"></textarea>
     <span id="spp"></span>
     <label>Image:</label>
     <input type="file" name="photo" id="photo" class="long"/>
     <input type="submit" name="vb" id="vbf" value="ENVOYER">
  </div>
</form>
</fieldset>
  <script>
      var ariane=document.getElementsByClassName('checkbox');
      var sidonie='';
      
  function lucienne(){
    for(i=0;i<ariane.length;i++){
      if(ariane[i].checked==1){
        sidonie =ariane[i].value ;
        window.alert('Vueillez confirmer votre choix svp:'+sidonie);
        document.getElementById( 'nom').value=sidonie;
      }
    }
  
    /*if(ariane[1].checked)
    {
      document.getElementById( 'nom').value=ariane[1].value;  
    }
    if(ariane[2].checked)
    {
      document.getElementById( 'nom').value=ariane[2].value;  
    }
    if(ariane[3].checked)
    {
      document.getElementById( 'nom').value=ariane[3].value;  
    }
   /* for(i=1;i<ariane.length;i++){
      if(ariane[i].checked==1){
        sidonie +=ariane[i].value ;
        document.getElementById( 'nom').value=sidonie;
      }
    }
   */
  }
    var dty=document.getElementById('dates');
    var d=new Date();
    var h=d.getHours();
    var mt=d.getMinutes();
    var secd=d.getSeconds();
    var jentre=d.getDay();
    var j=d.getDate();//date 
    var annee=d.getFullYear();
    var m=d.getMonth()-1;
    var jours=['Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'];
    var mois=['Janvier','Fevrier','Mars','Avril','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Decembre'];
    var A=jours[jentre]
    var B=mois[m];
    var tout= A+" "+j+" "+B+" "+ annee+" :"+h +":"+mt+":"+secd;
    dty.value=tout;
  

  
  </script>
</body>
</html>