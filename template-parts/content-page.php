<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package kraye
 */

?>

<div class="col-sm-12" style="background:url('<?php echo(wp_get_attachment_url( get_post_thumbnail_id($post->ID) ));?>');background-size:cover;background-attachment:fixed;height:350px;">
	<div class="overlay" style="text-align:center; vertical-align: middle;padding-top:10%;">
		<span class="singlebig"><?php the_title(); ?></span>
	</div>
</div>
<div class="col-sm-10" style="margin:auto;padding:30px;float:initial;clear:both;">
<?php the_content(); ?>


<?php	if ( comments_open() || get_comments_number() ) :
	comments_template();
endif;


?>
</div>
