<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
 <style>
    #infop{
  border: solid 2px red;
  width: 475px;
  height: 480px;
  }
  .prof{
    width: 350px;
    padding: 15px;
  }
  #foto img,p{
    border: solid 2px black;
    width:450px ;
    margin-left: 800px;
    margin-top: -545px;
    height: 480px;
    position: absolute;
  }
  #endereço{
    border: solid 2px black;
    width:380px ;
    margin-left: 950px;
    margin-top: -545px;
    height: 480px;
    position: absolute; 
  }
  #contato{
    border: solid 2px black;
    width:380px ;
    margin-left: 500px;
    margin-top: -545px;
    height: 480px;
    position: absolute; 
  }
  .cidade,.mat{
    width: 375px;
    padding: 15px;
  }
  label{
    display: block;
    margin: 20px;
  }
  h3{
    background: blue;
    color: white;
    text-align: center;
  }
  form{
    border: solid 2px blue;
    border-radius: 25px;
  }
  h1{
    background: red;
    color: white;
    text-align: center;
    border-radius: 40px;
  }
  H4{
    background: black;
    color: white;
    border-radius: 40px;
  }
 </style>
</head>
<body>
 
  <?php
    require_once('DBD.php');
    if(isset($_POST['vb'])){
      $nome=$_POST['nome'];
      $sobrenome=$_POST['sobrenome'];
      $dates=$_POST['dates'];
      $mat=$_POST['mat'];
      $rua=$_POST['rua'];
      $bai=$_POST['bai'];
      $cidade=$_POST['cidade'];
      $tels=$_POST['tels'];
      $emails=$_POST['emails'];
     $professor=$db->prepare("INSERT INTO PROFESSOR(nom,prenom,dates,matieres, ruas,bais,cidades,telephone,emails)VALUES('$nome','$sobrenome','$dates','$mat','$rua','$bai','$cidade','$tels','$emails')");
     $professor->execute();
     echo "bien fait";
    }
  ?>
  <h1>ESPACO PROFESSOR</h1>
<form action="" method="POST">
<div id="infop">
  <h3>DADOS PESSOAIS</h3>
  <label>Nome</label>
  <input type="text" name="nome" id="nome" placeholder="digite seu nome" class="prof"/>
  <label>Sobreome</label>
  <input type="text" name="sobrenome" id="sobrenome" placeholder="digite seu sobrenome" class="prof"/>
  <label>Data de nascimento</label>
  <input type="date" name="dates" id="dates" placeholder="digite seu nome" class="prof"/>
  <label>Matiere:</label> <select name="mat" id="mat" class="mat">
      <option value="BASE DE DONNEE">BASE DE DONNEE</option>
      <option value="Natal">MATHEMATICA</option>
      <option value="Natal">PHYSICO</option>
      <option value="Natal">CHIMICO</option>
      <option value="Natal">Natal</option>
      <option value="Natal">Natal</option>
      <option value="Natal">Natal</option>
      <option value="Natal">Natal</option>
      <option value="Natal">Natal</option>
      <option value="Natal">Natal</option>
      <option value="Natal">Natal</option>
      <option value="Natal">Natal</option>
      <option value="Natal">Natal</option>
      <option value="Natal">Natal</option>
      <option value="Natal">Natal</option>
    </select>
 </div>
 <h4>Cliquer ici pour completer votre adresse</h4>
  <div id="endereço">
  <h3>ENDEREÇO</h3>
    <label>RUA</label>
    <input type="text" name="rua" id="rua" placeholder="digite seu nome" class="prof"/>
    <label>Bairro</label>
    <input type="text" name="bai" id="bai" placeholder="digite seu nome" class="prof"/>
    <label>Cidade</label>
    <select name="cidade" id="cidade" class="cidade">
      <option value="Natal">Natal</option>
      <option value="SAO PAULO">SAO PAULO</option>
      <option value="RECIF">RECIF</option>
      <option value="SANTA CATARINA">SANTA CATARINA</option>
      <option value="RIO DE JANEIRO">RIO DE JANEIRO</option>
      <option value="Natal">Natal</option>
      <option value="Natal">Natal</option>
      <option value="Natal">Natal</option>
      <option value="Natal">Natal</option>
      <option value="Natal">Natal</option>
      <option value="Natal">Natal</option>
      <option value="Natal">Natal</option>
      <option value="Natal">Natal</option>
      <option value="Natal">Natal</option>
      <option value="Natal">Natal</option>
    </select>
  </div>
  <div id="contato">
  <h3>CONTATO</h3>
    <label>Telefone</label>
    <input type="text" name="tels" id="tels" placeholder="digite seu nome" class="prof"/>
    <label>Email</label>
    <input type="email" name="emails" id="emails" placeholder="digite seu nome" class="prof"/>
  </div>
  <div id="foto"><img src="../IMAGES/df2.jpg"><p>dieu sera au control de tout </p></div>
 <input type="submit" name="vb" id="vb" value="Envoyer">
</form>
<script>
  var photo=document.getElementById('foto');
   var h44=document.querySelector('h4');
   var endereco=document.getElementById('endereço');
   var contato=document.getElementById('contato');
   endereco.style.display='none';
   contato.style.display='none';

   h44.addEventListener('click',h4);
   function h4(){
     endereco.style.display='block';
     contato.style.display='block';
     endereco.style.background='marrom';
     photo.style.display='none';
   }
 </script>
</body>
</html>