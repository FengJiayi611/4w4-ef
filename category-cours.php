<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme4w4
 */
 
get_header();
?>
///////////////////////////////////////////////// CATEGORY-COURS.PHP
	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title('<h1 class="page-title>','</h1>');
				the_archive_description( '<div class="archive-description">', '</div>' );
		
				?>	
			
			</header><!-- .page-header -->


			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				$title = get_the_title();
				$nom = substr($title, 0,7);

				$temps = substr($title, -5);
				$typeCours = get_field('type_de_cours');

				
				?>
				<p><?php echo $typeCours?></p>
				<p><?php echo $nom?></p>
				<p><?php echo $temps?></p>


	
			<?php
			endwhile;

			endif; 
		?>
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();