<?php
    require_once "db_config.php";

    $fname = $_POST['fullname'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $cit_id = $_POST['cit_id'];
    $email = $_POST['email'];
    $complaint = $_POST['complaint'];
    $description = $_POST['description'];

    $query = "insert into complaints(fullName,address,phone,cit_id,email,complaint,description) values('$fname','$address','$phone','$cit_id','$email','$complaint','$description')";

    mysqli_query($conn, $query);

    header("location:detail.php");