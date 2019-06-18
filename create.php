<html>
 
<head>
 
<!-- Required meta tags -->
 
<meta charset="utf-8">
 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
 
 
 
<!-- Bootstrap CSS -->
 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
 
 
<!--fontawesome-->
 
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
 
<!--This is used for search icon. Instead putting icon manually it is loaded from fontawesome-->
 
 
 
 
<title>FDA food verifcation system</title>
 
</head>
 
<body>
 
<!-- navbar -->
 
<nav class="navbar navbar-expand-md navbar-light bg-dark fixed-top">
 
<a class="navbar-brand"><img src="./image/logos.ico"></a>

<button type="button" class="navbar-toggler bg-light" data-toggle="collapse" data-target="#nav">
 
<span class="navbar-toggler-icon"></span>
 
</button>
 
<div class="collapse navbar-collapse justify-content-between" id="nav">
 
<ul class="navbar-nav">
 
<li class="nav-item" >
 
<a class="nav-link text-light font-weight-bold px-3" href="dashboard.php">HOME</a>
 
</li>

<li class="nav-item">
 
 <a class="nav-link text-light font-weight-bold px-3" href="index.php">DATA CENTER</a>
  
 </li>
 
<li class="nav-item">
 
<a class="nav-link text-light font-weight-bold px-3" href="Aboutus.php">ABOUT US</a>
 
</li>
 
<li class="nav-item">
 
<a class="nav-link text-light font-weight-bold px-3" href="Contact.php">CONTACT</a>
 
</li>
 
</ul>
 
 
<!-- Search bar -->
 
<!-- <form class="form-inline ml-3">
 
<div class="input-group">
 
<input type="text" class="form-control " placeholder="Search" >
 
<button type="submit"><i class="fa fa-search"></i></button>
 
</div>
 
</form>
 
</div> -->
 
</nav>




<?php
require 'db.php';
$message='';
if(isset($_POST['company_name']) && isset($_POST['product_name'])){
$company_name=$_POST['company_name'];
$product_name=$_POST['product_name'];
$mfg_date=$_POST['mfg_date'];
$expiry_date=$_POST['expiry_date'];
$batch_no=$_POST['batch_no'];
$registration_no=$_POST['registration_no'];

$sql= 'INSERT INTO verifyfda (company_name,product_name,mfg_date,expiry_date,batch_no,registration_no) VALUES (:company_name,:product_name,:mfg_date,:expiry_date,:batch_no,:registration_no)';
$statement =$connection->prepare($sql);
if ($statement->execute([':company_name' =>$company_name,':product_name'=>$product_name,':mfg_date' =>$mfg_date,':expiry_date'=>$expiry_date,':batch_no' =>$batch_no,':registration_no'=>$registration_no])){
  $message ='Data inserted successfully';
}


}

 ?>




<div class="container">
  <div class="card mt-5">
    <div class="card-header">
<h2>Add Product</h2>
    </div>
    <div class="card-body">
   <?php if (!empty($message)): ?>
    <div class="alery alert-danger">
      <?= $message; ?>
    </div>
   <?php endif; ?>

      <form  method="post">

        <div class="form-group">
          <label for="company_name">Company Name</label>
          <input type="text" name="company_name" id="company_name" class="form-control" >
        </div>

        <div class="form-group">
          <label for="product_name">Product Name</label>
          <input type="text" name="product_name" id="product_name" class="form-control" >
        </div>

        <div class="form-group">
          <label for="mfg_date">Manufacturing Date</label>
          <input type="date" name="mfg_date" id="mfg_date" class="form-control" >
        </div>

        <div class="form-group">
          <label for="expiry_date">Expiry Date</label>
          <input type="date" name="expiry_date" id="expiry_date" class="form-control" >
        </div>

        <div class="form-group">
          <label for="batch_no">Batch Number</label>
          <input type="text" name="batch_no" id="batch_no" class="form-control" >
        </div>

        <div class="form-group">
          <label for="registration_no">Registration Number</label>
          <input type="text" name="registration_no" id="registration_no" class="form-control">
        </div>

      <div class="form-group">
        <button type="submit" name="" class="btn btn-info">Add Product</button>

      </div>


      </form>

    </div>
  </div>

</div>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>