<?php
/**
 * The template for displaying all pages.
 *
 * @package inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <section class="home-hero">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/inhabitent-logo-full.svg" alt="" />

      </section>
			<h2>Shop Stuff</h2>
			<section class="shop-stuff-container container">
				<?php $product_types = get_terms(array( 'taxonomy' => 'product-type') );?>
				<?php foreach ( $product_types as $product_type) : ?>
						<div class="product-icon">
							<?php echo $product_type->name; ?>
							<?php echo "<img src='"
								. get_stylesheet_directory_uri()
								.	"/images/product-type-icons/"
								. $product_type->slug
								. ".svg' alt=''/>";
									?>
								<p>
									<?php echo $product_type->description; ?>
								</p>
								<a href=" <?php echo get_term_link($product_type, 'product-type') ?> "><?php echo $product_type->name; ?> &nbsp;Stuff</a>

						</div>
					<?php endforeach; ?>
			</section>
				<!-- <?php
			   $args = array( 'post_type' => 'post', 'posts_per_page' => 3 );
			   $journal_posts = get_posts( $args ); // returns an array of posts
			?>
			<?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
			   <?php the_title(); ?>
			<?php endforeach; wp_reset_postdata(); ?> -->

		</main><!-- #main -->
	</div><!-- #primary -->


<h2>Inhabitent Journal</h2>
<div class="front-page-posts">
<ul class="journal-post container">
	<?php
	$args = array( 'posts_per_page' => 3, 'order'=> 'DESC', 'orderby' => 'date' );
	$postslist = get_posts( $args );
	foreach ( $postslist as $post ) :
	setup_postdata( $post ); ?>

	<li >
		<div class="journal-picture">
		<?php the_post_thumbnail( 'large' ); ?>
		</div>
			<div class="journal-info">
			<span>
			<?php inhabitent_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
			</span>
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<a class="moretag" href="<?php the_permalink(); ?>">Read Entry</a>
			</div>
	</li>
<?php
endforeach;
wp_reset_postdata();
?>
</ul>

</div>
<!-- Latest Adventures -->

           <h2>Latest Adventures</h2>
           <section class="adventures container">

               <ul class="clearfix">

                   <?php
                       $query = new WP_Query( array(
                           'post_type' => 'adventure',
                            'order' => 'ASC',
                           'orderby' => 'date',
                           'posts_per_page' => 4)
                       );
                       while ( $query->have_posts() ) : $query->the_post(); ?>

                       <li>
                           <div class="story-wrap">
                               <div class="adventure-image">
                                   <?php the_post_thumbnail( 'full' ); ?>
                               </div>
                               <div class="story-info">
                                   <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                   <a class="readtag" href="<?php the_permalink(); ?>">Read More</a>
                               </div>
                           </div>
                       </li>

                   <?php endwhile;
                                       wp_reset_postdata(); ?>
               </ul>
               <p class="clearfix">
                   <a href="adventures" class="button">More Adventures</a>
               </p>
           </section><!-- .adventures -->

<?php get_footer(); ?>

<!-- Sorts Journal Logs on Front Page -->
