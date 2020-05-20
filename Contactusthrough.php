<?php
// variable setting
$name = $_REQUEST['name'];
$email = $_REQUEST['Email'];
$message = $_REQUEST['Message'];

//check input fields
if (empty($name) & empty($email) & empty($message))
{
    echo "Please Fill All The Fields";
}
else
{
    mail("harshch410@gmail.com", "Harsh Site", $message , "From: $name <$email>");
    echo "<script type='text/javascript'>alert('Your Message Sent Successfully')</script>";