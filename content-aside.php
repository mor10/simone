<?php
/**
 * Custom template for Asides
 * @package Simone
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="index-box">

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer entry-meta">
            <?php simone_posted_on(); ?>
            <?php edit_post_link( sprintf( ' | %s', __( 'Edit', 'simone' ) ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
    </div>
</article><!-- #post-## -->
