<?php 
    function sanitize_my_email($field) {
        $field = filter_var($field, FILTER_SANITIZE_EMAIL);
        if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $to_email = 'sagarpanwar0123@gmail.com';
    $subject = 'Student Query';
    $message = 'Name: ' . $name . '<br />' . $phone . '<br />' . 'Message: ' . $message;
    $headers = 'From: zerontechnologies51@gmail.com';
    
    //check if the email address is invalid $secure_check
    $secure_check = sanitize_my_email($to_email);
    if ($secure_check == false) {
        echo "Invalid Input";
    } else { 
        //send email 
        mail($to_email, $subject, $message, $headers);
        // echo "This email is sent using PHP Mail";
        header('location: ../thankyou.html');
    }
?>