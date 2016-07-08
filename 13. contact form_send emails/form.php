<?php
if(isset($_POST['contact_name']) && isset($_POST['contact_email']) && isset($_POST['contact_text'])){
    $contact_name= $_POST['contact_name'];
    $contact_email= $_POST['contact_email'];
    $contact_text= $_POST['contact_text'];
    
    if(!empty($contact_name) && !empty($contact_email) && !empty($contact_text)){
        if(strlen($contact_name<25)){
            $to= 'gupta_akhil@outlook.com';
            $subject='Contact form submitted';
            $body= $contact_name."\n". $contact_text;
            $headers= 'From:'.$contact_email;
            if (@main($to, $subject, $body, $headers)){
                echo 'Thanks for contacting';
            }else{
                echo 'All fields are required';
            } 
        }
    } 
}

?>



<!DOCTYPE html>
<html>
<head>
    <title> FORM to send e-mail</title>
</head>
    
<body>
    <form action = "form.php" method = "POST">
        Name:<br>           <input type="text" name= "contact_name" maxlength="25"><br><br>
        Email address:<br>  <input type="text" name="contact_email"><br><br>
        Message:<br>        <textarea name="contact_text" rows="30" cols="60"></textarea><br><br>
        <input type="submit" value="Send">
    </form>
</body>
</html>