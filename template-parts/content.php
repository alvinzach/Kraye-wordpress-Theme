<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package kraye
 */
?>
	<div class="col-sm-4" style="background:url('<?php echo(wp_get_attachment_url( get_post_thumbnail_id($post->ID) ));?>');background-size:cover;background-attachment:fixed;height:320px;">
		<?php if ( 'post' == get_post_type() ) : ?>
		<a href="<?php echo esc_url( get_permalink() ); ?>">
			<div class="overlay" style="height:100%;">
				<div class="holder">
					<span class="postmetabar"><i class="fa fa-comment-o" aria-hidden="true"></i> <?php comments_number( 0, 1, '%'); ?></span>
					<span class="postmetabar" style="margin-right:5px;"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_date(); ?> </span>
					<?php the_title( sprintf( '<p class="big2">', esc_url( get_permalink() ) ), '</p>' ); ?>
					<p class="postmetabar" style="clear:both;"><i class="fa fa-folder-o" aria-hidden="true"></i>&nbsp;<?php the_category(','); ?></p>
				</div>
			</div>
		</a>
	<?php endif; ?>
	</div>
