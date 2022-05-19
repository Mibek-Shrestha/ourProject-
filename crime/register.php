<?php
    include_once "header.php";
    
    ?>

<?php
    include_once('header.php');
?>

<!doctype html>
<html>
    <head>
<meta charset="utf-8">
    <title>transparent login form</title>
    <link rel="stylesheet" href="style/register.css">
    
    
    <script>
        function validateForm(){
            var fname = document.getElementById('fname').value;
            var phone = document.getElementById('email').value;
            var address = document.getElementById('address').value;
            var email = document.getElementById('email').value;
            var address = document.getElementById('address').value;
            var citizen = document.getElementById('citizen').value;
            var password = document.getElementById('password').value;
            if(fname == null)
            {
                alert("Please Enter Full Name")
                return false; 
            }
            return true;
            if(address == null){
                alert("please fill the address");
                return false;
            }
            return true;
            
           
        }
    </script>
    </head>
        <body>
            <form action="process_register.php" method="post" onsubmit="return validateForm()">

            <div class="login-box">
                    <h1>Register</h1>
                    <div class="textbox">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" placeholder="Fullname" name="fullname" id="fname">
                    </div>
                    <div class="textbox">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
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
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" placeholder="Username" name="username" id="username">
                    </div>
                    <div class="textbox">
                        <i class="fa fa-key" aria-hidden="true"></i>
                        <input type="password" placeholder="Password" name="password" id="password">
                    </div>
                    <input class="btn" type="submit" name="" value="Sign up">
                      </div>
            </form>
        </body>
</html>