<?php
/**
 * Title: Blog Posts
 * Slug: swasthika/blog-posts
 * Categories: swasthika-fse
 * Block Types: core/post-conent, core/query, core/post-title
 *
 * @package swasthika
 * @since 1.0.0
 */
?>
<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull" style="padding-top:0;padding-bottom:0"><!-- wp:group {"metadata":{"categories":["swasthika-fse"],"patternName":"swasthika/inner-banner","name":"Inner Banner"},"align":"full","style":{"spacing":{"padding":{"top":"170px","bottom":"170px"}}},"gradient":"blue-midnight","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-blue-midnight-gradient-background has-background" style="padding-top:170px;padding-bottom:170px"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:bcn/breadcrumb-trail /-->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php echo esc_html__( 'Blog', 'swasthika' ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:group {"className":"padding-large  blog-highlight","style":{"spacing":{"padding":{"top":"120px","bottom":"120px"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group padding-large blog-highlight" style="padding-top:120px;padding-bottom:120px"><!-- wp:query {"queryId":0,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]},"layout":{"type":"constrained"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"40px"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"blog-card","style":{"border":{"radius":"24px","bottom":{"color":"var:preset|color|primary-300","width":"4px"},"top":{},"right":{},"left":{}},"spacing":{"blockGap":"0"},"dimensions":{"minHeight":"100%"}},"backgroundColor":"primary-200","layout":{"type":"constrained"}} -->
<div class="wp-block-group blog-card has-primary-200-background-color has-background" style="border-radius:24px;border-bottom-color:var(--wp--preset--color--primary-300);border-bottom-width:4px;min-height:100%"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"auto","width":"100%","height":"230px","rel":"#","linkTarget":"_blank","style":{"border":{"radius":{"topLeft":"24px","topRight":"24px"}}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group"><!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-900"}}},"spacing":{"margin":{"bottom":"16px"}}},"textColor":"primary-900","fontSize":"body-xxl"} /-->

<!-- wp:post-title {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"bottom":"24px"}}},"textColor":"primary","fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"read-more","layout":{"type":"constrained","justifyContent":"right"}} -->
<div class="wp-block-group read-more"><!-- wp:read-more {"content":"Read More"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"arrow","showLabel":false,"className":"blog-pagination","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-100"}}}},"textColor":"primary-100","fontSize":"x-small","fontFamily":"manrope","layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers {"midSize":1,"fontSize":"body-md"} /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when a query returns no results.","fontSize":"body-xl"} -->
<p class="has-text-align-center has-body-xl-font-size"><?php echo esc_html__( 'No results found', 'swasthika' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->