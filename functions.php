<?php
/**
 * VW Hospital Lite functions and definitions
 * @package VW Hospital Lite
 */

/* Breadcrumb Begin */
function vw_hospital_lite_the_breadcrumb() {
	if (!is_home()) {
		echo '<a href="';
			echo esc_url( home_url() );
		echo '">';
			bloginfo('name');
		echo "</a> ";
		if (is_category() || is_single()) {
			the_category(',');
			if (is_single()) {
				echo "<span> ";
					the_title();
				echo "</span> ";
			}
		} elseif (is_page()) {
			echo "<span> ";
				the_title();
		}
	}
}

/* Theme Setup */
if ( ! function_exists( 'vw_hospital_lite_setup' ) ) :

function vw_hospital_lite_setup() {
	
	$GLOBALS['content_width'] = apply_filters( 'vw_hospital_lite_content_width', 840 );

	load_theme_textdomain( 'vw-hospital-lite', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'html5', array( 'comment-list', 'search-form', 'comment-form', ) );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	add_image_size('vw-hospital-lite-homepage-thumb',240,145,true);
	
       register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'vw-hospital-lite' ),
	) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'f1f1f1'
	) );

	//selective refresh for sidebar and widgets
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', vw_hospital_lite_font_url() ) );

	// Theme Activation Notice
	global $pagenow;

	if (is_admin() || ('themes.php' == $pagenow)) {
		add_action('admin_notices', 'vw_hospital_lite_activation_notice');
	}
}
endif;
add_action( 'after_setup_theme', 'vw_hospital_lite_setup' );

// Notice after Theme Activation
function vw_hospital_lite_activation_notice() {
	echo '<div class="notice notice-success is-dismissible welcome-notice">';
		echo '<p>'. esc_html__( 'Thank you for choosing VW Hospital theme. Would like to have you on our Welcome page so that you can reap all the benefits of our VW Hospital theme.', 'vw-hospital-lite' ) .'</p>';
		echo '<span><a href="'. esc_url( admin_url( 'themes.php?page=vw_hospital_lite_guide' ) ) .'" class="button button-primary">'. esc_html__( 'GET STARTED', 'vw-hospital-lite' ) .'</a></span>';
		echo '<span class="demo-btn"><a href="'. esc_url( 'https://www.vwthemes.net/vw-hospital-theme/' ) .'" class="button button-primary" target=_blank>'. esc_html__( 'VIEW DEMO', 'vw-hospital-lite' ) .'</a></span>';
		echo '<span class="upgrade-btn"><a href="'. esc_url( 'https://www.vwthemes.com/themes/hospital-wordpress-theme/' ) .'" class="button button-primary" target=_blank>'. esc_html__( 'UPGRADE PRO', 'vw-hospital-lite' ) .'</a></span>';
	echo '</div>';
}

/* Theme Widgets Setup */
function vw_hospital_lite_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'vw-hospital-lite' ),
		'description'   => __( 'Appears on blog page sidebar', 'vw-hospital-lite' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'vw-hospital-lite' ),
		'description'   => __( 'Appears on page sidebar', 'vw-hospital-lite' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Third Column Sidebar', 'vw-hospital-lite' ),
		'description'   => __( 'Appears on page sidebar', 'vw-hospital-lite' ),
		'id'            => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'vw-hospital-lite' ),
		'description'   => __( 'Appears on footer', 'vw-hospital-lite' ),
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'vw-hospital-lite' ),
		'description'   => __( 'Appears on footer ', 'vw-hospital-lite' ),
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'vw-hospital-lite' ),
		'description'   => __( 'Appears on footer ', 'vw-hospital-lite' ),
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 4', 'vw-hospital-lite' ),
		'description'   => __( 'Appears on footer ', 'vw-hospital-lite' ),
		'id'            => 'footer-4',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Social Icon', 'vw-hospital-lite' ),
		'description'   => __( 'Appears on topbar', 'vw-hospital-lite' ),
		'id'            => 'social-icon',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Shop Page Sidebar', 'vw-hospital-lite' ),
		'description'   => __( 'Appears on shop page', 'vw-hospital-lite' ),
		'id'            => 'woocommerce-shop-sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Single Product Sidebar', 'vw-hospital-lite' ),
		'description'   => __( 'Appears on shop page', 'vw-hospital-lite' ),
		'id'            => 'woocommerce-single-sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'vw_hospital_lite_widgets_init' );

