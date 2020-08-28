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
            .u{
                font-size: 15px;
                color: red;
            }
            .za{
                width: 400px;
                padding: 25px;
            }
            fieldset{
                border: solid 2px black;
                text-align: center;
                background-image: url("../IMAGES/df2.jpg");
            }
            select{
                width: 425px;
                padding: 15px;
                line-break: 30px;
                margin-left: 65px;
                font-size: 25px;
                   
            }
            #vb{
                width: 75px;
                padding: 15px;
                background: blue;
                color: white;
            }
            form{
                background: pink;

                width: 600px;
                margin-left: 350px;
 
            }
            legend{
                font-size: 30px;
                text-align: center;
                color: RDG;
            }
        </style>
    </head>
    <body>
         <?php
         require 'DBD.php';
         if (isset($_POST['vb'])){
                $nom=$_POST['nom'];
                $pseudo=$_POST['pseudo'];
                $emails=$_POST['em1'];
                $mot=$_POST['passe1'];
                $typs=$_POST['types'];
                $user=$db->prepare("INSERT INTO USER(nom,pseudo,emails,motpasse,type)VALUES('$nom','$pseudo','$emails','$mot','$typs')");
                $user->execute();           
         } 
        ?>
        <fieldset>
            <legend>OUVERTURE DE COMPTRE</legend>
             <form method="POST">
            <P>Nom d'utilisateur:</P>
            <input type="text" name="nom" id="nom" class="za">
            <div id="en" class="u"></div>
             <P>Nom Pseudo:</P>
            <input type="text" name="pseudo" id="pseudo" class="za">
            <div id="ep" class="u"></div>
               <P>Email:</P>
               <input type="email" name="em1" id="em1" class="za">
            <div id="em" class="u"></div>
               <P>Confirmation:</P>
               <input type="email" name="em2" id="em2" class="za">
            <div id="emm" class="u"></div>
               <P>Mot de passe:</P>
               <input type="password" name="passe1" id="passe1" class="za">
            <div id="ep1" class="u"></div>
               <P>Confirmation mot passe:</P>
               <input type="password" name="passe2" id="passe2" class="za">
            <div id="ep2" class="u"></div>
            <p>TYPE:</p>
            <select name="types" id="types">
                <option value="PARTICULIER">PARTICULIER</option>
                  <option value="UTILISATEUR">UTILISATEUR</option>
                    <option value="DIRECTEUR">DIRECTEUR</option>
                      <option value="ADMINISTRATEUR">ADMINISTRATEUR</option>
                        <option value="DONA">DONA</option>
            </select>
            <input type="submit" name="vb" id="vb" value="ENVOYER">
        </form>
        </fieldset>
         <script type="text/javascript" src="../jquery/jquery-3.5.1.min.js"></script>
          <script type="text/javascript" src="../jquery/users.js"></script>
    </body>
</html>
