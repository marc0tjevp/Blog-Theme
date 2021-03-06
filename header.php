<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Page Title -->
		<?php if (is_article()): ?>
	    	<title><?php echo article_title(); ?></title>
		<?php elseif (is_homepage()): ?>
		    <title><?php echo site_name(); ?></title>
		<?php elseif (is_page()): ?>
		    <title><?php echo page_title(); ?></title>
			<?php elseif (http_response_code(404)): ?>
					<title>Page Not Found</title>
		<?php endif; ?>

		<!-- Theme Stylesheets -->
		<link rel="stylesheet" href="<?php echo theme_url('/css/reset.css'); ?>">
		<link rel="stylesheet" href="<?php echo theme_url('/css/style.css'); ?>">
		<link rel="stylesheet" href="<?php echo theme_url('/css/small.css'); ?>" media="(max-width: 500px)">

		<!-- Highlight.JS -->
		<?php if (site_meta('code_highlighting')) :?>
			<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/atom-one-dark.min.css">
			<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
			<script>hljs.initHighlightingOnLoad();</script>
		<?php endif; ?>

		<!--- Emoji CSS -->
		<link rel="stylesheet" href="<?php echo theme_url('/css/emoji.css') ?>">

		<!-- reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<!-- RSS -->
		<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">

		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<script>var base = '<?php echo theme_url(); ?>';</script>
		<script src="<?php echo asset_url('/js/zepto.js'); ?>"></script>
		<script src="<?php echo theme_url('/js/main.js'); ?>"></script>

		<meta name="description" content="<?php echo site_description(); ?>">
		<link rel="shortcut icon" href="<?php echo theme_url('img/favicon.png'); ?>">
	  <meta name="viewport" content="width=device-width">
	  <meta name="generator" content="Anchor CMS">
	  <meta property="og:title" content="<?php echo page_title(); ?>">
	  <meta property="og:type" content="website">
	  <meta property="og:url" content="<?php echo e(current_url()); ?>">
	  <meta property="og:image" content="<?php echo theme_url('img/og_image.gif'); ?>">
	  <meta property="og:site_name" content="<?php echo site_name(); ?>">
	  <meta property="og:description" content="<?php echo page_description(); ?>">

		<?php if (customised()): ?>
		    <!-- Custom CSS -->
    		<style><?php echo article_css(); ?></style>

    		<!--  Custom Javascript -->
    		<script><?php echo article_js(); ?></script>
		<?php endif; ?>

	</head>
	<body class="<?php echo body_class(); ?>">
		<div class="main-wrap">
			<div class="slidey" id="tray">
				<div class="wrap">
					<form id="search" action="<?php echo search_url(); ?>" method="post">
						<input type="search" id="term" name="term" placeholder="To search, type and hit enter&hellip;" value="<?php echo search_term(); ?>">
						<input type="hidden" id="whatSearch" name="whatSearch" value="all" />
					</form>

					<aside>
						<ul>
						<?php while (categories()):
                                if (category_count() > 0) {
                                    ?>
							<li>
								<a href="<?php echo category_url(); ?>" title="<?php echo category_description(); ?>">
									<?php echo category_title(); ?> <span><?php echo category_count(); ?></span>
								</a>
							</li>
						<?php
                                } endwhile; ?>
						</ul>
					</aside>
				</div>
			</div>

			<header id="top">
				<a id="logo" href="<?php echo base_url(); ?>"><?php echo site_name(); ?></a>

				<nav id="main" role="navigation">
					<ul>
						<?php if (has_menu_items()):
                            while (menu_items()): ?>
						<li <?php echo(menu_active() ? 'class="active"' : ''); ?>>
							<a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>">
								<?php echo menu_name(); ?>
							</a>
						</li>
						<?php endwhile;
                            endif; ?>
						<li class="tray">
							<a href="#tray" class="linky"><img src="<?php echo theme_url('img/categories.png'); ?>" alt="Categories" title="View my posts by category"></a>
						</li>
					</ul>
				</nav>
			</header>
