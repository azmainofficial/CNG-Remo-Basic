<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="resources/css/styles.css">
		<link rel="icon" href = "resources/images/620.png" type="image/png">
		
		<title>Welcome | Home</title> 
	</head>
	<body>
		<header class="header-home">
			<nav-bar>
				<nav-item><a href="index.php">Home</a></nav-item> 
				<nav-item><a href="about.php">About</a></nav-item>
				<nav-item><a href="contact.php">Contact</a></nav-item>
				<nav-item><a href="faq.php">FAQ's</a></nav-item>
				<nav-item style="float:right"><button onclick="document.getElementById('modal-register').style.display='inline-block'" style="margin: 5px 5px 5px 0px;background-color: #F6EDD3;border-radius: 12px;color: #141414;">Sign Up</button></nav-item>
				<nav-item style="float:right"><button onclick="document.getElementById('modal-login').style.display='inline-block'" style= "margin: 5px 5px 5px 0px;background-color: #98FF00;border-radius: 12px;color: #141414;'">Sign In</button></nav-item>
			</nav-bar>
			
			
			
			<div id="modal-login" class="modal">
				<form id="login-form" name="login-form" class="modal-content animate" action="login.php" method="post">
					<div class="image-container">
						<img src="resources/images/user.png" width = "256" height = "256" alt="user-icon">
					</div>
					
					<div style="padding: 16px">
						<label>Email</label>
						<input type="text" placeholder="Enter Email Address" name="email" required>
						<label>Password</label>
						<input type="password" placeholder="*******" name="password" required>
						<button type="submit" style="block ;border-radius= 12px;" form="login-form">Login</button> 
						<label><input type="checkbox" checked="checked">Remember Me</label>
					</div>
					
					<div style="padding: 16px;background-color: #87AFC7">
						<button type="button" onclick="document.getElementById('modal-login').style.display='none'" style="background-color: #f44336">Cancel</button>
						<span class="password">Forgot<a href="#">Password?</a></span>
					</div>
				</form>
			</div>
			
			<div id="modal-register" class="modal">
				<form class="modal-content animate" style="margin-top: 25px;height: 430px">
					<div class="image-container">
						<img src="resources/images/user.png" width = "256" height = "256" alt="user-icon">
					</div>
					
					<div style="margin-top: 30px;padding: 16px">
						<label>I am</label>
						<button type="button" onclick="location.href='register-driver.php'" style="width: 98%;background-color: #4b0082">Driver</button>
						<button type="button" onclick="location.href='register-passenger.php'" style="width: 98%">Passenger</button>
					</div>
					
					<div style="padding: 16px;background-color: #000000">
						<button type="button" onclick="document.getElementById('modal-register').style.display='none'" style="background-color: #f44336">Cancel</button>
					</div>
				</form>
			</div>
		</header>
		
		<overview-home>
			<p style="font-size:60px; "color='#F6EDD3' ; align="center"><br>Online CNG Management System</p>
			<p style="font-size:20px; "color='#F6EDD3' ; align="center">The first of its kind in Bangladesh with unique features of comfort, safety and reliability in CNG services. Open to everyone, everywhere. All ride requests are blindly matched with the closest available driver. So there is no discrimination based on race, gender, or destination.</p>
			<br>
			<p style="font-size:20px; "color='#F6EDD3' ; align="center">Online CNG has provided continuous service to County residents and visitors for over 20 years. It is the largest cng company in County operating over 200 CNGs. We provide services to over 350,000 passengers each year. Our CNGs travel over 3 million miles each year and we are authorized to operate in every municipality in county. Our call center is open 24 hours a day, 365 days a year and handles over 250,000 thousand calls each year. We inspect our vehicles weekly for mechanical and appearance issues.</p>
		</overview-home>
		
		<div id="container" style="margin-top: 1325px">
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
		
		<footer style="top: 1675px">
			<a target="_blank" title="Find us on Facebook" href="https://www.facebook.com"><img alt="facebook" src="resources/images/fb.png" height="50px"></a>
			<a target="_blank" title="Follow us on Twitter" href="https://www.twitter.com"><img alt="twitter" src="resources/images/tweet.png" height="50px"></a>
			<a target="_blank" title="Subscribe to our YouTube channel" href="https://www.youtube.com"><img alt="twitter" src="resources/images/u.png" height="50px"></a>
			
			<center>CSE311.5 © SUMMER2017 </center>
		</footer>
	</body>
</html>