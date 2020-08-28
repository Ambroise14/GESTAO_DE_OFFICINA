<?php 
function sydney($query)
{
  $connect=mysqli_connect("localhost","root","","MAFORCE");
  $ambroise=mysqli_query($connect,$query);
  return $ambroise;
  
}
?>