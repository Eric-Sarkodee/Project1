<html>
 
<head>
 
<!-- Required meta tags -->
 
<meta charset="utf-8">
 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
 
 
 
<!-- Bootstrap CSS -->
 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
 
 
 
 
<!--fontawesome-->
 
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
 
<!--This is used for search icon. Instead putting icon manually it is loaded from fontawesome-->
 
 
 
 
<title>FDA HOME PAGE</title>
 
</head>
 
<body>

<?php require_once 'logindata.php'?>
<?php require_once 'signupdata.php'?>
 
<!-- navbar -->
 
<nav class="navbar navbar-expand-md navbar-light bg-dark fixed-top">
 
<a class="navbar-brand"><img src=./image/logos.ico></a>
 
<button type="button" class="navbar-toggler bg-light" data-toggle="collapse" data-target="#nav">
 
<span class="navbar-toggler-icon"></span>
 
</button>
 
<div class="collapse navbar-collapse justify-content-between" id="nav">
 
<ul class="navbar-nav">
 
<li class="nav-item" >
 
<a class="nav-link text-light font-weight-bold px-3" href="#">HOME</a>
 
</li>
<!--  
<li class="nav-item dropdown" data-toggle="dropdown">
 
<a class="nav-link text-light font-weight-bold px-3 dropdown-toggle" href="#">CATEGORIES</a>
 
<div class="dropdown-menu">
 
<a class="dropdown-item" href="#">Fast Food</a>
 
<a class="dropdown-item" href="#">Lunch</a>
 
<a class="dropdown-item" href="#">Dessert</a>
 
</div>
 
</li> -->
 
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
 
</form> -->
 
</div>
 
</nav>
<br>
<br>
<br>
<br>



<div class="container">
<div class="row">
<div class="col-md-8 mb-8">
<!--Carousel Wrapper-->
<div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./image/fdahome.jpg"
        alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./image/fda.png"
        alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./image/newlogo.png"
        alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./image/product.jpg"
        alt="Fourth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./image/cert.jpg"
        alt="Fifth slide">
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-thumb" data-slide-to="0" class="active">
      <img src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(88).jpg" width="100">
    </li>
    <li data-target="#carousel-thumb" data-slide-to="1">
      <img src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(121).jpg" width="100">
    </li>
    <li data-target="#carousel-thumb" data-slide-to="2">
      <img src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(31).jpg" width="100">
    </li>
    <li data-target="#carousel-thumb" data-slide-to="1">
      <img src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(121).jpg" width="100">
    </li>
    <li data-target="#carousel-thumb" data-slide-to="2">
      <img src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(31).jpg" width="100">
    </li>
  </ol>
</div>
<!--/.Carousel Wrapper-->
<br>
<br>
<div class="card-deck">
  <div class="card">
  <a href="collabo.php">
    <img class="card-img-top" src="./image/product.jpg" alt="Card image cap">
    <strong> FDA National Collaborators</a></strong>
  </div>
  <div class="card">
  <a href="who.php">
    <img class="card-img-top" src="./image/world.png" alt="Card image cap">
    <strong> Who We are</a></strong>
  </div>
 
  <div class="card">
  <a href="fdaghana.php">
    <img class="card-img-top" src="./image/medicine.jpg" alt="Card image cap">
    <strong> FDA International Collaborators</a></strong>
  </div>
</div>

</div>



