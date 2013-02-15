<?php
    include('../settings.php');
    if( !empty($_POST) ){  
        // form validation vars  
		$formok = true;  
		$errors = array();  
		
		// submission data  
		$ipaddress = $_SERVER['REMOTE_ADDR'];  
		$date = date('d/m/Y');  
		$time = date('H:i:s');
		
		// form data  
		$name = $_POST['name'];  
		$email = $_POST['email'];  
		$subject = $_POST['subject'];  
		$message = $_POST['message'];    
		
		// validate name is not empty
		if( empty($name) ){
			$formok = false;
			$errors[] = "You have not entered a name";
		}
		
		// validate email address is not empty
		if( empty($email) ){
			$formok = false;
			$errors[] = "You have not entered an email address";
		}
		
		// validate email address is valid
		if( !filter_var($email, FILTER_VALIDATE_EMAIL) ){
			$formok = false;
			$errors[] = "You have not entered a valid email address";
		}
		
		// validate message is not empty  
		if(empty($message)){  
			$formok = false;  
			$errors[] = "You have not entered a message";  
		}  
		// validate message is greater than 20 charcters  
		elseif(strlen($message) < 20){  
			$formok = false;  
			$errors[] = "Your message must be greater than 20 characters";  
		}  
		
		// send email if valid data
		if( $formok ){
			$headers = "From: Contact Form"."\r\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1"."\r\n";
			
			$emailbody = "<p>You have recieved a new message from the Contact form on your website</p>
							<p><strong>Name: </strong> {$name} </p>
							<p><strong>Email Address: </strong> {$email} </p> 
							<p><strong>Subject: </strong> {$subject} </p> 
							<p><strong>Message: </strong> {$message} </p> 
							<p>This message was sent from the IP Address: {$ipaddress} on {$date} at {$time}</p>";
			
			mail("devlin.junker@gmail.com","New Contact Form Message",$emailbody,$headers);  
		}
		
		// return data for form  
		$returndata = array(  
			'posted_data' => array(  
				'name' => $name,  
				'email' => $email,    
				'subject' => $subject,  
				'message' => $message  
			),  
			'form_ok' => $formok,  
			'errors' => $errors  
		); 
		
		if(empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest'){  
			// set session variables  
			session_start();  
			$_SESSION['cf_returndata'] = $returndata;  
			
            // redirect back to form 
            echo "<script> window.location.replace('$_SERVER[HTTP_REFERER]')</script>"; 
			//header('location: ' . $_SERVER['HTTP_REFERER']);  
		}  
		
    }else{
            echo "<script> window.location.replace('$sitepath/index.php');</script>"; 
    }
?>
