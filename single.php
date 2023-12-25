<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package sborka
 */

get_header();
get_template_part( 'template-parts/content', 'head' );
?>

<div class="blog container">
    <div class="blog__wrapper">
        <div class="blog__content">
                <h2 class="blog__content-single-title"><?php the_title(''); ?></h2>
                <div class="blog__content-single-info">
                <span class="blog__autor"><i class="icon-user-alt"></i> Автор: <?php the_author(); ?></</span>
                <span class="blog__comment"><i class="icon-comments"></i> <?php echo comments_number(); ?></span>
                <span class="blog__date"><i class="icon-calendar-alt"></i> Дата: <?php the_date(); ?></span>
            </div>
            <div class="blog__content-single-img">
			<?php
                $id = get_post_thumbnail_id();
                $main=wp_get_attachment_image_src( $id, 'blog' );
                ?>
                    <img src="<?php echo $main[0]; ?>" alt="<?php the_title(''); ?>">
            </div>
            <div class="blog__content-single-text">
			<?php the_content(); ?>
            </div>
			<?php 
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>
        </div>
		<?php get_sidebar(); ?>
	</div>
</div>
<?php
get_footer();