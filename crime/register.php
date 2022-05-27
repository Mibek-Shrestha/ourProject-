<?php
    include_once "header.php";
    
    ?>



<!doctype html>
<html>
    <head>
<meta charset="utf-8">
    <title>transparent login form</title>
    <link rel="stylesheet" href="style/register.css">
   
    </head>
        <body>
            <form action="process_register.php" method="post" onsubmit="return validateForm()">

            <div class="login-box">
                    <h1>Register</h1>
                    <div class="textbox">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" placeholder="Fullname" name="fullname" id="fname" autocomplete="off" required>
                    </div>
                    <div class="textbox">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                        <input type="text" placeholder="Phone" name="phone" id="phone" autocomplete="off" required>
                    </div>
                    <div class="textbox">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <input type="text" placeholder="Home Address" name="address" id="address" autocomplete="off" required>
                    </div>
                    <div class="textbox">
                         <i class="fa fa-id-card-o" aria-hidden="true"></i>
                        <input type="text" placeholder="Citizenship Number" name="cit_id" id="citizen" autocomplete="off" required>
                    </div>
                    <div class="textbox">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <input type="email" placeholder="Email" name="email" id="email" autocomplete="off" required>
                    </div>
                    <div class="textbox">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" placeholder="Username" name="username" id="username" autocomplete="off" required>
                        
                    </div>
                    <div class="textbox">
                        <i class="fa fa-key" aria-hidden="true"></i>
                        <input type="password" placeholder="Password" name="password" id="password" autocomplete="off" required>
                    </div>
                    <input class="btn" type="submit" name="" value="Sign up">
                      </div>
            </form>
        </body>
</html>