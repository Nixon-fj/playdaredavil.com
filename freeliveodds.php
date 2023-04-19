<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "\conf.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo SITE_NAME; ?></title>

	<link rel="stylesheet" href="public/css/styles.css">

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="/css/default-new.css" rel="stylesheet">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<!-- Custom styles for this template -->
	<link href="/css/style.css" rel="stylesheet">
	<link href="/css/fonts.css" rel="stylesheet">
	<link href="/css/animate.css" rel="stylesheet">
	<link href="/css/plugins.css" rel="stylesheet">
	<link href="/css/responsive.css" rel="stylesheet">
	<link href="/css/scores.css" rel="stylesheet">
	<link href="/css/default-new.css" rel="stylesheet">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<!-- Revolutions slider -->
	<link href="/rs-plugin/css/settings.css" rel="stylesheet">
	<link href="/rs-plugin/css/captions.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/css/scores.css" />

	<!-- jQuery load -->
	<script src="/js/jquery.js"></script>

	<!-- jQuery load -->
	<script src="/js/jquery.js"></script>
	<script type="text/javascript" src="/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/js/jquery.xslt.js"></script>
	<script type="text/javascript" src="/js/Livelinessp.js"></script>

	<!--Live Lines CSS-->
	<link href="/css/colors.css" rel="stylesheet">
	<link href="/css/Livelines.css" rel="stylesheet">
	<link href="/css/bootswatch.min.css" rel="stylesheet">
	<link href="/css/bootstrap.min.css" rel="stylesheet">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-8CX8M39LBN"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());
		gtag('config', 'G-8CX8M39LBN');
	</script>
</head><!-- // head -->

<body>
	<div id="wrap">
		<div class="main-inner-content">

			<nav class="topMenu">
				<div class="topMenu-container">
					<a href="index.html" class="topMenu-container-imgContainer">
						<img src="./img/logo.svg" alt="Logo" width="100%" height="100%">
					</a>
					<div class="topMenu-container-options d-none d-lg-flex">
						<ul>
							<li><a href="sportsbook.html">SPORTBOOK</a></li>
							<li><a href="casino.html">CASINO</a></li>
							<li><a href="racebook.html">RACEBOOK</a></li>
							<li><a href="livebetting.html">LIVE BETTING</a></li>
						</ul>
					</div>
					<div class="topMenu-container-buttonContainer">
						<a href="login.php" class="topMenu-container-buttonContainer-button">
							LOG IN
						</a>
					</div>
				</div>
			</nav>

			<div id="contactinfo" class="section contact-section" style="position:relative;">
				<div class="container">
					<div class="contactblock">
						<div class="row">
							<div class="heading-area text-center">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="page-content">
				<div class="container">
					<div class="row">
						<div class="col-md-12 bottom-sm-30">
							<div id="odds">
								<div class="row">
									<div class="col-xs-12 col-lg-3 col-md-3 col-sm-12">
										<div class="bs-component">
											<div class="panel panel-primary">
												<div class="panel-heading">
													<div class="panel-title">Events</div>
												</div>
											</div>
											<span id="spanLeagues"></span>
										</div>
									</div>
									<div class="col-xs-12 col-lg-9 col-md-9 col-sm-12">
										<div class="bs-component">
											<div class="panel panel-primary">
												<div class="panel-heading">
													<div class="panel-title">Lines</div>
												</div>
											</div>
										</div>
										<span id="spanLines"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footerNav d-flex d-lg-none">
			<div class="topMenu-container">
				<div class="topMenu-container-options">
					<ul>
						<li><a href="sportsbook.html">
								<div class="icon-container"><img src="./img/icons/sports.svg" alt="sportsbook"></div>
								SPORTBOOK
							</a></li>
						<li><a href="casino.html">
								<div class="icon-container"><img src="./img/icons/casino.svg" alt="casino"></div>
								CASINO
							</a></li>
						<li><a href="racebook.html">
								<div class="icon-container horse"><img src="./img/icons/racebook.svg" alt="racebook"></div>
								RACEBOOK
							</a></li>
						<li><a href="livebetting.html">
								<div class="icon-container "><img src="./img/icons/live.svg" alt="livebetting"></div>
								LIVE BETTING
							</a></li>
					</ul>
				</div>
			</div>
		</div>
		<footer>
			<div class="footer-list">
				<section>
					<div><a href="sportsbook.html">SPORTBOOK</a></div>
					<div><a href="livebetting.html">LIVE BETTING</a></div>
					<div><a href="racebook.html">RACEBOOK</a></div>
					<div><a href="casino.html">CASINO</a></div>
					<div><a href="houserules.html">HOUSE RULES</a></div>
					<div><a href="sportsrules.html">SPORTS RULES</a></div>
					<div><a href="horsetracks.html">HORSE TRACKS</a></div>
					<div><a href="http://agents.playdaredevil.com/">ADMIN</a></div>
					<div><a href="privacy.html">PRIVACY POLICY</a></div>
					<div><a href="termsAndConditions.html">TERMS AND CONDITIONS</a></div>
					<div><a href="responsibleGaming.html">RESPONSIBLE GAMING</a></div>
				</section>
			</div>
		</footer>

		<div class="sb-slidebar sb-right">
			<div class="sb-menu-trigger"></div>
		</div>
	</div>

	<script src="/js/easing.js"></script>
	<script src="/js/hoverIntent.js"></script>
	<script src="/js/superfish.js"></script>
	<script src="/js/bootstrap.js"></script>
	<script src="/js/waypoint.js"></script>
	<script src="/js/typer.js"></script>
	<script src="/js/wow.js"></script>
	<script src="/js/magnificpopup.js"></script>
	<script src="/js/masonry.js"></script>
	<script src="/js/sidebar.js"></script>
	<script src="/js/isotope.js"></script>
	<script src="/js/functions.js"></script>

	<script src="/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
	<script src="/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

</body>

</html>