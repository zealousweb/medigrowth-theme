<?php
/**
 * Title: header
 * Slug: swasthika/header
 * Inserter: no
 */
?>
<!-- wp:group {"className":"stuck","style":{"position":{"type":"sticky","top":"0px"}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":"1360px"}} -->
<div class="wp-block-group stuck has-base-background-color has-background"><!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"padding":{"top":"16px","bottom":"16px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile" style="padding-top:16px;padding-bottom:16px"><!-- wp:column {"verticalAlignment":"center","width":"30%","layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"lightbox":{"enabled":false},"width":"220px","sizeSlug":"full","linkDestination":"custom","className":"site-logo"} -->
<figure class="wp-block-image size-full is-resized site-logo"><a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/header-logo.avif'; ?>" alt="<?php echo esc_attr_e( 'Header Logo', 'swasthika' ); ?>" style="width:220px" /></a></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%"><!-- wp:group {"className":"menu-reverse","style":{"spacing":{"blockGap":"32px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right"}} -->
<div class="wp-block-group menu-reverse"><!-- wp:navigation {"icon":"menu","style":{"spacing":{"blockGap":"32px"}}} /-->

<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search","buttonText":"Search","buttonPosition":"button-only","buttonUseIcon":true,"isSearchFieldHidden":true,"style":{"border":{"radius":"12px"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->