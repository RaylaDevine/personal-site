<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Sliding_Portfolio
 */

get_header(); ?>

    <div id="single" class="window">
        <?php echo wp_get_attachment_image( get_the_ID(), 'large' ); ?>

        <div class="entry"> 
    <div class="entry-inner">
        <?php the_content(); ?>

        <p class='resolutions'> 
        <?php
            $images = array();
            $image_sizes = get_intermediate_image_sizes();
            array_unshift( $image_sizes, 'full' );
            foreach( $image_sizes as $image_size ) {
                $image = wp_get_attachment_image_src( get_the_ID(), $image_size );
                $name = $image_size . ' (' . $image[1] . 'x' . $image[2] . ')';
                $images[] = '<a href="' . $image[0] . '">' . $name . '</a>';
            }
            echo implode( ' | ', $images );
        ?>
        </p>
    </div>
    <div class="clear"></div>               
</div><!--/.entry-->
    </div>

<?php
get_footer();
