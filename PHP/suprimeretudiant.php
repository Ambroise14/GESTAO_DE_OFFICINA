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
          $id=$_GET['id'];
          $req=$db->prepare("DELETE FROM ETUDIANTS WHERE id=$id");
          $req->execute();
           header ( "Location:tableetudiant.php");
        ?>
        
    </body>
</html>
