<?php
$dsn='mysql:host=localhost;dbname=verificationcode';
$username='root';
$password='';
$options =[];
try{

  $connection = new PDO($dsn,$username,$password,$options);

}catch(Exception $e){

}
