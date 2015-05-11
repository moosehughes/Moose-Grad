<!DOCTYPE html>
<html>
<head>
	
<link rel="stylesheet" href="styles/style.css">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>

<script src="//use.typekit.net/vss5miu.js"></script>
<script>try{Typekit.load();}catch(e){}</script>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
<script>


$(window).scroll(function() {
    if ($(this).scrollTop() > 400) {
        $( "#background" ).fadeIn();
    } else {
        console.log('there');
        $( " #background" ).fadeOut();
    }
});

(function($) {
    var $window = $(window),
        $html = $('html');

    $window.resize(function resize(){
        if ($window.width() < 514) {
            return $html.removeClass('mobile');
        }

        $html.removeClass('rmm, graphite');
    }).trigger('resize');
});

</script>

</head>
<body>

<header class="fixed">

	<div id="background">
	<div class="logo"><a href="index.php"><img src="logo-spectral-13.png" alt="" width="200"></a></div>
	<nav>
		<ul>
			
			<a class="none" href="signup.php"><li>Sign Up</li></a>
			<a href="login.php"><li class="logout"><i class="fa fa-sign-in"></i>Login</li></a>
		</ul>
	</nav>
	</div>	
</header>
<section class="hero">
<div class="mainnav">
	<nav>
		<ul>
			<a  href="#what"><li>Overview</li></a>
			<a  href="#how"><li>How it works</li></a>
			<a href="mailto:hello@getspectral.co"><li>Contact us</li></a>
		</ul>
	</nav>
	</div>
	<div class="hero-section">
		<img src="logo-11.png" width="140" alt=""><br><br>
		<h1 class="h1 hero-header">"KEEP IT BRIEF"</h1>
<p>An Easier way for your clients <br>to generate 
briefs for you.</p>
		<a href="signup.php"><div class="pink">Sign Up</div></a>
		<a href="login.php">Login</a>
	</div>
</section>	
<section id="what">
	<section class="text"><h2>CREATE EFFICIENT BRIEFS FOR YOU AND YOUR CLIENTS</h2>

	<p>
A tool to aid you and your clients when it comes to creating briefs and having an efficient channel to communicate about the brief. By filling out a series of forms a brief will be generated when submitted and will help the communication process between the creatives and the clients!</p><p>

Spectral asks the questions that you need to know to get the results that work best for you. <br>Keep it brief.</p>
	<br><br>
	<a href="#"><div class="pink">Sign Up</div></a>

	</section>

</section>
<div class="line"></div>
<section id="how">
	<section class="how">

	<h1>HOW IT WORKS</h1>

	</section>
	<section class="process">
		<div class="steps">
			<img src="icons-05.png">
			<p>A clients fills in the Spectral brief generator form.</p>
		</div>
		<div class="steps">
			<img src="icons-06.png">
			<p>A PDF is created and sent to the client and the hired creative.</p>
		</div>
		<div class="steps">
			<img src="icons-07.png">
			<p >Both parties become really great friends and go for cocktails!</p>
		</div>

	</section>

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