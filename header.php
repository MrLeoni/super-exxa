<?php
/**
 * The header for our theme.
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
<link rel="icon" href="<?php bloginfo ("stylesheet_directory"); ?>/assets/icons/icon-16.png" sizes="16x16">
<link rel="icon" href="<?php bloginfo ("stylesheet_directory"); ?>/assets/icons/icon-32.png" sizes="32x32">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

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
		<header id="site-header">
      <nav class="site-nav">
        <div class="container">
          
          <div class="logo-box">
            <a href="<?php echo home_url( '/' ); ?>"><img src="<?php bloginfo( "stylesheet_directory" ); ?>/assets/logo/logo-superexxa-header.png" alt="Logo Superexxa"></a>
          </div>
          <div class="link-box">
            <?php 
            	$args = array(
            		"theme_location"	=> "primary",
            		"container"				=> "ul"
            	);
            	wp_nav_menu($args);
            ?>
          </div>
          <div class="nav-btn-box">
            <button id="js-nav-btn" title="Clique para abrir o menu" class="nav-btn">
              <span></span>
              <span></span>
              <span></span>
            </button>
          </div>
          
        </div>
      </nav>
		</header>