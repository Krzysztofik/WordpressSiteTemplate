<?php
/**
* Template Name: Header Two
*
*/
?>
<header id="masthead" class="site-header header-one" style="background-image: url(<?php echo esc_url( get_header_image() ); ?>);">
	<div class="main-header">
		<div class="container">
			<div class="row">
				<div class="col-md-3 align-self-center">
					<div class="site-branding header-logo">
						<?php
						if ( has_custom_logo() ) :
							the_custom_logo();
						endif;
						?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php
							$sports_blogger_description = get_bloginfo( 'description', 'display' );
							if ( $sports_blogger_description || is_customize_preview() ) :
								?>
							<p class="site-description"><?php echo esc_html( $sports_blogger_description ); /* WPCS: xss ok. */ ?></p>
								<?php
						endif;
						?>
					</div><!-- .site-branding -->
				</div>
				<div class="col-md-9 m-auto align-self-center text-right">
					<div class="cssmenu text-right" id="cssmenu">
						<?php
						wp_nav_menu(
							array(
								'theme_location'    => 'main-menu',
								'container'         => 'ul',
							)
						);
						?>
						<a href="#" class="menu-search"><i class="fa fa-search"></i></a>
						<div class="search-menu__wrapper">
							<form class="search-form" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
								<input type="text" class="form-control" id="search" placeholder="<?php esc_attr_e( 'Search Here.....', 'sports-blogger' ); ?>" value="<?php echo esc_attr( the_search_query() ); ?>" name="s">
								<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header><!-- #masthead -->
