<?php
require_once('DB.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    td{
      border: solid 0px blue;
    }

    #tp{
      margin-left: 780px;
      margin-top: -690px;
      background:pink;
    
      
    }
   td{
    
      width:0px;
    }
    label{
      font-size: 15px;
    
    }
    input{
      width: 250px;
      padding: 12px;
    }
    .co{
      width: 50px;
    }
    .pu{
      width: 80px;
    }
    .qt,.some{
      width: 80px;
    }
    .momo{
      background-color: green;
    }
    .tu{
      background: yellow;
    }
  
  </style>
</head>
<body>
  <?php
     $req=$db->prepare('SELECT * FROM PRODUITS');
     $req->execute();
     $ligne=$req->rowCount();
     echo $ligne;
     echo 'bravo';

  ?>
  <form action="" method="POST" name="dbc" id="dbc">
  <table class="momo">
  <tr>
    <td>70962492493</td>
    <td>Code:</td>
    <td>produit:</td>
    <td>prix:</td>
    <td>quantite:</td>
    <td>Somme:</td>
  </tr>
  <?php
  while($rep=$req->fetch()){?>
   <tr>
   <td><input type="text" name="code" class="co" readonly="true" id="code" value="<?php echo $rep['code']?>"></td>
   <td><input type="text" name="nprod" readonly="true" id="nprod" value="<?php echo $rep['nomprod']?>"></td>
   <td><input type="number" name="pus" class="pu" id="pus" value="<?php echo $rep['put']?>"></td>
   <td><input type="number" name="qtss" class="qt" id="qtss"></td>
  <td><input type="number" name="total1" class="some" id="total1" readonly="true"></td>
   
  <?php  
  }
  ?>
  </table>
  <input type="button" id="vb" value="ENVOYER">
  </div>
  <p>Chris Brown - Love More (Official Music Video) ft. Nicki Minaj</p>
  </form>
  <script> 
  var vt=document.getElementById('vb');
  var prix=document.getElementById('pus').value;
  var qut=document.getElementById('qtss').value;
  vt.addEventListener('click',plo);
function plo(){
  if(qut.value>20){
    document.dbc.total1.value=prix ;
  }
  
  
}
function msg(){
  window.alert('TU VIENS DE CLIQUER');
}
  </script>
</body>
</html>