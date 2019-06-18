 <?php
$dsn='mysql:host=localhost;dbname=test';
$username='root';
$password='';
$options =[];
try{

  $connection = new PDO($dsn,$username,$password,$options);

}catch(Exception $e){

}
