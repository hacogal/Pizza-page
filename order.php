<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Order Pizza | The Cheesy Pizza</title>
        <img src="img/TCP.jpeg" height="300" width="300" alt="logo TCP" />
		<meta name="author" content="The name of the document’s author to go here" />
		<meta name="description" content="A concise and accurate summary of the document content is to appear here">
		<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="styles.css">
	</head>
	<body>
		<!-- Page-level header -->
		<header>
			<h1>The Cheesy Pizza</h1>
			<h2>The best flavor, fresh and delicious</h2>
		</header>
		<!-- Page-level main content -->
		<main>
			<section>
				<h3>Thank you for ordering your pizza</h3>
<?php
// Capture the value of the emailAddress INPUT from the index.php page by defining a PHP variable called '$emailAddress' and setting the value to the email address as entered by the user in the FORM on index.php
	$NumberofPizzas = $_GET['NumberofPizzas'];
	$Size = $_GET['Size'];
	$Shape = $_GET['Shape'];
	$Toppin1 = $_GET['Toppin1'];
	$Toppin2 = $_GET['Toppin2'];
	$Crust = $_GET['Crust'];
	$Delivery = $_GET['Delivery'];
    
    $name = $_GET['name'];
	$email = $_GET['email'];
	$phone = $_GET['phone'];
	$address = $_GET['address'];
	$msg = $_GET['msg'];
// Use the PHP function, echo() to create an HTML paragraph element that confirms the user's email address -->
	echo('<p>	Hi, '.$name.' <br><br>
				Your order is, <br>
				'.$NumberofPizzas.' Pizza <br>
				'.$Size.' Size <br> 
				'.$Shape.' Shape <br> 
				'.$Toppin1.' Toppin1 <br>
				'.$Toppin2.' Toppin2 <br>
				'.$Crust.' Crust <br>
				Aditional info '.$msg.' <br>
				Delyvery option: '.$Delivery.'<br>
				And has been added.</p>');
	echo('<p>Once the pizza is ready, we will notify you at '.$phone.' phone number and '.$email.' email. </p>');
	echo('<p>If your delivery option is home delivery, it will be delivered to '.$address.' address. </p>');
?>
			</section>
		</main>
		<!-- Page-level footer -->
		<footer>
			<p><small>©The Cheesy Pizza Inc. All rights reserved</small></p>
		</footer>
	</body>
</html>