$(document).ready(function(){
    var nom=$('#nom');var pseudo=$('#pseudo');
      var em1=$('#em1');var em2=$('#em2');
        var pa1=$('#passe1');var pa2=$('#passe2');
         var ti=$('#types');
        var en=$('#en');var ep=$('#ep');
         var em=$('#em');var emm=$('#emm');
         var epa1=$('#ep1');var epa2=$('#ep2');
         $('#vb').click(function(){
             valid=true;
            if(nom.val()==""){
                nom.css('border','solid 2px red');
                nom.focus();
                en.text("POR FAVOR PREENCHE O CAMPO DO NOME");
                valid=false;
            } 
             if(pseudo.val()==""){
                pseudo.css('border','solid 2px red');
                pseudo.focus();
                ep.text("POR FAVOR PREENCHE O CAMPO DO PSEUDO");
                valid=false;
            }
             if(em1.val()==""){
                em1.css('border','solid 2px red');
                em1.focus();
                em.text("POR FAVOR PREENCHE O CAMPO DO SEU EMAIL");
                valid=false;
            }
             if(em2.val()==""){
                em2.css('border','solid 2px red');
                em2.focus();
                emm.text("POR FAVOR CONFERIA SEU EMAIL");
                valid=false;
            }
            
             if(pa1.val()==""){
                pa1.css('border','solid 2px red');
                pa1.focus();
                epa1.text("POR FAVOR PREENCHE O CAMPO DO NOME");
                valid=false;
            }
             if(pa2.val()==""){
                pa2.css('border','solid 2px red');
                pa2.focus();
                epa2.text("POR FAVOR PREENCHE O CAMPO DO NOME");
                valid=false;
            }
            return valid;
         });
         nom.keyup(function(){
             nom.css('border','solid 2px black'); 
                en.text('');  
         });
          pseudo.keyup(function(){
            pseudo.css('border','solid 2px black'); 
                ep.text('');  
         });
           em1.keyup(function(){
            em1.css('border','solid 2px black'); 
                em.text('');  
         });
           em2.keyup(function(){
            em2.css('border','solid 2px black'); 
                emm.text('');  
         });
           pa1.keyup(function(){
            pa1.css('border','solid 2px black'); 
                epa1.text('');  
         });
           pa2.keyup(function(){
            pa2.css('border','solid 2px black'); 
                epa2.text('');  
         });
           
           if(em2.val()!=em1.val()){
               emm.text('VEILLEZ REVOIR VOS EMAIL');  
           }
        
});

