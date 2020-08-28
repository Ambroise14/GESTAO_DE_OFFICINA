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
        try{
            session_start();
             $db=new PDO('mysql:,host=localhost;dbname=BASEAMBROISE',"root","");
        }  catch (ErrorException $se){
            die("ERREUR DE LA BASE DE DONNEE".$se);
            
        }
        ?>
    </body>
</html>
