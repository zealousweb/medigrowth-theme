<?php
/**
 * Title: Hero Banner
 * Slug: medigrowth/hero-banner
 * Categories: medigrowth-fse
 *
 * @package medigrowth
 * @since 1.0
 */
?>
<!-- wp:group {"metadata":{"categories":["medigrowth-fse"],"patternName":"medigrowth/hero-banner","name":"Hero Banner"},"align":"full","className":"padding-large hero-banner","style":{"dimensions":{"minHeight":""},"spacing":{"padding":{"top":"70px","bottom":"70px"}},"background":{"backgroundImage":{"url":"<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/hero-banner.avif'; ?>","id":546,"source":"file","title":"hero-banner"},"backgroundSize":"cover"}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignfull padding-large hero-banner" style="padding-top:70px;padding-bottom:70px"><!-- wp:columns {"style":{"spacing":{"padding":{"right":"0px","left":"0px"}}}} -->
<div class="wp-block-columns" style="padding-right:0px;padding-left:0px"><!-- wp:column {"width":"65%"} -->
<div class="wp-block-column" style="flex-basis:65%"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<h1 class="wp-block-heading has-base-color has-text-color has-link-color"><?php esc_html_e( 'Personalized Healthcare, Tailored for You', 'medigrowth' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"small"} -->
<p class="has-base-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Bringing quality healthcare to your doorstep with personalized care.', 'medigrowth' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"45px"}}}} -->
<div class="wp-block-buttons" style="margin-top:45px"><!-- wp:button {"className":"is-style-shadow green"} -->
<div class="wp-block-button is-style-shadow green"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Book An Appointment', 'medigrowth' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->