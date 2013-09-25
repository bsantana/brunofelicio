<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>../css/bootstrap.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>../css/font.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>../css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>style.css" media="screen" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_uri(); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . "/css/bootstrap.css"; ?>" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . "/css/font.css"; ?>" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . "/css/style.css"; ?>" media="screen" />
<script type="text/javascript" src="https://apis.google.com/js/plusone.js">

{lang: ‘pt-BR’}

</script>

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body>

<div class='wrapper-nav'>
	<div class='container'>
		<div class='row'>
			<div class='col-md-4'>
				<img class='logo' src='<?php echo get_stylesheet_directory_uri() ?>/img/logo.png'>
			</div>

			<div class='col-md-8'>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'top_nav',
						'menu_class' => 'nav-menu',
						'fallback_cb' => false
					) );
				?>
			</div>
		</div>
	</div>
</div>
