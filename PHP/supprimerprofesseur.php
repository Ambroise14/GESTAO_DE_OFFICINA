<?php
require_once('DBD.php');
$id=$_GET['id'];
$suprimerprof=$db->prepare("DELETE FROM `professor` WHERE id=$id");
$suprimerprof->execute();
header('Location:afficherprofesseur.php');
?>
