<?php
 session_start();
  //connect to Database
  $db =mysqli_connect('localhost','root','','verificationcode');
  if(isset($_POST['save'])){
    $fullname =$_POST['fullname'];
    $email= $_POST['email'];
    $phone =$_POST['phone'];
    $Address =$_POST['Address'];
    $password =$_POST['password'];


      //create user
      $sql = mysqli_query($db,"INSERT INTO  admin values(0,'$fullname','$email','$phone', '$Address','$password',NOW())") or die($sql->error);
      $_SESSION['message']="Successfully Registered";
      $_SESSION['fullname']=$fullname;
      header ("location: Dashboard.php");//redirect to home page


  }else {
          //fail
          $_SESSION['message']="Fail please try again";
  }
    ?>