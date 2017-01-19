<?php
/*
	Template Name: About Page	
*/

get_header(); ?>

<!-- PACKAGES
	================================================== -->
    <div id="about-me" class="window">
        <div class="container">
	<?php while ( have_posts() ) : the_post(); ?>
             <div class="aboutme-content">
                <p><?php the_content(); ?></p>
            </div>
    <?php endwhile; ?>
        </div>
	</div>

<?php get_footer(); ?>