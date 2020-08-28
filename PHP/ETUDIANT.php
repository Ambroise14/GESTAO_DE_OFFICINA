
<?php
require_once( 'menu.php');
?>
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
                display:inline-block;
                color: black;
                font-size: 25px;
               
            }
            .k{
                width: 400px;
                padding: 15px;
                
            }
            fieldset{
                text-align: center;
                border: solid 2px black;
                background: white;
                color: white;
            }
            body{
                background-image: url("../IMAGES/to..jfif");
            }
            #vb{
                background: red;
                color: white;
                width: 150px;
                margin-left: 1200px;
                
            }
            select{
                width: 425px;
                padding: 12px;
                font-size: 20px;
                line-height: 40px;
            }
            file{
                border: solid 2px black;
            }
            legend{
                color: red;
            }
          
        </style>
    </head>
    <body>
           <?php
        require 'DBD.php';
        $classe=$db->prepare("SELECT * FROM CLASSES");
        $classe->execute();
        if(isset($_POST['vb'])){
                     $nom= htmlspecialchars($_POST["nom"]);
                     $prenom=htmlspecialchars($_POST["prenom"]);
                     $date=htmlspecialchars($_POST["dates"]);
                     $email=htmlspecialchars($_POST["emails"]);
                     $tels=htmlspecialchars($_POST["tel"]);
                     $photos=  htmlspecialchars($_FILES['photos']['name']);
                     $chemin=  htmlspecialchars($_FILES['photos']['tmp_name']);
                     move_uploaded_file($chemin, "../IMAGES/$photos");
                     $etudiant=$db->prepare("INSERT INTO ETUDIANTS(nom,prenom,dates,emails,telephones,photos)VALUES('$nom','$prenom','$date','$email','$tels','$photos')");
                     $etudiant->execute();
                     echo 'merci etudiant';
            
        }
        
        ?>
        <form method="POST" enctype="multipart/form-data">
            <fieldset id="ff">
                <legend>INSCRIPTION DES ETUDIANTS</legend>
                   <p>Nom:</p>
            <input type="text" name="nom" id="nom" class="k"/>
              <div id="en" class="l"></div>
             <p>Prenom:</p>
            <input type="text" name="prenom" id="prenom" class="k" />
            <div id="ep" class="l"></div>
             <p>Date:</p>
            <input type="text" name="dates" id="dates" class="k"/>
              <div id="ed" class="l"></div>
               <p>Email:</p>
            <input type="email" name="emails" id="emails" class="k"/>
              <div id="em" class="l"></div>
               <p>Telephone:</p>
            <input type="text" name="tel" id="tel" class="k"/>
              <div id="et" class="l"></div>
              <p>CLASSE:</p>
              <select name="ni" id="ni">
                 <?php while ($reponse=$classe->fetch()){?>
                  <option value="<?php echo $reponse['id']?>"><?php echo $reponse['libeclasse'].$reponse['prix'].'FCFA'?></option>
                        <?Php
}
                        ?>
              </select>
             <p>photo:</p>
             <input type="file" name="photos" id="photos" class="k"/>
             <INPUT type="submit" name="vb" id="vb" value="ENVOYER" class="k"> 
                        </fieldset>
        </form>
         <input type="submit" id="gt" value="AMBROISE">
          <script type="text/javascript" src="../jquery/jquery-3.5.1.min.js"></script>
          <script type="text/javascript" src="../jquery/etudiant.js"></script>
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
