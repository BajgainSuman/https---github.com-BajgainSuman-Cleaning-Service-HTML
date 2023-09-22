<?php
if(isset($_GET['error'])){
    if($_GET['error'] == 1){
        echo "<script>alert('Empty Field');</script>";
    }
    else{
        echo "<script>alert('Your Message has been sent. The Service Provider contact you later via phone or email.');</script>";
    }
}
require "../connection/connection.php";
session_start();
if(!empty($_SESSION['adminloginid'])){

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Smart Cleaners</title>
</head>
<body>
    <?php
    include'link.php';
    ?>
  <body>
    <header>
        <div class="container">
            <div class="logo">
                <a href="#home"><img src="images/Logo.png" alt="logo" width="150" height="90"></a>
            </div>
            <i class="fas fa-bars menu-bar"></i>
            <nav>
                <ul>
                    <li><a href="index.php" >home</a></li>
                    <li><a href="service.php">services</a></li>
                    <li><a href="about.php">about</a></li>
                    <li><a href="booking.php">booking</a></li>
                    <li><a href="contact.php" class="active">contact us</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="contact" id="contact">
       
            <div class="container">
                <form action="../authen/backendresponse.php" onsubmit="return validate()" method="POST">
                <div id="error_message"></div>
                    <h1>Contact Us </h1>
                    
                    <input type="text" id="firstname" name="firstname" placeholder="First Name">
                    <input type="text" id="lastname" name="lastname" placeholder="Last Name">
                    <input type="email" id="email" name="email" placeholder="example@gmail.com">
                    <input type="text" id="mobile" name="mobile" placeholder="Mobile">
                    <h4>Type Your Message Here...</h4>
                    <textarea name="message" id="message" required></textarea>
                    <input type="submit" onclick="validate()" value="Send" id="button" name="send">
                </form>
                </div>
                
            </div>
    </section>
    <section class="contact-map" id="contact-map">
        <div class="container">
            <div class="box">
                <h2>We are Here</h2><br>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.657452400468!2d85.27409390975063!3d27.696980225851703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb193390243733%3A0x9e5e2c47e5ba79d2!2sGaurav%20Event!5e0!3m2!1sen!2snp!4v1689059619558!5m2!1sen!2snp" width="200%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
         
        </div>
       </section>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Quick links</h4>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About us</a></li>
                        <li><a href="service.php">Services</a></li>
                        <li><a href="contact.php">Contact us</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Contact</h4>
                    <ul>
                        <li><a href="#">phone: 9898088123</a></li>
                        <li><a href="#">Email: csmscleaners@gmail.com</a></li>
                        <li><a href="#">Adress: Nagarjuna-10,KTM</a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <br/><br/>
     </footer>
<?php
}
else{
    header("location:../admin/contact.php");
}
?>
<script src="main.js"></script>
</body>
</html>


