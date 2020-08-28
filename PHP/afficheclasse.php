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
        <style>
            li{
                font-size: 25px;
                padding: 10px;
                border: solid 2PX red;
                background: blue;
                color: white;
                
            }
        </style>
    </head>
    <body>
        <?php
         require 'DBD.php';
         $classe=$db->prepare("SELECT * FROM CLASSES");
         $classe->execute();
         while($reponse=$classe->fetch()){?>
        
           <li><?php echo $reponse['id']  ."        "          .$reponse['libeclasse']  ."        "     .$reponse['prix'] ?></li><br>
          
        
        <?Php
         }
         
        ?>
    </body>
</html>
