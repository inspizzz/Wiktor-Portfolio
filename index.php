<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once "handler.php";
    $page = handle();
?>

<html>
    <head> 
        <!-- apply global css and things -->
        <link rel="stylesheet" href="/app/global.css" />
        <link rel="icon" href="resources/icon.png" type="image/x-icon"/>

		<!-- apply js -->
		<script src="scripts/newsletter.js"></script>
		<script src="scripts/refer.js"></script>

        <!-- inject css here -->
        <style>
            <?php echo $page->getCss(); ?>
        </style>


        <title>Wiktors Portfolio</title>
    </head>

    <body>
        <!-- inject the top bar -->
		<!-- thing -->
        <section id="top-bar">
            <a href="/">
                <img src="resources/icon1.png"/> 
            </a>
			<span>
				<div id="dropdown">
					
					<a href="about"> About </a>
					<div id="dropdown-content">
						<a href="about">Info</a>
						<a href="about">Contact</a>
						<a href="about">🚧 more coming 🚧</a>
					</div>
				</div>

				<div id="dropdown">
					
					<a href="projects"> Projects </a>
					<div id="dropdown-content">
						<a href="projects">MySoc</a>
						<a href="projects">NNFS</a>
						<a href="projects">EXCS</a>
						<a href="projects">🚧 more coming 🚧</a>
					</div>
				</div>

				<div id="dropdown">
					
					<a href="experience"> Experience </a>
					<div id="dropdown-content">
						<a href="experience">Principle One</a>
						<a href="experience">Research Intern</a>
						<a href="experience">🚧 more coming 🚧</a>
					</div>
				</div>
			</span>
        </section>

        <!-- inject the requested website here -->
        <?php echo $page->getContent(); ?>

		<!-- inject the footer -->
		<section id="footer">
			<div id="footer-top">
				<div id="footer-general">
					<h1 href="/"> Wiktor Wiejak </h1>
					<a href="about"> Contact Info </a>
					<a href="/"> Privacy Policy </a>
				</div>

				<div id="footer-sitemap">
					<h1> Sitemap </h1>
					<a href="/"> Home </a>
					<a href="about"> About </a>
					<a href="projects"> Projects </a>
					<a href="experience"> Experience </a>
				</div>

				<div id="footer-subscribe">
					<input type="text" id="newsletter-email" placeholder="Email Address"/>
					<input type="button" value="SUBSCRIBE" onclick="emailSubmit()"/>

					<div id="footer-social">
						<a href="mailto:ww414@exeter.ac.uk" target="_blank"> <img src="resources/outlook.png"/> </a>
						<a href="mailto:wiktor.wiejak@gmail.com" target="_blank"> <img src="resources/gmail.png"/> </a>
						<a href="https://www.linkedin.com/in/wiktor-wiejak-703b60206/" target="_blank"> <img src="resources/linkedIn.png"/> </a>
						<a href="tel:+447708644661" target="_blank"> <img src="resources/phoneNumber.png"/> </a>
					</div>
				</div>
			</div>

			<div id="footer-bottom">
				<p> add something here </p>
			</div>
		</section>
    </body>
</html>

<!-- 
	docker
	github
	latex
	nginx
	apache
	azure
	flutter
	dart
	react
	nextjs
	angular
	grafana

	python
	java
	js
	ts
	php
	solidity
	isabelle
	haskell
	c-family
	html
 -->