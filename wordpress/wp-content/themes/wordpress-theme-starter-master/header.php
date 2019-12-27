<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
			// conditionizr.com
			// configure environment tests
			conditionizr.config({
					assets: '<?php echo get_template_directory_uri(); ?>',
					tests: {}
			});
		</script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">
			
				<!-- Top Nav -->
				<div class="navbar-top">
						<div class="shipping-center">
							<strong>Free Shipping over $100!</strong>
						</div>
						<nav>		
							<div class="group-links">
								<a href="#">Store Locator</a>
								<span><img src="http://fjallraven.clone/wp-content/uploads/2019/12/flag-us.png" alt="US Flag"><a href="">United States</a></span>
								<a href="#">English</a>
								<a href="#">Account</a>
							</div>
						</nav>
				</div>
				<!-- /Top Nav -->
				<!-- Navbar -->
				<div class="container navbar navbar-expand-sm navbar-light d-flex justify-content-between">
					<a class="navbar-brand" href="#">
						<img class="logo-img" src="http://fjallraven.clone/wp-content/uploads/2019/12/Screen-Shot-2019-12-23-at-3.50.07-PM.png" alt="Fjallraven Logo">
					</a>
					<ul class="navbar-nav col text-uppercase">
						<li class="nav-item col-md-1">
							<a class="nav-link" href="#">Men</a>
						</li>
						<li class="nav-item col-md-2">
							<a class="nav-link" href="#">Women</a>
						</li>
						<li class="nav-item col-md-2">
							<a class="nav-link" href="#">Bags & Gear</a>
						</li>
						<li class="nav-item col-md-2">
							<a class="nav-link" href="#">Sustainability</a>
						</li>
						<li class="nav-item col-md-2">
							<a class="nav-link" href="#">Our Adventures</a>
						</li>
					</ul>
					<hr>
					<form class="form-inline" action="/action_page.php">
						<input class="form-control mr-sm-2" type="text" placeholder="Search">
					</form>
		</div> 
				<!-- /Navbar -->

			</header>
			<!-- /header -->
