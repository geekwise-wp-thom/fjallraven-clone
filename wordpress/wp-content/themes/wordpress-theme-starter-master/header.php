<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>\img\icons\fox.png" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Jua&display=swap" rel="stylesheet"> 

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


		<!-- Top Nav -->
		<nav class="navbar--top navbar navbar-expand-md navbar-light">
			<div class="container">
				<span class="nav-item align-text-bottom text-center col text-nowrap"><strong>Free Shipping over $100!</strong></span>
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a href="#" class="nav-link">Store Locator</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link"><img src="http://fjallraven.clone/wp-content/uploads/2020/01/flag-us.png" alt="US Flag"> United States | $ <i class="fa fa-angle-down"></i></a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">English <i class="fa fa-angle-down"></i></a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Account <i class="fa fa-angle-down"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- /Top Nav -->
		<!-- header -->
		<header role="banner" class="sticky-top">
			<!-- Navbar -->
			<div class="navbar--main container text-uppercase navbar navbar-expand-xl navbar-light">
				<button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
					<span class="navbar-toggler-icon"></span>
				</button>
				<a class="navbar-brand text-center col" href="http://fjallraven.clone/">
					<img class="logo-img fox" src="http://fjallraven.clone/wp-content/uploads/2020/01/fox.png" alt="Fox Winking Logo">
					<img class="logo-img raven" src="http://fjallraven.clone/wp-content/uploads/2020/01/raven.png" alt="Fjallraven Logo Script">
				</a>
				<div class="collapse navbar-collapse mt-4" id="collapse_target">
					<ul class="dropdown navbar-nav mr-auto">
						<li class="nav-item pb-4 px-2">
							<a class="nav-link" href="#">Men</a>
						</li>
						<li class="nav-item pb-4 px-2">
							<a class="nav-link" href="women-shop">Women</a>
						</li>
						<li class="nav-item pb-4 px-2">
							<a class="nav-link text-nowrap" href="#">Bags & Gear</a>
						</li>
						<li class="nav-item pb-4 px-2">
							<a class="nav-link" href="#">Sustainability</a>
						</li>
						<li class="nav-item pb-4 px-2">
							<a class="nav-link text-nowrap" href="#">Our Adventures</a>
						</li>
						<hr class="nav-item header--divider">
						<li class="nav-item pb-4 px-2">
							<a id="search-btn" href="#" class="nav-link mr-2 text-nowrap"><i class="fa fa-search mr-2"></i>Search</a>
						</li>
					</ul>
					<div class="nav-item pb-4 text-nowrap">
						<i class="fa fa-shopping-bag"></i>
						<span id="cart--text">$0.00</span>

					</div>
				</div>
			</div> 
			<!-- /Navbar -->
		</header>
		<!-- /header -->
	