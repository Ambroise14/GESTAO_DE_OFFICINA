<?php
require_once('DBD.php');
require_once('fonction.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    #TL{
    border: solid 0px;
    width: 1300px;
    }
    th,td{
      border:solid 1px;
      list-style-image: none;
      }
      #rech{
        border-radius: 40px;
        border: solid 2px maroon;
        outline: none;
        padding-left: 20px;
        background: url("../IMAGES/ariane5.png") right no-repeat;
        transition: 20s;
  
      }
      #rech:focus{
      
        width: 400px;
       
      }
      
  </style>
</head>
<body>
<?php
 $textrech="";
 $query="SELECT * FROM `professor` WHERE CONCAT(`id`, `nom`, `prenom`, `dates`, `matieres`, `ruas`, `bais`, `cidades`, `telephone`, `emails`) LIKE '%".$textrech."%'";
 $ambroise=sydney($query);
if(isset($_POST['vb'])){
  $textrech=$_POST["txtrech"];
  $query="SELECT * FROM `professor` WHERE CONCAT(`id`, `nom`, `prenom`, `dates`, `matieres`, `ruas`, `bais`, `cidades`, `telephone`, `emails`) LIKE '%".$textrech."%'";
  $ambroise=sydney($query);
}else{
$query="SELECT * FROM PROFESSOR";
$ariane=sydney($query);
}
?>
  <form method="POST">
    <input type="text" name="txtrech" id="rech"/>
    <input type="submit" name="vb" id="vb" value="RECHERCHER">
  </form>
  <table id="TL">
    <thead>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>sobrenome</th>
        <th>Date</th>
        <th>Matiere</th>
        <th>Rua</th>
        <th>Bairro</th>
        <th>Cidade</th>
        <th>Telephone</th>
        <th>Email</th>
        <th>Modifier</th>
        <th>Supprimer</th>
    </tr>
      <?php while($row=mysqli_fetch_array($ambroise)):?>
        <tr>
          <td><?php echo $row['id'];?></td>
          <td><?php echo $row['nom'];?></td>
          <td><?php echo $row['prenom'];?></td>
          <td><?php echo $row['dates'];?></td>
          <td><?php echo $row['matieres'];?></td>
          <td><?php echo $row['ruas'];?></td>
          <td><?php echo $row['bais'];?></td>
          <td><?php echo $row['cidades'];?></td>
          <td><?php echo $row['telephone'];?></td>
          <td><?php echo $row['emails'];?></td>
          <td><a href="editerprofesseur.php? id=<?php echo $row['id']?>">MODIFIER</a></td>
          <td><a href="supprimerprofesseur.php? id=<?php echo $row['id']?>">APAGAR</a></td>
        </tr>
        <?php endwhile ;?>
    </thead>
  </table>
</body>
</html>