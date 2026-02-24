<?php
/**
 * Title: 404
 * Slug: medigrowth/404
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"404 Page"},"className":"error-page","style":{"spacing":{"padding":{"top":"120px"}}},"backgroundColor":"custom-primary-gallery","layout":{"type":"constrained"}} -->
<main class="wp-block-group error-page has-custom-primary-gallery-background-color has-background" style="padding-top:120px"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"error-message","style":{"spacing":{"padding":{"bottom":"60px"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group error-message" style="padding-bottom:60px"><!-- wp:heading {"textAlign":"center","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
<h1 class="wp-block-heading has-text-align-center has-secondary-color has-text-color has-link-color"><?php esc_html_e( '404', 'medigrowth' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"32px","bottom":"32px"}}},"fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size" style="margin-top:32px;margin-bottom:32px;font-style:normal;font-weight:700"><?php esc_html_e( 'Something went wrong!', 'medigrowth' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","className":"is-style-shadow"} -->
<div class="wp-block-button is-style-shadow"><a class="wp-block-button__link has-text-align-center wp-element-button"><?php esc_html_e( 'Back To Home', 'medigrowth' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"site-footer"} /-->
 