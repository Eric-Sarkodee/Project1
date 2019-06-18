<?php

$registration_no =filter_input(INPUT_POST,"registration_no");


//  if($username=="eric" && $password =="coder"){
//   echo '1';
//
// }else{
//   echo '0';
// }

$mysqli = new mysqli("localhost","root","","verificationcode");
$result = mysqli_query($mysqli, "select *from verifyfda where registration_no ='".$registration_no."'");

if($data =mysqli_fetch_array($result)){
  echo '1';
}


 ?>
