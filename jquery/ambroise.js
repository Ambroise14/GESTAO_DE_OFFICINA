$(document).ready(function(){
                valid=true;
                $('#vb').click(function(){
                 if($('#code').val()==""){
                   $('#code').css('border','solid 2px red');
                   $('#code').focus();
                   $('#ec').text('VEILLEZ REMPLIR VOTRE CODE');
                   valid=false;
                   
                 }
              
                 
                    if($('#nom').val()==""){
                   $('#nom').css('border','solid 2px red');
                   $('#nom').focus();
                   $('#en').text('VEILLEZ REMPLIR VOTRE nom');
                   valid=false;
                   
                 }
                 if($('#prix').val()==""){
                   $('#prix').css('border','solid 2px red');
                   $('#prix').focus();
                   $('#ep').text('VEILLEZ ENTRER LE PRIX DU PRODUIT');
                   valid=false;
                   
                 }
                 return valid;
                 
                 if($('#code').val()==""){
                   $('#code').css('border','solid 2px red');
                   $('#code').focus();
                   $('#ec').text('VEILLEZ REMPLIR VOTRE CODE');
                   valid=false;
                   
                 }
              //ceci concerne la page classe
                 
                   if($('#noms').val()==""){
                   $('#nom').css('border','solid 2px red');
                   $('#nom').focus();
                   $('#en').text('VEILLEZ REMPLIR VOTRE nom');
                   valid=false;
                   
                 }
                 
                  if($('#code').val()==""){
                   $('#code').css('border','solid 2px red');
                   $('#code').focus();
                   $('#ec').text('VEILLEZ REMPLIR VOTRE CODE');
                   valid=false;
                   
                 }
                 return valid;
              
                    
                });
                $('#code').keyup(function(){
                    $('#code').css('border','solid 2px black');
                   $('#ec').text('');
                    
                });
                $('#nom').keyup(function(){
                    $('#nom').css('border','solid 2px black');
                   $('#en').text('');
                    
                });
                    $('#prix').keyup(function(){
                    $('#prix').css('border','solid 2px black');
                   $('#ep').text('');
                    
                });
                
                
                     
            });

