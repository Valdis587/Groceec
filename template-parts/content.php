<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sborka
 */

?>



<div class="blog__item" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
               <div class="blog__item-left">
                <div class="blog__item-img">
                    <a href="<?php the_permalink(); ?>">
					<?php
                $id = get_post_thumbnail_id();
                $main=wp_get_attachment_image_src( $id, 'blog' );
                ?>
                    <img  src="<?php echo $main[0]; ?>" alt="<?php the_title(''); ?>"> 
                </a>
                </div>
                <div class="blog__info">
                <span class="blog__comment"><i class="icon-comments"></i> <?php echo comments_number(); ?></span>
                <span class="blog__date"><i class="icon-calendar-alt"></i> <?php the_date(); ?></span>
            </div>
               </div> 
               <div class="blog__item-right">
                <a href="<?php the_permalink(); ?>">
                <h2 class="blog__title"><?php the_title(''); ?></h2></a>
                <p class="blog__desc"><?php do_excerpt(get_the_excerpt(), 25); ?></p>
                <a href="<?php the_permalink(); ?>" class="blog__link">Читать далее...</a>
            </div>

	
</div><!-- #post-<?php the_ID(); ?> -->
