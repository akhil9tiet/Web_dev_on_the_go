<?php
$name = $email = $phone = $work_phone = $address = $city = $state = $zipcode = $message = $success = $message_body = "";
$name_error = $email_error = $phone_error = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $phone = test_input($_POST["phone"]);
  $work_phone = test_input($_POST["work_phone"]);
  $address= test_input($_POST["address"]);
  $city = test_input($_POST["city"]);
  $state = test_input($_POST["state"]);
  $zipcode = test_input($_POST["zipcode"]);
  $message = test_input($_POST["message"]);

  foreach ($_POST as $key => $value){
      $message_body .=  "$key: $value\n";
  }
  //
   $to = 'umincentiveawards@umd.edu';
   $subject = 'Contact Form Submit';

  mail($to, $subject, $message_body);
  if (mail($to, $subject, $message_body)){
      $success = "Message sent, thank you for contacting us!";
      $name = $email = $phone = $message = '';
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
