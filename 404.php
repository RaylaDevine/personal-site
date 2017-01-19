<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Sliding_Portfolio
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header error-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'slidingportfolio' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p class="error"><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below?', 'slidingportfolio' ); ?>
<br><a href="http://rashauneshalomi.com/">Home</a>
<br><a href="http://rashauneshalomi.com/#work">Work</a></p>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
