<?php

?>
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
  height: 525px;
  }
  .prof{
    width: 350px;
    padding: 15px;
    border: solid 1px blue;
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
    margin-top: -585px;
    height: 522px;
    position: absolute; 
  }
  #contato{
    border: solid 2px black;
    width:380px ;
    margin-left: 500px;
    margin-top: -585px;
    height: 522px;
    position: absolute; 
  }
  .cidade,.mat{
    width: 375px;
    padding: 15px;
  }
  label{
    display: block;
    margin: 20px;
    font-size: 25px;
    font-family: 'Times New Roman', Times, serif;
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
    $id=$_GET['id'];
   $modifierprof=$db->prepare("SELECT * FROM PROFESSOR WHERE id=$id");
   $modifierprof->execute();
   $row=$modifierprof->fetch();

   ?>
  <h1>ALTERAÇAO DOS DADOS PESSOAIS</h1>
<form action="modifierprofesseur.php" method="POST">
<div id="infop">
  <h3>DADOS PESSOAIS</h3>
  <label>Nome</label>
  <input type="text" name="nome" id="nome" placeholder="digite seu nome" class="prof"  value="<?php echo $row['nom'];?>"/>
  <label>Sobreome</label>
  <input type="text" name="sobrenome" id="sobrenome" placeholder="digite seu sobrenome" class="prof"  value="<?php echo $row['prenom'];?>"/>
  <label>Data de nascimento</label>
  <input type="date" name="dates" id="dates" placeholder="digite seu nome" class="prof"  value="<?php echo $row['dates'];?>"/>
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
    <input type="text" name="rua" id="rua" placeholder="digite seu nome" class="prof" value="<?php echo $row['ruas'];?>"/>
    <label>Bairro</label>
    <input type="text" name="bai" id="bai" placeholder="digite seu nome" class="prof"value="<?php echo $row['bais'];?>"/>
    <label>Cidade</label>
    <select name="cidade" id="cidade" class="cidade"   value="<?php echo $row['cidades'];?>">
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
    <input type="text" name="tels" id="tels" placeholder="digite seu nome" class="prof"value="<?php echo $row['telephone'];?>"/>
    <label>Email</label>
    <input type="email" name="emails" id="emails" placeholder="digite seu nome" class="prof" value="<?php echo $row['emails'];?>"/>
    <label>CODE:</label>
  <input type="text" name="code" id="code" placeholder="digite seu nome" class="prof" value="<?php echo $row['id'];?>" readonly="true"/>
  </div>
 <input type="submit" name="vb" id="vb" value="Envoyer">
</form>
<script>
  var code=document.getElementById('code');
  code.addEventListener("focus",parlemoi);
  function parlemoi(){
    this.style.background='red';
    window.alert("s'il vous plait,tout est modifiable sauf identifiant");
  }
</script>
</body>
</html>