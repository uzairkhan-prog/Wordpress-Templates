<?php
/**
 * The template part for displaying gallery post
 *
 * @package VW Pet Shop 
 * @subpackage vw_pet_shop
 * @since VW Pet Shop 1.0
 */
?>
<?php 
  $vw_pet_shop_archive_year  = get_the_time('Y'); 
  $vw_pet_shop_archive_month = get_the_time('m'); 
  $vw_pet_shop_archive_day   = get_the_time('d'); 
?>
<?php
  $vw_pet_shop_toggle_postdate = get_theme_mod( 'vw_pet_shop_toggle_postdate' );
  if ( 'Disable' == $vw_pet_shop_toggle_postdate ) {
   $colmd = 'col-lg-12 col-md-12';
  } else { 
   $colmd = 'col-lg-10 col-md-10';
  } 
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class=" post-main-box wow bounceInDown delay-1000" data-wow-duration="2s">
    <?php $vw_pet_shop_theme_lay = get_theme_mod( 'vw_pet_shop_blog_layout_option','Default');
    if($vw_pet_shop_theme_lay == 'Default'){ ?>
      <div class="box-image">
        <?php
          if ( ! is_single() ) {
            // If not a single post, highlight the gallery.
            if ( get_post_gallery() ) {
              echo '<div class="entry-gallery">';
                echo ( get_post_gallery() );
              echo '</div>';
            };
          };
        ?>  
      </div>
      <div class="row">
        <?php if ( 'Disable' != $vw_pet_shop_toggle_postdate ) {?>
          <div class="col-lg-2 col-md-2">
            <div class="datebox">
              <div class="date-monthwrap">
                <span class="date-month"><a href="<?php echo esc_url( get_day_link( $vw_pet_shop_archive_year, $vw_pet_shop_archive_month, $vw_pet_shop_archive_day)); ?>"><?php echo esc_html( get_the_date( 'M' ) ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>

                <span class="date-day"><a href="<?php echo esc_url( get_day_link( $vw_pet_shop_archive_year, $vw_pet_shop_archive_month, $vw_pet_shop_archive_day)); ?>"><?php echo esc_html( get_the_date( 'd') ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
              </div>
              <div class="yearwrap">
                <span class="date-year"><a href="<?php echo esc_url( get_day_link( $vw_pet_shop_archive_year, $vw_pet_shop_archive_month, $vw_pet_shop_archive_day)); ?>"><?php echo esc_html( get_the_date( 'Y' ) ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
              </div>
            </div>
          </div>
        <?php } ?>
        <div class="<?php echo esc_html( $colmd ); ?>">
          <h2 class="section-title"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>    
          <div class="new-text">
            <div class="entry-content">
              <p>
                <?php $vw_pet_shop_theme_lay = get_theme_mod( 'vw_pet_shop_excerpt_settings','Excerpt');
                if($vw_pet_shop_theme_lay == 'Content'){ ?>
                  <?php the_content(); ?>
                <?php }
                if($vw_pet_shop_theme_lay == 'Excerpt'){ ?>
                  <?php if(get_the_excerpt()) { ?>
                    <?php $vw_pet_shop_excerpt = get_the_excerpt(); echo esc_html( vw_pet_shop_string_limit_words( $vw_pet_shop_excerpt, esc_attr(get_theme_mod('vw_pet_shop_excerpt_number','30')))); ?> <?php echo esc_html(get_theme_mod('vw_pet_shop_excerpt_suffix',''));?>
                  <?php }?>
                <?php }?>
              </p>
            </div>
          </div>
          <?php if( get_theme_mod('vw_pet_shop_button_text','Read More') != ''){ ?>
            <div class="content-bttn">
              <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small hvr-sweep-to-right"><?php echo esc_html(get_theme_mod('vw_pet_shop_button_text',__('Read More','vw-pet-shop')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('vw_pet_shop_button_text',__('Read More','vw-pet-shop')));?></span></a>
            </div>
          <?php } ?>
        </div>
      </div>
    <?php }else if($vw_pet_shop_theme_lay == 'Center'){ ?>
      <div class="new-text">
        <h2 class="section-title"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
        <?php if( get_theme_mod( 'vw_pet_shop_toggle_postdate',true) == 1 || get_theme_mod( 'vw_pet_shop_toggle_author',true) == 1 || get_theme_mod( 'vw_pet_shop_toggle_comments',true) == 1 || get_theme_mod( 'vw_pet_shop_toggle_time',true) == 1) { ?>
          <div class="metabox">
            <?php if(get_theme_mod('vw_pet_shop_toggle_postdate',true)==1){ ?>
                <span class="entry-date"> <i class="fas fa-calendar-alt"></i><a href="<?php echo esc_url( get_day_link( $vw_pet_shop_archive_year, $vw_pet_shop_archive_month, $vw_pet_shop_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
            <?php } ?>

            <?php if(get_theme_mod('vw_pet_shop_toggle_author',true)==1){ ?>
              <span><?php echo esc_html(get_theme_mod('vw_pet_shop_meta_field_separator'));?></span> <span class="entry-author"> <i class="far fa-user"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span>
            <?php } ?>

            <?php if(get_theme_mod('vw_pet_shop_toggle_comments',true)==1){ ?>
              <span><?php echo esc_html(get_theme_mod('vw_pet_shop_meta_field_separator'));?></span> <span class="entry-comments"> <i class="fa fa-comments" aria-hidden="true"></i><?php comments_number( '0 Comments', '0 Comments', '% Comments' ); ?> </span>
            <?php } ?>

            <?php if(get_theme_mod('vw_pet_shop_toggle_time',true)==1){ ?>
              <span><?php echo esc_html(get_theme_mod('vw_pet_shop_meta_field_separator'));?></span> <span class="entry-time"> <i class="fas fa-clock"></i><?php echo esc_html( get_the_time() ); ?></span>
            <?php } ?>
          </div>
        <?php } ?>
        <div class="box-image">
          <?php
            if ( ! is_single() ) {
              // If not a single post, highlight the gallery.
              if ( get_post_gallery() ) {
                echo '<div class="entry-gallery">';
                  echo ( get_post_gallery() );
                echo '</div>';
              };
            };
          ?>  
        </div>
        <div class="new-text">
          <div class="entry-content">
            <p>
              <?php $vw_pet_shop_theme_lay = get_theme_mod( 'vw_pet_shop_excerpt_settings','Excerpt');
              if($vw_pet_shop_theme_lay == 'Content'){ ?>
                <?php the_content(); ?>
              <?php }
              if($vw_pet_shop_theme_lay == 'Excerpt'){ ?>
                <?php if(get_the_excerpt()) { ?>
                  <?php $vw_pet_shop_excerpt = get_the_excerpt(); echo esc_html( vw_pet_shop_string_limit_words( $vw_pet_shop_excerpt, esc_attr(get_theme_mod('vw_pet_shop_excerpt_number','30')))); ?> <?php echo esc_html(get_theme_mod('vw_pet_shop_excerpt_suffix',''));?>
                <?php }?>
              <?php }?>
            </p>
          </div>
        </div>
        <?php if( get_theme_mod('vw_pet_shop_button_text','Read More') != ''){ ?>
          <div class="content-bttn">
            <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small hvr-sweep-to-right"><?php echo esc_html(get_theme_mod('vw_pet_shop_button_text',__('Read More','vw-pet-shop')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('vw_pet_shop_button_text',__('Read More','vw-pet-shop')));?></span></a>
          </div>
        <?php } ?>
      </div>
    <?php }else if($vw_pet_shop_theme_lay == 'Left'){ ?>
      <div class="new-text">
        <div class="box-image">
          <?php
            if ( ! is_single() ) {
              // If not a single post, highlight the gallery.
              if ( get_post_gallery() ) {
                echo '<div class="entry-gallery">';
                  echo ( get_post_gallery() );
                echo '</div>';
              };
            };
          ?>  
        </div>
        <h2 class="section-title"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
        <?php if( get_theme_mod( 'vw_pet_shop_toggle_postdate',true) == 1 || get_theme_mod( 'vw_pet_shop_toggle_author',true) == 1 || get_theme_mod( 'vw_pet_shop_toggle_comments',true) == 1 || get_theme_mod( 'vw_pet_shop_toggle_time',true) == 1) { ?>
          <div class="metabox">
            <?php if(get_theme_mod('vw_pet_shop_toggle_postdate',true)==1){ ?>
                <span class="entry-date"> <i class="fas fa-calendar-alt"></i><a href="<?php echo esc_url( get_day_link( $vw_pet_shop_archive_year, $vw_pet_shop_archive_month, $vw_pet_shop_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
            <?php } ?>

            <?php if(get_theme_mod('vw_pet_shop_toggle_author',true)==1){ ?>
              <span><?php echo esc_html(get_theme_mod('vw_pet_shop_meta_field_separator'));?></span> <span class="entry-author"> <i class="far fa-user"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span>
            <?php } ?>

            <?php if(get_theme_mod('vw_pet_shop_toggle_comments',true)==1){ ?>
              <span><?php echo esc_html(get_theme_mod('vw_pet_shop_meta_field_separator'));?></span> <span class="entry-comments"> <i class="fa fa-comments" aria-hidden="true"></i><?php comments_number( '0 Comments', '0 Comments', '% Comments' ); ?> </span>
            <?php } ?>

            <?php if(get_theme_mod('vw_pet_shop_toggle_time',true)==1){ ?>
              <span><?php echo esc_html(get_theme_mod('vw_pet_shop_meta_field_separator'));?></span> <span class="entry-time"> <i class="fas fa-clock"></i><?php echo esc_html( get_the_time() ); ?></span>
            <?php } ?>
          </div>
        <?php } ?>
        <div class="new-text">
          <div class="entry-content">
            <p>
              <?php $vw_pet_shop_theme_lay = get_theme_mod( 'vw_pet_shop_excerpt_settings','Excerpt');
              if($vw_pet_shop_theme_lay == 'Content'){ ?>
                <?php the_content(); ?>
              <?php }
              if($vw_pet_shop_theme_lay == 'Excerpt'){ ?>
                <?php if(get_the_excerpt()) { ?>
                  <?php $vw_pet_shop_excerpt = get_the_excerpt(); echo esc_html( vw_pet_shop_string_limit_words( $vw_pet_shop_excerpt, esc_attr(get_theme_mod('vw_pet_shop_excerpt_number','30')))); ?> <?php echo esc_html(get_theme_mod('vw_pet_shop_excerpt_suffix',''));?>
                <?php }?>
              <?php }?>
            </p>
          </div>
        </div>
        <?php if( get_theme_mod('vw_pet_shop_button_text','Read More') != ''){ ?>
          <div class="content-bttn">
            <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small hvr-sweep-to-right"><?php echo esc_html(get_theme_mod('vw_pet_shop_button_text',__('Read More','vw-pet-shop')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('vw_pet_shop_button_text',__('Read More','vw-pet-shop')));?></span></a>
          </div>
        <?php } ?>
      </div>
    <?php } ?>
  </div>
  <div class="clearfix"></div>
</article>