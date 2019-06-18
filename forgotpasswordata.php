<?php
$connection = new mysqli("localhost","root","","verificationcode");

if($_POST){
    email =$_POST['email'];

    $selectquery =mysqli_query($connection, "select *from admin where email='{$email}'") or die(mysqli_error($connection));
    $count = mysqli_num_rows($selectquery);
    $row mysqli_fetch     
    if($count>0){

    }

}



?>