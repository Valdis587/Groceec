<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Groceen
 */

get_header();
get_template_part( 'template-parts/content', 'head' );
?>

<div class="pageerror container">
    <h2 class="pageerror__title">404</h2>
    <p class="pageerror__desc">Снтранца не найдена !</p>
    <a href="<?php echo home_url(); ?>" class="pageerror__button button">На главную</a>
</div>
   </div>

<?php
get_footer();
