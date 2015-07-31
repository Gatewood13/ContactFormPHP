<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$scamField = $_POST['typeHere'];
	$from = 'From: Your Website Name' ; 
	// set this to your email address
	$to = ''; 
	$subject = 'Message from your Contact Form';

	$body = "From: $name\n E-Mail: $email\n Message:\n $message";


	
	if ($_POST['submit']) {
		if($scamField == ''){
	        if (mail ($to, $subject, $body, $from)) { 
		        echo '<script type="text/javascript">
            			alert("Thank you for the message!"); 
            			window.location.href = "index.php";
            		  </script>';
		    } else { 
		        echo '<script type="text/javascript">
            			alert("Something went wrong, try again."); 
            			window.location.href = "index.php";
            		  </script>'; 
		    }
		}else{
			echo '<script type="text/javascript">
            		alert("Message Sent."); 
            		window.location.href = "index.php";
            	  </script>';
		}
	} 

?>