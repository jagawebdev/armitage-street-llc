<?php
$send_to = 'jagawebdev@gmail.com';

$errors         = array();  	// array to hold validation errors 
$data 			= array(); 		// array to pass back data

// validate the variables ======================================================
	// if any of these variables don't exist, add an error to our $errors array

	if (empty($_POST['Name']))
		$errors['name'] = 'Your Name is required.';
	if (empty($_POST['Email']))
		$errors['email'] = 'Your Email is required.';
   	if (empty($_POST['Phone']))
		$errors['phone'] = 'Your Phone Number is required.';

// return a response ===========================================================

	// if there are any errors in our errors array, return a success boolean of false
	if ( ! empty($errors)) {

		// if there are items in our errors array, return those errors
		$data['success'] = false;
		$data['errors']  = $errors;
	} else {

		// if there are no errors process our form, then return a message

    	//If there is no errors, send the email to agent and client
    	if( empty($errors) ) { 
            
            $title = htmlspecialchars_decode('{title}',ENT_QUOTES);    
			$subject = $title . ' Contact Form (Bride: {bride_first_name} - Groom: {groom_first_name})';
			$headers = 'From: ' . $send_to . "\r\n" .
			    'Reply-To: ' . $send_to . "\r\n" .
			    'X-Mailer: PHP/' . phpversion();

        	$message = ' Subject: ' . $_POST['inputSubject'] . '
                  
            Name: ' . $_POST['Name'] . '
            Email: ' . $_POST['Email'] . '
            Phone: ' . $_POST['Phone'] . '            
            Message: ' . $_POST['inputMessage'];
 
        	$headers = 'From: Contact Form' . '<' . $send_to . '>' . "\r\n" . 'Reply-To: ' . $_POST['inputEmail'];
        	mail($send_to, $subject, $message, $headers);            
            
            }

		// show a message of success and provide a true success variable
		$data['success'] = true;
		$data['message'] = 'Thank you!';
        
        }

	// return all our data to an AJAX call
	echo json_encode($data);