<?php
    require_once "db_config.php";

    $fname = $_POST['fullname'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $cit_id = $_POST['cit_id'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

       
    $query = "select * from users where username = '$username' or cit_id = '$cit_id'";
    $res = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($res);
    if($row['username'] == $username){
        // $name_error = "Sorry... username already taken"; 	
        header("location:register.php");
        
    }elseif($row['cit_id'] == $cit_id){
        header("location:register.php");
        
    }
    else{
        $query = "insert into users(fullName,address,phone,cit_id,email,username,password) values('$fname','$address','$phone','$cit_id','$email','$username','$password')";
    mysqli_query($conn, $query);

    header("location:login.php");
    }
   



