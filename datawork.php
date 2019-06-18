<?php 


	
	//database constants
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_NAME', 'verificationcode');
	
	//connecting to database and getting the connection object
	$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	
	//Checking if any error occured while connecting
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " .mysqli_connect_error();
		die();
	}
	
	//creating a query
	// $stmt = $conn->prepare("SELECT id, company_name,product_name,mfg_date,expiry_date,batch_no,registration_no,registration_date FROM verifyfda;");
	$stmt = $conn->prepare("SELECT id, company_name, product_name, mfg_date, expiry_date, batch_no, registration_no, registration_date FROM verifyfda;");
	  
	//executing the query 
	$stmt->execute();
	
	//binding results to the query 
	// $stmt->bind_result($id, $company_name,$product_name,$mfg_date,$expiry_date,$batch_no,$registration_no,$registration_date);
	$stmt->bind_result($id, $company_name, $product_name, $mfg_date, $expiry_date, $batch_no, $registration_no, $registration_date);
	// I change products array to newsfeed
	$check = array(); 
	
	//traversing through all the result 
	while($stmt->fetch()){
		$temp = array();
		$temp['id'] = $id; 
        $temp["company_name"] = $company_name;
        $temp["product_name"] = $product_name;
        $temp["mfg_date"] = $mfg_date;
        $temp["expiry_date"] = $expiry_date;
        $temp["batch_no"] = $batch_no;
        $temp["registration_no"] = $registration_no;
        $temp["registration_date"] = $registration_date;
      
	
		array_push($check, $temp);
	}
	
	//displaying the result in json format 
	echo json_encode($check);