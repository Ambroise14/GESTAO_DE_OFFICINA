
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
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
        </style>
    </head>
    <body>
         <?php
        require 'DBD.php';
        if(isset($_POST['vb'])){
            $code=  htmlspecialchars($_POST['codes']);
              $nom=  htmlspecialchars($_POST['noms']);
                $prix=  htmlspecialchars($_POST['prix']);
                $produit="INSERT INTO CLASSES(code,libeclasse,prix)VALUES('$code','$nom','$prix')";
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
                <input type="text" name="codes" id="code" class="p"/><br>
                <div id="ec" class="k"></div>
                 <label> Libe de la classe:</label>
                <input type="text" name="noms" id="nom" class="p"/><br>
                  <div id="en" class="k"></div>
                   <label> Prix:</label>
                  <input type="number" name="prix" id="prix" class="p"/>
                    <div id="ep" class="k"></div>
            </fieldset>
               <input type ="submit" name="vb" id="vb" value="ENVOYEZ">   
        </form>
          <script type="text/javascript" src="../jquery/jquery-3.5.1.min.js"></script>
         <script type="text/javascript" src="../jquery/ambroise.js"></script>
        
    </body>
</html>
