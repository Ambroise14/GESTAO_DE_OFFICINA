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
            }
            .prod{
                padding: 20px;
                width: 415px;
                font-size: 20px;
                font-style: italic;
                
            }
            fieldset{
                background: blue;
                color: white;
                height: 600px;
                
            }
            .ty{
                width: 1320px;
                padding: 20px;
                font-size: 20PX;
                color: BLACK;
                border: solid 2px black;
                font-style: italic;
            }
            #da{
                padding: 10px;
                background:RED;
                color: white;
                width: 1300PX;
            }
            #vb{
                padding: 12px;
                width:250px;
                color: red;
                margin: 0PX;
                margin-top: 30px;
                
                    
            }
            #sao{
                background: RED;
                color: white;
                height: 30px;                                                                                                         
            }
            #nt{
                width: 800px;
                margin-left:480px;
                margin-top: -600px;
                background: pink;
            }
            th,td{
                border: solid 2px red;
            }
            #cli{
                width: 400px;
                height: 20px;
            }
        </style>
    </head>
    <body>
        <?php
            require 'DBD.php';
             $vent="";
             $franc="";
              $vent=$db->prepare("SELECT * FROM PEDIDOS WHERE id='000' ");
              $prood=$db->prepare("SELECT * FROM PRODUIT WHERE nom=''");
              $prood->execute();
              $ariane=$prood->fetch();
            if(isset($_POST['cb']))
                {
                  $prood=$db->prepare("SELECT * FROM PRODUIT WHERE nom='ceveja'");
                  $prood->execute();
                  $ariane=$prood->fetch();
                 }elseif ( isset ( $_POST['PM'])) {
                  $prood=$db->prepare("SELECT * FROM PRODUIT WHERE nom='POMME'");
                  $prood->execute();
                  $ariane=$prood->fetch();
                
                   }elseif ( isset ( $_POST['OR'])) {
                  $prood=$db->prepare("SELECT * FROM PRODUIT WHERE nom='ORDINATEUR-DEL'");
                  $prood->execute();
                  $ariane=$prood->fetch();
                
                   }elseif ( isset ( $_POST['AZ'])) {
                  $prood=$db->prepare("SELECT * FROM PRODUIT WHERE nom='AROZ'");
                  $prood->execute();
                  $ariane=$prood->fetch();
                
                   }
                     if(isset($_POST['vb'])){
                       $cli=htmlspecialchars($_POST['cli']);
                       $code=  htmlspecialchars($_POST['code']);
                       $nom= htmlspecialchars($_POST['nom']);
                       $prix= htmlspecialchars($_POST['prix']);
                       $qt= htmlspecialchars($_POST['qt']);
                       $mt= htmlspecialchars($_POST['mt']);
                       $ambroise=$db->prepare("INSERT INTO PEDIDOS(reprod,nomprod,prix,qts,sommess,nomclient)VALUES('$code','$nom','$prix','$qt','$mt','$cli')");
                       $ambroise->execute();
                        $vent=$db->prepare("SELECT * FROM PEDIDOS WHERE nomclient='$cli' ");
                        $vent->execute();
                     }
                     ?>
                
        
        <form method="POST">
            <div id="sao">
                ´CLIENT:<input type="text" name="cli" id="cli">
                  <input type="submit" id="cb" class="vb" name="cb" value="CEVEJA">
                    <input type="submit" id="cb" class="vb" name="PM" value="POMME">
                      <input type="submit" id="cb" class="vb" name="OR" value="ORDINATEUR">
                        <input type="submit" id="cb" class="vb" name="AZ" value="AROZ"> 
                          <input type="submit" id="cb" class="vb" name="PO" value="POMME">
            </div>
              <fieldset>
                <label>CODIGO:</label>
                <input type="text"  name="code" id="prod" class="prod" value="<?php echo $ariane['code']?>" readonly="true">
                 <label>NOME PRODUTO:</label>
                <input type="text" id="prod" name="nom" class="prod"  value="<?php echo $ariane['nom']?>" readonly="true" >
                 <label>PRECO:</label>
                 <input type="number" id="pp"  name="prix" class="prod"  value="<?php echo $ariane['prix']?>" readonly="true">
                 <label>QUANTIDADE:</label>
                 <input type="number" id="qt" class="prod" name="qt">
                 <div id="eq"></div>       
                 <label>TOTAL:</label>
                 <input type="number" id="total"  name="mt" class="prod"readonly="true"><br>
                 <input type="submit" id="vb" class="vb" name="vb" value="COMPRAR">
                 <output id="n"></output>
                </fieldset>
                </form>
               <script type="text/javascript" src="../jquery/jquery-3.5.1.min.js"></script>
               <script type="text/javascript" src="../jquery/dated.js"></script>
               
               <script>
                     var table=document.getElementById('vvv'),somval=0;
                     for(var i=1;i<table.row.length;i++)
                         {
                     somval=somval+parseInt(table.row[i].cells[3].innerHTML) ;  
                     }
                    document.getElementById('n').value(somval);
                     </script>
                  
               <table id="nt">
                   <caption></caption>
                     <thead>
                           <tr>
                            <th>PRODUIT</th>
                             <th>PRIX</th>
                               <th>QUANTIDADE</th>
                                  <th>TOTAL</th>
                                </tr>
                           </thead> 
                           <tbody>
                                <?php while($franc=$vent->fetch()){;?>
                                 <tr>
                               
                                 <td><?php echo $franc['nomprod']?></td>
                                 <td><?php echo $franc['prix']?></td>
                                 <td><?php echo $franc['qts']?></td>
                                 <td><?php echo $franc['sommess']?></td>
                                 <td><a href="modifierp.php ? id=<?php echo $franc['id']?>">Modifier</a></td>
                           </tr>
                            <?php   
                             }
                             ?> 
                           </tbody>
                           <tfoot><?php echo $franc['noclient']?><td>TOTAL</td></tfoot>
            </table>
                   
    </body>
</html>