/* Theme Font URL */
function vw_hospital_lite_font_url() {
	$font_url      = '';
	$font_family   = array();
	$font_family[] = 'ABeeZee:400,400i';
	$font_family[] = 'Abril Fatface';
	$font_family[] = 'Acme';
	$font_family[] = 'Allura:400';
	$font_family[] = 'Anton';
	$font_family[] = 'Architects Daughter';
	$font_family[] = 'Archivo:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Arimo:400,400i,500,500i,600,600i,700,700i';
	$font_family[] = 'Arsenal:400,400i,700,700i';
	$font_family[] = 'Arvo:400,400i,700,700i';
	$font_family[] = 'Alegreya:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Alfa Slab One';
	$font_family[] = 'Averia Serif Libre:300,300i,400,400i,700,700i';
	$font_family[] = 'Bangers';
	$font_family[] = 'Boogaloo';
	$font_family[] = 'Bad Script';
	$font_family[] = 'Barlow Condensed:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Bitter:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Bree Serif';
	$font_family[] = 'BenchNine:300,400,700';
	$font_family[] = 'Cabin:400,400i,500,500i,600,600i,700,700i';
	$font_family[] = 'Cardo:400,400i,700';
	$font_family[] = 'Courgette';
	$font_family[] = 'Caveat Brush:400';
	$font_family[] = 'Cherry Swash:400,700';
	$font_family[] = 'Cormorant Garamond:300,300i,400,400i,500,500i,600,600i,700,700i';
	$font_family[] = 'Crimson Text:400,400i,600,600i,700,700i';
	$font_family[] = 'Cuprum:400,400i,500,500i,600,600i,700,700i';
	$font_family[] = 'Cookie';
	$font_family[] = 'Coming Soon';
	$font_family[] = 'Charm:400,700';
	$font_family[] = 'Chewy';
	$font_family[] = 'Days One';
	$font_family[] = 'Dosis:200,300,400,500,600,700,800';
	$font_family[] = 'EB Garamond:400,400i,500,500i,600,600i,700,700i,800,800i';
	$font_family[] = 'Economica:400,400i,700,700i';
	$font_family[] = 'Exo 2:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Fira Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Fredoka One';
	$font_family[] = 'Fjalla One';
	$font_family[] = 'Francois One';
	$font_family[] = 'Frank Ruhl Libre:300,400,500,700,900';
	$font_family[] = 'Gabriela:400';
	$font_family[] = 'Gloria Hallelujah';
	$font_family[] = 'Great Vibes';
	$font_family[] = 'Handlee';
	$font_family[] = 'Hammersmith One';
	$font_family[] = 'Heebo:100,200,300,400,500,700,800,900';
	$font_family[] = 'Hind:300,400,500,600,700';
	$font_family[] = 'Inconsolata:200,300,400,500,600,700,800,900';
	$font_family[] = 'Indie Flower';
	$font_family[] = 'IM Fell English SC';
	$font_family[] = 'Julius Sans One';
	$font_family[] = 'Jomhuria:400';
	$font_family[] = 'Josefin Slab:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i';
	$font_family[] = 'Josefin Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i';
	$font_family[] = 'Jost:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Kanit:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Krub:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i';
	$font_family[] = 'Lobster';
	$font_family[] = 'Lato:100,100i,300,300i,400,400i,700,700i,900,900i';
	$font_family[] = 'Lora:400,400i,500,500i,600,600i,700,700i';
	$font_family[] = 'Libre Baskerville:400,400i,700';
	$font_family[] = 'Lobster Two:400,400i,700,700i';
	$font_family[] = 'Merriweather:300,300i,400,400i,700,700i,900,900i';
	$font_family[] = 'Marck Script';
	$font_family[] = 'Marcellus:400';
	$font_family[] = 'Merienda One:400';
	$font_family[] = 'Monda:400,700';
	$font_family[] = 'Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Muli';
	$font_family[] = 'Mulish:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Noto Serif:400,400i,700,700i';
	$font_family[] = 'Nunito Sans:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Open Sans:300,300i,400,400i,600,600i,700,700i,800,800i';
	$font_family[] = 'Overpass:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Overpass Mono:300,400,500,600,700';
	$font_family[] = 'Oxygen:300,400,700';
	$font_family[] = 'Oswald:200,300,400,500,600,700';
	$font_family[] = 'Orbitron:400,500,600,700,800,900';
	$font_family[] = 'Patua One';
	$font_family[] = 'Pacifico';
	$font_family[] = 'Padauk:400,700';
	$font_family[] = 'Playball:400';
	$font_family[] = 'Playfair Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Prompt:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'PT Sans:400,400i,700,700i';
	$font_family[] = 'PT Serif:400,400i,700,700i';
	$font_family[] = 'Philosopher:400,400i,700,700i';
	$font_family[] = 'Permanent Marker';
	$font_family[] = 'Poiret One';
	$font_family[] = 'Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Prata:400';
	$font_family[] = 'Quicksand:300,400,500,600,700';
	$font_family[] = 'Quattrocento Sans:400,400i,700,700i';
	$font_family[] = 'Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Rubik:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i';
	$font_family[] = 'Roboto Condensed:300,300i,400,400i,700,700i';
	$font_family[] = 'Rokkitt:100,200,300,400,500,600,700,800,900';
	$font_family[] = 'Russo One';
	$font_family[] = 'Righteous';
	$font_family[] = 'Saira:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Satisfy';
	$font_family[] = 'Sen:400,700,800';
	$font_family[] = 'Slabo';
	$font_family[] = 'Source Sans Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i';
	$font_family[] = 'Shadows Into Light Two';
	$font_family[] = 'Shadows Into Light';
	$font_family[] = 'Sacramento';
	$font_family[] = 'Sail:400';
	$font_family[] = 'Shrikhand';
	$font_family[] = 'Spartan:100,200,300,400,500,600,700,800,900';
	$font_family[] = 'Staatliches';
	$font_family[] = 'Stylish:400';
	$font_family[] = 'Tangerine:400,700';
	$font_family[] = 'Titillium Web:200,200i,300,300i,400,400i,600,600i,700,700i,900';
	$font_family[] = 'Trirong:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Ubuntu:300,300i,400,400i,500,500i,700,700i';
	$font_family[] = 'Unica One';
	$font_family[] = 'VT323';
	$font_family[] = 'Varela Round';
	$font_family[] = 'Vampiro One';
	$font_family[] = 'Vollkorn:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Volkhov:400,400i,700,700i';
	$font_family[] = 'Work Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Yanone Kaffeesatz:200,300,400,500,600,700';
	$font_family[] = 'ZCOOL XiaoWei';
	$query_args = array(
		'family'	=> rawurlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
	$contents = wptt_get_webfont_url( esc_url_raw( $fonts_url ) );
}

/* Theme enqueue scripts */
function vw_hospital_lite_scripts() {
	wp_enqueue_style( 'vw-hospital-lite-font', vw_hospital_lite_font_url(), array() );
	wp_enqueue_style( 'vw-hospital-lite-block-style', get_theme_file_uri('/css/blocks.css') );
	wp_enqueue_style( 'vw-hospital-lite-block-patterns-style-frontend', get_theme_file_uri('/inc/block-patterns/css/block-frontend.css') );
	wp_enqueue_style( 'bootstrap-style', esc_url(get_template_directory_uri()).'/css/bootstrap.css' );
	wp_enqueue_style( 'vw-hospital-lite-basic-style', get_stylesheet_uri() );
	require get_parent_theme_file_path( '/inline-style.php' );
	wp_add_inline_style( 'vw-hospital-lite-basic-style',$vw_hospital_lite_custom_css );
	wp_style_add_data( 'vw-hospital-lite-style', 'rtl', 'replace' );
	wp_enqueue_style( 'vw-hospital-lite-effect', esc_url(get_template_directory_uri()).'/css/effect.css' );
	wp_enqueue_style( 'fontawesome-css', esc_url(get_template_directory_uri()) . '/css/fontawesome-all.css' );
	wp_enqueue_script( 'vw-hospital-lite-customscripts', esc_url(get_template_directory_uri()) . '/js/custom.js', array('jquery') );
	wp_enqueue_script( 'bootstrap-js', esc_url(get_template_directory_uri()) . '/js/bootstrap.js', array('jquery') );
	wp_enqueue_script( 'jquery-superfish-js', esc_url(get_template_directory_uri()) . '/js/jquery.superfish.js', array('jquery') ,'',true);

	if (get_theme_mod('vw_hospital_lite_animation', true) == true){
		wp_enqueue_script( 'vw-hospital-lite-jquery-wow', esc_url(get_template_directory_uri()) . '/js/wow.js', array('jquery') );
		wp_enqueue_style( 'vw-hospital-lite-animate-css', esc_url(get_template_directory_uri()).'/css/animate.css' );
	}
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'vw_hospital_lite_scripts' );

/**
 * Enqueue block editor style
 */
function vw_hospital_lite_block_editor_styles() {
	wp_enqueue_style( 'vw-hospital-lite-font', vw_hospital_lite_font_url(), array() );
    wp_enqueue_style( 'vw-hospital-lite-block-patterns-style-editor', get_theme_file_uri( '/inc/block-patterns/css/block-editor.css' ), false, '1.0', 'all' );
    wp_enqueue_style( 'bootstrap-style', esc_url(get_template_directory_uri()).'/css/bootstrap.css' );
}
add_action( 'enqueue_block_editor_assets', 'vw_hospital_lite_block_editor_styles' );

define('VW_HOSPITAL_LITE_FREE_THEME_DOC',__('https://www.vwthemesdemo.com/docs/free-vw-hospital-lite/','vw-hospital-lite'));
define('VW_HOSPITAL_LITE_REVIEW',__('https://wordpress.org/support/theme/vw-hospital-lite/reviews/','vw-hospital-lite'));
define('VW_HOSPITAL_LITE_BUY_NOW',__('https://www.vwthemes.com/themes/hospital-wordpress-theme/','vw-hospital-lite'));
define('VW_HOSPITAL_LITE_LIVE_DEMO',__('https://vwthemes.net/vw-hospital-theme/','vw-hospital-lite'));
define('VW_HOSPITAL_LITE_PRO_DOC',__('https://www.vwthemesdemo.com/docs/vw-hospital-pro/','vw-hospital-lite'));
define('VW_HOSPITAL_LITE_FAQ',__('https://www.vwthemes.com/faqs/','vw-hospital-lite'));
define('VW_HOSPITAL_LITE_CHILD_THEME',__('https://developer.wordpress.org/themes/advanced-topics/child-themes/','vw-hospital-lite'));
define('VW_HOSPITAL_LITE_CONTACT',__('https://www.vwthemes.com/contact/','vw-hospital-lite'));
define('VW_HOSPITAL_LITE_SUPPORT',__('https://wordpress.org/support/theme/vw-hospital-lite/','vw-hospital-lite'));
define('VW_HOSPITAL_LITE_CREDIT',__('https://www.vwthemes.com/themes/wp-hospital-wordpress-theme/','vw-hospital-lite'));
if ( ! function_exists( 'vw_hospital_lite_credit' ) ) {
	function vw_hospital_lite_credit(){
		echo "<a href=".esc_url(VW_HOSPITAL_LITE_CREDIT)." target='_blank'>". esc_html__('Hospital WordPress Theme','vw-hospital-lite')."</a>";
	}
}

/*radio button sanitization*/
function vw_hospital_lite_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function vw_hospital_lite_sanitize_float( $input ) {
	return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
}

function vw_hospital_lite_sanitize_number_range( $number, $setting ) {
	$number = absint( $number );
	$atts = $setting->manager->get_control( $setting->id )->input_attrs;
	$min = ( isset( $atts['min'] ) ? $atts['min'] : $number );
	$max = ( isset( $atts['max'] ) ? $atts['max'] : $number );
	$step = ( isset( $atts['step'] ) ? $atts['step'] : 1 );
	return ( $min <= $number && $number <= $max && is_int( $number / $step ) ? $number : $setting->default );
}

function vw_hospital_lite_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

/* Excerpt Limit Begin */
function vw_hospital_lite_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'vw_hospital_lite_loop_columns');
	if (!function_exists('vw_hospital_lite_loop_columns')) {
	function vw_hospital_lite_loop_columns() {
		return get_theme_mod( 'vw_hospital_lite_products_per_row', '3' ); 
		// 3 products per row
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'vw_hospital_lite_products_per_page' );
function vw_hospital_lite_products_per_page( $cols ) {
  	return  get_theme_mod( 'vw_hospital_lite_products_per_page',9);
}

function vw_hospital_lite_sanitize_dropdown_pages( $page_id, $setting ) {
  // Ensure $input is an absolute integer.
  $page_id = absint( $page_id );
  // If $page_id is an ID of a published page, return it; otherwise, return the default.
  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

function vw_hospital_lite_logo_title_hide_show(){
	if(get_theme_mod('vw_hospital_lite_logo_title_hide_show') == '1' ) {
		return true;
	}
	return false;
}

function vw_hospital_lite_tagline_hide_show(){
	if(get_theme_mod('vw_hospital_lite_tagline_hide_show') == '1' ) {
		return true;
	}
	return false;
}

add_action( 'wp_ajax_vw_hospital_lite_reset_all_settings', 'vw_hospital_lite_reset_all_settings' );
function vw_hospital_lite_reset_all_settings() {
	remove_theme_mod( 'vw_hospital_lite_slider_hide_show' );
	remove_theme_mod( 'vw_hospital_lite_slider_page' );
	remove_theme_mod( 'vw_hospital_lite_slider_button_text' );
	remove_theme_mod( 'vw_hospital_lite_slider_content_option' );
	remove_theme_mod( 'vw_hospital_lite_slider_content_padding_top_bottom' );
	remove_theme_mod( 'vw_hospital_lite_slider_content_padding_left_right' );
	remove_theme_mod( 'vw_hospital_lite_slider_excerpt_number' );
	remove_theme_mod( 'vw_hospital_lite_slider_opacity_color' );
	remove_theme_mod( 'vw_hospital_lite_slider_height' );
	remove_theme_mod( 'vw_hospital_lite_slider_speed' );
	remove_theme_mod( 'vw_hospital_lite_footer_background_color' );
	remove_theme_mod( 'vw_hospital_lite_footer_copy' );
	remove_theme_mod( 'vw_hospital_lite_copyright_font_size' );
	remove_theme_mod( 'vw_hospital_lite_copyright_alingment' );
	remove_theme_mod( 'vw_hospital_lite_copyright_padding_top_bottom' );
	remove_theme_mod( 'vw_hospital_lite_hide_show_scroll' );
	remove_theme_mod( 'vw_hospital_lite_scroll_top_icon' );
	remove_theme_mod( 'vw_hospital_lite_scroll_to_top_font_size' );
	remove_theme_mod( 'vw_hospital_lite_scroll_to_top_padding' );
	remove_theme_mod( 'vw_hospital_lite_scroll_to_top_width' );
	remove_theme_mod( 'vw_hospital_lite_scroll_to_top_height' );
	remove_theme_mod( 'vw_hospital_lite_scroll_to_top_border_radius' );
	remove_theme_mod( 'vw_hospital_lite_scroll_top_alignment' );
	wp_send_json_success(
		array(
			'success' => true,
			'message' => "Reset Completed",
		)
	);
}
//Active Callback
function vw_hospital_lite_default_slider(){
	if(get_theme_mod('vw_hospital_lite_slider_type', 'Default slider') == 'Default slider' ) {
		return true;
	}
	return false;
}

function vw_hospital_lite_advance_slider(){
	if(get_theme_mod('vw_hospital_lite_slider_type', 'Default slider') == 'Advance slider' ) {
		return true;
	}
	return false;
}

/* Implement the Custom Header feature. */
require get_template_directory() . '/inc/custom-header.php';

/* Custom template tags for this theme. */
require get_template_directory() . '/inc/template-tags.php';

/* Customizer additions. */
require get_template_directory() . '/inc/customizer.php';

/* Implement the About theme page */
require get_template_directory() . '/inc/getting-started/getting-started.php';

/* Social Social Widgets */
require get_template_directory() . '/inc/themes-widgets/social-icon.php';

/* Customizer additions. */
require get_template_directory() . '/inc/themes-widgets/about-us-widget.php';

/* Customizer additions. */
require get_template_directory() . '/inc/themes-widgets/contact-us-widget.php';

/* typography */
require get_template_directory() . '/inc/typography/ctypo.php';

/* Block Pattern */
require get_template_directory() . '/inc/block-patterns/block-patterns.php';
/* TGM Plugin Activation */
require get_template_directory() . '/inc/tgm/tgm.php';

/* Plugin Activation */
require get_template_directory() . '/inc/getting-started/plugin-activation.php';

/* Webfonts */
require get_template_directory() . '/inc/wptt-webfont-loader.php';