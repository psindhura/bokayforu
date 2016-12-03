<!DOCTYPE html>
<html>
<head>
	<title>BokayForU</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div id="wrapper">
		<div id="callout">
			<p>Call us at <b>555-555-5555</b></p>
		</div>
		<header>
			<a href="#"><img src="logo.png" width=70px height="70px" alt="bokayforu"></a>
			<h2>BokayForU</h2>
		</header>
		<nav>
			<ul>
				<li><a href="home.html" class="active">Home</a></li>
				<li><a href="service.html">Services</a></li>
				<li><a href="gallery.html">Portfolio</a></li>
				<li><a href="pricing.html">Pricing</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
			<div class="clearfix"></div>
		</nav>
		<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "psindhura92@gmail.com";
 
    $email_subject = "Response e-mail";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['first_name']) ||
 
        !isset($_POST['last_name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['telephone']) ||
 
        !isset($_POST['comments'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $first_name = $_POST['first_name']; // required
 
    $last_name = $_POST['last_name']; // required
 
    $email_from = $_POST['email']; // required
 
    $telephone = $_POST['telephone']; // not required
 
    $comments = $_POST['comments']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  }
 
  if(!preg_match($string_exp,$last_name)) {
 
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
 
  }
 
  if(strlen($comments) < 2) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
 
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
 
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
<p>Thank you for your email. We will be on top of it and get back to you at the earliest. 
Have a nice day!!</p>
<footer>
			<div class="section">
				<p>BokayForU</p>
				<p><b>555-555-5555</b></br>
				4 Toorak Gardens<br>
				Adelaide, Australia 5065<br>
				sindhu@bokayforu.com</p>
			</div>
			<div class="section">
				<p>Connect With Us</p>
				<ul>
					<li><a href="#"><img src="http://www.w3newbie.com/wp-content/uploads/facebook1.png"></a></li>
					<li><a href="#"><img src="http://www.w3newbie.com/wp-content/uploads/googleplus.png"></a></li>
					<li><a href="#"><img src="http://www.w3newbie.com/wp-content/uploads/twitter1.png"></a></li>
					<li><a href="#"><img src="http://www.w3newbie.com/wp-content/uploads/youtube1.png"></a></li>
				</ul>
		    </div>
		    <div class="section">
		    	<img src="http://www.w3newbie.com/wp-content/uploads/plant.png"/>
		    </div>
		</footer>
	</div>
	<p id="copyright">&copy; copyright - BokayForU , 2016</p>
</body>
</html>