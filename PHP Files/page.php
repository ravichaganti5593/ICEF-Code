<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package lavish
 * @since 1.0.0
 */

get_header(); ?>

<?php get_sidebar( 'top' ); ?>

<section id="la-content-area" class="la-contents <?php if ( !has_header_image() && is_front_page() ) { echo "lavish_header_none"; } ?>" style="min-height:700px;" role="main">
    <div class="container">
        <div class="row">    
<?php  
if (is_front_page() ) {
    echo '<div class="col-md-8 la-content-inside col-md-offset-2">';
    while (have_posts()) : the_post(); 
        get_template_part( 'content', 'page' );
    endwhile; // end of the loop.
}else {
    echo '<div class="col-md-8 la-content-inside">';
    while (have_posts()) : the_post();
        get_template_part( 'content', 'page' );
    endwhile; // end of the loop. 
}
?>
            
    	</div><!-- #main -->
	</div><!-- #primary -->
</section>


<?php
get_footer();