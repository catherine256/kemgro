<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $company = $_POST['company'];
    $location = $_POST['location'];
    $service = $_POST['service'];
    $details = $_POST['details'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Here you can process the form data, such as sending an email to Kemgro with the submitted details.
    // Example:
    $to = 'mwessygodleeh@gmail.com'; // Change this to your email address
    $subject = 'Quote Request from ' . $name;
    $message = "Company: $company\nLocation: $location\nService Interested In: $service\nAdditional Details: $details\nName: $name\nEmail: $email\nPhone: $phone";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "success";
        header("Location: thanks.html");
        exit();
    } else {
        echo "error";
    }
  exit();
}
?>
