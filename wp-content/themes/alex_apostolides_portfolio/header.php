<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Alex_Apostolides_Portfolio
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<title>Alex Apostolides Design</title>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'alex_apostolides_portfolio' ); ?></a>

	<header id="masthead" class="site-header" role="banner">


<!-- 
––––––––––––––––––
ICONS             
––––––––––––––––––               
-->

<!--- Favicon -->
<link rel="shortcut icon" href="wp-content/themes/childofblankslate/images/favicon.ico" />

<!--- Apple Touch Icon -->
<link rel="apple-touch-icon" href="wp-content/themes/childofblankslate/images/logo.jpg" />




<!--
———————————————————————
NAVIGATION
———————————————————————                                 
-->

<!--- Left Border - WORK -->

<div id="slideoutleft">
<div id="leftborder">
<div id="mobileXproject"><img style="width: 3em;" src="http://localhost/Wordpress%20Sites/wordpress/wp-content/uploads/2016/02/mobileX.png"></div>
<div id="projects" class="paragraph">
<p id="work" class="WorkInfo">work</p>

<nav id="menu"  role="navigation">
<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
</nav>

</div>


</div>
</div>

</header><!-- #masthead -->




<!--                                 
———————————————————————
MOBILE
———————————————————————   
-->

<div id="mobileWork">
	<div class="mobileMenu" id="mobileMenu-top"></div>
	<div class="mobileMenu" id="mobileMenu-middle"></div>
	<div class="mobileMenu" id="mobileMenu-bottom"></div>
</div>

<div id="mobileEmail">
	<img style="width: 3.5em;" src="http://localhost/Wordpress%20Sites/wordpress/wp-content/uploads/2016/02/mobileEmail2.png">
</div>


<img id="mobileLogo" src="http://localhost/Wordpress%20Sites/wordpress/wp-content/uploads/2016/02/mobileLogo.png">



<div id="mobileContactOverlay">
	<div id="mobileXemail"><img style="width: 3em;" src="http://localhost/Wordpress%20Sites/wordpress/wp-content/uploads/2016/02/mobileX.png"></div>
	<img id="mobileOverlayLogo" src="http://localhost/Wordpress%20Sites/wordpress/wp-content/uploads/2016/02/mobileLogo.png">
	<p class="mobileName">ALEX APOSTOLIDES</p>
	<p class="mobileDescription">Graphic design graduate at the Conservatory of Art & Design at Purchase College, SUNY. Currently based in New York. Looking for full time work.</p>
	<ul>hello@alexapostolides.com</ul>
	<ul>Resume</ul>
</div>


<!--
———————————————————————
OTHER
———————————————————————                                                                                         
-->


<!-- Preview Images -->

<div id="previewOverlay">

<?php $preview_1 = wp_get_attachment_url( get_post_thumbnail_id("2")); ?>
<div id="preview_1" style="display: none; background-image: url(<?php echo $preview_1 ?>);"></div>

<?php $preview_2 = wp_get_attachment_url( get_post_thumbnail_id("1791")); ?>
<div id="preview_2" style="display: none; background-image: url(<?php echo $preview_2 ?>);"></div>


</div>


<!--
———————————————————————
BORDERS
———————————————————————                                                  
-->


<div id="topborder">
</div>

<!-- Right Border -->
<div id="slideoutright">
<div id="rightborder">
<ul id="contact" class="paragraph">
<p>Graphic design graduate at the Conservatory of <a target="_blank" href="http://www.purchase.design/" class ="link">Art & Design</a> at Purchase College, SUNY. Currently based in <a target="_blank" href="https://youtu.be/zalYJacOhpo" class ="link">New York</a>.</p>

<p><a href="mailto:hello@alexapostolides.com" class="link">hello@alexapostolides.com</a></p>

<p><a href="wp-content/themes/childofblankslate/images/ALEX_APOSTOLIDES_RESUME.pdf" target="_blank" class="link">Resume</a></p>
</ul>

<p id="info" class="WorkInfo">info</p>
</div>
</div>

<!-- bottom links -->

<div id="bottomborder">
<p class="footer">
<a class="link footer" target="_blank" href="https://www.behance.net/alexapostolides">behance</a>		//		<a href="https://dribbble.com/alexapostolides" target="_blank" class="link footer">dribbble</a>		//		<a href="https://www.facebook.com/alexapostolidesdesign" target="_blank" class="link footer">facebook</a>		//		<a href="https://www.linkedin.com/in/alexapostolides" target="_blank" class="link footer">linkedin</a>
</p>
</div>




<div id="content" class="site-content">








