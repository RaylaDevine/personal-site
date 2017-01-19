<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Sliding_Portfolio
 */

$image_1 = get_field('image_1');
$image_link = get_field('image_link');
get_header(); ?>

    <div id="single" class="window">
        <div class="single-content container">
        			<?php
		while ( have_posts() ) : the_post(); ?>
        	<h2 class="title"><?php the_title(); ?></h2>
        	<a target="_blank" href="<?php echo $image_link; ?>"><img src="<?php echo get_field('image_1') ?>" alt="<?php echo $image_1['alt']; ?>"></a>
            <p><?php the_content(); ?></p>
        </div>
    <?php endwhile; ?>
    </div>

<?php
get_footer();
