<?php
/**
 * 404 Section
 * 
 * slug: tutor-elearning/404-page
 * title: 404 Page
 * categories: tutor-elearning
 */

return array(
    'title'      =>__( '404 Page', 'tutor-elearning' ),
    'categories' => array( 'tutor-elearning' ),
    'content'    => '<!-- wp:group {"tagName":"main","className":"wp-block-group alignfull","style":{"spacing":{"padding":{"top":"60px","bottom":"60px"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull has-background-background-color has-background" style="padding-top:60px;padding-bottom:60px"><!-- wp:heading {"textAlign":"center","className":"not-found-heading","style":{"typography":{"fontSize":"200px"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent"} -->
<h2 class="wp-block-heading has-text-align-center not-found-heading has-accent-color has-text-color has-link-color" style="font-size:200px">404</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"content-heading"} -->
<p class="has-text-align-center has-content-heading-font-size"><strong>Unfortunately we can’t find that page.</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">The page you are looking for doesnt exist or has been moved. Try another url or go to the site homepage.</p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"Search","showLabel":false,"width":75,"widthUnit":"%","buttonText":"Search","align":"center","style":{"color":{"background":"#2c4971"}}} /--></main>
<!-- /wp:group -->',
);