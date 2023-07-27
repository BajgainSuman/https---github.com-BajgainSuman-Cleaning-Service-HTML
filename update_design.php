<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Smart cleaners</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <body>
    <header>
        <div class="container">
            <div class="logo">
                <a href="#home"><img src="images/smart.png" alt="logo" width="150" height="90"></a>
            </div>
            <i class="fas fa-bars menu-bar"></i>
            <nav>
                <ul>
                    <li><a href="index.html" >home</a></li>
                    <li><a href="service.html">services</a></li>
                    <li><a href="about.html">about</a></li>
                    <li><a href="booking.html">booking</a></li>
                    <li><a href="contact.html" class="active">contact us</a></li>
                    <li><a href="login.html">login</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="contact" id="contact">
       
            <div class="container">
                <form action="connect.php" method="post">
                    <h1>Contact Us </h1>
                    <input type="text" id="firstName" name="firstname" placeholder="First Name" required>
                    <input type="text" id="lastName" name="lastname" placeholder="Last Name" required>
                    <input type="email" id="email" name="email" placeholder="Email" required>
                    <input type="text" id="mobile" name="mobile" placeholder="Mobile" required>
                    <h4>Type Your Message Here...</h4>
                    <textarea name="message" required></textarea>
                    <input type="submit" value="Send" id="button">
                </form>
                </div>
                
            </div>
    </section>