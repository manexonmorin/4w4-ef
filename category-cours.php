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
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				$titre = get_the_title();
				$typeCours = get_field('type_de_cours');
				$nbHeure = substr($titre,-4,3);
				$sigle = substr($titre, 0, 7);
			?>

			<article>
				<p> <?php echo $typeCours; ?> </p>
				<a href="<?php echo get_permalink()?>"><?php echo $sigle ?></a>
				<p> <?php echo $nbHeure; ?> </p>
			</article>

			<?php
			endwhile;

			//the_posts_navigation();

		else :

			//get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
