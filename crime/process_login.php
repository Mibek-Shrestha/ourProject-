<?php
    session_start();
    require_once "db_config.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST['username'];
        $password = $_POST['password'];
            
        $query = "select * from users where username = '$username' and password = '$password'";

        $res = mysqli_query($conn,$query);


        $row = mysqli_fetch_array($res);
        if($row["usertype"] == "user")
            {
                $_SESSION["username"] = $username;
                header("location:welcome.php");
            }
            elseif($row["usertype"]=="admin")
            {
                $_SESSION["username"] = $username;
                header("location:adminpage.php");
            }
            else
            {
                echo"username or password incorrect";
            }


}