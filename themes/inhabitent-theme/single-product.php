<?php
/**
 * The template for displaying all single posts.
 *
 * @package inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="product-photo">


					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'large' ); ?>
					<?php endif; ?>
				</div>

				<div class="product-content">
						<div class="single-product-title">
						  	<?php the_title( '<h1 class="product-title">', '</h1>' ); ?>
						</div>
							<h2>
				   	 		<?php echo CFS()->get( 'price' ); ?>
						  </h2>
						<div class="product-write-up">
								<?php the_content(); ?>
						</div>
						<div class="social-buttons">
							<span><i class="fa fa-facebook" aria-hidden="true"></i><p>Like</p></span>
							<span><i class="fa fa-twitter" aria-hidden="true"></i><p>Tweet</p></span>
							<span><i class="fa fa-pinterest" aria-hidden="true"></i><p>Pin</p></span>
					</div>
				</div><!-- .entry-content -->


			</article><!-- #post-## -->


		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