<div class="col-md-4 mb-8 border-9">
  <div class="col-sm-8 ml-auto mr-right">
    <ul class="nav nav-pills nav-fill mb-1" id="pills-tab" role="tablist">
      <li class="nav-item"> <a class="nav-link active" id="pills-signin-tab" data-toggle="pill" href="#pills-signin" role="tab" aria-controls="pills-signin" aria-selected="true">Sign In</a> </li>
      <li class="nav-item"> <a class="nav-link" id="pills-signup-tab" data-toggle="pill" href="#pills-signup" role="tab" aria-controls="pills-signup" aria-selected="false">Sign Up</a> </li>
    </ul>

    <!-- login system -->
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-signin" role="tabpanel" aria-labelledby="pills-signin-tab">
        <div class="col-sm-12 border border-primary shadow rounded pt-2">
          <div class="text-center"><img src="./image/lg.ico" class="rounded-circle border p-1"></div>
          <form method="post" id="singninFrom">
            <div class="form-group">

              <label class="font-weight-bold">Email <span class="text-danger">*</span></label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Enter valid email" required>
            </div>
            <div class="form-group">
              <label class="font-weight-bold">Password <span class="text-danger">*</span></label>
              <input type="password" name="password" id="password" class="form-control" placeholder="***********" required>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col">
                  <label><input type="checkbox" name="condition" id="condition"> Remember me.</label>
                </div>
                <div class="col text-right"> <a href="javascript:;" data-toggle="modal" data-target="#forgotPass">Forgot Password?</a> </div>
              </div>
            </div>
            <div class="form-group">
              <input type="submit" name="submit" value="Sign In" class="btn btn-block btn-primary">
            </div>
          </form>
        </div>
      </div>
      <!--Registration form-->
      <div class="tab-pane fade" id="pills-signup" role="tabpanel" aria-labelledby="pills-signup-tab">
        <div class="col-sm-12 border border-primary shadow rounded pt-2">
          <div class="text-center"><img src="./image/lg.ico" class="rounded-circle border p-1"></div>
          <form method="post" id="singnupFrom" Action="signupdata.php">

          <div class="form-group">
              <label class="font-weight-bold">Full Name <span class="text-danger">*</span></label>
              <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Choose your user name" required>
            </div>

            <div class="form-group">
              <label class="font-weight-bold">Email <span class="text-danger">*</span></label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Enter valid email" required>
              <div class="text-danger"><em>This will be your login email!</em></div>
            </div>

             <div class="form-group">
              <label class="font-weight-bold">Phone #</label>
              <input type="phone" name="phone" id="phone" class="form-control" placeholder="(000)-(0000000)">
            </div>

            <div class="form-group">
              <label class="font-weight-bold">Address <span class="text-danger">*</span></label>
              <input type="Address" name="Address" id="Address" class="form-control" placeholder="Choose your Address" required>
            </div>

            

            <div class="form-group">
              <label class="font-weight-bold">Password <span class="text-danger">*</span></label>
              <input type="password" name="password" id="password" class="form-control" placeholder="***********" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;"
                required>
                <div class="text-danger"><em>This will be your login password!</em></div>
            </div>

            <div class="form-group">
              <label><input type="checkbox" name="signupcondition" id="signupcondition" required> I agree with the <a href="javascript:;">Terms &amp; Conditions</a> for Registration.</label>
            </div>
            <div class="form-group">
              <input type="submit" id="register" name="save" value="save" class="btn btn-block btn-primary">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="forgotPass" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <form method="post" id="forgotpassForm">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Forgot Password</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>Email <span class="text-danger">*</span></label>
              <input type="email" name="forgotemail" id="forgotemail" class="form-control" placeholder="Enter your valid email..." required>
            </div>
            <div class="form-group">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Sign In</button>
            <button type="submit" name="forgotPass" class="btn btn-primary"><i class="fa fa-envelope"></i> Send Request</button>
          </div>
        </div>
      </form>
</div>
</div>
</div>
</div>
</div>





</div>
</div>
<br>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
$(function(){
  //to check validation of the textbox
  $('#register').click(function(e){
  
  var valid =this.form.checkValidity();

  if(valid){
    var fullname = $('#fullname').val();
   var email     = $('#email').val();
   var phone     = $('#phone').val();
   var Address   = $('#Address').val();
   var password  = $('#password').val();

  e.preventDefault(); 
    $.ajax({
      type: 'POST',
      url: 'dashboard.php',
      data: {fullname: fullname, email: email, phone: phone, Address:Address, password: password},

              success: function(data){
                swal.fire({
                         'title': 'successfully',
                         'text': 'Sucessfully Registered',
                          'type': 'success'
                          }) 

              },
              error: function(data){
                swal.fire({
                         'title': 'Error',
                         'text': 'There was n error while saving data',
                          'type': 'error'
                          })
                
              }


    });
  
  }else{
 
  }
 
});
</script>


</body>
 
</html>