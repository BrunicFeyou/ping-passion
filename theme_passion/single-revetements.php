<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Theme_Passion
 */
$datarevetements = get_fields();

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post(); ?>

			<div class="body_card">
				<div class="card">
				  <h2 class="title"> <?php the_title();?> </h2>
				 <div class="img-revetements"> <?php the_post_thumbnail(); ?></div>
				 <?php the_excerpt();?>	
		        </div>
			</div>

			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;?>
			<div class="div_infos">
            <section class="infos_revet">
				<h2>Informations revêtements</h2>
				<p>Contrôle : <?= $datarevetements['controle']?> </p>
				<p>Rapidité : <?= $datarevetements['rapidite']?>  </p>
				<p>Adhérence : <?= $datarevetements['adherence']?> </p>
				<p>Epaisseur : <?= $datarevetements['epaisseur'] ?> </p>	
			</section>
			</div>
			<?php


		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
