<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <?php
         require 'DBD.php';
                    $id= htmlspecialchars($_POST["code"]);
                    $nom= htmlspecialchars($_POST["nom"]);
                     $prenom=htmlspecialchars($_POST["prenom"]);
                     $date=htmlspecialchars($_POST["dates"]);
                     $email=htmlspecialchars($_POST["emails"]);
                     $tels=htmlspecialchars($_POST["tel"]);
                     $photos=  htmlspecialchars($_FILES['photos']['name']);
                     $chemin=  htmlspecialchars($_FILES['photos']['tmp_name']);
                     move_uploaded_file($chemin, "../IMAGES/$photos");
                     $modifier=$db->prepare("UPDATE ETUDIANTS SET nom='$nom',prenom='$prenom',dates='$dates',emails='$email',telephones='$tels',photos='$photos' WHERE id=$id");
                     $modifier->execute();
                     header ( "Location:tableetudiant.php");
        ?>
    </body>
</html>
