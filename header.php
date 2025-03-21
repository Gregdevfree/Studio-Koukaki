<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-title" rel="home"><?php bloginfo( 'name' ); ?></a>
        <div class="menuToggle">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
            <ul class="menuNav menuSection">
                    <li><a href="#story" class="navItem firstNavItem fadeInTitle">Histoire</a></li>
                    <li><a href="#characters" class="navItem fadeInTitle">Personnages</a></li>
                    <li><a href="#place" class="navItem fadeInTitle">Lieu</a></li>
                    <li>
                        <a href="#studio" class="navItem StudioKoukakiTitle">
                        <span class="studioTitle fadeInTitle">Studio</span>
                        <span class="koukakiTitle fadeInTitle">Koukaki</span>
                        </a>
                    </li>
            </ul>
            <div class="menuLogo">
                <img id="menuLogo" class="logoNavMenu" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo2.png'; ?>" alt="Logo Site Koukaki">
            </div>
            <div class="menuFlowers">
                <img class="flower" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/flower.png'?>" alt="leur qui tourne">
                <img class="Hibiscus" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Hibiscus.png'?>" alt="hisbiscus qui tourne">
                <img class="orchid" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/orchid.png'?>" alt="orchidée qui tourne">
                <img class="randomFlower" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/random_flower.png'?>" alt="fleur qui tourne">
                <img class="Sunflower" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Sunflower.png'?>" alt="tournesol qui tourne">
                </div>
            <div class="menuCats">
                <img class="black" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/jaakunablackcat.png'?>" alt="chat jaakuna qui flotte">
                <img class="blue" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/kawanekobluecat.png'?>" alt="chat kawaneko qui flotte">
                <img class="orange" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/orenjiiroorangecat.png'?>" alt="chat orenjiiro qui flotte">
            </div>
            <div class="menuFooter">
                <p class="footerNav">STUDIO KOUKAKI</p>
            </div>
        </div>     
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->