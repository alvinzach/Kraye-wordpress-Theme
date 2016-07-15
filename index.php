<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package kraye
 */

get_header();
?>

<?php query_posts($query_string . "&posts_per_page=9"); ?>
	<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content', get_post_format() );
				?>

			<?php endwhile; ?>
			<div class="nav-previous alignleft"><?php next_posts_link( '<< Older posts' ); ?></div>
			<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts >> ' ); ?></div>

			<?php else : ?>

				<?php echo "No posts found" ?>

			<?php endif; ?>



<?php
get_footer();
