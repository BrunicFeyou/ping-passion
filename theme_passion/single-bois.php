<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Theme_Passion
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post(); ?>

            <div class="body_bois_card">
				<div class="card">
				  <h2 class="title"> <?php the_title();?> </h2>
				 <div class="img-revetements"> <?php the_post_thumbnail(); ?></div>
				 <?php the_excerpt();?>	
		        </div>
			    <div class="btn_acheter"><button>Acheter</button></div>
			</div>

			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main>

<?php
get_sidebar();
get_footer();
