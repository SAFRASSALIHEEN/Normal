<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content-vw">
 *
 * @package VW Hospital Lite
 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php if ( function_exists( 'wp_body_open' ) ) 
  {
    wp_body_open();
  }else{
    do_action('wp_body_open');
  } 
?>

  <header role="banner">
    <a class="screen-reader-text skip-link" href="#maincontent"><?php esc_html_e( 'Skip to content', 'vw-hospital-lite' ); ?></a>
    <?php
      $vw_hospital_lite_searchbox = get_theme_mod( 'vw_hospital_lite_searchbox' );

        if ( 'Disable' == $vw_hospital_lite_searchbox ) {
          $colmd = 'col-lg-12 col-md-12';
        } else { 
          $colmd = 'col-lg-9 col-md-7';
        } 
    ?>
    <?php if( get_theme_mod( 'vw_hospital_lite_topbar_hide_show', false) != '' || get_theme_mod( 'vw_hospital_lite_resp_topbar_hide_show', false) != '') { ?>
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-5">
              <?php dynamic_sidebar( 'social-icon' ); ?>
            </div>
            <div class="col-lg-6 col-md-7 appointment">
              <?php if ( get_theme_mod('vw_hospital_lite_appointment1','') != "" ) {?>
                <span><a href="<?php echo esc_url(get_theme_mod('vw_hospital_lite_appointment','')); ?>"><i class="<?php echo esc_attr(get_theme_mod('vw_hospital_lite_appointments_icon','fas fa-plus-circle')); ?>"></i><?php echo esc_html(get_theme_mod('vw_hospital_lite_appointment1','')); ?></a></span>
              <?php }?>
              <?php if ( get_theme_mod('vw_hospital_lite_timing1','') != "" ) {?>
                <span><a href="<?php echo esc_url(get_theme_mod('vw_hospital_lite_timing','')); ?>"><i class="<?php echo esc_attr(get_theme_mod('vw_hospital_lite_timing_icon','fas fa-ambulance')); ?>"></i><?php echo esc_html(get_theme_mod('vw_hospital_lite_timing1','')); ?></a></span>
              <?php }?>
            </div>
          </div>   
          <div class="clear"></div>
        </div>
      </div>
    <?php }?>
    <div class="header">
      <div class="container">
        <div class="row">
          <div class=" col-lg-6 col-md-4 align-self-center">
            <div class="logo">
            <?php if ( has_custom_logo() ) : ?>
              <div class="site-logo"><?php the_custom_logo(); ?></div>
            <?php endif; ?>
            <?php $blog_info = get_bloginfo( 'name' ); ?>
              <?php if ( ! empty( $blog_info ) ) : ?>
                <?php if ( is_front_page() && is_home() ) : ?>
                  <?php if( get_theme_mod('vw_hospital_lite_logo_title_hide_show',true) != ''){ ?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                  <?php } ?>
                <?php else : ?>
                  <?php if( get_theme_mod('vw_hospital_lite_logo_title_hide_show',true) != ''){ ?>
                    <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                  <?php } ?>
                <?php endif; ?>
              <?php endif; ?>
              <?php
                $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) :
              ?>
              <?php if( get_theme_mod('vw_hospital_lite_tagline_hide_show',true) != ''){ ?>
                <p class="site-description">
                  <?php echo esc_html($description); ?>
                </p>
              <?php } ?>
            <?php endif; ?>
          </div>
        </div>
          <div class="col-lg-6 col-md-8 align-self-center">
            <div class="contact-call-Email row">
              <?php if( get_theme_mod('vw_hospital_lite_contact_call','') != '') { ?>
                <div class="col-lg-6 col-md-6">
                  <p class="calling"><i class="<?php echo esc_attr(get_theme_mod('vw_hospital_lite_cont_phone_icon','fas fa-phone')); ?>"></i><a href="tel:<?php echo esc_attr( get_theme_mod('vw_hospital_lite_contact_call','') ); ?>"><?php echo esc_html(get_theme_mod('vw_hospital_lite_contact_call',''));?></a></p>
                </div>
              <?php } if( get_theme_mod('vw_hospital_lite_contact_email','') != '') { ?>
                <div class="col-lg-6 col-md-6">
                  <p class="email"><i class="<?php echo esc_attr(get_theme_mod('vw_hospital_lite_cont_email_icon','fas fa-envelope')); ?>"></i><a href="mailto:<?php echo esc_attr(antispambot(get_theme_mod('vw_hospital_lite_contact_email',''))); ?>"><?php echo esc_html(antispambot(get_theme_mod('vw_hospital_lite_contact_email',''))); ?></a></p>
                </div>
              <?php } ?>
              </div>
            </div>
          <div class="clear"></div>
        </div>
      </div>
    </div>
    <div class="menubar <?php if( get_theme_mod( 'vw_hospital_lite_sticky_header', false) != '' || get_theme_mod( 'vw_hospital_lite_stickyheader_hide_show', false) != '') { ?> header-sticky"<?php } else { ?>close-sticky <?php } ?>">
      <div class="container">
        <div class="row">
          <div class="<?php echo esc_html( $colmd ); ?> align-self-center">
            <?php if(has_nav_menu('primary')){ ?>
              <div class="toggle-nav mobile-menu">
                <button onclick="vw_hospital_lite_menu_open_nav()" class="responsivetoggle"><i class="<?php echo esc_attr(get_theme_mod('vw_hospital_lite_res_open_menu_icon','fas fa-bars')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Open Button','vw-hospital-lite'); ?></span></button>
              </div>
            <?php } ?>
            <div id="mySidenav" class="nav sidenav">
              <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'vw-hospital-lite' ); ?>">
                <?php 
                  if(has_nav_menu('primary')){
                    wp_nav_menu( array( 
                      'theme_location' => 'primary',
                      'container_class' => 'main-menu clearfix' ,
                      'menu_class' => 'clearfix',
                      'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                      'fallback_cb' => 'wp_page_menu',
                    ) ); 
                  }
                ?>
                <a href="javascript:void(0)" class="closebtn mobile-menu" onclick="vw_hospital_lite_menu_close_nav()"><i class="<?php echo esc_attr(get_theme_mod('vw_hospital_lite_res_close_menu_icon','fas fa-times')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Close Button','vw-hospital-lite'); ?></span></a>
              </nav>
            </div>
          </div>
          <?php if ( 'Disable' != $vw_hospital_lite_searchbox ) {?>
            <div class="col-lg-3 col-md-5 align-self-center">
              <div class="search-icon position-relative">
                <?php get_search_form(); ?>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </header>

  <?php if(get_theme_mod('vw_hospital_lite_loader_enable',false) != '') { ?>
    <div id="preloader">
      <div class="loader-inner">
        <div class="loader-line-wrap">
          <div class="loader-line"></div>
        </div>
        <div class="loader-line-wrap">
          <div class="loader-line"></div>
        </div>
        <div class="loader-line-wrap">
          <div class="loader-line"></div>
        </div>
        <div class="loader-line-wrap">
          <div class="loader-line"></div>
        </div>
        <div class="loader-line-wrap">
          <div class="loader-line"></div>
        </div>
      </div>
    </div>
  <?php } ?>

  <?php if ( is_singular() && has_post_thumbnail() ) : ?>
    <?php
      $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'vw-hospital-lite-post-image-cover' );
      $post_image = $thumb['0'];
    ?>
    <div class="header-image bg-image" style="background-image: url(<?php echo esc_url( $post_image ); ?>)">

      <?php the_post_thumbnail( 'vw-hospital-lite-post-image' ); ?>

    </div>

  <?php elseif ( get_header_image() ) : ?>
  <div class="header-image bg-image" style="background-image: url(<?php header_image(); ?>)">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
      <img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php the_title(); ?> post thumbnail image">
    </a>
  </div>
  <?php endif; // End header image check. ?>