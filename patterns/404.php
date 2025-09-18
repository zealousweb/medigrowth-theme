<?php
/**
 * Title: 404
 * Slug: swasthika/404
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"404 Page"},"className":"error-page","style":{"spacing":{"padding":{"top":"120px"}}},"backgroundColor":"custom-primary-gallery","layout":{"type":"constrained"}} -->
<main class="wp-block-group error-page has-custom-primary-gallery-background-color has-background" style="padding-top:120px"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"error-message","style":{"spacing":{"padding":{"bottom":"245px"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group error-message" style="padding-bottom:245px"><!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
<h1 class="wp-block-heading has-secondary-color has-text-color has-link-color"><?php echo esc_html_e( '404', 'swasthika' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"32px","bottom":"32px"}}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="margin-top:32px;margin-bottom:32px;font-style:normal;font-weight:700"><?php echo esc_html_e( 'Something went wrong!', 'swasthika' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button is-style-shadow"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_e( 'Back To Home', 'swasthika' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"error-page-bg","layout":{"type":"constrained","contentSize":"","justifyContent":"right"}} -->
<div class="wp-block-group error-page-bg"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/404-background.avif'; ?>" alt="<?php echo esc_attr_e( '404 Background', 'swasthika' ); ?>" /></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"site-footer"} /-->