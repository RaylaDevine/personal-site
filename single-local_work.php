<?php
/**
 * The template for displaying all single local projects.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Sliding_Portfolio
 */
get_header(); ?>

    <div id="single" class="window">
        <div class="single-content container">
        	<?php while ( have_posts() ) : the_post(); 
                $shot_1 = get_field( "shot_1");
                $shot_2 = get_field( "shot_2" );
                $shot_3 = get_field( "shot_3" );
                $size = "full";
            ?>
            <h2 class="title"><?php the_title(); ?></h2>
                <div class="screenshots">
                    <div class="shot">
                        <a href="<?php echo get_attachment_link($shot_1); ?>" target="blank"><img src="<?php echo wp_get_attachment_image( $shot_1, $size ); ?></a>
                    </div>
                    <div class="shot">
                        <a href="<?php echo get_attachment_link($shot_2); ?>" target="blank"><img src="<?php echo wp_get_attachment_image( $shot_2, $size ); ?>"></a>
                    </div>
                    <div class="shot">
                        <a href="<?php echo get_attachment_link($shot_3); ?>" target="blank"><img src="<?php echo wp_get_attachment_image( $shot_3, $size ); ?>"></a>
                    </div>
                </div>
            <p><?php the_content(); ?></p>
        </div>
        </div>
        </div>
    <?php endwhile; ?>
    </div>

<?php
get_footer();
