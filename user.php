<?php

if(isset($_POST['submit'])){
    $firstname=$_POST['firstname'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="insert into `register` (firstname,email,mobile,password) values('$firstname','$email','$mobile','$password')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "Data inserted Successfully";
        // header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}

?>