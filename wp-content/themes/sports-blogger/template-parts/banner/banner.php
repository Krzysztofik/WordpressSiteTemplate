<?php
/**
 * Sports Blogger Hero Home two
 */

 $banner_title = get_theme_mod('banner_title', __('Welcome to the Sports Blog!', 'sports-blogger'));
 $button_text = get_theme_mod('banner_button_text', __( 'Discover', 'sports-blogger' ));
 $button_link = get_theme_mod('banner_button_link', '#');

 $banners = array(
    [
        'title' => $banner_title,
        'btn-link' => $button_link,
        'btn-text' => $button_text
    ]
 );
 ?>

<?php
	$social_facebook  = get_theme_mod( 'social_facebook', 'https://facebook.com/' );
	$social_instagram  = get_theme_mod( 'social_instagram', 'https://instagram.com/' );
	$social_linkedin  = get_theme_mod( 'social_linkedin', 'https://linkedin.com/' );
	$social_twitter  = get_theme_mod( 'social_twitter', 'https://twitter.com/' );
?>
 <section id="hero-section" class="banner-section">
     <div class="container">
        <div class="row banner-row-slider">
        <?php 
        $col_class = 'col-md-12 ';
        foreach($banners as $banner){
        ?>
            <div class="<?php echo $col_class; ?>align-self-center">
                <div class="hero-content mb-4 mb-md-0">
                    <?php
                    if(!empty($banner["title"])) :
                    ?>
                    <h2 class="banner-title mt-0"><?php echo wp_kses_post($banner["title"]); ?></h2>
                <?php endif;
                if (!empty($banner["btn-text"])):
                ?>
                    <div class="discover-me-button">
                        <a href="<?php echo esc_url($banner["btn-link"]);?>"><?php echo esc_html( $banner["btn-text"] );?></a>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php
        }
        ?>
        </div>
     </div>
     <div class="social">
        <div class="cssmenu" id="cssmenu_social">
            <ul class="social-links">
                <li class="social-links_fb"><a href="<?php echo $social_facebook;?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li class="social-links_insta"><a href="<?php echo $social_instagram;?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
                <li class="social-links_linkedin"><a href="<?php echo $social_linkedin;?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                <li class="social-links_twitter"><a href="<?php echo $social_twitter;?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
            </ul>
        </div>
    </div>
 </section>
