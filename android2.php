<?php
$con = mysqli_connect("localhost","root","","verificationcode");

// $key = $_POST['key'];

// echo json_encode(array("response" => $key));
// exit;

$result = mysqli_query($con,"SELECT * from verifyfda where registration_no ='1234'");
$arr = array();
while ($row = mysqli_fetch_array($result)) {

  $company_name = $row['company_name'];
  $product_name = $row['product_name'];
  $mfg_date = $row['mfg_date'];
  $expiry_date = $row['expiry_date'];
  $batch_no = $row['batch_no'];
  $registration_no = $row['registration_no'];
  $registration_date = $row['registration_date'];

  $arr["company_name"] = $company_name;
  $arr["mfg_date"] = $mfg_date;
  // $arr["expiry_date"] = $expiry_date;
  // $arr["batch_no"] = $batch_no;
  // $arr["registration_no"] = $registration_no;
  // $arr["registration_date"] = $registration_date;

echo json_encode($arr);

}
 ?>
 
