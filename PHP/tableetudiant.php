

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
            th{
                border: solid 1px black;
                width: 1200px;
                
            }
               td{
                border: solid 1px black;
                
            }
               .ig{
                width: 250px;
                height: 215px;
                margin-left: 1080px;
                margin-top: -160px;
                border:solid 2px black;
            }
            td{
                color: black;
                font-size: 20px;
                font-style: italic;
            }
            th{
                background:white;
                color: red;
                font-size: 18px;
            }
            #rech{
                padding: 3px;
                border: solid 3px maroon;
                border-radius: 40px;
                outline: none;
                padding-left: 20px;
                background: url('../IMAGES/ariane5.png') right no-repeat;
                width: 30px;
                transition: 6s;
            
            }
            #rech:focus{
                width: 800px;
            }
            #ntable:focus{
                width: 300px;
            }
        </style>
    </head>
    <body>
    Rechercher:<input type="text" name="rech" id="rech" placeholder="Tapez votre cherche ici"/>
    

               <fieldset>
                <legend>ENCONTRO UMA SENHORA QUE SE CHAMA WALDETHE FISHER .GOSTO MUITO MUITO DELA</legend>
                 <table id="ntable">
                    <thead>
                        <tr>
                    <th>Matricule</th>
                     <th>Nom</th>
                      <th>Prenom</th>
                       <th>Date</th>
                        <th>Email</th>
                         <th>Telephone</th>
                          <th>Photo</th>
                           <th>Operation Supprimer</th>
                             <th>Operation MOdifier</th>
                             </tr>
                    </thead>
        <?php
         require 'DBD.php';
         $classe=$db->prepare("SELECT * FROM ETUDIANTS");
         $classe->execute();
         while($reponse=$classe->fetch()){?>
                    <tbody>
                        <tr>
                            <td><?php echo $reponse['id']?> </td>
                            <td><?php echo $reponse['nom']?> </td>
                            <td><?php echo $reponse['prenom']?> </td>
                            <td><?php echo $reponse['dates']?> </td>
                            <td><?php echo $reponse['emails']?> </td>
                            <td><?php echo $reponse['telephones']?> </td>
                            <td><img src="../IMAGES/<?Php echo $reponse['photos']?> " width="90px" height="80"></td>
                            <td><a href="modifieretudiant.php? id=<?php echo $reponse['id']?>">MODIFIER</a></td>
                            <td><a href="suprimeretudiant.php? id=<?php echo $reponse['id']?>">SUPPRIMER</a></td>
                        </tr>
                    </tbody>
                       <?Php
                        }
         
                       ?>
                    </thead>
                </table>
        </fieldset>
    </body>
</html>
