<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package FuegoAustral
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(array(
			'before' => '<div class="page-links">' . esc_html__('Pages:', 'fuegoaustral'),
			'after'  => '</div>',
		));
		?>
	</div><!-- .entry-content -->

	<?php
		$pages = get_pages(array('child_of' => get_the_ID(), 'sort_column' => 'menu_order'));
		foreach ($pages as $child) : ?>

		<a class="card mb-4" href="<?php echo get_permalink($child); ?>">
			<div class="row no-gutters">
				<div class="col-md-3">
					<img src="<?php echo fuegoaustral_entry_thumbnail_url($child); ?>" class="card-img" alt="" width="232" height="232">
				</div>
				<div class="col-md-9">
					<div class="card-body">
						<h5 class="card-title">
							<?php echo get_the_title($child); ?>
						</h5>
						<p class="card-text"><?php echo get_the_excerpt($child); ?></p>
					</div>
				</div>
			</div>
		</a>

	<?php endforeach; ?>

</article><!-- #post-<?php the_ID(); ?> -->
