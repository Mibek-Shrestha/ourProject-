<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/footer.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style/faq.css">
</head>
<body>
    <?php
    include "header.php";
    ?>
    
    <div class="hero">
        <div class="backgroun-image"></div>
    
        <h1>Have a complaint?</h1>
            <h2>Register Below    <i class="fas fa-hand-point-down"></i></h2>
        <a href="register.php" class="btn">Sign up</a>
    </div>
       
<br>
    
   
<div class="container">
    
    <h2>Frequently Asked Questions</h2>
    
    <div class="accordion">
        <div class="accordion-item">
        <a>What is Online Crime Reporting</a>
        <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
        </div>
        </div>
        <div class="accordion-item">
        <a>How does this system works?</a>
        <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
        </div>
        </div>
        <div class="accordion-item">
        <a>Is the detail of complainer safe?</a>
        <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
        </div>
        </div>
        <div class="accordion-item">
        <a>How can I report a complain?</a>
        <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
        </div>
        </div>
    </div>
    
    </div>
 <!-- footer !!! -->
    <footer> 
        <ul>
           <li><a href="#"><i class="fab fa-facebook"></i></a></li> 
           <li><a href="#"><i class="fab fa-twitter"></i></a></li>
           <li><a href="#"><i class="fab fa-instagram"></i></a></li>
        </ul>
        <p>&copy; <script> document.write(new Date().getFullYear());</script>
        -OnlineCrimeSystem.All rights reserved
        <br>
        <i class="fas fa-phone">+977-1-4411210</i>
        <br>
        <a href="#"><i class="fas fa-envelope-square"> info@crimereport.com</i></a>
        
       
        </p>
        <!-- <p>&ldquo; jurum garnunu aaprad hooa &rdquo;</p> -->
    </footer> 
    <script>
        const body = document.body;
        let lastScroll = 0;

        window.addEventListener("scroll", () => {
            const currentScroll = window.pageYOffset;
            if (currentScroll <= 0) {
                body.classList.remove("scroll-up");
                return;
            }

            if (currentScroll > lastScroll && !body.classList.contains("scroll-down")) {
                body.classList.remove("scroll-up");
                body.classList.add("scroll-down");
            } else if (
                currentScroll < lastScroll &&
                body.classList.contains("scroll-down")
            ) {
                body.classList.remove("scroll-down");
                body.classList.add("scroll-up");
            }
            lastScroll = currentScroll;
        });

</script>
<script  src="js/faq.js"></script>
</body>
</html>