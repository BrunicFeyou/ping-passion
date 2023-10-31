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
				<h1 class="revet-text">Les revêtements</h1>
				
				<p class="desc-text">Des pièces en caoutchouc et mousse qui améliorent le jeu de ping pong.</p>
			</header><!-- .page-header -->

            <section class="carte-revetements">
				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post(); ?>
						<div class="revetements-cards">
							<?php the_post_thumbnail();  ?>
							<div class="revetements_content">
								<h2> <?php the_title();?> </h2>
								<p><?php the_excerpt();?> </p>
								<a href="<?php the_permalink();?>">Voir +</a>
							</div>
						</div>

					<?php endwhile; ?>
			</section>
			<?php else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

	</main><!-- #main -->
	<?php
get_sidebar();
get_footer();
