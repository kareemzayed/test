<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="shortcut icon" href="imgs/fav.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Home | Kareem's Wibsite</title>
</head>
<body>
	<header id="navBar">
		<nav id="nav1">
			<div id="langaugeType">
				<i class="fa fa-globe"></i><a href="#">EN</a>
			</div>
			<ul>
				<li><a href="https://www.facebook.com/karym.zayd" target="_blank" id="facebookI"><i class="fa fa-facebook"></i></a></li>
				<li><a href="https://www.instagram.com/kareeem_zayed/" target="_blank" id="instagramI"><i class="fa fa-instagram"></i></a></li>
				<li><a href="https://www.linkedin.com/in/kareem-zayed-426071231/" target="_blank" id="linkedinI"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="https://github.com/kareemzayed" target="_blank" id="githubI"><i class="fa fa-github"></i></a></li>
			</ul>
		</nav>
		<nav id="nav2">
			<a href="<?php echo $_SERVER['PHP_SELF']?>"><img src="imgs/logo.png" alt="LOGO"></a>
			<ul>
				<li><a href="#" id="Home">Home</a></li>
				<li><a href="#" id="Comments">Feedback</a></li>
				<li><a href="#" id="Contact-us">Contact us</a><i class="fa fa-angle-down"></i></li></li>
				<li><a href="#" id="Log-in">Log in</a></li>
				<li><a href="#" id="Sign-up">Sign up</a></li>
			</ul>
		</nav>
	</header>

	<section class="main">
		<div>
			<h2>Hello, I'm Kareem<br><span>Full Stack PHP Develober</span></h2>
			<h3>I design websites using PHP, MySQL and Laravel framework</h3>
			<div class="btn-main">
				<a href="#projects" class="btn main-btn1">Courses</a>
				<a href="#projects" class="btn main-btn2">Certificates</a>
			</div>
		</div>
	</section>
	<section class="cards" id="services">
		<h2 class="title">Services</h2>
		<div class="content">
			<div class="card">
				<div class="icon">
					<i class="fa fa-code"></i>
				</div>
				<div class="info">
					<h3>Front end development</h3>
					<p>By using HTML/CSS/Javascript, I can Develop your website.</p>
				</div>
			</div>
			<div class="content">
			<div class="card">
				<div class="icon">
					<i class="fa fa-database"></i>
				</div>
				<div class="info">
					<h3>Backend development</h3>
					<p>I use PHP language and MySQL & PDO datbase to develop your website.</p>
				</div>
			</div>
			<div class="content">
			<div class="card">
				<div class="icon">
					<i class="fa fa-codepen"></i>
				</div>
				<div class="info">
					<h3>Laravel development</h3>
					<p>Using Laravel framwork to develop websites.</p>
				</div>
			</div>
		</div>
	</section>
	<script>
		var prevScrollpos = window.pageYOffset;
		window.onscroll = function() {
			var currentScrollPos = window.pageYOffset;
			if (prevScrollpos > currentScrollPos) {
		    	document.getElementById("navBar").style.top = "0";
	     	} else {
				document.getElementById("navBar").style.top = "-120px";
			  }
			prevScrollpos = currentScrollPos;
		}
	</script>
</body>
</html>