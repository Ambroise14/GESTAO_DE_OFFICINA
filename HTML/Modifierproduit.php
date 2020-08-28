
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
                height: 500px;
                
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
                    
            }
            #sao{
                background: RED;
                color: white;
                height: 30px;                                                                                                         
            }
            #vvv{
                width: 1200px;
                height: 300px;
            }
            th,td{
                border: solid 2px red;
            }
        </style>
    </head>
    <body>
        <?php
             $id=$_GET['id'];
            require 'DBD.php';
            $mod=$db->prepare("SELECT * FROM PEDIDOS WHERE id=$id");
            $mod->execute();
            $ariane=$mod->fetch();
           ?>
                
        
        <form method="POST" action="alterep.php">
            <label class="lab">PRODUTO</label>
            <div id="sao">
                  <input type="submit" id="cb" class="vb" name="cb" value="CEVEJA">
                    <input type="submit" id="cb" class="vb" name="PM" value="POMME">
                      <input type="submit" id="cb" class="vb" name="OR" value="ORDINATEUR">
                        <input type="submit" id="cb" class="vb" name="AZ" value="AROZ"> 
                          <input type="submit" id="cb" class="vb" name="PO" value="POMME">
            </div>
              <fieldset>
                 <label>ID:</label>
                 <input type="text"  name="id" id="prod" class="prod" value="<?php echo $ariane['id']?>" readonly="true">
                <label>CODIGO:</label>
                <input type="text"  name="code" id="prod" class="prod" value="<?php echo $ariane['reprod']?>" readonly="true">
                 <label>NOME PRODUTO:</label>
                <input type="text" id="prod" name="nom" class="prod"  value="<?php echo $ariane['nomprod']?>" readonly="true" >
                 <label>PRECO:</label>
                 <input type="number" id="pp"  name="prix" class="prod"  value="<?php echo $ariane['prix']?>" readonly="true">
                 <label>QUANTIDADE:</label>
                 <input type="number" id="qt" class="prod" name="qt" value="<?php echo $ariane['qts']?>">
                 <div id="eq"></div>       
                 <label>TOTAL:</label>
                 <input type="number" id="total"  name="mt" class="prod" value="<?php echo $ariane['sommess']?>"   readonly="true"></input>
                 <input type="submit" id="vb" class="vb" name="vb" value="MODIFIERBVG">
                </fieldset>
                </form>
               <script type="text/javascript" src="../jquery/jquery-3.5.1.min.js"></script>
               <script type="text/javascript" src="../jquery/dated.js"></script>
               <script>
                   $(document).on('input','.prod',function(){
                     var som=0;
                     var prix=$('#pp').val();
                     $('#qt').each(function(){
                         var qt=$(this).val();
                         if($.isNumeric(qt)){som+=parseFloat(qt*prix);}
                         $('#total').val(som); }); 
                   });
               </script>
                
    </body>
</html>
