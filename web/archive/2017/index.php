<!doctype html>
<html lang="en-US">
<head>
	<?php include('partials/head.php'); ?>
</head>
<body>
	<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
	<?php include('partials/rocket.php'); ?>

	<?php include('partials/sticky-nav.php'); ?>

	<!-- about -->
	<?php include('partials/about.php'); ?>

	<!-- speakers -->
	<?php include('partials/speakers.php'); ?>

	<!-- panel -->
	<?php include('partials/panel.php'); ?>

	<!-- venue -->
	<?php include('partials/venue.php'); ?>
	
	<!-- sponsors -->
	<?php include('partials/sponsors.php'); ?>

	<!-- organizers -->
	<?php include('partials/organizers.php'); ?>
    
    <!-- register -->
    <?php include('partials/register.php'); ?>
	
	<script src="js/vendor/min/svg-inject.min.js"></script>
	<script src="js/vendor/min/smooth-scroll.min.js"></script>
	<script src="js/activations.js"></script>
	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXX-X', 'auto');
		ga('send', 'pageview');
	</script>
</body>
</html>