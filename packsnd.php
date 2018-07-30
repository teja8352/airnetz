<?php
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Thank you for contact us. As early as possible  we will contact you '
	);

    $name = @trim(stripslashes($_POST['name'])); 
    $email = @trim(stripslashes($_POST['email'])); 
    $pack = @trim(stripslashes($_POST['pack'])); 
	$subject = "Pack Request from user";

    $email_from = $email;
    $email_to = 'tejastar123@mail.com';//replace with your email

    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Pack: ' . $pack . "\n\n" ;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    echo json_encode($status);
    die;