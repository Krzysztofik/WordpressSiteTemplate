<?php
/**
 * Title: home
 * Slug: mrwriter/home
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:columns {"style":{"spacing":{"padding":{"bottom":"0px"},"margin":{"bottom":"0px"}}}} -->
<div class="wp-block-columns" style="margin-bottom:0px;padding-bottom:0px"><!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"align":"center","id":9,"sizeSlug":"full","linkDestination":"none","style":{"border":{"width":"0px","style":"none","radius":"100px"},"color":{"duotone":["#000000","#ffffff"]}}} -->
<figure class="wp-block-image aligncenter size-full has-custom-border"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/potrait-image-round.png" alt="<?php echo esc_attr_e( 'mrwriter', 'mrwriter' ); ?>" class="wp-image-9" style="border-style:none;border-width:0px;border-radius:100px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"textAlign":"center","level":1,"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"fontSize":"large"} -->
<h1 class="wp-block-heading alignwide has-text-align-center has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--40)">Mr. Writer</h1>
<!-- /wp:heading -->

<!-- wp:navigation {"ref":7,"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"center"}} /-->

<!-- wp:spacer {"height":"30px","width":"72px"} -->
<div style="height:30px;width:72px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"queryId":0,"query":{"perPage":"5","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"list","columns":3},"layout":{"type":"constrained","wideSize":"100%","justifyContent":"center","contentSize":"100%"}} -->
<div class="wp-block-query"><!-- wp:post-template {"align":"center"} -->
<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained","justifyContent":"center","contentSize":""}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--30)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"padding":{"left":"0","right":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-right:0;padding-left:0"><!-- wp:post-title {"textAlign":"left","isLink":true,"style":{"typography":{"fontSize":"1.6rem"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"textColor":"contrast"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained","justifyContent":"right","contentSize":"100%"}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-date {"textAlign":"right","isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"fontSize":"small"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"chevron","align":"wide","layout":{"type":"flex","justifyContent":"space-between","orientation":"horizontal"}} -->
<!-- wp:query-pagination-previous {"label":"Newer Posts"} /-->

<!-- wp:query-pagination-next {"label":"Older Posts"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query -->

<!-- wp:spacer {"height":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d60)"} -->
<div style="height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns alignwide" style="padding-left:var(--wp--preset--spacing--80)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.2"}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="line-height:1.2">Connect with me socially -</p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"secondary","iconColorValue":"#abb8c3","iconBackgroundColor":"tertiary","iconBackgroundColorValue":"#050505","className":"has-icon-color"} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"#","service":"facebook","label":"#"} /-->

<!-- wp:social-link {"url":"#","service":"twitter","label":"#"} /-->

<!-- wp:social-link {"url":"#","service":"mastodon"} /-->

<!-- wp:social-link {"url":"#","service":"wordpress"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column {"layout":{"type":"default"}} -->
<div class="wp-block-column"><!-- wp:separator {"style":{"spacing":{"margin":{"top":"0px","bottom":"0"}}},"backgroundColor":"secondary","className":"is-style-dots"} -->
<hr class="wp-block-separator has-text-color has-secondary-color has-alpha-channel-opacity has-secondary-background-color has-background is-style-dots" style="margin-top:0px;margin-bottom:0"/>
<!-- /wp:separator --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","theme":"mrwriter","tagName":"footer"} /-->