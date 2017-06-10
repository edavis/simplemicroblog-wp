<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package micro
 */

?>

<?php if ( ! is_single() ): ?>
	<time class="newday"><?php the_date() ?></time>
<?php endif; ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'micro' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'micro' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php micro_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
		<?php micro_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
