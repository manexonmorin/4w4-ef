<?php
/**
 * Template part l'affichage des bloc de cours dans front-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme4w4
 */
global $tPropriété;
?>

<article>
	<p><?php echo $tPropriété['sigle']; ?></p>
	<a href="<?php echo get_permalink() ?>"><?php echo $tPropriété['typeCours']; ?></a>
	<p><?php echo $tPropriété['nbHeure'] ?></p>
	<p>Session : <?php echo $tPropriété['session']; ?></p>
</article>
