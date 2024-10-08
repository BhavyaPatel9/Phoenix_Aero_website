<?php

if(isset($_POST['btn-send']))
{
    $name = $_POST['UName']; // Changed 'name' to 'UName' to match form input name
    $email = $_POST['Email'];
    $subject = $_POST['Subject'];
    $msg = $_POST['msg']; // Added this line to get the message from the form

    if(empty($name) || empty($email) || empty($subject) || empty($msg))
    {
        header("Location: index.php?error");
    }
    else
    {
        $to = 'bhavyaspatel04@gmail.com';
        $headers = "From: ".$email;

        if(mail($to, $subject, $msg, $headers))
        {
            header("Location: index.php?success");
        }
        else
        {
            header("Location: index.php?error");
        }
    }
}
else
{
    header("Location: index.php");
}
?>
