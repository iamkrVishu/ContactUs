<?php
if (isset($_POST["submit"])) {
  $username = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $message = $_POST["message"];

  $to = $email;
  $subject = "New Contact Form Submission";
  $body = "Name: {$username}\nEmail: {$email}\nPhone: {$phone}\nMessage: {$message}";

  // Always set content-type when sending HTML email
  $headers = "PHP version: 8.2.4" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  // More headers
  $headers .= "From: rk761737@gmail.com";

  $mail = mail($to, $subject, $body, $headers);

  if ($mail) {
    echo "<script>alert('Mail sent.');</script>";
  } else {
    echo "<script>alert('Mail not sent.');</script>";
  }
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="index.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container">
      <span class="big-circle"></span>
      <img src="img/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
          We value your feedback. Reach out to us and share your thoughts &
            Have a any question or need assistance? Contact us now!
          </p>

          <div class="info">
            <div class="information">
              <img src="img/location.png" class="icon" alt="" />
              <p>Model Town Phase I, Block E, Model Town Phase I, Model Town, Delhi, 110033</p>
            </div>
            <div class="information">
              <img src="img/email.png" class="icon" alt="" />
              <p>rk761737@gmail.com</p>
            </div>
            <div class="information">
              <img src="img/phone.png" class="icon" alt="" />
              <p>888-789-0001</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="" method="post" autocomplete="off">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" name="submit" value="Send" class="btn" />
          </form>
        </div>
      </div>
    </div>

    <script src="index.js"></script>
  </body>
</html>
