
<?php
require_once('DB.php');
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
             input[type="checkbox"]{
                height: 16px;
                width: 16px;
            }
            .p{
                width: 400px;
                padding: 20px;
                display:inline-block;
                margin-top: 20px
            }
            fieldset{
                border: solid 2px black;
                border-radius: 5px;
            }
           
            label{
                width: 120px;
                display: inline-block;
            }
            .k{
                margin-left: 260px;
                color: red;
                font-size: 10px;
            }
            legend{
                color: blue;
            }  
        </style>
    </head>
     </body>  
    <?php
        if(isset($_POST['vb'])){
            $code=  htmlspecialchars($_POST['code']);
              $nom=  htmlspecialchars($_POST['nom']);
                $prix=  htmlspecialchars($_POST['prix']);
                $produit="INSERT INTO PRODUIT(code,nom,prix)VALUES('$code','$nom','$prix')";
                $nproduit=$db->prepare($produit);
                $nproduit->execute();
                echo 'bravo';
        }
        
        //(+𝟚𝟚𝟡)𝟡𝟟𝟜𝟜𝟚𝟜𝟜𝟜
        ?>
        <form method="POST">
            <fieldset>
                <legend>ENREGISTREMENT DE PRODUIT</legend>
                <label>CODE:</label>
                <input type="text" name="code" id="code" class="p"/><br>
                <div id="ec" class="k"></div>
                   <label> Nom de produit:</label>
                <input type="text" name="nom" id="nom" class="p"/><br>
                  <div id="en" class="k"></div>
                   <label> Prix:</label>
                  <input type="number" name="prix" id="prix" class="p"/>
                  <div id="ep" class="k"></div> 
                 
            </fieldset>
            <input type ="submit" name="vb" id="vb" value="ENVOYEZ">     
        </form>
        <script type="text/javascript" src="../jquery/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="../jquery/dada.js"></script>
       <script type="text/javascript" src="../jquery/ambroise.js"></script>
    </body>  
</html>
