<!DOCTYPE html>
<html>

<head>
<title>HackFSU</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
<?php
if (isset($_POST['send-message'])) {
  $to = 'sponsors@hackfsu.com';
  $subject = 'Mail from website';
  $message = 'Name: ' . $_POST['name'] . "\r\n\r\n";
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
  if ($email) {
      $message .= 'Email: ' . $_POST['email'];
  } else {
    $message .= 'Invalid Email';
  }
  $headers = "From: info@hackfsu.com\r\n";
  $headers .= 'Content-Type: text/plain; charset=utf-8';
  $success = mail($to, $subject, $message, $headers, '‑finfo@hackfsu.com');
  if (isset($success) && $success) { ?>
  <h1>Thank You</h1>
  <p>Your message has been sent.</p>
  <?php } else { ?>
  <h1>Oops!</h1>
  <p>Sorry, there was a problem sending your message.</p>
  <?php } }?>
</body>

</html>
