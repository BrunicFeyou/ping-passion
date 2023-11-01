<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Theme_Passion
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
			   <h1 class="bois-text">Nos Bois</h1>
			   <p class="desc-bois-text">Des bois de table de ping-pong adaptés à tous les styles de jeu.</p>
			</header><!-- .page-header -->
            <section class="bois-wrapper">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				?>
					<div class="bois-cards">
						<div class="blanc-img">
                        <?php the_post_thumbnail();  ?>
						</div>
						<div class="bois_content">
							<h2>
							<a href="<?php the_permalink();?>">
							<?php the_title();?>
						    </a>
							</h2>
							<?php the_excerpt();?>
							
					    </div>
					</div>

				<?php

			endwhile; ?>
			</section>
			<?php

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
