<?php
/**
 * Title: Blog Highlights
 * Slug: medigrowth/blog-highlights
 * Categories: medigrowth-fse
 *
 * @package medigrowth
 * @since 1.0
 */
?>
<!-- wp:group {"metadata":{"categories":["medigrowth-fse"],"patternName":"medigrowth/blog-highlights","name":"Blog Highlights"},"align":"full","className":"blog-highlight","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull blog-highlight"><!-- wp:group {"align":"full","className":"padding-large","style":{"spacing":{"padding":{"top":"120px","bottom":"120px"}}},"backgroundColor":"custom-primary-gallery","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group alignfull padding-large has-custom-primary-gallery-background-color has-background" style="padding-top:120px;padding-bottom:120px"><!-- wp:columns {"className":"blog-highlight-cta","style":{"spacing":{"margin":{"bottom":"48px"}}}} -->
<div class="wp-block-columns blog-highlight-cta" style="margin-bottom:48px"><!-- wp:column {"verticalAlignment":"bottom","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:60%"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"16px"}}},"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size" style="margin-bottom:16px"><?php esc_html_e( 'Blogs', 'medigrowth' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-900"}}}},"textColor":"primary-900","fontSize":"body-xl"} -->
<p class="has-primary-900-color has-text-color has-link-color has-body-xl-font-size"><?php esc_html_e( 'Lorem ipsum dolor sit amet consectetur. Semper odio turpis rhoncus luctus. Libero nunc sed.', 'medigrowth' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:40%"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right","verticalAlignment":"bottom"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-shadow"} -->
<div class="wp-block-button is-style-shadow"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'View All Blogs', 'medigrowth' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:query {"queryId":13,"query":{"perPage":2,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"metadata":{"categories":["posts"],"patternName":"core/query-grid-posts","name":"Grid"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"40px"}},"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:group {"className":"blog-card","style":{"border":{"radius":"24px","bottom":{"color":"var:preset|color|primary-300","width":"4px"}},"spacing":{"blockGap":"0"},"dimensions":{"minHeight":"100%"}},"backgroundColor":"primary-200","layout":{"type":"constrained"}} -->
<div class="wp-block-group blog-card has-primary-200-background-color has-background" style="border-radius:24px;border-bottom-color:var(--wp--preset--color--primary-300);border-bottom-width:4px;min-height:100%"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"auto","width":"100%","height":"300px","rel":"#","linkTarget":"_blank","style":{"border":{"radius":{"topLeft":"24px","topRight":"24px"}}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"24px","bottomRight":"24px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:24px;border-bottom-right-radius:24px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-900"}}},"spacing":{"margin":{"bottom":"16px","right":"0px","left":"0px"}}},"textColor":"primary-900","fontSize":"body-xxl"} /-->

<!-- wp:post-title {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"bottom":"24px"}}},"textColor":"primary","fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"read-more","layout":{"type":"constrained","justifyContent":"right"}} -->
<div class="wp-block-group read-more"><!-- wp:read-more {"content":"Read More"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->