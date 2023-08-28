<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sent Email</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["fullname"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "andrilesmana2293@email.com";
    $subject = "Pesan dari Formulir Website";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
}
?>


<form action="https://formsubmit.co/andrilesmana2293@gmail.com" class="form" data-form method="POST">

<div class="input-wrapper">
  <input type="text" name="fullname" class="form-input" placeholder="Full name" required data-form-input>

  <input type="email" name="email" class="form-input" placeholder="Email address" required data-form-input>
</div>

<textarea name="message" class="form-input" placeholder="Your Message" required data-form-input></textarea>

<button class="form-btn" type="submit" disabled data-form-btn>
  <ion-icon name="paper-plane"></ion-icon>
  <span>Send Message</span>
</button>

</form> 



    
</body>
</html>


<!-- belum terpakai tahap percobaan -->
