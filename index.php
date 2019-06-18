<html>
 
<head>
 
<!-- Required meta tags -->
 
<meta charset="utf-8">
 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
 
 
 
<!-- Bootstrap CSS -->
 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
  
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

<li class="nav-item" >
 
 <a class="nav-link text-light font-weight-bold px-3" href="create.php">ADD PRODUCT</a>
  
 </li>
 
<li class="nav-item">
 
<a class="nav-link text-light font-weight-bold px-3" href="Aboutus.php">ABOUT US</a>
 
</li>
 
<li class="nav-item">
 
<a class="nav-link text-light font-weight-bold px-3" href="Contact.php">CONTACT</a>
 
</li>

</ul>
 


 <div>
 <a class="nav-link text-danger font weight-bold px3 ml-right" href="dashboard.php">Logout</a> 
 </div>
<!-- Search bar -->
<!--  
<form class="form-inline ml-3">
 
<div class="input-group">
 
<input type="text" class="form-control " placeholder="Search" >
 
<button type="submit"><i class="fa fa-search"></i></button>
 
</div>
 
</form> -->
 
</div>
 
</nav>
<br>
<br>
<br>
<hr>

<?php

require 'db.php';
$sql ='SELECT *FROM verifyfda';
$statement =$connection->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);

 ?>
<div class="container">
  <div class="card-mt-5">
    <div class="card-header">
      <h2>DATA CENTER</h2>
      <div class="card-body bg-white ">


            <!-- <div class="searchbar text text-white">
              <input class="search_input" type="text" name="valueToSearch" placeholder="Search...">
              <a class="search_icon" name="search" value="Filter"><i class="fas fa-search"></i></a>
            </div>-->

        <table id="data" class="table table-bordered">
         <thead>
          <tr>
            <th>ID</th>
            <th>Company Name</th>
            <th>Product Name</th>
            <th>Manufacturing Date</th>
            <th>Expiry Date</th>
            <th>Bacth Number</th>
            <th>Registration Number</th>
            <th>Registration Date</th>
            <th>Action</th>
          </tr>
          </thead>

              <!-- populate table from mysql database -->


            <?php foreach ($people as $person): ?>
              <tr>
                <td><?= $person->id;?></td>
                <td><?= $person->company_name;?></td>
                <td><?= $person->product_name;?></td>
                <td><?= $person->mfg_date;?></td>
                <td><?= $person->expiry_date;?></td>
                <td><?= $person->batch_no;?></td>
                <td><?= $person->registration_no;?></td>
                <td><?= $person->registration_date;?></td>



                <td colspan="2">
                  <a href="edit.php?id=<?= $person->id ?>"class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                  <a onclick="return confirm('Are you sure you want to delete?')" href="delete.php?id=<?= $person->id ?>"class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>


                </td>
              </tr>
            <?php endforeach; ?>

        </table>


      </div>


    </div>

   </div>

</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js  "></script>

<script>

$(document).ready(function() {
  
    $('#data').DataTable();
} );
</script>

</body>
</html>