<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Global_Medicamentos
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- Icons -->
<link rel="icon" href="<?php bloginfo ("stylesheet_directory"); ?>/assets/icons/icon-16.png" sizes="16x16">
<link rel="icon" href="<?php bloginfo ("stylesheet_directory"); ?>/assets/icons/icon-32.png" sizes="32x32">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

<!-- Bootstrap -->
<link href="<?php bloginfo ("stylesheet_directory"); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
<!-- Icons -->
<link href="<?php bloginfo ("stylesheet_directory"); ?>/assets/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php bloginfo ("stylesheet_directory"); ?>/assets/css/ionicons.min.css" rel="stylesheet">
<link href="<?php bloginfo ("stylesheet_directory"); ?>/assets/css/jquery.bxslider.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<header class="custom-navbar">
			<nav class="navbar navbar-default">
				<div class="container">
					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php echo home_url( '/' ); ?>"><img src="<?php bloginfo( "stylesheet_directory" ); ?>/assets/logo/logo-superexxa-header.png" alt="Logo Superexxa"></a>
					</div>
					
					<div class="collapse navbar-collapse" id="main-nav">
						<?php 
							$args = array(
								"theme_location"	=> "primary",
								"container"				=> "ul",
								"menu_class"			=> "nav navbar-nav navbar-right"
							);
							wp_nav_menu($args);
						?>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</header>

