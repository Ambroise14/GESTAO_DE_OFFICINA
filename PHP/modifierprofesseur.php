<?php
require_once('DBD.php');

if(isset($_POST['vb'])){
  $code=$_POST['code'];
  $nome=$_POST['nome'];
      $sobrenome=$_POST['sobrenome'];
      $dates=$_POST['dates'];
      $mat=$_POST['mat'];
      $rua=$_POST['rua'];
      $bai=$_POST['bai'];
      $cidade=$_POST['cidade'];
      $tels=$_POST['tels'];
      $emails=$_POST['emails'];
      $modifier=$db->prepare("UPDATE `professor` SET `nom`='$nome',`prenom`='$sobrenome',`dates`='$dates',`matieres`='$mat',`ruas`='$rua',`bais`='$bai',`cidades`='$cidade',`telephone`='$tels',`emails`='$emails' WHERE id=$code");
      $modifier->execute();
      echo 'tout bem';
      header('Location:afficherprofesseur.php');
}

?>