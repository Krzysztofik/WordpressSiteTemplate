<?php
/**
 * Title: Blog Archive Page
 * Slug: blog-archive-page
 * Description: If you want to have a seperate blog page then you can use this template for you. This template is for you which has a featured blog section, where you can show all of your blogs.
 * Categories: posts, portfolio
 * Keywords: Blog Archive, All blog posts, blog page, featured blog
 * Viewport Width: 1280
 * Block Types: 
 * Post Types: 
 * Inserter: true
 */

?>
<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"0","left":"var:preset|spacing|30"},"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"},"blockGap":"var:preset|spacing|80"},"color":{"background":"#abb7c226"},"border":{"radius":"20px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignwide has-background" style="border-radius:20px;background-color:#abb7c226;margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20);padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)"><!-- wp:query {"queryId":27,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"only","inherit":false},"displayLayout":{"type":"list"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:post-featured-image {"isLink":true,"style":{"color":{"duotone":"unset"},"border":{"radius":"5px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"medium"} /-->

<!-- wp:post-excerpt {"moreText":"Read More →","style":{"spacing":{"padding":{"bottom":"0"}}},"fontSize":"small"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"tagName":"main","align":"wide","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignwide"><!-- wp:query {"queryId":22,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":3},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}},"border":{"radius":"20px"},"color":{"background":"#abb7c21f"}},"layout":{"inherit":false}} -->
<div class="wp-block-group has-background" style="border-radius:20px;background-color:#abb7c21f;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:post-featured-image {"isLink":true,"height":"200px"} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:post-author {"avatarSize":24,"showBio":false,"byline":"Written by -","isLink":true} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->

<!-- wp:post-excerpt {"moreText":"Read More →","fontSize":"small"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:spacer {"height":"47px"} -->
<div style="height:47px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query-pagination {"paginationArrow":"chevron","layout":{"type":"flex","justifyContent":"center"},"fontSize":"small"} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
