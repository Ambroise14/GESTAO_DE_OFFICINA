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
                       $id=  htmlspecialchars($_POST['id']);
                       $code= htmlspecialchars($_POST['code']);
                       $nom= htmlspecialchars($_POST['nom']);
                       $prix= htmlspecialchars($_POST['prix']);
                       $qt= htmlspecialchars($_POST['qt']);
                       $mt= htmlspecialchars($_POST['mt']);
                       $c=$db->prepare("UPDATE PEDIDOS SET reprod='$code',nomprod='$nom', prix='$prix', qts='$qt', sommess='$mt' WHERE id='$id'");
                       $c->execute();
                       header ( "Location:listeproduit.php");
                 ?>
    </body>
</html>
