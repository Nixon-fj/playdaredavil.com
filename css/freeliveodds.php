<?php
require_once $_SERVER["DOCUMENT_ROOT"]."\conf.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo SITE_NAME; ?></title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.css" rel="stylesheet">
    <link href="/css/default-new.css" rel="stylesheet"><link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<!-- Custom styles for this template -->
	<link href="/css/style.css" rel="stylesheet">
	<link href="/css/fonts.css" rel="stylesheet">
	<link href="/css/animate.css" rel="stylesheet">
	<link href="/css/plugins.css" rel="stylesheet">
	<link href="/css/responsive.css" rel="stylesheet">
	<link href="/css/scores.css" rel="stylesheet">
    <link href="/css/default-new.css" rel="stylesheet"><link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

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
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-8CX8M39LBN"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-8CX8M39LBN');
</script>
</head><!-- // head -->


<body>
<div id="wrap">

	<div class="main-inner-content">

		<?php
		require_once DEFAULTS_PATH."/header-en.php";
		?>
		<!-- // #header -->

		<div id="contactinfo" class="section contact-section" style="position:relative;">
			<div class="container">
				<div class="contactblock">
					<div class="row">
						<div class="heading-area text-center">

						</div>
					</div><!-- // .row -->
				</div><!-- // .contactblock -->
			</div>
		</div><!-- // #contactinfo -->

		<div id="page-content">

			<div class="container">


				<div class="row">

					<div class="col-md-12 bottom-sm-30">



			<div id="odds">
            <!-- <div class="container"> -->
                <div class="row">
                    <div class="col-xs-12 col-lg-3 col-md-3 col-sm-12">
                        <div class="bs-component">
                            <div class="panel panel-primary"><div class="panel-heading"><div class="panel-title">Events</div></div></div>
                            <span id="spanLeagues"></span>
                        </div>


                    </div>
                    <div class="col-xs-12 col-lg-9 col-md-9 col-sm-12">
                        <div class="bs-component">
                            <div class="panel panel-primary"><div class="panel-heading"><div class="panel-title">Lines</div></div></div>
                        </div>
                        <span id="spanLines"></span>
                    </div>
                </div>
            <!-- </div> -->
        </div>

					</div><!-- // end column -->


				</div><!-- // .row -->
			</div><!-- // .container -->

		</div><!-- // #page-content -->
	</div><!-- // #main-inner-content -->

	<?php
		require_once DEFAULTS_PATH."/footer-en.php";
		?><!-- // #footer -->

	<div class="sb-slidebar sb-right">
		<div class="sb-menu-trigger"></div>
	</div><!-- //.sb-left -->

</div><!-- // #wrap -->

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

<!-- Revolutions slider -->
<script src="/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script src="/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

</body>
</html>