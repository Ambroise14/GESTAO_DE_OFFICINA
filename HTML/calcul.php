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
            .pc{
                width:400px;
                padding: 18px;
               
            }
            form{
               
                border: solid 2px black;
                background: blue;
                height:400px;
               color:white;
            }
            label{
                 display: block;
            }
        </style>
    </head>
    <body>
        <form method="POST">
            <div class="maman">
                <label>POMME:</label>
                <input type="number" id="p1" class="pc">
            </div>
            <div class="maman">
                <label>TOMATE:</label>
                <input type="number" id="p1" class="pc">
            </div>
            <div class="maman">
                <label>PIMENTE:</label>
                <input type="number" id="p1" class="pc">
            </div>
            <div class="maman">
                <label>CEBOLA:</label>
                <input type="number" id="p1" class="pc">
            </div>
            <div class="maman">
                <label>TOTAL:</label>
                <output id="toto"></output>
            </div>
        </form>
            <script type="text/javascript" src="../jquery/jquery-3.5.1.min.js"></script>
            <script>
               $(document).on('input','.pc',function(){
                   var somT=0;
                   $('.pc').each(function(){
                       var recup=$(this).val();
                       if($.isNumeric(recup)){
                           somT +=parseFloat(recup);
                       }
                   });
                   $('#toto').text(somT);
                   
               });
            </script>
        <?php
        // put your code here
        ?>
    </body>
</html>
