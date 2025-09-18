<?php
/**
 * Title: Fifty Fifty Left Image
 * Description: A block that displays an image on the left and text on the right.
 * Slug: swasthika/fifty-fifty-left-image
 * Categories: swasthika-fse
 *
 * @package swasthika
 * @since 1.0
 */
?>
<!-- wp:group {"metadata":{"categories":["swasthika-fse"],"patternName":"swasthika/fifty-fifty-left-image","name":"Fifty Fifty Left Image"},"align":"full","className":"margin-large ","style":{"spacing":{"blockGap":"60px","padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"top":"120px","bottom":"120px"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignfull margin-large" style="margin-top:120px;margin-bottom:120px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"60px"},"padding":{"right":"0px","left":"0px"}}}} -->
<div class="wp-block-columns" style="padding-right:0px;padding-left:0px"><!-- wp:column {"layout":{"type":"default"}} -->
<div class="wp-block-column"><!-- wp:image {"id":24,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"24px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/doctor-profile.avif'; ?>" alt="<?php echo esc_attr_e( 'Doctor Profile', 'swasthika' ); ?>" class="wp-image-24" style="border-radius:24px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size"><strong><?php echo esc_html_e( 'Dr. Kabir Nair', 'swasthika' ); ?></strong></h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-800"}}},"spacing":{"margin":{"top":"5px","bottom":"5px"}}},"textColor":"primary-800","fontSize":"small"} -->
<h3 class="wp-block-heading has-primary-800-color has-text-color has-link-color has-small-font-size" style="margin-top:5px;margin-bottom:5px"><?php echo esc_html_e( 'Cardiologist', 'swasthika' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"10px","bottom":"24px"}},"elements":{"link":{"color":{"text":"var:preset|color|primary-800"}}}},"textColor":"primary-800","fontSize":"body-xxl"} -->
<p class="has-primary-800-color has-text-color has-link-color has-body-xxl-font-size" style="margin-top:10px;margin-bottom:24px"><?php echo esc_html_e( 'MBBS, MD (Cardiology), DM (Cardiology) - AIIMS, New Delhi', 'swasthika' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"check-list","fontSize":"custom-3"} -->
<ul class="wp-block-list check-list has-custom-3-font-size"><!-- wp:list-item {"style":{"typography":{"lineHeight":"1.5"},"spacing":{"margin":{"bottom":"13px"}}},"fontSize":"custom-3"} -->
<li class="has-custom-3-font-size" style="margin-bottom:13px;line-height:1.5"><?php echo esc_html_e( 'Gold Medalist with expertise in preventive cardiology and heart health.', 'swasthika' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"style":{"spacing":{"margin":{"bottom":"13px"}}}} -->
<li style="margin-bottom:13px"><?php echo esc_html_e( 'Experienced heart specialist providing advanced cardiac care and treatments.', 'swasthika' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"style":{"spacing":{"margin":{"bottom":"13px"}}}} -->
<li style="margin-bottom:13px"><?php echo esc_html_e( 'Expert in diagnosing and treating heart diseases with advanced care.', 'swasthika' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html_e( 'Dedicated to improving heart health through personalized treatment plans.', 'swasthika' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"50px"}}}} -->
<div class="wp-block-buttons" style="margin-top:50px"><!-- wp:button {"className":"is-style-shadow"} -->
<div class="wp-block-button is-style-shadow"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_e( 'Book An Appointment', 'swasthika' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->