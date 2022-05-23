<?php
    include_once "header.php";
    
    ?>

<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./style/login.css">
    </head>
        <body>
            <form action="process_login.php" method="post">
            <div class="login-box">
                    <h1>Login</h1>
                    <div class="textbox">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" placeholder="Username/Email" name="username" value="" autocomplete="off" required>
                    </div>
                    <div class="textbox">
                        <i class="fa fa-key" aria-hidden="true"></i>

                        <input type="password" placeholder="Password" name="password" value="" autocomplete="off" required>
                    </div>
                    <input class="btn" type="submit" name="" value="Sign in">
                      </div>
            </form>

            
        <?php
          
            if(isset($_POST['Error'])){
                echo $_POST['Error'];
            }
         ?>
        </body>
        
      
</html>