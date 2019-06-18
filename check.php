<?php
$con =mysqli_connect("localhost","root","","verificationcode");

if(!$con){
    die('could not connect:' .mysqli_error());

}
$result = mysqli_query($con, "SELECT * FROM verifyfda");
while($row =mysqli_fetch_assoc($result)){
    $output[]=$row;

}
Print(json_encode($output,JSON_PRETTY_PRINT));

?>