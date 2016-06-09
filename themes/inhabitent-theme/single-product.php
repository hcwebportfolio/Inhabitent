<?php
/**
 * The template for displaying all single posts.
 *
 * @package inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'large' ); ?>
					<?php endif; ?>

					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>


				</header><!-- .entry-header -->

		<div class="entry-content">
				<div class="single-product-title">
				  	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</div>
					<h2>
		   	 		<?php echo CFS()->get( 'price' ); ?>
				  </h2>
				<div class="product-write-up">
						<?php the_content(); ?>
				</div>
		</div><!-- .entry-content -->

				<footer class="entry-footer">
					<?php inhabitent_entry_footer(); ?>
				</footer><!-- .entry-footer -->
			</article><!-- #post-## -->


		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
