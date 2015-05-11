<!DOCTYPE html>
<html>
<head>
	
<link rel="stylesheet" href="styles/style.css">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
<script src="js/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
<script>

</script>

</head>
<body>
<header>
<div id="background"></div>
	<div class="logo"><a href="index.html"><img src="logo-spectral-13.png" alt="" width="200"></a></div>
	<div class="mainnav right">
	<nav>
		<ul>
			<a  href="#what"><li>Overview</li></a>
			<a  href="#how"><li>How it works</li></a>
			<a href="mailto:hello@getspectral.co"><li>Contact us</li></a>
		</ul>
	</nav>
	</div>
</header>
<section class="SignupForm hero">
	<h1>Sign Up</h1>
	<form method='POST' action="signup-thanks.php">
		
		<label for="Name">First Name</label>
		<input class="fw" type="text" placeholder="First Name" name='firstName'>

		<label for="Name">Last Name</label>
		<input class="fw" type="text" placeholder="Last Name" name='lastName'>

		<label for="Email">Email Address</label>
		<input class="fw"  type="email" placeholder="milk@spectral.com" name='email'>


		<label for="password">Password</label>
		<input class="fw" type="password" placeholder="Password" name='password'><br>

			<label for="password">Confirm Password</label>
		<input class="fw" type="password" placeholder="Confirm Password"><br>

		<input class="submit" type="submit" value="Sign Up"><a class="register" href="login.html">Already signed up?</a>

	</form>

</section>
<section id="contact">
	<h2>Got any questions? Get in touch!</h2>
	<h3><a href="mailto:hello@getspectral.co" class="mail">hello@getspectral.co</a></h3>

</section>
<section class="news">
	<div class="formNews"><h2>Sign Up to receive the latest updates!</h2><form action=""><input type="text" placeholder="Enter Email Address"><input type="submit" value=">"></form></div>
</section>
<footer>
	<section class="copy">
		<div class="copyright">
		<center>&copy; Spectral 2015
		</div>

	</section>
</footer>

</body>
</html>