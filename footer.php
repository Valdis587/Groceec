<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sborka
 */

 global $themesetting;
 ?>
 
 </div>
	<footer class="footer">
	 <div class="footer__content">
		 <div class="footer__menu-box container">
			 <div class="footer__contact">
				 <div class="footer__logo">
				 <?php get_template_part( 'template-parts/content', 'logo' ); ?>
				 </div>
				 <div class="footer__text">
				 <?php if($themesetting['footer-text']) { ?>
					 <p>
					 <?php echo $themesetting['footer-text'] ?>
					 </p>
					 <?php } ?>
				 </div> 
			 </div>
				 <div class="footer__menu-item">
				 <?php 
		 if( has_nav_menu('footer-menu1') ) { 
		 if($themesetting['footer-title2']) { ?>
					 <h6 class="footer__menu-title"><?php echo $themesetting['footer-title2'] ?></h6>
					 <?php } 
			   theme_footer_menu1();
				  } ?>
				 </div>
				 <div class="footer__menu-item">
				 <?php 
		 if( has_nav_menu('footer-menu2') ) { 
		 if($themesetting['footer-title3']) { ?>
					 <h6 class="footer__menu-title"><?php echo $themesetting['footer-title3'] ?></h6>
					 <?php } 
			   theme_footer_menu2();
				  } ?>
				 </div>
				 <div class="footer__menu-item">
				 <?php 
		 if( has_nav_menu('footer-menu3') ) { 
		 if($themesetting['footer-title4']) { ?>
					 <h6 class="footer__menu-title"><?php echo $themesetting['footer-title4'] ?></h6>
					 <?php } 
			   theme_footer_menu3();
				  } ?>
				 </div>   
		 </div>
		 <div class="footer__bottom container">
			 <div class="footer__bottom-left">
			 <?php get_template_part( 'template-parts/content', 'social' ); ?>
			 </div>
			 <div class="footer__bottom-right">
				 <ul class="footer__pay-list">
				 <?php get_template_part( 'template-parts/content', 'pay' ); ?>
				 </ul>
			 </div>
		 </div>
		 <div class="footer__copy">
			 <p><?php echo $themesetting['copy']; ?></p>
		 </div>
		
	 </div>
	 <div class="footer__back"><i class="icon-angle-down"></i></div>
 </footer>
 <?php 
 if($themesetting['yandex']) {
	 echo $themesetting['yandex'];
  }
  if($themesetting['google']) {
	 echo $themesetting['google'];
  }
 ?>
 <?php wp_footer(); ?>
 
 </body>
 </html>
 