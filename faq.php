<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="resources/css/styles.css">
		<link rel="icon" href = "resources/images/620.png" type="image/png">
		
		<title>FAQ</title>
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
		
		<div style="padding: 50px">
			<p style="font-size:50px"><font color="#d20000">Frequently Asked Questions</font></p>
			<h4>Q1. Why should I choose Atlas CNG Management System?</h4>
			<p>Ans: Because Atlas CNG Management System is the first of its kind in Bangladesh and we provide the best service to our customers.</p>
			<h4>Q2. Do I need to register in order to book a CNG?</h4>
			<p>Ans: Yes, you do. This is for the safety and security of our customers.</p>
			<h4>Q3. What if your CNG drivers misbehave?</h4>
			<p>Ans: Our customers shouldn't face this kind of trouble. But if by any chance, any of our drivers misbehave,<br>please complain immediately to our customer service.</p>
			<h4>Q4. What makes Atlas CNG Management System the best?</h4>
			<p>Ans: The support, safety and security we provide to our passengers as well as our drivers, makes Atlas CNG Management System the best.</p>
			<h4>Q5. Where did the idea of Atlas CNG Management System come from?</h4>
			<p>Ans: The idea came up when we were in need of CNG.</p>
		</div>
		
		<div id="container" style="margin-top: 10px">
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
		
		<footer style="top: 1000px">
			<a target="_blank" title="Find us on Facebook" href="https://www.facebook.com"><img alt="facebook" src="resources/images/fb.png" height="50px"></a>
			<a target="_blank" title="Follow us on Twitter" href="https://www.twitter.com"><img alt="twitter" src="resources/images/tweet.png" height="50px"></a>
			<a target="_blank" title="Subscribe to our YouTube channel" href="https://www.youtube.com"><img alt="twitter" src="resources/images/u.png" height="50px"></a>
			
			<center>CSE311.5 © SUMMER2017 </center>
		</footer>
	</body>
</html>