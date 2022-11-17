<?php

	/*-----------------------First highlight color-------------------*/

	$vw_hospital_lite_first_color = get_theme_mod('vw_hospital_lite_first_color');

	$vw_hospital_lite_custom_css = '';

	if($vw_hospital_lite_first_color != false){
		$vw_hospital_lite_custom_css .='.top-bar, .menubar, slider .carousel-control-prev-icon i, #slider .carousel-control-next-icon i, #slider .more-btn a:hover, a.r_button:hover, input[type="submit"], input[type="submit"]:hover, .copyright, .services hr, nav.woocommerce-MyAccount-navigation ul li, .sidebar input[type="submit"], .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, #comments input[type="submit"].submit, .sidebar .tagcloud a:hover, .footer-sec .tagcloud a:hover, .pagination .current, .pagination a:hover, #comments a.comment-reply-link, a.button, .sidebar a.custom_read_more:hover, .footer-content a.custom_read_more:hover, #slider .carousel-control-prev-icon i, #slider .carousel-control-next-icon i, .widget .woocommerce-product-search button[type="submit"], .sidebar .custom-social-icons i:hover, .footer-content .custom-social-icons i:hover, .nav-previous a, .nav-next a, .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce nav.woocommerce-pagination ul li a:hover, #preloader, .footer-content .wp-block-search .wp-block-search__button, .sidebar .wp-block-search .wp-block-search__button{';
			$vw_hospital_lite_custom_css .='background-color: '.esc_attr($vw_hospital_lite_first_color).';';
		$vw_hospital_lite_custom_css .='}';
	}
	if($vw_hospital_lite_first_color != false){
		$vw_hospital_lite_custom_css .='#comments input[type="submit"].submit, .scrollup i{';
			$vw_hospital_lite_custom_css .='background-color: '.esc_attr($vw_hospital_lite_first_color).'!important;';
		$vw_hospital_lite_custom_css .='}';
	}
	if($vw_hospital_lite_first_color != false){
		$vw_hospital_lite_custom_css .='a, .footer-sec h3, .sidebar h3, .logo h1 a, .logo p, .single-post h1, .sidebar .custom-social-icons a, .footer-sec .custom-social-icons a, .sidebar caption, .sidebar td, .sidebar th, .sidebar td#prev a, .post-navigation a:hover .post-title, .post-navigation a:focus .post-title, .entry-content a, .main-navigation ul.sub-menu a:hover, .entry-content a, .sidebar .textwidget p a, .textwidget p a, #comments p a, .slider .inner_carousel p a, .logo h1 a, .logo p.site-title a, .sidebar ul li a:hover, .woocommerce nav.woocommerce-pagination ul li a, .footer-sec li a:hover, .services-box:hover h2 a, .services-box:hover .metabox a, .single-post .metabox:hover a, .sidebar .wp-block-search .wp-block-search__label, .footer-sec .wp-block-search .wp-block-search__label{';
			$vw_hospital_lite_custom_css .='color: '.esc_attr($vw_hospital_lite_first_color).';';
		$vw_hospital_lite_custom_css .='}';
	}
	if($vw_hospital_lite_first_color != false){
		$vw_hospital_lite_custom_css .='.services-box:hover h2 a, .services-box:hover .metabox a, .single-post .metabox:hover a{';
			$vw_hospital_lite_custom_css .='color: '.esc_attr($vw_hospital_lite_first_color).'!important;';
		$vw_hospital_lite_custom_css .='}';
	}
	if($vw_hospital_lite_first_color != false){
		$vw_hospital_lite_custom_css .='.services .service-main-box, input[type="submit"], .footer-content .custom-social-icons i:hover{';
			$vw_hospital_lite_custom_css .='border-color: '.esc_attr($vw_hospital_lite_first_color).';';
		$vw_hospital_lite_custom_css .='}';
	}
	if($vw_hospital_lite_first_color != false){
		$vw_hospital_lite_custom_css .='.sidebar h3, .sidebar .wp-block-search .wp-block-search__label{';
			$vw_hospital_lite_custom_css .='border-left-color: '.esc_attr($vw_hospital_lite_first_color).';';
		$vw_hospital_lite_custom_css .='}';
	}
	if($vw_hospital_lite_first_color != false){
		$vw_hospital_lite_custom_css .='.footer-sec ul li{';
			$vw_hospital_lite_custom_css .='border-bottom-color: '.esc_attr($vw_hospital_lite_first_color).';';
		$vw_hospital_lite_custom_css .='}';
	}
	
	/*----------------Second highlight color-------------------*/

	$vw_hospital_lite_second_color = get_theme_mod('vw_hospital_lite_second_color');

	if($vw_hospital_lite_second_color != false){
		$vw_hospital_lite_custom_css .='#slider .more-btn a, a.r_button, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .sidebar .tagcloud a, .footer-sec .tagcloud a, .main-navigation ul li:hover, .hvr-sweep-to-right:before, .sidebar a.custom_read_more, .footer-content a.custom_read_more, .nav-previous a:hover, .nav-next a:hover{';
			$vw_hospital_lite_custom_css .='background-color: '.esc_attr($vw_hospital_lite_second_color).';';
		$vw_hospital_lite_custom_css .='}';
	}

	if($vw_hospital_lite_second_color != false){
		$vw_hospital_lite_custom_css .='.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover{';
			$vw_hospital_lite_custom_css .='background-color: '.esc_attr($vw_hospital_lite_second_color).'!important;';
		$vw_hospital_lite_custom_css .='}';
	}

	if($vw_hospital_lite_second_color != false){
		$vw_hospital_lite_custom_css .='p.calling i, p.email i, .services h2, .services .box-content h3, .services-box h2 a, .page-box h2 a:hover, p.calling a:hover, p.email a:hover, #slider .inner_carousel h1 a:hover{';
			$vw_hospital_lite_custom_css .='color: '.esc_attr($vw_hospital_lite_second_color).';';
		$vw_hospital_lite_custom_css .='}';
	}
	if($vw_hospital_lite_second_color != false){
		$vw_hospital_lite_custom_css .='#our-services .page-box a{';
			$vw_hospital_lite_custom_css .='color: '.esc_attr($vw_hospital_lite_second_color).'!important;';
		$vw_hospital_lite_custom_css .='}';
	}
	if($vw_hospital_lite_second_color != false){
		$vw_hospital_lite_custom_css .='.copyright.text-center, .main-navigation ul ul{';
			$vw_hospital_lite_custom_css .='border-top-color: '.esc_attr($vw_hospital_lite_second_color).';';
		$vw_hospital_lite_custom_css .='}';
	}
	if($vw_hospital_lite_second_color != false){
		$vw_hospital_lite_custom_css .='.top-bar, .main-navigation ul ul{';
			$vw_hospital_lite_custom_css .='border-bottom-color: '.esc_attr($vw_hospital_lite_second_color).';';
		$vw_hospital_lite_custom_css .='}';
	}

	/*---------------------------Width Layout -------------------*/

	$theme_lay = get_theme_mod( 'vw_hospital_lite_width_option','Full Width');
    if($theme_lay == 'Boxed'){
		$vw_hospital_lite_custom_css .='body{';
			$vw_hospital_lite_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto !important; margin-left: auto !important;';
		$vw_hospital_lite_custom_css .='}';
		$vw_hospital_lite_custom_css .='.scrollup i{';
			$vw_hospital_lite_custom_css .='right: 100px;';
		$vw_hospital_lite_custom_css .='}';
		$vw_hospital_lite_custom_css .='.scrollup.left i{';
			$vw_hospital_lite_custom_css .='left: 100px;';
		$vw_hospital_lite_custom_css .='}';
	}else if($theme_lay == 'Wide Width'){
		$vw_hospital_lite_custom_css .='body{';
			$vw_hospital_lite_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$vw_hospital_lite_custom_css .='}';
		$vw_hospital_lite_custom_css .='.scrollup i{';
			$vw_hospital_lite_custom_css .='right: 30px;';
		$vw_hospital_lite_custom_css .='}';
		$vw_hospital_lite_custom_css .='.scrollup.left i{';
			$vw_hospital_lite_custom_css .='left: 30px;';
		$vw_hospital_lite_custom_css .='}';
	}else if($theme_lay == 'Full Width'){
		$vw_hospital_lite_custom_css .='body{';
			$vw_hospital_lite_custom_css .='max-width: 100%;';
		$vw_hospital_lite_custom_css .='}';
	}

	/*------------------- Slider Opacity -------------------*/

	$theme_lay = get_theme_mod( 'vw_hospital_lite_slider_opacity_color','0.5');
	if($theme_lay == '0'){
		$vw_hospital_lite_custom_css .='#slider img{';
			$vw_hospital_lite_custom_css .='opacity:0';
		$vw_hospital_lite_custom_css .='}';
		}else if($theme_lay == '0.1'){
		$vw_hospital_lite_custom_css .='#slider img{';
			$vw_hospital_lite_custom_css .='opacity:0.1';
		$vw_hospital_lite_custom_css .='}';
		}else if($theme_lay == '0.2'){
		$vw_hospital_lite_custom_css .='#slider img{';
			$vw_hospital_lite_custom_css .='opacity:0.2';
		$vw_hospital_lite_custom_css .='}';
		}else if($theme_lay == '0.3'){
		$vw_hospital_lite_custom_css .='#slider img{';
			$vw_hospital_lite_custom_css .='opacity:0.3';
		$vw_hospital_lite_custom_css .='}';
		}else if($theme_lay == '0.4'){
		$vw_hospital_lite_custom_css .='#slider img{';
			$vw_hospital_lite_custom_css .='opacity:0.4';
		$vw_hospital_lite_custom_css .='}';
		}else if($theme_lay == '0.5'){
		$vw_hospital_lite_custom_css .='#slider img{';
			$vw_hospital_lite_custom_css .='opacity:0.5';
		$vw_hospital_lite_custom_css .='}';
		}else if($theme_lay == '0.6'){
		$vw_hospital_lite_custom_css .='#slider img{';
			$vw_hospital_lite_custom_css .='opacity:0.6';
		$vw_hospital_lite_custom_css .='}';
		}else if($theme_lay == '0.7'){
		$vw_hospital_lite_custom_css .='#slider img{';
			$vw_hospital_lite_custom_css .='opacity:0.7';
		$vw_hospital_lite_custom_css .='}';
		}else if($theme_lay == '0.8'){
		$vw_hospital_lite_custom_css .='#slider img{';
			$vw_hospital_lite_custom_css .='opacity:0.8';
		$vw_hospital_lite_custom_css .='}';
		}else if($theme_lay == '0.9'){
		$vw_hospital_lite_custom_css .='#slider img{';
			$vw_hospital_lite_custom_css .='opacity:0.9';
		$vw_hospital_lite_custom_css .='}';
		}

	/*-----------------Slider Content Layout -------------------*/

	$theme_lay = get_theme_mod( 'vw_hospital_lite_slider_content_option','Center');
    if($theme_lay == 'Left'){
		$vw_hospital_lite_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$vw_hospital_lite_custom_css .='text-align:left; left:15%; right:45%;';
		$vw_hospital_lite_custom_css .='}';
	}else if($theme_lay == 'Center'){
		$vw_hospital_lite_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$vw_hospital_lite_custom_css .='text-align:center; left:20%; right:20%;';
		$vw_hospital_lite_custom_css .='}';
	}else if($theme_lay == 'Right'){
		$vw_hospital_lite_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$vw_hospital_lite_custom_css .='text-align:right; left:45%; right:15%;';
		$vw_hospital_lite_custom_css .='}';
	}

	/*------------- Slider Content Padding Settings ------------------*/

	$vw_hospital_lite_slider_content_padding_top_bottom = get_theme_mod('vw_hospital_lite_slider_content_padding_top_bottom');
	$vw_hospital_lite_slider_content_padding_left_right = get_theme_mod('vw_hospital_lite_slider_content_padding_left_right');
	if($vw_hospital_lite_slider_content_padding_top_bottom != false || $vw_hospital_lite_slider_content_padding_left_right != false){
		$vw_hospital_lite_custom_css .='#slider .carousel-caption{';
			$vw_hospital_lite_custom_css .='top: '.esc_attr($vw_hospital_lite_slider_content_padding_top_bottom).'; bottom: '.esc_attr($vw_hospital_lite_slider_content_padding_top_bottom).';left: '.esc_attr($vw_hospital_lite_slider_content_padding_left_right).';right: '.esc_attr($vw_hospital_lite_slider_content_padding_left_right).';';
		$vw_hospital_lite_custom_css .='}';
	}

	/*-----------------Slider Height ------------*/

	$vw_hospital_lite_slider_height = get_theme_mod('vw_hospital_lite_slider_height');
	if($vw_hospital_lite_slider_height != false){
		$vw_hospital_lite_custom_css .='#slider img{';
			$vw_hospital_lite_custom_css .='height: '.esc_attr($vw_hospital_lite_slider_height).';';
		$vw_hospital_lite_custom_css .='}';
	}

	/*-----------------Blog Layout -------------------*/

	$theme_lay = get_theme_mod( 'vw_hospital_lite_blog_layout_option','Default');
    if($theme_lay == 'Default'){
		$vw_hospital_lite_custom_css .='.services-box{';
			$vw_hospital_lite_custom_css .='';
		$vw_hospital_lite_custom_css .='}';
	}else if($theme_lay == 'Center'){
		$vw_hospital_lite_custom_css .='.services-box, .mainpostbox .page-box h2, .services-box .metabox, .page-box p{';
			$vw_hospital_lite_custom_css .='text-align:center;';
		$vw_hospital_lite_custom_css .='}';
	}else if($theme_lay == 'Left'){
		$vw_hospital_lite_custom_css .='.services-box, .mainpostbox .page-box h2, .services-box .metabox, .page-box p{';
			$vw_hospital_lite_custom_css .='text-align:Left;';
		$vw_hospital_lite_custom_css .='}';
		$vw_hospital_lite_custom_css .='.post-info, .services-box h2{';
			$vw_hospital_lite_custom_css .='margin-top: 10px;';
		$vw_hospital_lite_custom_css .='}';
	}

	/*----------------Responsive Media -----------------------*/

	$vw_hospital_lite_resp_topbar = get_theme_mod( 'vw_hospital_lite_resp_topbar_hide_show',false);
	if($vw_hospital_lite_resp_topbar == true && get_theme_mod( 'vw_hospital_lite_topbar_hide_show', false) == false){
    	$vw_hospital_lite_custom_css .='.top-bar{';
			$vw_hospital_lite_custom_css .='display:none;';
		$vw_hospital_lite_custom_css .='} ';
	}
    if($vw_hospital_lite_resp_topbar == true){
    	$vw_hospital_lite_custom_css .='@media screen and (max-width:575px) {';
		$vw_hospital_lite_custom_css .='.top-bar{';
			$vw_hospital_lite_custom_css .='display:block;';
		$vw_hospital_lite_custom_css .='} }';
	}else if($vw_hospital_lite_resp_topbar == false){
		$vw_hospital_lite_custom_css .='@media screen and (max-width:575px) {';
		$vw_hospital_lite_custom_css .='.top-bar{';
			$vw_hospital_lite_custom_css .='display:none;';
		$vw_hospital_lite_custom_css .='} }';
	}

	$vw_hospital_lite_resp_stickyheader = get_theme_mod( 'vw_hospital_lite_stickyheader_hide_show',false);
	if($vw_hospital_lite_resp_stickyheader == true && get_theme_mod( 'vw_hospital_lite_sticky_header',false) != true){
    	$vw_hospital_lite_custom_css .='.header-fixed{';
			$vw_hospital_lite_custom_css .='position:static;';
		$vw_hospital_lite_custom_css .='} ';
	}
    if($vw_hospital_lite_resp_stickyheader == true){
    	$vw_hospital_lite_custom_css .='@media screen and (max-width:575px) {';
		$vw_hospital_lite_custom_css .='.header-fixed{';
			$vw_hospital_lite_custom_css .='position:fixed;';
		$vw_hospital_lite_custom_css .='} }';
	}else if($vw_hospital_lite_resp_stickyheader == false){
		$vw_hospital_lite_custom_css .='@media screen and (max-width:575px){';
		$vw_hospital_lite_custom_css .='.header-fixed{';
			$vw_hospital_lite_custom_css .='position:static;';
		$vw_hospital_lite_custom_css .='} }';
	}

	$vw_hospital_lite_resp_slider = get_theme_mod( 'vw_hospital_lite_resp_slider_hide_show',false);
	if($vw_hospital_lite_resp_slider == true && get_theme_mod( 'vw_hospital_lite_slider_hide_show', false) == false){
    	$vw_hospital_lite_custom_css .='#slider{';
			$vw_hospital_lite_custom_css .='display:none;';
		$vw_hospital_lite_custom_css .='} ';
	}
    if($vw_hospital_lite_resp_slider == true){
    	$vw_hospital_lite_custom_css .='@media screen and (max-width:575px) {';
		$vw_hospital_lite_custom_css .='#slider{';
			$vw_hospital_lite_custom_css .='display:block;';
		$vw_hospital_lite_custom_css .='} }';
	}else if($vw_hospital_lite_resp_slider == false){
		$vw_hospital_lite_custom_css .='@media screen and (max-width:575px) {';
		$vw_hospital_lite_custom_css .='#slider{';
			$vw_hospital_lite_custom_css .='display:none;';
		$vw_hospital_lite_custom_css .='} }';
	}

	$vw_hospital_lite_resp_sidebar = get_theme_mod( 'vw_hospital_lite_sidebar_hide_show',true);
    if($vw_hospital_lite_resp_sidebar == true){
    	$vw_hospital_lite_custom_css .='@media screen and (max-width:575px) {';
		$vw_hospital_lite_custom_css .='.sidebar{';
			$vw_hospital_lite_custom_css .='display:block;';
		$vw_hospital_lite_custom_css .='} }';
	}else if($vw_hospital_lite_resp_sidebar == false){
		$vw_hospital_lite_custom_css .='@media screen and (max-width:575px) {';
		$vw_hospital_lite_custom_css .='.sidebar{';
			$vw_hospital_lite_custom_css .='display:none;';
		$vw_hospital_lite_custom_css .='} }';
	}

	$vw_hospital_lite_resp_scroll_top = get_theme_mod( 'vw_hospital_lite_resp_scroll_top_hide_show',true);
	if($vw_hospital_lite_resp_scroll_top == true && get_theme_mod( 'vw_hospital_lite_hide_show_scroll',true) != true){
    	$vw_hospital_lite_custom_css .='.scrollup i{';
			$vw_hospital_lite_custom_css .='visibility:hidden !important;';
		$vw_hospital_lite_custom_css .='} ';
	}
    if($vw_hospital_lite_resp_scroll_top == true){
    	$vw_hospital_lite_custom_css .='@media screen and (max-width:575px) {';
		$vw_hospital_lite_custom_css .='.scrollup i{';
			$vw_hospital_lite_custom_css .='visibility:visible !important;';
		$vw_hospital_lite_custom_css .='} }';
	}else if($vw_hospital_lite_resp_scroll_top == false){
		$vw_hospital_lite_custom_css .='@media screen and (max-width:575px){';
		$vw_hospital_lite_custom_css .='.scrollup i{';
			$vw_hospital_lite_custom_css .='visibility:hidden !important;';
		$vw_hospital_lite_custom_css .='} }';
	}

	$vw_hospital_lite_resp_menu_toggle_btn_bg_color = get_theme_mod('vw_hospital_lite_resp_menu_toggle_btn_bg_color');
	if($vw_hospital_lite_resp_menu_toggle_btn_bg_color != false){
		$vw_hospital_lite_custom_css .='.toggle-nav i{';
			$vw_hospital_lite_custom_css .='background-color: '.esc_attr($vw_hospital_lite_resp_menu_toggle_btn_bg_color).';';
		$vw_hospital_lite_custom_css .='}';
	}

	/*------------- Top Bar Settings ------------------*/

	$vw_hospital_lite_topbar_padding_top_bottom = get_theme_mod('vw_hospital_lite_topbar_padding_top_bottom');
	if($vw_hospital_lite_topbar_padding_top_bottom != false){
		$vw_hospital_lite_custom_css .='.top-bar{';
			$vw_hospital_lite_custom_css .='padding-top: '.esc_attr($vw_hospital_lite_topbar_padding_top_bottom).'; padding-bottom: '.esc_attr($vw_hospital_lite_topbar_padding_top_bottom).';';
		$vw_hospital_lite_custom_css .='}';
	}

	$vw_hospital_lite_navigation_menu_font_size = get_theme_mod('vw_hospital_lite_navigation_menu_font_size');
	if($vw_hospital_lite_navigation_menu_font_size != false){
		$vw_hospital_lite_custom_css .='.main-navigation a{';
			$vw_hospital_lite_custom_css .='font-size: '.esc_attr($vw_hospital_lite_navigation_menu_font_size).';';
		$vw_hospital_lite_custom_css .='}';
	}

	$vw_hospital_lite_header_menus_color = get_theme_mod('vw_hospital_lite_header_menus_color');
	if($vw_hospital_lite_header_menus_color != false){
		$vw_hospital_lite_custom_css .='.main-navigation a{';
			$vw_hospital_lite_custom_css .='color: '.esc_attr($vw_hospital_lite_header_menus_color).';';
		$vw_hospital_lite_custom_css .='}';
	}

	$vw_hospital_lite_header_menus_hover_color = get_theme_mod('vw_hospital_lite_header_menus_hover_color');
	if($vw_hospital_lite_header_menus_hover_color != false){
		$vw_hospital_lite_custom_css .='.main-navigation a:hover{';
			$vw_hospital_lite_custom_css .='color: '.esc_attr($vw_hospital_lite_header_menus_hover_color).';';
		$vw_hospital_lite_custom_css .='}';
	}

	$vw_hospital_lite_header_submenus_color = get_theme_mod('vw_hospital_lite_header_submenus_color');
	if($vw_hospital_lite_header_submenus_color != false){
		$vw_hospital_lite_custom_css .='.main-navigation ul ul a{';
			$vw_hospital_lite_custom_css .='color: '.esc_attr($vw_hospital_lite_header_submenus_color).';';
		$vw_hospital_lite_custom_css .='}';
	}

	$vw_hospital_lite_header_submenus_hover_color = get_theme_mod('vw_hospital_lite_header_submenus_hover_color');
	if($vw_hospital_lite_header_submenus_hover_color != false){
		$vw_hospital_lite_custom_css .='.main-navigation ul.sub-menu a:hover{';
			$vw_hospital_lite_custom_css .='color: '.esc_attr($vw_hospital_lite_header_submenus_hover_color).';';
		$vw_hospital_lite_custom_css .='}';
	}


	/*-------------- Sticky Header Padding ----------------*/

	$vw_hospital_lite_sticky_header_padding = get_theme_mod('vw_hospital_lite_sticky_header_padding');
	if($vw_hospital_lite_sticky_header_padding != false){
		$vw_hospital_lite_custom_css .='.header-fixed{';
			$vw_hospital_lite_custom_css .='padding: '.esc_attr($vw_hospital_lite_sticky_header_padding).';';
		$vw_hospital_lite_custom_css .='}';
	}

	/*------------------ Search Settings -----------------*/

	$vw_hospital_lite_search_border_radius = get_theme_mod('vw_hospital_lite_search_border_radius');
	if($vw_hospital_lite_search_border_radius != false){
		$vw_hospital_lite_custom_css .='.menubar form.search-form{';
			$vw_hospital_lite_custom_css .='border-radius: '.esc_attr($vw_hospital_lite_search_border_radius).'px;';
		$vw_hospital_lite_custom_css .='}';
	}

	/*------------- Single Blog Page------------------*/

	$vw_hospital_lite_featured_image_border_radius = get_theme_mod('vw_hospital_lite_featured_image_border_radius', 0);
	if($vw_hospital_lite_featured_image_border_radius != false){
		$vw_hospital_lite_custom_css .='.service-image img, .feature-box img{';
			$vw_hospital_lite_custom_css .='border-radius: '.esc_attr($vw_hospital_lite_featured_image_border_radius).'px;';
		$vw_hospital_lite_custom_css .='}';
	}

	$vw_hospital_lite_featured_image_box_shadow = get_theme_mod('vw_hospital_lite_featured_image_box_shadow',0);
	if($vw_hospital_lite_featured_image_box_shadow != false){
		$vw_hospital_lite_custom_css .='.service-image img, .feature-box img, #content-vw img{';
			$vw_hospital_lite_custom_css .='box-shadow: '.esc_attr($vw_hospital_lite_featured_image_box_shadow).'px '.esc_attr($vw_hospital_lite_featured_image_box_shadow).'px '.esc_attr($vw_hospital_lite_featured_image_box_shadow).'px #cccccc;';
		$vw_hospital_lite_custom_css .='}';
	}

	$vw_hospital_lite_single_blog_post_navigation_show_hide = get_theme_mod('vw_hospital_lite_single_blog_post_navigation_show_hide',true);
	if($vw_hospital_lite_single_blog_post_navigation_show_hide != true){
		$vw_hospital_lite_custom_css .='.post-navigation{';
			$vw_hospital_lite_custom_css .='display: none;';
		$vw_hospital_lite_custom_css .='}';
	}

	$vw_hospital_lite_comment_width = get_theme_mod('vw_hospital_lite_single_blog_comment_width');
	if($vw_hospital_lite_comment_width != false){
		$vw_hospital_lite_custom_css .='#comments textarea{';
			$vw_hospital_lite_custom_css .='width: '.esc_attr($vw_hospital_lite_comment_width).';';
		$vw_hospital_lite_custom_css .='}';
	}

	/*-------------- Copyright Alignment ----------------*/

	$vw_hospital_lite_footer_background_color = get_theme_mod('vw_hospital_lite_footer_background_color');
	if($vw_hospital_lite_footer_background_color != false){
		$vw_hospital_lite_custom_css .='.footer-content{';
			$vw_hospital_lite_custom_css .='background-color: '.esc_attr($vw_hospital_lite_footer_background_color).';';
		$vw_hospital_lite_custom_css .='}';
	}

	$vw_hospital_lite_copyright_font_size = get_theme_mod('vw_hospital_lite_copyright_font_size');
	if($vw_hospital_lite_copyright_font_size != false){
		$vw_hospital_lite_custom_css .='.copyright p, .copyright p a{';
			$vw_hospital_lite_custom_css .='font-size: '.esc_attr($vw_hospital_lite_copyright_font_size).';';
		$vw_hospital_lite_custom_css .='}';
	}

	$vw_hospital_lite_copyright_alingment = get_theme_mod('vw_hospital_lite_copyright_alingment');
	if($vw_hospital_lite_copyright_alingment != false){
		$vw_hospital_lite_custom_css .='.copyright p{';
			$vw_hospital_lite_custom_css .='text-align: '.esc_attr($vw_hospital_lite_copyright_alingment).';';
		$vw_hospital_lite_custom_css .='}';
	}

	$vw_hospital_lite_copyright_padding_top_bottom = get_theme_mod('vw_hospital_lite_copyright_padding_top_bottom');
	if($vw_hospital_lite_copyright_padding_top_bottom != false){
		$vw_hospital_lite_custom_css .='.copyright.text-center{';
			$vw_hospital_lite_custom_css .='padding-top: '.esc_attr($vw_hospital_lite_copyright_padding_top_bottom).'; padding-bottom: '.esc_attr($vw_hospital_lite_copyright_padding_top_bottom).';';
		$vw_hospital_lite_custom_css .='}';
	}

	$vw_hospital_lite_footer_widgets_heading = get_theme_mod( 'vw_hospital_lite_footer_widgets_heading','Left');
    if($vw_hospital_lite_footer_widgets_heading == 'Left'){
		$vw_hospital_lite_custom_css .='.footer-content h3, .footer-content h3 .wp-block-search .wp-block-search__label{';
		$vw_hospital_lite_custom_css .='text-align: left;';
		$vw_hospital_lite_custom_css .='}';
	}else if($vw_hospital_lite_footer_widgets_heading == 'Center'){
		$vw_hospital_lite_custom_css .='.footer-content h3, .footer-content h3 .wp-block-search .wp-block-search__label{';
			$vw_hospital_lite_custom_css .='text-align: center;';
		$vw_hospital_lite_custom_css .='}';
	}else if($vw_hospital_lite_footer_widgets_heading == 'Right'){
		$vw_hospital_lite_custom_css .='.footer-content h3, .footer-content .wp-block-search .wp-block-search__label{';
			$vw_hospital_lite_custom_css .='text-align: right;';
		$vw_hospital_lite_custom_css .='}';
	}

	$vw_hospital_lite_footer_widgets_content = get_theme_mod( 'vw_hospital_lite_footer_widgets_content','Left');
    if($vw_hospital_lite_footer_widgets_content == 'Left'){
		$vw_hospital_lite_custom_css .='.footer-content li{';
		$vw_hospital_lite_custom_css .='text-align: left;';
		$vw_hospital_lite_custom_css .='}';
	}else if($vw_hospital_lite_footer_widgets_content == 'Center'){
		$vw_hospital_lite_custom_css .='.footer-content li{';
			$vw_hospital_lite_custom_css .='text-align: center;';
		$vw_hospital_lite_custom_css .='}';
	}else if($vw_hospital_lite_footer_widgets_content == 'Right'){
		$vw_hospital_lite_custom_css .='.footer-content li{';
			$vw_hospital_lite_custom_css .='text-align: right;';
		$vw_hospital_lite_custom_css .='}';
	}

	$vw_hospital_lite_footer_padding = get_theme_mod('vw_hospital_lite_footer_padding');
	if($vw_hospital_lite_footer_padding != false){
		$vw_hospital_lite_custom_css .='.footer-content{';
			$vw_hospital_lite_custom_css .='padding: '.esc_attr($vw_hospital_lite_footer_padding).' 0;';
		$vw_hospital_lite_custom_css .='}';
	}

	/*----------------Sroll to top Settings ------------------*/

	$vw_hospital_lite_scroll_to_top_font_size = get_theme_mod('vw_hospital_lite_scroll_to_top_font_size');
	if($vw_hospital_lite_scroll_to_top_font_size != false){
		$vw_hospital_lite_custom_css .='.scrollup i{';
			$vw_hospital_lite_custom_css .='font-size: '.esc_attr($vw_hospital_lite_scroll_to_top_font_size).';';
		$vw_hospital_lite_custom_css .='}';
	}

	$vw_hospital_lite_scroll_to_top_padding = get_theme_mod('vw_hospital_lite_scroll_to_top_padding');
	$vw_hospital_lite_scroll_to_top_padding = get_theme_mod('vw_hospital_lite_scroll_to_top_padding');
	if($vw_hospital_lite_scroll_to_top_padding != false){
		$vw_hospital_lite_custom_css .='.scrollup i{';
			$vw_hospital_lite_custom_css .='padding-top: '.esc_attr($vw_hospital_lite_scroll_to_top_padding).';padding-bottom: '.esc_attr($vw_hospital_lite_scroll_to_top_padding).';';
		$vw_hospital_lite_custom_css .='}';
	}

	$vw_hospital_lite_scroll_to_top_width = get_theme_mod('vw_hospital_lite_scroll_to_top_width');
	if($vw_hospital_lite_scroll_to_top_width != false){
		$vw_hospital_lite_custom_css .='.scrollup i{';
			$vw_hospital_lite_custom_css .='width: '.esc_attr($vw_hospital_lite_scroll_to_top_width).';';
		$vw_hospital_lite_custom_css .='}';
	}

	$vw_hospital_lite_scroll_to_top_height = get_theme_mod('vw_hospital_lite_scroll_to_top_height');
	if($vw_hospital_lite_scroll_to_top_height != false){
		$vw_hospital_lite_custom_css .='.scrollup i{';
			$vw_hospital_lite_custom_css .='height: '.esc_attr($vw_hospital_lite_scroll_to_top_height).';';
		$vw_hospital_lite_custom_css .='}';
	}

	$vw_hospital_lite_scroll_to_top_border_radius = get_theme_mod('vw_hospital_lite_scroll_to_top_border_radius');
	if($vw_hospital_lite_scroll_to_top_border_radius != false){
		$vw_hospital_lite_custom_css .='.scrollup i{';
			$vw_hospital_lite_custom_css .='border-radius: '.esc_attr($vw_hospital_lite_scroll_to_top_border_radius).'px;';
		$vw_hospital_lite_custom_css .='}';
	}

	/*----------------Social Icons Settings ------------------*/

	$vw_hospital_lite_social_icon_font_size = get_theme_mod('vw_hospital_lite_social_icon_font_size');
	if($vw_hospital_lite_social_icon_font_size != false){
		$vw_hospital_lite_custom_css .='.sidebar .custom-social-icons i, .footer-content .custom-social-icons i, .top-bar .custom-social-icons i{';
			$vw_hospital_lite_custom_css .='font-size: '.esc_attr($vw_hospital_lite_social_icon_font_size).';';
		$vw_hospital_lite_custom_css .='}';
	}

	$vw_hospital_lite_social_icon_padding = get_theme_mod('vw_hospital_lite_social_icon_padding');
	if($vw_hospital_lite_social_icon_padding != false){
		$vw_hospital_lite_custom_css .='.sidebar .custom-social-icons i, .footer-content .custom-social-icons i{';
			$vw_hospital_lite_custom_css .='padding: '.esc_attr($vw_hospital_lite_social_icon_padding).';';
		$vw_hospital_lite_custom_css .='}';
	}

	$vw_hospital_lite_social_icon_width = get_theme_mod('vw_hospital_lite_social_icon_width');
	if($vw_hospital_lite_social_icon_width != false){
		$vw_hospital_lite_custom_css .='.sidebar .custom-social-icons i, .footer-content .custom-social-icons i{';
			$vw_hospital_lite_custom_css .='width: '.esc_attr($vw_hospital_lite_social_icon_width).';';
		$vw_hospital_lite_custom_css .='}';
	}

	$vw_hospital_lite_social_icon_height = get_theme_mod('vw_hospital_lite_social_icon_height');
	if($vw_hospital_lite_social_icon_height != false){
		$vw_hospital_lite_custom_css .='.sidebar .custom-social-icons i, .footer-content .custom-social-icons i{';
			$vw_hospital_lite_custom_css .='height: '.esc_attr($vw_hospital_lite_social_icon_height).';';
		$vw_hospital_lite_custom_css .='}';
	}

	$vw_hospital_lite_social_icon_border_radius = get_theme_mod('vw_hospital_lite_social_icon_border_radius');
	if($vw_hospital_lite_social_icon_border_radius != false){
		$vw_hospital_lite_custom_css .='.sidebar .custom-social-icons i, .footer-content .custom-social-icons i{';
			$vw_hospital_lite_custom_css .='border-radius: '.esc_attr($vw_hospital_lite_social_icon_border_radius).'px;';
		$vw_hospital_lite_custom_css .='}';
	}

	/*----------------Woocommerce Products Settings ------------------*/

	$vw_hospital_lite_products_padding_top_bottom = get_theme_mod('vw_hospital_lite_products_padding_top_bottom');
	if($vw_hospital_lite_products_padding_top_bottom != false){
		$vw_hospital_lite_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$vw_hospital_lite_custom_css .='padding-top: '.esc_attr($vw_hospital_lite_products_padding_top_bottom).'!important; padding-bottom: '.esc_attr($vw_hospital_lite_products_padding_top_bottom).'!important;';
		$vw_hospital_lite_custom_css .='}';
	}

	$vw_hospital_lite_products_padding_left_right = get_theme_mod('vw_hospital_lite_products_padding_left_right');
	if($vw_hospital_lite_products_padding_left_right != false){
		$vw_hospital_lite_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$vw_hospital_lite_custom_css .='padding-left: '.esc_attr($vw_hospital_lite_products_padding_left_right).'!important; padding-right: '.esc_attr($vw_hospital_lite_products_padding_left_right).'!important;';
		$vw_hospital_lite_custom_css .='}';
	}

	$vw_hospital_lite_products_box_shadow = get_theme_mod('vw_hospital_lite_products_box_shadow');
	if($vw_hospital_lite_products_box_shadow != false){
		$vw_hospital_lite_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
				$vw_hospital_lite_custom_css .='box-shadow: '.esc_attr($vw_hospital_lite_products_box_shadow).'px '.esc_attr($vw_hospital_lite_products_box_shadow).'px '.esc_attr($vw_hospital_lite_products_box_shadow).'px #ddd;';
		$vw_hospital_lite_custom_css .='}';
	}

	$vw_hospital_lite_products_border_radius = get_theme_mod('vw_hospital_lite_products_border_radius', 0);
	if($vw_hospital_lite_products_border_radius != false){
		$vw_hospital_lite_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$vw_hospital_lite_custom_css .='border-radius: '.esc_attr($vw_hospital_lite_products_border_radius).'px;';
		$vw_hospital_lite_custom_css .='}';
	}

	$vw_hospital_lite_products_btn_padding_top_bottom = get_theme_mod('vw_hospital_lite_products_btn_padding_top_bottom');
	if($vw_hospital_lite_products_btn_padding_top_bottom != false){
		$vw_hospital_lite_custom_css .='.woocommerce a.button{';
			$vw_hospital_lite_custom_css .='padding-top: '.esc_attr($vw_hospital_lite_products_btn_padding_top_bottom).' !important; padding-bottom: '.esc_attr($vw_hospital_lite_products_btn_padding_top_bottom).' !important;';
		$vw_hospital_lite_custom_css .='}';
	}

	$vw_hospital_lite_products_btn_padding_left_right = get_theme_mod('vw_hospital_lite_products_btn_padding_left_right');
	if($vw_hospital_lite_products_btn_padding_left_right != false){
		$vw_hospital_lite_custom_css .='.woocommerce a.button{';
			$vw_hospital_lite_custom_css .='padding-left: '.esc_attr($vw_hospital_lite_products_btn_padding_left_right).' !important; padding-right: '.esc_attr($vw_hospital_lite_products_btn_padding_left_right).' !important;';
		$vw_hospital_lite_custom_css .='}';
	}

	$vw_hospital_lite_products_button_border_radius = get_theme_mod('vw_hospital_lite_products_button_border_radius', 0);
	if($vw_hospital_lite_products_button_border_radius != false){
		$vw_hospital_lite_custom_css .='.woocommerce ul.products li.product .button, a.checkout-button.button.alt.wc-forward,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
			$vw_hospital_lite_custom_css .='border-radius: '.esc_attr($vw_hospital_lite_products_button_border_radius).'px;';
		$vw_hospital_lite_custom_css .='}';
	}

	$vw_hospital_lite_woocommerce_sale_position = get_theme_mod( 'vw_hospital_lite_woocommerce_sale_position','right');
    if($vw_hospital_lite_woocommerce_sale_position == 'left'){
		$vw_hospital_lite_custom_css .='.woocommerce ul.products li.product .onsale{';
			$vw_hospital_lite_custom_css .='left: -10px; right: auto;';
		$vw_hospital_lite_custom_css .='}';
	}else if($vw_hospital_lite_woocommerce_sale_position == 'right'){
		$vw_hospital_lite_custom_css .='.woocommerce ul.products li.product .onsale{';
			$vw_hospital_lite_custom_css .='left: auto; right: 0;';
		$vw_hospital_lite_custom_css .='}';
	}

	$vw_hospital_lite_woocommerce_sale_font_size = get_theme_mod('vw_hospital_lite_woocommerce_sale_font_size');
	if($vw_hospital_lite_woocommerce_sale_font_size != false){
		$vw_hospital_lite_custom_css .='.woocommerce span.onsale{';
			$vw_hospital_lite_custom_css .='font-size: '.esc_attr($vw_hospital_lite_woocommerce_sale_font_size).';';
		$vw_hospital_lite_custom_css .='}';
	}

	$vw_hospital_lite_woocommerce_sale_border_radius = get_theme_mod('vw_hospital_lite_woocommerce_sale_border_radius', 100);
	if($vw_hospital_lite_woocommerce_sale_border_radius != false){
		$vw_hospital_lite_custom_css .='.woocommerce span.onsale{';
			$vw_hospital_lite_custom_css .='border-radius: '.esc_attr($vw_hospital_lite_woocommerce_sale_border_radius).'px;';
		$vw_hospital_lite_custom_css .='}';
	}

	/*------------------ Logo  -------------------*/

	// Site title Font Size
	$vw_hospital_lite_site_title_font_size = get_theme_mod('vw_hospital_lite_site_title_font_size');
	if($vw_hospital_lite_site_title_font_size != false){
		$vw_hospital_lite_custom_css .='.logo h1 a, .logo p.site-title a{';
			$vw_hospital_lite_custom_css .='font-size: '.esc_attr($vw_hospital_lite_site_title_font_size).';';
		$vw_hospital_lite_custom_css .='}';
	}

	// Site tagline Font Size
	$vw_hospital_lite_site_tagline_font_size = get_theme_mod('vw_hospital_lite_site_tagline_font_size');
	if($vw_hospital_lite_site_tagline_font_size != false){
		$vw_hospital_lite_custom_css .='.logo p.site-description{';
			$vw_hospital_lite_custom_css .='font-size: '.esc_attr($vw_hospital_lite_site_tagline_font_size).';';
		$vw_hospital_lite_custom_css .='}';
	}

	$vw_hospital_lite_logo_padding = get_theme_mod('vw_hospital_lite_logo_padding');
	if($vw_hospital_lite_logo_padding != false){
		$vw_hospital_lite_custom_css .='.logo{';
			$vw_hospital_lite_custom_css .='padding: '.esc_attr($vw_hospital_lite_logo_padding).';';
		$vw_hospital_lite_custom_css .='}';
	}

	$vw_hospital_lite_logo_margin = get_theme_mod('vw_hospital_lite_logo_margin');
	if($vw_hospital_lite_logo_margin != false){
		$vw_hospital_lite_custom_css .='.logo{';
			$vw_hospital_lite_custom_css .='margin: '.esc_attr($vw_hospital_lite_logo_margin).';';
		$vw_hospital_lite_custom_css .='}';
	}

	/*------------------ Preloader Background Color  -------------------*/

	$vw_hospital_lite_preloader_bg_color = get_theme_mod('vw_hospital_lite_preloader_bg_color');
	if($vw_hospital_lite_preloader_bg_color != false){
		$vw_hospital_lite_custom_css .='#preloader{';
			$vw_hospital_lite_custom_css .='background-color: '.esc_attr($vw_hospital_lite_preloader_bg_color).';';
		$vw_hospital_lite_custom_css .='}';
	}

	$vw_hospital_lite_preloader_border_color = get_theme_mod('vw_hospital_lite_preloader_border_color');
	if($vw_hospital_lite_preloader_border_color != false){
		$vw_hospital_lite_custom_css .='.loader-line{';
			$vw_hospital_lite_custom_css .='border-color: '.esc_attr($vw_hospital_lite_preloader_border_color).'!important;';
		$vw_hospital_lite_custom_css .='}';
	}