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
				<li><a href="home.html">Home</a></li>
				<li><a href="service.html">Services</a></li>
				<li><a href="gallery.html">Portfolio</a></li>
				<li><a href="pricing.html">Pricing</a></li>
				<li ><a href="contact.php" class="active">Contact</a></li>
			</ul>
			<div class="clearfix"></div>
		</nav>

		<form method="POST" action="contact.php">
		<h2 style="text-align: center, padding: 20px;"> We'd be happy to hear from you</h2>
				<label>Name :</label>
				<input class="input" type="text" name="name" value="" required>
				<span class="error"><?php echo $nameError;?></span>
				<label>Email :</label>
				<input class="input" type="text" name="email" value="" required>
				<span class="error"><?php echo $emailError;?></span>
				<label>Purpose :</label>
				<input class="input" type="text" name="purpose" value="">
				<span class="error"><?php echo $purposeError;?></span>
				<label>Message :</label>
				<textarea name="message" val="" required></textarea>
				<span class="error"><?php echo $messageError;?></span>
				<input class="submit" type="submit" name="submit" value="Submit">
				<span class="success"><?php echo $successMessage;?></span>
		</form>
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

						
