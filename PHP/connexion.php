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
            label{
                display: block;
                text-align: left;
                font-size: 30PX;
            }
            .y{
                display: block;
                width: 300px;
                padding: 15px;
            }
            fieldset{
                border: solid 2px red;
                width: 500PX;
                margin-left: 415PX;
                margin-top:150PX;
                background-color: yellowgreen;
                
            }
            form{
                text-align: center;
                width: 400px;
                background: BLACK;
                color: white;
                margin-left: 50PX;
            }
        </style>
    </head>
    <body>
        <?php
          require 'DBD.php';
        if(isset($_POST['vb'])){
            $pseudo=$_POST['pseudo'];
             $mot=$_POST['passe1'];
             $req=$db->prepare("SELECT * FROM USER WHERE pseudo='$pseudo' AND motpasse='$mot'");
             $req->execute();
             $ligne=$req->rowCount();
             if($ligne!=0){
                 header("Location:ETUDIANT.php");
             }
             else {
                 echo 'ERRADO,POR FAVOR SEUS DADOS NAO FORAM ENCONTADOS' ;
             }
             
        }
        ?>
        <fieldset>
            <legend>CONNEXION</legend>
            <form method="POST">
                <label>Pseudo:</label>
                <input type="text" name="pseudo" id="pseudo" class="y">
                  <label>mot de passe:</label>
                  <input type="password" name="passe1" id="passe1" class="y">
                  <input type="submit" name="vb" id="vb" value="ENVOYER">
            </form>
        </fieldset>
        </form>
        
    </body>
</html>
