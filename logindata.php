<?php

$con =mysqli_connect('localhost','root','');
// if($con){
//     echo "good";

// }else{
//     echo "bad";

// }
$db = mysqli_select_db($con, 'verificationcode');

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password =$_POST['password'];
    $fullname =$_POST['fullname'];
    $sql = "select *from admin where email='$email' and password='$password'" ;

    $query =mysqli_query($con,$sql);
    $row =mysqli_num_rows($query);
        if($row == 1){
            $_SESSION['email'] =$email;
            $_SESSION['fullname'] =$fullname;
            
            header('location:index.php');
        }else{
            echo 'Username and Password worng?';
            header('location:dashboard.php');
        
    }

}


// <div class="container center-div shadow"></div>
// <div class="Heading text-center text-uppercase text-white mb-5"></div>

?>