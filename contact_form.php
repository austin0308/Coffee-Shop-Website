<!DOCTYPE html>
<!--

  Created By Austin Le, 12/3/2019.
  Please give credit if any portion was used in your project.
  Email: le.austin2000@gmail.com.

  Thank you!

-->
<?php
		$firstname = $_REQUEST['first'];
		$email = $_REQUEST['email'];
		$toEmail = $email;		//will send the email to the email address entered on the form

		$subject = "Savanna's Coffee House Contact Form";	//This is the message that will be sent back to the person who sent you a message from your contact form.

		//$fromEmail = "contact@carinmurphy.com";		//Change the email address within the quotes to be YOUR host server email address.
		$fromEmail = "contact@ntka.net";		//Change the email address within the quotes to be YOUR host server email address.
	//   DO NOT CHANGE THE FOLLOWING LINES  //

		$emailBody = "Hello $firstname, \n\nThank you so much for reaching out to us. We will get back to you as soon as possible, via email (:\n\nBest,\nSavanna's Coffee House";			//stores the content of the email
		$contact = "Person sending a message: \n\n";
		foreach($_POST as $key => $value)		//Reads through all the name-value pairs. 	$key: field name   $value: value from the form
		{
			$contact.= $key."=".$value."\n";	//Adds the name value pairs to the body of the email, each one on their own line
		}

		$headers = "From: $fromEmail" . "\r\n";				//Creates the From header with the appropriate address

		if (mail($toEmail,$subject,$emailBody,$headers)) 	//puts pieces together and sends the email to your hosting account's smtp (email) server
		{
				if(mail($fromEmail, $subject, $contact, $headers))
				{
					echo " ";
				}
		}
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
	<link rel="stylesheet" href="savannas.css" type="text/css">
	<link rel="shortcut icon" type="image/x-icon" href="images/coffee-bean.ico">

	<title>Savanna's Contact</title>
</head>

<header>
	<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
		<a class="navbar-brand" href="index.html"><img src="images/coffee-cup.svg" width="30" height="30" class="d-inline-block align-top"> Savanna's Coffee House</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse"
		data-target="#main-navigation" aria-controls="navbarSupportedContent"
		aria-expanded="false" aria-label="Toggle navigation">
		 <span class="navbar-toggler-icon"></span>
		 </button>
		 <div class="collapse navbar-collapse" id="main-navigation">
			 <ul class="navbar-nav">
				<li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
				<li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
				<li class="nav-item"><a class="nav-link" href="menu.html">Menu</a></li>
				<li class="nav-item"><a class="nav-link" href="events.html">Events</a></li>
				<li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
			</ul>
		 </div>
 </nav>
</header>

<body>

	<section class="php">
		 <h1>Message Received!</h1>
	 </section>

	 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
</body>
</html>
