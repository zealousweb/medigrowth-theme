<?php
/**
 * Title: About Banner
 * Slug: swasthika/about-banner
 * Categories: swasthika-fse
 *
 * @package swasthika
 * @since 1.0
 */
?>
<!-- wp:group {"metadata":{"categories":["swasthika-fse"],"patternName":"swasthika/about-banner","name":"About Banner"},"align":"full","className":"about-banner","style":{"spacing":{"blockGap":"0px","margin":{"top":"0px","bottom":"0px"}}},"gradient":"blue-midnight","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull about-banner has-blue-midnight-gradient-background has-background" style="margin-top:0px;margin-bottom:0px"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"75px","bottom":"75px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:75px;padding-bottom:75px"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"50px"},"padding":{"right":"0px","left":"0px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="padding-right:0px;padding-left:0px"><!-- wp:column {"verticalAlignment":"center","width":"55%","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:heading {"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><strong><?php echo esc_html__( 'Dr. Kabir Nair', 'swasthika' ); ?></strong></h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-800"}}}},"textColor":"primary-800","fontSize":"small"} -->
<h6 class="wp-block-heading has-primary-800-color has-text-color has-link-color has-small-font-size"><?php echo esc_html__( 'Cardiologist', 'swasthika' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"10px","bottom":"24px"}},"elements":{"link":{"color":{"text":"var:preset|color|primary-800"}}}},"textColor":"primary-800","fontSize":"body-xxl"} -->
<p class="has-primary-800-color has-text-color has-link-color has-body-xxl-font-size" style="margin-top:10px;margin-bottom:24px"><?php echo esc_html__( 'MBBS, MD (Cardiology), DM (Cardiology) - AIIMS, New Delhi', 'swasthika' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"check-list","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-800"}}}},"textColor":"primary-800","fontSize":"custom-3"} -->
<ul class="wp-block-list check-list has-primary-800-color has-text-color has-link-color has-custom-3-font-size"><!-- wp:list-item {"style":{"typography":{"lineHeight":"1.5"},"spacing":{"margin":{"bottom":"13px"}}},"fontSize":"body-md"} -->
<li class="has-body-md-font-size" style="margin-bottom:13px;line-height:1.5"><?php echo esc_html__( 'Gold Medalist with expertise in preventive cardiology and heart health.', 'swasthika' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"style":{"spacing":{"margin":{"bottom":"13px"}}},"fontSize":"body-md"} -->
<li class="has-body-md-font-size" style="margin-bottom:13px"><?php echo esc_html__( 'Experienced heart specialist providing advanced cardiac care and treatments.', 'swasthika' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"style":{"spacing":{"margin":{"bottom":"13px"}}},"fontSize":"body-md"} -->
<li class="has-body-md-font-size" style="margin-bottom:13px"><?php echo esc_html__( 'Expert in diagnosing and treating heart diseases with advanced care.', 'swasthika' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"fontSize":"body-md"} -->
<li class="has-body-md-font-size"><?php echo esc_html__( 'Dedicated to improving heart health through personalized treatment plans.', 'swasthika' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"50px"}}}} -->
<div class="wp-block-buttons" style="margin-top:50px"><!-- wp:button {"className":"is-style-shadow"} -->
<div class="wp-block-button is-style-shadow"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Book An Appointment', 'swasthika' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"45%","layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:image {"id":39,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"24px"},"color":[]}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/doctor-profile.avif'; ?>" alt="<?php echo esc_attr__( 'Doctor Profile', 'swasthika' ); ?>" class="wp-image-39" style="border-radius:24px" /></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->