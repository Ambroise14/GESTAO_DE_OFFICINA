
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
            .k{
              width: 450px;
              padding: 16px;
              border: solid 2px black;
            }
            fieldset{
              border:  solid 2px black;
            
           
            }
            p{
               padding: 8px;
               font-size: 25px;
            }
            #code{
                background: red;
                color: white;
                text-align: center;
            }
            .t{
             margin-left: 580px;
             margin-top: -1600px;
             height: 1010px;
             width: 700px
             
            }
            #vb{
                width: 200px;
                color: white;
                background: blue;
                padding: 12px;
            }
            form{
                background: pink;
            }
        </style>
    </head>
    <body>
        <?php
         require 'DBD.php';
          $id=$_GET['id'];
          $req=$db->prepare("SELECT * FROM ETUDIANTS WHERE id=$id");
          $req->execute();
          $reponse=$req->fetch();
        ?>
         <fieldset> 
             
                <legend>INSCRIPTION DES ETUDIANTS</legend>
        <form method="POST" enctype="multipart/form-data" action="Modifieretudiant.php">
                 <p>Code:</p>
                 <input type="text" name="code" id="code" class="k" value="<?php echo $reponse['id']?>" readonly="true"/>
                  <p>Nom:</p>
                  <input type="text" name="nom" id="nom" class="k" value="<?php echo $reponse['nom']?>"/>
             <p>Prenom:</p>
            <input type="text" name="prenom" id="prenom" class="k" value="<?php echo $reponse['prenom']?>"/>
             <p>Date:</p>
            <input type="text" name="dates" id="dates" class="k"/>
               <p>Email:</p>
            <input type="email" name="emails" id="emails" class="k" value="<?php echo $reponse['emails']?>"/>
               <p>Telephone:</p>
            <input type="text" name="tel" id="tel" class="k" value="<?php echo $reponse['telephones']?>"/>
             <p>photo:</p>
             <input type="file" name="photos" id="photos" class="k" value="<?php echo $reponse['photos']?>"/>
             <div ><img class="t" src="../IMAGES/<?php echo $reponse['photos']?>">"</div>
               <INPUT type="submit" name="vb" id="vb" value="ENVOYER" class="k"/>
             </form>
          </fieldset>
  <script>
    var mois=['Janvier','fevrier','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Decembre'];
    var jours=['Dimanche','Lundi','Mardi','Merccredi','Jeudi','Vendredi','Samedi'];
    var ndate=document.getElementById('dates');
    var d= new Date();
    var heure=d.getHours();
    var amunite=d.getMinutes();
    var aseconde=d.getSeconds();
    var ajourenletre=d.getDay();
    var j=d.getDate();//date 
    var annee=d.getFullYear();
    var amois=d.getMonth();
    var lettre=jours[ajourenletre];
    var mlettre=mois[amois];
    var nndate=lettre +" "+ j+" "+mlettre+" "+annee +" Heure:"+heure+"/ "+amunite+" /"+aseconde;
    ndate.value=nndate;
          </script>
               
    </body>
</html>
