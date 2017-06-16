<?php
/**
 * Template part for displaying lists of posts of the 'post' (blog) type.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Wawco_Tuxedo
 */

?>
<?php
query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged'));
while ( have_posts() ) : the_post();

	get_template_part( 'template-parts/content', get_post_format() );
	if ( is_single() ) :
		get_template_part('template-parts/post-nav', get_post_format() );
	endif;

	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;

endwhile; // End of the loop.
?>