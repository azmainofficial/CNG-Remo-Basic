<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="resources/css/styles.css">
		<link rel="icon" href = "resources/images/620.png" type="image/png">
		
		<title>Contact</title>
	</head>
	<body>
		<header class="header">
		<nav-bar>
				<nav-item><a href="index.php">Home</a></nav-item> 
				<nav-item><a href="about.php">About</a></nav-item>
				<nav-item><a href="contact.php">Contact</a></nav-item>
				<nav-item><a href="faq.php">FAQ's</a></nav-item>
				<nav-item style="float:right"><button onclick="document.getElementById('modal-register').style.display='inline-block'" style="margin: 5px 5px 5px 0px;background-color: #F6EDD3;border-radius: 12px;color: #141414;">Sign Up</button></nav-item>
				<nav-item style="float:right"><button onclick="document.getElementById('modal-login').style.display='inline-block'" style= "margin: 5px 5px 5px 0px;background-color: #98FF00;border-radius: 12px;color: #141414;'">Sign In</button></nav-item>
			</nav-bar>
			
			
			<iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d3650.0987076668885!2d90.4233518145445!3d23.815088784557513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3755c64c103a8093%3A0xd660a4f50365294a!2sNorth+South+University%2C+Plot+%23+15%2C+Block+%23+B%2C+1229%2C+Dhaka!3m2!1d23.815088799999998!2d90.4255405!5e0!3m2!1sen!2sbd!4v1480442326902" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			
			<div id="modal-login" class="modal">
				<form id="login-form" name="login-form" class="modal-content animate" action="login.php" method="post">
					<div class="image-container">
						<img src="resources/images/user.png" width = "256" height = "256" alt="user-icon">
					</div>
					
					<div style="padding: 16px">
						<label>Email</label>
						<input type="text" placeholder="Enter your email" name="email" required>
						<label>Password</label>
						<input type="password" placeholder="Enter your password" name="password" required>
						<button type="submit" form="login-form">Login</button>
						<label><input type="checkbox" checked="checked">Remember Me</label>
					</div>
					
					<div style="padding: 16px;background-color: #87AFC7">
						<button type="button" onclick="document.getElementById('modal-login').style.display='none'" style="background-color: #f44336">Cancel</button>
						<span class="password">Forgot <a href="#">password?</a></span>
					</div>
				</form>
			</div>
			
			<div id="modal-register" class="modal">
				<form class="modal-content animate" style="margin-top: 25px;height: 430px">
					<div class="image-container">
						<img src="resources/images/user.png" width = "256" height = "256" alt="user-icon">
					</div>
					
					<div style="margin-top: 30px;padding: 16px">
						<label>Register as</label>
						<button type="button" onclick="location.href='register-driver.php'" style="width: 98%;background-color: #4b0082">Driver</button>
						<button type="button" onclick="location.href='register-passenger.php'" style="width: 98%">Passenger</button>
					</div>
					
					<div style="padding: 16px;background-color: #000000">
						<button type="button" onclick="document.getElementById('modal-register').style.display='none'" style="background-color: #f44336">Cancel</button>
					</div>
				</form>
			</div>
		</header>
		
		<img class="logo-contact" src="resources/images/2auto.gif" alt="logo" style="width:300px;height:300px">
		
		<overview-contact>
			<h1><font color="#d20000">Atlas<br>CNG Management System</font></h1>
			<h3><b>Address:</b></h3>
			<p>Plot 15, Block B, Bashundhara,</p>
			<p>Dhaka-1229, Bangladesh.</p>
			<p>Mobile: +880 1687367928</p>
			<p>Fax: +880 2 8833694</p>
			<p>Email: support@atlas.com</p>
			<p>Website: www.atlas.com</p>
		</overview-contact>
		
		<div id="container" style="margin-top: 1080px">
			<div class="photobanner">
				<img class="start-animation" src="resources/images/1.jpg" alt="image-1">
				<img src="resources/images/2.jpg" alt="image-2">
				<img src="resources/images/3.jpg" alt="image-3">
				<img src="resources/images/4.jpg" alt="image-4">
				<img src="resources/images/5.jpg" alt="image-5">
				<img src="resources/images/6.png" alt="image-6">
				<img src="resources/images/7.jpg" alt="image-7">
				<img src="resources/images/8.jpg" alt="image-8">
				<img src="resources/images/9.jpg" alt="image-9">
				<img src="resources/images/10.jpg" alt="image-10">
			</div>
		</div>
		
	<footer style="top: 1400px">
			<a target="_blank" title="Find us on Facebook" href="https://www.facebook.com"><img alt="facebook" src="resources/images/fb.png" height="50px"></a>
			<a target="_blank" title="Follow us on Twitter" href="https://www.twitter.com"><img alt="twitter" src="resources/images/tweet.png" height="50px"></a>
			<a target="_blank" title="Subscribe to our YouTube channel" href="https://www.youtube.com"><img alt="twitter" src="resources/images/u.png" height="50px"></a>
			
			<center>CSE311.5 © SUMMER2017 </center>
		</footer>
	</body>
</html>