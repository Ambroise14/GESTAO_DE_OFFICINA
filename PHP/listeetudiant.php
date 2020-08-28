
<?php
require_once('DBD.php');
require_once('fonction.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../CSS/listeetudiant.css">
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
      <?php
      $val="";
      $query="SELECT * FROM `etudiants` WHERE CONCAT(`id`, `nom`, `prenom`, `dates`, `emails`, `telephones`, `photos`) LIKE '%".$val."%'";
      $search_resultat=sydney($query);
      if(isset($_POST['vb']))
      {
          $val=$_POST['rech'];
          $query="SELECT * FROM `etudiants` WHERE CONCAT(`id`, `nom`, `prenom`, `dates`, `emails`, `telephones`, `photos`) LIKE '%".$val."%'";
          $search_resultat=sydney($query);
      }
      else{
        $query="SELECT * FROM ETUDIANTS";
        $ariane=sydney($query);
      }
      ?>
    <form method="POST">
    Rechercher:<input type="text" name="rech" id="rech" placeholder="Tapez votre cherche ici"/>
    <input type="submit" name="vb" id="vb" value="Filtere">
  <fieldset>
  <table id="ntable">
     <thead>
         <tr>
               <th>Matricula</th>
               <th>Nome</th>
               <th>Sobrenome</th>
               <th>Data de nascimento</th>
               <th>Email</th>
              <th>Telehone</th>
              <th>Foto</th>
              <th>Operation Supprimer</th>
              <th>Operation MOdifier</th>
              </tr>
              <?php while($row=mysqli_fetch_array($search_resultat)):?>
                 <tr>
                        <td><?php echo $row['id']?> </td>
                        <td><?php echo $row['nom']?> </td>
                        <td><?php echo $row['prenom']?> </td>
                        <td><?php echo $row['dates']?> </td>
                        <td><?php echo $row['emails']?> </td>
                        <td><?php echo $row['telephones']?> </td>
                        <td><img src="../IMAGES/<?php echo $row['photos']?> " height="80px" width="100px"></td>
                        <td><a href="modifieretudiant.php? id=<?php echo $row['id']?>">MODIFIER</a></td>
                        <td><a href="suprimeretudiant.php? id=<?php echo $row['id']?>">SUPPRIMER</a></td>
                  </tr>
              <?php endwhile;?>
     </thead>
 </table>
</fieldset>
    </form>
    </body>
</html>
