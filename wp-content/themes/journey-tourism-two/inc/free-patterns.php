<?php 


/**
 * Registers block patterns and categories.
 *
 * @since 1.0
 *
 * @return void
 */

 function journeytourism_wpdocs_block_pattern_category() {
	register_block_pattern_category( 'free-patterns', array(
		'label' => __( 'Free Paterns', 'journey-tourism-two' )
	) );
}

add_action( 'init', 'journeytourism_wpdocs_block_pattern_category' );


 function journeytourism_custom_register_block_patterns()
{
  

    register_block_pattern(
        'Countries Stories', // Unique name for your pattern
        array(
            'title'       => __( 'Countries Stories', 'journey-tourism-two' ), // Title displayed in the block editor
            'description' => 'Section showing the posts of the blog', // Description of your pattern

            'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|70","right":"var:preset|spacing|30","left":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"backgroundColor":"custom-color-3","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-custom-color-3-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-2"}}},"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase","fontSize":"18px"},"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"textColor":"custom-color-2","className":"fade-up","fontFamily":"roboto"} -->
            <p class="has-text-align-center fade-up has-custom-color-2-color has-text-color has-link-color has-roboto-font-family" style="margin-top:var(--wp--preset--spacing--60);font-size:18px;font-style:normal;font-weight:500;text-transform:uppercase">come meet</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-1"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|80"}}},"textColor":"custom-color-1","className":"big-titles fade-up","fontSize":"x-large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-center big-titles fade-up has-custom-color-1-color has-text-color has-link-color has-tenor-sans-font-family has-x-large-font-size" style="margin-bottom:var(--wp--preset--spacing--80)">Countries Stories</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0","padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60"}},"dimensions":{"minHeight":"0px"},"color":{"background":"#ffffff00"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","orientation":"horizontal"}} -->
            <div class="wp-block-group alignfull has-background" style="background-color:#ffffff00;min-height:0px;margin-top:0;margin-bottom:0;padding-right:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:query {"queryId":0,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"parents":[]},"tagName":"main","layout":{"type":"constrained"}} -->
            <main class="wp-block-query"><!-- wp:post-template {"align":"full","className":"section-home-blog","layout":{"type":"grid","columnCount":2}} -->
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"var:preset|spacing|30"},"color":{"background":"#ffffff00"}},"className":"fade-up","layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group fade-up has-background" style="background-color:#ffffff00;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","width":"","height":"19em","className":"imgs-home-blog"} /-->
            
            <!-- wp:group {"style":{"typography":{"fontSize":"14px"},"position":{"type":""},"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"var:preset|spacing|30"},"color":{"background":"#ffffff00"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
            <div class="wp-block-group has-background" style="background-color:#ffffff00;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:14px"><!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-1"},":hover":{"color":{"text":"var:preset|color|custom-color-2"}}}},"typography":{"textDecoration":"none"}},"textColor":"custom-color-1","className":"big-titles","fontSize":"large","fontFamily":"tenor-sans"} /-->
            
            <!-- wp:post-excerpt {"excerptLength":10,"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-1"}}}},"textColor":"custom-color-1","fontSize":"smallbig"} /-->
            
            <!-- wp:post-date {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-1"}}}},"textColor":"custom-color-1","fontSize":"smallbig","fontFamily":"tenor-sans"} /-->
            
            <!-- wp:group {"style":{"border":{"width":"1px","color":"#68b684","radius":"20px"},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"default"}} -->
            <div class="wp-block-group has-border-color" style="border-color:#68b684;border-width:1px;border-radius:20px"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-2"}}},"typography":{"letterSpacing":"0.15px"},"spacing":{"padding":{"top":"0.2rem","bottom":"0.2rem","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"textColor":"custom-color-2","fontSize":"smallbig","fontFamily":"roboto"} /--></div>
            <!-- /wp:group --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group -->
            <!-- /wp:post-template --></main>
            <!-- /wp:query --></div>
            <!-- /wp:group -->
            
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|60"}}}} -->
            <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:button {"className":"is-style-outline","fontSize":"smallbig","fontFamily":"roboto"} -->
            <div class="wp-block-button has-custom-font-size is-style-outline has-roboto-font-family has-smallbig-font-size"><a class="wp-block-button__link wp-element-button" href="/blog">View more</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div>
            <!-- /wp:group -->', // HTML content of your pattern
            'categories'  => array('free-patterns'), // Category under which your pattern should appear
            'keywords'    => array('custom', 'pattern', 'my', 'countries stories', 'blog'), // Keywords to help users find your pattern
        )
    );

    register_block_pattern(
        'Main home', // Unique name for your pattern
        array(
            'title'       => __( 'Main home', 'journey-tourism-two' ), // Title displayed in the block editor
            'description' => 'Section showing the main home banner', // Description of your pattern

            'content'     => '<!-- wp:group {"tagName":"main","metadata":{"name":"Main"},"style":{"position":{"type":""},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0"}}},"layout":{"type":"default"}} -->
            <main class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0"><!-- wp:cover {"url":"' . esc_url(get_theme_file_uri('/assets/images/bg-3_edited2.jpg')) . '","hasParallax":true,"dimRatio":0,"customOverlayColor":"#3a443e","style":{"spacing":{"padding":{"top":"22vh","bottom":"22vh"},"blockGap":"var:preset|spacing|80"}},"layout":{"type":"default"}} -->
            <div class="wp-block-cover has-parallax" style="padding-top:22vh;padding-bottom:22vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#3a443e"></span><div class="wp-block-cover__image-background has-parallax" style="background-position:50% 50%;background-image:url(' . esc_url(get_theme_file_uri('/assets/images/bg-3_edited2.jpg')) . ')"></div><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|80"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
            <div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"letterSpacing":"0px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"}},"textColor":"white","className":"fade-up","fontSize":"smallbig","fontFamily":"roboto"} -->
            <p class="has-text-align-center fade-up has-white-color has-text-color has-link-color has-roboto-font-family has-smallbig-font-size" style="font-style:normal;font-weight:600;letter-spacing:0px;text-transform:uppercase">Your portal to extraordinary travel experiences</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}},"typography":{"fontSize":"100px"}},"className":"title-home fade-up","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-center title-home fade-up has-tenor-sans-font-family" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0;font-size:100px">Welcome to Journey Tourism</p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:group -->
            
            <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"0"},"blockGap":"6rem","padding":{"right":"0","left":"0"}},"color":{"background":"#ffffff00"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
            <div class="wp-block-group has-background" style="background-color:#ffffff00;margin-bottom:0;padding-right:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0px","bottom":"0px"},"padding":{"right":"0","left":"0"}},"layout":{"selfStretch":"fixed","flexSize":"18rem"},"color":{"background":"#ffffff00"}},"className":"fade-left","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group fade-left has-background" style="background-color:#ffffff00;margin-top:0px;margin-bottom:0px;padding-right:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"color":{"background":"#ffffff00"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group has-background" style="background-color:#ffffff00;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:avatar {"userId":1,"size":36,"style":{"border":{"radius":"100%","width":"3px"},"color":{"duotone":"unset"}},"borderColor":"custom-color-2"} /-->
            
            <!-- wp:avatar {"userId":1,"size":36,"style":{"border":{"radius":"100%","width":"3px"},"color":{"duotone":"unset"}},"borderColor":"custom-color-2"} /-->
            
            <!-- wp:avatar {"userId":1,"size":36,"style":{"border":{"radius":"100%","width":"3px"},"color":{"duotone":"unset"}},"borderColor":"custom-color-2"} /--></div>
            <!-- /wp:group -->
            
            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"right":"0","left":"0"}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"white","fontSize":"smallbig","fontFamily":"roboto"} -->
            <p class="has-white-color has-text-color has-link-color has-roboto-font-family has-smallbig-font-size" style="padding-right:0;padding-left:0;font-style:normal;font-weight:400">20K+ MEMBERS</p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:group -->
            
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"custom-color-2","style":{"typography":{"textTransform":"uppercase","fontSize":"24px"},"border":{"radius":"30vw"},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"className":"is-style-fill fade-up","fontFamily":"tenor-sans"} -->
            <div class="wp-block-button has-custom-font-size is-style-fill fade-up has-tenor-sans-font-family" style="font-size:24px;text-transform:uppercase"><a class="wp-block-button__link has-custom-color-2-background-color has-background has-text-align-center wp-element-button" href="/services" style="border-radius:30vw;padding-right:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">Lets go</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons -->
            
            <!-- wp:paragraph {"align":"right","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"layout":{"selfStretch":"fixed","flexSize":"18rem"},"typography":{"letterSpacing":"0.18px","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"right":"0","left":"0"}}},"textColor":"white","className":"fade-right","fontSize":"smallbig","fontFamily":"roboto"} -->
            <p class="has-text-align-right fade-right has-white-color has-text-color has-link-color has-roboto-font-family has-smallbig-font-size" style="padding-right:0;padding-left:0;font-style:normal;font-weight:400;letter-spacing:0.18px">Our site is dedicated to providing personalized adventures</p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:group --></div></div>
            <!-- /wp:cover --></main>
            <!-- /wp:group -->', // HTML content of your pattern
            'categories'  => array('free-patterns'), // Category under which your pattern should appear
            'keywords'    => array('custom', 'pattern', 'my', 'main', 'home'), // Keywords to help users find your pattern
        )
    );

    
    register_block_pattern(
        'How we started', // Unique name for your pattern
        array(
            'title'       => __( 'How we started', 'journey-tourism-two' ), // Title displayed in the block editor
            'description' => 'Section telling the story of how the company started', // Description of your pattern

            'content'     => '<!-- wp:group {"metadata":{"name":"Main"},"align":"full","style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}},"color":{"background":"#fcfffa"}},"layout":{"type":"default"}} -->
            <div class="wp-block-group alignfull has-background" style="background-color:#fcfffa;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-2"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"textColor":"custom-color-2","className":"fade-up","fontSize":"smallbig","fontFamily":"roboto"} -->
            <p class="has-text-align-center fade-up has-custom-color-2-color has-text-color has-link-color has-roboto-font-family has-smallbig-font-size" style="margin-top:var(--wp--preset--spacing--30);font-style:normal;font-weight:500">OUR JOURNEY</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-1"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"textColor":"custom-color-1","className":"fade-up","fontSize":"x-large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-center fade-up has-custom-color-1-color has-text-color has-link-color has-tenor-sans-font-family has-x-large-font-size" style="margin-bottom:var(--wp--preset--spacing--60)">How we started</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|70","left":"var:preset|spacing|70"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"5vw","right":"5vw"}}}} -->
            <div class="wp-block-columns" style="padding-top:var(--wp--preset--spacing--50);padding-right:5vw;padding-bottom:var(--wp--preset--spacing--50);padding-left:5vw"><!-- wp:column {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-1"}}},"typography":{"letterSpacing":"0.18px","fontSize":"24px"},"spacing":{"padding":{"right":"0","left":"0"}}},"textColor":"custom-color-1","fontFamily":"roboto"} -->
            <div class="wp-block-column has-custom-color-1-color has-text-color has-link-color has-roboto-font-family" style="padding-right:0;padding-left:0;font-size:24px;letter-spacing:0.18px"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:paragraph {"dropCap":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-1"}}},"spacing":{"padding":{"right":"0","left":"0"}},"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"24px"}},"textColor":"custom-color-1","className":"fade-left"} -->
            <p class="has-drop-cap fade-left has-custom-color-1-color has-text-color has-link-color" style="padding-right:0;padding-left:0;font-size:24px;font-style:normal;font-weight:400">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis blandit turpis cursus in hac. Pharetra massa massa ultricies mi quis. Et molestie ac feugiat sed lectus vestibulum mattis ullamcorper. Justo eget magna fermentum iaculis eu non diam phasellus. Pellentesque id nibh tortor id. Commodo quis imperdiet massa tincidunt nunc pulvinar sapien et. Nec ultrices dui sapien eget. Turpis nunc eget lorem dolor.</p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:group --></div>
            <!-- /wp:column -->
            
            <!-- wp:column {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-1"}}},"typography":{"letterSpacing":"0.18px","fontSize":"24px"},"spacing":{"padding":{"right":"0","left":"0"}}},"textColor":"custom-color-1","fontFamily":"roboto"} -->
            <div class="wp-block-column has-custom-color-1-color has-text-color has-link-color has-roboto-font-family" style="padding-right:0;padding-left:0;font-size:24px;letter-spacing:0.18px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-1"}}},"spacing":{"padding":{"right":"0","left":"0"}},"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"24px"}},"textColor":"custom-color-1","className":"fade-right"} -->
            <p class="fade-right has-custom-color-1-color has-text-color has-link-color" style="padding-right:0;padding-left:0;font-size:24px;font-style:normal;font-weight:400">Condimentum mattis pellentesque id nibh. Pellentesque habitant morbi tristique senectus et netus et. Dui sapien eget mi proin. Magna fringilla urna porttitor rhoncus dolor purus non. Mattis pellentesque id nibh tortor id aliquet lectus proin. A lacus vestibulum sed arcu non odio. Nunc mi ipsum faucibus vitae aliquet nec ullamcorper sit amet. Tellus integer feugiat scelerisque varius morbi enim nunc. Mollis aliquam ut porttitor leo a. Id diam maecenas ultricies mi eget mauris pharetra et. Nec feugiat nisl pretium fusce id velit ut. </p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns --></div>
            <!-- /wp:group -->', // HTML content of your pattern
            'categories'  => array('free-patterns'), // Category under which your pattern should appear
            'keywords'    => array('custom', 'pattern', 'my', 'how we started', 'history', 'company'), // Keywords to help users find your pattern
        )
    );

    

}

add_action('init', 'journeytourism_custom_register_block_patterns');

?>