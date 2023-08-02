<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  $subject = $_POST["subject"];
  
  $to = "cnakyanzi2019@gmail.com";
  $body = "Name: $name\nEmail: $email\nMessage: $message";
  
  // Send the email
  mail($to, $subject, $body);
  
  // Redirect to a thank you page
  header("Location: thank_you.html");
  exit();
}
?>
