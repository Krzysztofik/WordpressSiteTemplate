<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Sports Blogger
 */
get_header();
?>
	<section id="primary" class="content-area archive-page-section">
		<main id="main" class="site-main">
			<?php
			do_action( 'sports_blogger_before_default_page' );
			if ( have_posts() ) :
				?>
				   <header class="archive-page-header">
						<h1 class="page-title">
						<?php
						/* translators: %s: search query. */
						printf( esc_html__( 'Search Results for: %s', 'sports-blogger' ), '<span>' . get_search_query() . '</span>' );
						?>
						</h1>
					</header><!-- .page-header -->
					<?php
					echo '<div class="row masonaryactive">';
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content/content', 'search' );
					endwhile;
					echo '</div>';
					sports_blogger_navigation();
				else :
					get_template_part( 'template-parts/content/content', 'none' );
				endif;
				do_action( 'sports_blogger_after_default_page' );
				?>

		</main><!-- #main -->
	</section><!-- #primary -->
<?php get_footer(); ?>
