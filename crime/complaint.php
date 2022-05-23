<?php
    include_once "head.php";
        session_start();
        if(!isset($_SESSION["username"])){
            header("location:login.php");
        }
    ?>


<!doctype html>
<html>
    <head>
<meta charset="utf-8">
    <title>transparent login form</title>
    <link rel="stylesheet" href="style/register.css">
    
    
    
    </head>
        <body>
            <form action="process_complaint.php" method="post" onsubmit="return validateForm()">

            <div class="login-box">
                    <h1>Complaint</h1>
                    <div class="textbox">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" placeholder="Fullname" name="fullname" id="fname">
                    </div>
                    <div class="textbox">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                        <input type="text" placeholder="Phone" name="phone" id="phone">
                    </div>
                    <div class="textbox">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <input type="text" placeholder="Home Address" name="address" id="address">
                    </div>
                    <div class="textbox">
                         <i class="fa fa-id-card-o" aria-hidden="true"></i>
                        <input type="text" placeholder="Citizenship Number" name="cit_id" id="citizen">
                    </div>
                    <div class="textbox">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <input type="email" placeholder="Email" name="email" id="email">
                    </div>
                    <div class="textbox">
                        <input type="text" placeholder="ReasonforComplaint" name="complaint" id="">
                    </div>
                    <div class="textbox">
                        <textarea placeholder="Please provide any details " name="description" id="" cols="45" rows="6"></textarea>
                    </div>
                  
                    
                    <input class="btn" type="submit" name="" value="Submit">
                      </div>
            </form>
        </body>
</html>