<?php
/**
 * Title: Patient Reviews
 * Slug: medigrowth/patient-reviews
 * Categories: medigrowth-fse
 *
 * @package medigrowth
 * @since 1.0
 */
?>
<!-- wp:group {"metadata":{"categories":["medigrowth-fse"],"patternName":"medigrowth/patient-reviews","name":"Patient Reviews"},"className":"patient-reviews margin-large ","style":{"spacing":{"padding":{"top":"0px","bottom":"0px"},"margin":{"top":"120px","bottom":"120px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group patient-reviews margin-large" style="margin-top:120px;margin-bottom:120px;padding-top:0px;padding-bottom:0px"><!-- wp:columns {"verticalAlignment":"bottom","className":"is-style-fill fill-arrow","style":{"spacing":{"padding":{"top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-bottom is-style-fill fill-arrow" style="padding-top:0px;padding-bottom:0px"><!-- wp:column {"verticalAlignment":"bottom","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:60%"><!-- wp:heading {"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size"><?php echo esc_html_e( 'Patient Reviews', 'medigrowth' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-900"}}},"spacing":{"margin":{"top":"16px"}}},"textColor":"primary-900","fontSize":"body-xl"} -->
<p class="has-primary-900-color has-text-color has-link-color has-body-xl-font-size" style="margin-top:16px"><?php echo esc_html_e( 'Lorem ipsum dolor sit amet consectetur. Semper odio turpis rhoncus luctus. Libero nunc sed.', 'medigrowth' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"40%","layout":{"type":"constrained"}} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:40%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-shadow"} -->
<div class="wp-block-button is-style-shadow"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_e( 'View All Reviews', 'medigrowth' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"40px","left":"40px"},"margin":{"top":"48px"},"padding":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:48px;padding-top:0;padding-bottom:0"><!-- wp:column {"className":"review-card","style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"24px","right":"24px"}},"border":{"radius":"16px"}},"backgroundColor":"custom-primary-gallery-transparent"} -->
<div class="wp-block-column review-card has-custom-primary-gallery-transparent-background-color has-background" style="border-radius:16px;padding-top:30px;padding-right:24px;padding-bottom:30px;padding-left:24px"><!-- wp:quote {"className":"is-style-plain","style":{"spacing":{"margin":{"right":"0px","left":"0px","top":"0px","bottom":"0px"}}}} -->
<blockquote class="wp-block-quote is-style-plain" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-800"}}},"typography":{"lineHeight":"1.55"}},"textColor":"primary-800","fontSize":"body-l"} -->
<p class="has-primary-800-color has-text-color has-link-color has-body-l-font-size" style="line-height:1.55"><img class="wp-image-26" style="width: 30px" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/double-quotes.avif'; ?>" alt="<?php echo esc_attr_e( 'Double Quotes', 'medigrowth' ); ?>"><?php echo esc_html_e( 'Lorem ipsum dolor sit amet consectetur. At ac tincidunt odio condimentum et non aliquam habitant. Varius elementum ornare a mollis. Ut tempor tortor vel dis vitae. Dictum auctor vulputate gravida ut odio amet ut mattis enim.', 'medigrowth' ); ?></p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:quote -->

<!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"margin":{"top":"24px"},"blockGap":{"left":"0px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile" style="margin-top:24px"><!-- wp:column {"verticalAlignment":"center","width":"60px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60px"><!-- wp:image {"width":"60px","height":"60px","scale":"contain","sizeSlug":"full","linkDestination":"none","align":"left","className":"is-style-default","style":{"spacing":{"margin":{"right":"0"}},"border":{"radius":"50%"}}} -->
<figure class="wp-block-image alignleft size-full is-resized has-custom-border is-style-default" style="margin-right:0"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/client-profile.avif'; ?>" alt="<?php echo esc_attr_e( 'Client Profile', 'medigrowth' ); ?>" style="border-radius:50%;object-fit:contain;width:60px;height:60px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"","layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-100"}}},"spacing":{"padding":{"left":"16px"}}},"textColor":"primary-100","fontSize":"body-xl"} -->
<p class="has-primary-100-color has-text-color has-link-color has-body-xl-font-size" style="padding-left:16px"><?php echo esc_html_e( '~John', 'medigrowth' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"review-card","style":{"spacing":{"padding":{"right":"24px","left":"24px","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"radius":"16px"}},"backgroundColor":"custom-primary-gallery-transparent"} -->
<div class="wp-block-column review-card has-custom-primary-gallery-transparent-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--40);padding-right:24px;padding-bottom:var(--wp--preset--spacing--40);padding-left:24px"><!-- wp:quote {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}}} -->
<blockquote class="wp-block-quote" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-800"}}},"typography":{"lineHeight":"1.55"}},"textColor":"primary-800","fontSize":"body-l"} -->
<p class="has-primary-800-color has-text-color has-link-color has-body-l-font-size" style="line-height:1.55"><img class="wp-image-26" style="width: 30px" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/double-quotes.avif'; ?>" alt="<?php echo esc_attr_e( 'Double Quotes', 'medigrowth' ); ?>"><?php echo esc_html_e( 'Lorem ipsum dolor sit amet consectetur. At ac tincidunt odio condimentum et non aliquam habitant. Varius elementum ornare a mollis. Ut tempor tortor vel dis vitae. Dictum auctor vulputate gravida ut odio amet ut mattis enim.', 'medigrowth' ); ?></p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:quote -->

<!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"margin":{"top":"24px"},"blockGap":{"left":"0px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile" style="margin-top:24px"><!-- wp:column {"verticalAlignment":"center","width":"60px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60px"><!-- wp:image {"width":"60px","height":"60px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50%"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/client-profile.avif'; ?>" alt="<?php echo esc_attr_e( 'Client Profile', 'medigrowth' ); ?>" style="border-radius:50%;object-fit:contain;width:60px;height:60px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":""} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-100"}}},"spacing":{"padding":{"left":"16px"}}},"textColor":"primary-100","fontSize":"body-xl"} -->
<p class="has-primary-100-color has-text-color has-link-color has-body-xl-font-size" style="padding-left:16px"><?php echo esc_html_e( '~John', 'medigrowth' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"review-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"24px","right":"24px"}},"border":{"radius":"16px"}},"backgroundColor":"custom-primary-gallery-transparent"} -->
<div class="wp-block-column review-card has-custom-primary-gallery-transparent-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--40);padding-right:24px;padding-bottom:var(--wp--preset--spacing--40);padding-left:24px"><!-- wp:quote {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}}} -->
<blockquote class="wp-block-quote" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-800"}}},"typography":{"lineHeight":"1.55"}},"textColor":"primary-800","fontSize":"body-l"} -->
<p class="has-primary-800-color has-text-color has-link-color has-body-l-font-size" style="line-height:1.55"><img class="wp-image-26" style="width: 30px" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/double-quotes.avif'; ?>" alt="<?php echo esc_attr_e( 'Double Quotes', 'medigrowth' ); ?>"><?php echo esc_html_e( 'Lorem ipsum dolor sit amet consectetur. At ac tincidunt odio condimentum et non aliquam habitant. Varius elementum ornare a mollis. Ut tempor tortor vel dis vitae. Dictum auctor vulputate gravida ut odio amet ut mattis enim.', 'medigrowth' ); ?></p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:quote -->

<!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"margin":{"top":"24px"},"blockGap":{"left":"0px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile" style="margin-top:24px"><!-- wp:column {"verticalAlignment":"center","width":"60px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60px"><!-- wp:image {"width":"60px","height":"60px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50%"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/client-profile.avif'; ?>" alt="<?php echo esc_attr_e( 'Client Profile', 'medigrowth' ); ?>" style="border-radius:50%;object-fit:contain;width:60px;height:60px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":""} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-100"}}},"spacing":{"padding":{"left":"16px"}}},"textColor":"primary-100","fontSize":"body-xl"} -->
<p class="has-primary-100-color has-text-color has-link-color has-body-xl-font-size" style="padding-left:16px"><?php echo esc_html_e( '~John', 'medigrowth' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->