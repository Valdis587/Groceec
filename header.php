<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sborka
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); 
	global $themesetting;
	?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="site-wrapper">
   <header class="header">
    <div class="header__top-line">
        <div class="header__top-content container">
        <div class="header__top-contact">
        <?php if($themesetting['phones']) { ?>
            <a href="tel:<?php echo str_replace(array("(", ")", "-", " "), "", $themesetting['phones']) ?>"><i class="icon-phone-alt"></i><?php echo $themesetting['phones'] ?></a>
            <?php } ?>
            <?php if($themesetting['mail']) { ?>
            <a href="mailto:<?php echo $themesetting['mail'] ?>"><i class="icon-envelope"></i><?php echo $themesetting['mail'] ?></a>
            <?php } ?>
        </div>
        <div class="header__top-button">
            <button aria-label="menu" class="header__button"><i class="icon-bars"></i></button>
        </div>
    </div>
    </div>
    <div class="header__center-line container">
        <div class="header__logo">
        <?php get_template_part( 'template-parts/content', 'logo' ); ?>
        </div>
        <div class="header__search">
        <?php if ( class_exists( 'WooCommerce' ) ) { get_product_search_form(); }  ?>
        </div>
        <div class="header__icons">
        <?php if ( class_exists( 'WooCommerce' ) ) { ?>
            <ul class="header__icons-list">
            <li class="header__icons-list-item"><a href="<?php echo home_url(); ?>/my-account"><i class="icon-user-alt"></i></a></li>
            <?php if( class_exists( 'YITH_WCWL' ) ) { ?>
            <li class="header__icons-list-item"><a href="<?php echo home_url(); ?>/wishlist"><i class="icon-heart"></i></a>
                <span class="header__icon-number number-heart"><?php echo YITH_WCWL()->count_products(); ?></span>
            </li>
            <?php } ?>
            <li class="header__icons-list-item"><a href="javascript:void(0)" class="header__minicart-button"><i class="icon-shopping-cart"></i></a>
            <span class="header__icon-number number-cart"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
            </li>    
        </ul>
        <?php } ?>
        </div>
        <?php if ( class_exists( 'WooCommerce' ) ) { ?>
            <div class="header__minicart-wrapper">
            <button aria-label="mini-cart close" class="header__minicart-close"><i class="icon-plus"></i></button> 
           <?php woocommerce_mini_cart();?> 
        </div> 
           <?php } ?>
    </div>
    <div class="header__menu-line">
        <div class="header__menu-content container">
            <div class="header__menu-category-box">
            <?php if( has_nav_menu('category-menu') ) { ?>
                <a href="#" class="header__menu-category-button"><i class="icon-bars"></i><span>Все категории</span></a>
                <nav class="header__menu-category-nav">
                    <button aria-label="menu close" class="header__menu-category-close"><i class="icon-plus"></i></button>
                    <?php theme_menu_category(); ?>
                </nav>
                <?php } ?>
            </div>
            <div class="header__menu-primary-box">
            <?php if( has_nav_menu('primary-menu') ) { ?>
                <nav class="header__menu-primary-nav">
                    <button aria-label="menu close" class="header__menu-primary-close"><i class="icon-plus"></i></button>
                    <?php theme_menu_primary(); ?>
                </nav>
                <?php } ?>
            </div>
        </div>
    </div>
</header>
   <div class="page-wrapper">
