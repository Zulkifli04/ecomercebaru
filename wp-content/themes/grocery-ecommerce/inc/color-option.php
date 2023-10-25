<?php

	$grocery_ecommerce_first_theme_color = get_theme_mod('grocery_ecommerce_first_theme_color');

	$grocery_ecommerce_second_theme_color = get_theme_mod('grocery_ecommerce_second_theme_color');

	$grocery_ecommerce_custom_css = '';

	if($grocery_ecommerce_first_theme_color != false){
		$grocery_ecommerce_custom_css .='input[type="submit"],a.button,.nav-menu ul ul a,.top-bar,button.product-btn,#slider .read-more a,#slider .carousel-control-next-icon, #slider .carousel-control-prev-icon,.post-info,h1.page-title, h1.search-title ,.blogbtn a,.back-to-top,#footer input[type="submit"],.footerinner .tagcloud a:hover,.woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, a.added_to_cart.wc-forward,nav.woocommerce-MyAccount-navigation ul li,nav.woocommerce-MyAccount-navigation ul li ,.woocommerce-product-search button,.woocommerce .widget_shopping_cart .buttons a:hover, .woocommerce.widget_shopping_cart .buttons a:hover, .woocommerce .widget_price_filter .price_slider_amount .button:hover,.woocommerce .widget_price_filter .ui-slider-horizontal .ui-slider-range, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle,#maincontent .bradcrumbs a,#maincontent .bradcrumbs span,#comments input[type="submit"].submit,#comments a.comment-reply-link,#sidebar h3 ,#sidebar input[type="submit"],#sidebar .tagcloud a:hover,.more-button a,.pagination a:hover,.pagination .current,.navigation .nav-previous a, .navigation .nav-next a,.tags a:hover,.post-categories li a,.pagination a:hover, .page-links a span:hover, span.page-links-title,.pagination .current, .page-links .current .page-number,#maincontent .wp-block-button a,#sidebar h2, #sidebar .wp-block-search__label,.wp-block-tag-cloud a:hover,.wp-block-search__button{';
			$grocery_ecommerce_custom_css .='background-color: '.esc_attr($grocery_ecommerce_first_theme_color).'';
		$grocery_ecommerce_custom_css .='}';
	}
	if($grocery_ecommerce_first_theme_color != false){
		$grocery_ecommerce_custom_css .='#product-section .product-box p.price ins,.woocommerce nav.woocommerce-pagination ul li a, .woocommerce nav.woocommerce-pagination ul li span,.woocommerce-message::before,.social-links i,span.post-title,.tags a i,.star-rating span:before,.wp-block-categories a,.wp-calendar-nav a,.wp-block-archives a,.wp-block-latest-comments__comment-meta a,.wp-block-latest-posts.wp-block-latest-posts__list a,.wp-block-page-list a,.wp-block-rss a{';
			$grocery_ecommerce_custom_css .='color: '.esc_attr($grocery_ecommerce_first_theme_color).'';
		$grocery_ecommerce_custom_css .='}';
	}
	if($grocery_ecommerce_first_theme_color != false){
		$grocery_ecommerce_custom_css .='.nav-menu ul ul,.blog-sec,.woocommerce nav.woocommerce-pagination ul li a, .woocommerce nav.woocommerce-pagination ul li span,.woocommerce-message,#sidebar .widget,.pagination a:hover,.pagination .current ,.tags a:hover,.pagination a:hover, .page-links a span:hover, span.page-links-title,.pagination .current, .page-links .current .page-number{';
			$grocery_ecommerce_custom_css .='border-color: '.esc_attr($grocery_ecommerce_first_theme_color).'';
		$grocery_ecommerce_custom_css .='}';
	}
	if($grocery_ecommerce_first_theme_color != false){
		$grocery_ecommerce_custom_css .='.nav-menu ul ul a:hover{';
	 		$grocery_ecommerce_custom_css .='border-left-color: '.esc_attr($grocery_ecommerce_first_theme_color).'';
	 	$grocery_ecommerce_custom_css .='}';
	 }
	 if($grocery_ecommerce_first_theme_color != false){
		$grocery_ecommerce_custom_css .='.back-to-top::before{';
	 		$grocery_ecommerce_custom_css .='border-bottom-color: '.esc_attr($grocery_ecommerce_first_theme_color).'';
	 	$grocery_ecommerce_custom_css .='}';
	 }
	  if($grocery_ecommerce_first_theme_color != false){
		$grocery_ecommerce_custom_css .='.inner{';
	 		$grocery_ecommerce_custom_css .='border-top-color: '.esc_attr($grocery_ecommerce_first_theme_color).'';
	 	$grocery_ecommerce_custom_css .='}';
	 }

	 if($grocery_ecommerce_second_theme_color != false){
		$grocery_ecommerce_custom_css .='.nav-menu ul li a:before,#slider .read-more a:hover{';
			$grocery_ecommerce_custom_css .='background-color: '.esc_attr($grocery_ecommerce_second_theme_color).'';
		$grocery_ecommerce_custom_css .='}';
	 }
	if($grocery_ecommerce_second_theme_color != false){
		$grocery_ecommerce_custom_css .='.nav-menu ul li.current_page_item a, .nav-menu ul li a:hover,.next-topbar p.call-info a,#footer h3,#footer h3 a.rsswidget,.calendar_wrap a,#footer h2, #footer .wp-block-search__label{';
			$grocery_ecommerce_custom_css .='color: '.esc_attr($grocery_ecommerce_second_theme_color).'';
		$grocery_ecommerce_custom_css .='}';
	}	

	// Layout Options
	$grocery_ecommerce_theme_layout = get_theme_mod( 'grocery_ecommerce_theme_layout_options','Default Theme');
    if($grocery_ecommerce_theme_layout == 'Default Theme'){
		$grocery_ecommerce_custom_css .='body{';
			$grocery_ecommerce_custom_css .='max-width: 100%;';
		$grocery_ecommerce_custom_css .='}';
	}else if($grocery_ecommerce_theme_layout == 'Container Theme'){
		$grocery_ecommerce_custom_css .='body{';
			$grocery_ecommerce_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$grocery_ecommerce_custom_css .='}';
	}else if($grocery_ecommerce_theme_layout == 'Box Container Theme'){
		$grocery_ecommerce_custom_css .='body{';
			$grocery_ecommerce_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$grocery_ecommerce_custom_css .='}';
	}
	
	/*--------- Preloader Color Option -------*/
	$grocery_ecommerce_preloader_color = get_theme_mod('grocery_ecommerce_preloader_color');

	if($grocery_ecommerce_preloader_color != false){
		$grocery_ecommerce_custom_css .=' .tg-loader{';
			$grocery_ecommerce_custom_css .='border-color: '.esc_attr($grocery_ecommerce_preloader_color).';';
		$grocery_ecommerce_custom_css .='} ';
		$grocery_ecommerce_custom_css .=' .tg-loader-inner, .preloader .preloader-container .animated-preloader, .preloader .preloader-container .animated-preloader:before{';
			$grocery_ecommerce_custom_css .='background-color: '.esc_attr($grocery_ecommerce_preloader_color).';';
		$grocery_ecommerce_custom_css .='} ';
	}

	$grocery_ecommerce_preloader_bg_color = get_theme_mod('grocery_ecommerce_preloader_bg_color');

	if($grocery_ecommerce_preloader_bg_color != false){
		$grocery_ecommerce_custom_css .=' #overlayer, .preloader{';
			$grocery_ecommerce_custom_css .='background-color: '.esc_attr($grocery_ecommerce_preloader_bg_color).';';
		$grocery_ecommerce_custom_css .='} ';
	}

	$grocery_ecommerce_preloader_bg_img = get_theme_mod('grocery_ecommerce_preloader_bg_img');
	if($grocery_ecommerce_preloader_bg_img != false){
		$grocery_ecommerce_custom_css .=' #overlayer, .preloader{';
			$grocery_ecommerce_custom_css .='background: url('.esc_attr($grocery_ecommerce_preloader_bg_img).');-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;';
		$grocery_ecommerce_custom_css .='}';
	}

	/*------------ Button Settings option-----------------*/

	$grocery_ecommerce_top_button_padding = get_theme_mod('grocery_ecommerce_top_button_padding');
	$grocery_ecommerce_bottom_button_padding = get_theme_mod('grocery_ecommerce_bottom_button_padding');
	$grocery_ecommerce_left_button_padding = get_theme_mod('grocery_ecommerce_left_button_padding');
	$grocery_ecommerce_right_button_padding = get_theme_mod('grocery_ecommerce_right_button_padding');
	if($grocery_ecommerce_top_button_padding != false || $grocery_ecommerce_bottom_button_padding != false || $grocery_ecommerce_left_button_padding != false || $grocery_ecommerce_right_button_padding != false){
		$grocery_ecommerce_custom_css .='.blogbtn a, .read-more a, #comments input[type="submit"].submit{';
			$grocery_ecommerce_custom_css .='padding-top: '.esc_attr($grocery_ecommerce_top_button_padding).'px; padding-bottom: '.esc_attr($grocery_ecommerce_bottom_button_padding).'px; padding-left: '.esc_attr($grocery_ecommerce_left_button_padding).'px; padding-right: '.esc_attr($grocery_ecommerce_right_button_padding).'px; display:inline-block;';
		$grocery_ecommerce_custom_css .='}';
	}

	$grocery_ecommerce_button_border_radius = get_theme_mod('grocery_ecommerce_button_border_radius');
	$grocery_ecommerce_custom_css .='.blogbtn a, .read-more a, #comments input[type="submit"].submit{';
		$grocery_ecommerce_custom_css .='border-radius: '.esc_attr($grocery_ecommerce_button_border_radius).'px;';
	$grocery_ecommerce_custom_css .='}';

	/*----------- Footer widgets heading alignment -----*/
	$grocery_ecommerce_footer_widgets_heading = get_theme_mod( 'grocery_ecommerce_footer_widgets_heading','Left');
    if($grocery_ecommerce_footer_widgets_heading == 'Left'){
		$grocery_ecommerce_custom_css .='#footer h3{';
		$grocery_ecommerce_custom_css .='text-align: left;';
		$grocery_ecommerce_custom_css .='}';
	}else if($grocery_ecommerce_footer_widgets_heading == 'Center'){
		$grocery_ecommerce_custom_css .='#footer h3{';
			$grocery_ecommerce_custom_css .='text-align: center;';
		$grocery_ecommerce_custom_css .='}';
	}else if($grocery_ecommerce_footer_widgets_heading == 'Right'){
		$grocery_ecommerce_custom_css .='#footer h3{';
			$grocery_ecommerce_custom_css .='text-align: right;';
		$grocery_ecommerce_custom_css .='}';
	}

	$grocery_ecommerce_footer_widgets_content = get_theme_mod( 'grocery_ecommerce_footer_widgets_content','Left');
    if($grocery_ecommerce_footer_widgets_content == 'Left'){
		$grocery_ecommerce_custom_css .='#footer .widget ul{';
		$grocery_ecommerce_custom_css .='text-align: left;';
		$grocery_ecommerce_custom_css .='}';
	}else if($grocery_ecommerce_footer_widgets_content == 'Center'){
		$grocery_ecommerce_custom_css .='#footer .widget ul{';
			$grocery_ecommerce_custom_css .='text-align: center;';
		$grocery_ecommerce_custom_css .='}';
	}else if($grocery_ecommerce_footer_widgets_content == 'Right'){
		$grocery_ecommerce_custom_css .='#footer .widget ul{';
			$grocery_ecommerce_custom_css .='text-align: right;';
		$grocery_ecommerce_custom_css .='}';
	}

	/*----------- Copyright css -----*/
	$grocery_ecommerce_copyright_top_padding = get_theme_mod('grocery_ecommerce_top_copyright_padding');
	$grocery_ecommerce_copyright_bottom_padding = get_theme_mod('grocery_ecommerce_bottom_copyright_padding');
	if($grocery_ecommerce_copyright_top_padding != '' || $grocery_ecommerce_copyright_bottom_padding != ''){
		$grocery_ecommerce_custom_css .='.inner{';
			$grocery_ecommerce_custom_css .='padding-top: '.esc_attr($grocery_ecommerce_copyright_top_padding).'px; padding-bottom: '.esc_attr($grocery_ecommerce_copyright_bottom_padding).'px; ';
		$grocery_ecommerce_custom_css .='}';
	}

	$grocery_ecommerce_copyright_alignment = get_theme_mod('grocery_ecommerce_copyright_alignment', 'center');
	if($grocery_ecommerce_copyright_alignment == 'center' ){
		$grocery_ecommerce_custom_css .='#footer .copyright p{';
			$grocery_ecommerce_custom_css .='text-align: '. $grocery_ecommerce_copyright_alignment .';';
		$grocery_ecommerce_custom_css .='}';
	}elseif($grocery_ecommerce_copyright_alignment == 'left' ){
		$grocery_ecommerce_custom_css .='#footer .copyright p{';
			$grocery_ecommerce_custom_css .=' text-align: '. $grocery_ecommerce_copyright_alignment .';';
		$grocery_ecommerce_custom_css .='}';
	}elseif($grocery_ecommerce_copyright_alignment == 'right' ){
		$grocery_ecommerce_custom_css .='#footer .copyright p{';
			$grocery_ecommerce_custom_css .='text-align: '. $grocery_ecommerce_copyright_alignment .';';
		$grocery_ecommerce_custom_css .='}';
	}

	$grocery_ecommerce_copyright_font_size = get_theme_mod('grocery_ecommerce_copyright_font_size');
	$grocery_ecommerce_custom_css .='#footer .copyright p{';
		$grocery_ecommerce_custom_css .='font-size: '.esc_attr($grocery_ecommerce_copyright_font_size).'px;';
	$grocery_ecommerce_custom_css .='}';

	/*------ Topbar padding ------*/
	$grocery_ecommerce_top_topbar_padding = get_theme_mod('grocery_ecommerce_top_topbar_padding');
	$grocery_ecommerce_bottom_topbar_padding = get_theme_mod('grocery_ecommerce_bottom_topbar_padding');
	if($grocery_ecommerce_top_topbar_padding != false || $grocery_ecommerce_bottom_topbar_padding != false){
		$grocery_ecommerce_custom_css .='.top-bar, .page-template-custom-front-page .top-bar{';
			$grocery_ecommerce_custom_css .='padding-top: '.esc_attr($grocery_ecommerce_top_topbar_padding).'px !important; padding-bottom: '.esc_attr($grocery_ecommerce_bottom_topbar_padding).'px !important; ';
		$grocery_ecommerce_custom_css .='}';
	}

	/*------ Woocommerce ----*/
	$grocery_ecommerce_product_border = get_theme_mod('grocery_ecommerce_product_border',true);

	if($grocery_ecommerce_product_border == false){
		$grocery_ecommerce_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$grocery_ecommerce_custom_css .='border: 0;';
		$grocery_ecommerce_custom_css .='}';
	}

	$grocery_ecommerce_product_top = get_theme_mod('grocery_ecommerce_product_top_padding',10);
	$grocery_ecommerce_product_bottom = get_theme_mod('grocery_ecommerce_product_bottom_padding',10);
	$grocery_ecommerce_product_left = get_theme_mod('grocery_ecommerce_product_left_padding',10);
	$grocery_ecommerce_product_right = get_theme_mod('grocery_ecommerce_product_right_padding',10);
	if($grocery_ecommerce_product_top != false || $grocery_ecommerce_product_bottom != false || $grocery_ecommerce_product_left != false || $grocery_ecommerce_product_right != false){
		$grocery_ecommerce_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$grocery_ecommerce_custom_css .='padding-top: '.esc_attr($grocery_ecommerce_product_top).'px; padding-bottom: '.esc_attr($grocery_ecommerce_product_bottom).'px; padding-left: '.esc_attr($grocery_ecommerce_product_left).'px; padding-right: '.esc_attr($grocery_ecommerce_product_right).'px;';
		$grocery_ecommerce_custom_css .='}';
	}

	$grocery_ecommerce_product_border_radius = get_theme_mod('grocery_ecommerce_product_border_radius');
	if($grocery_ecommerce_product_border_radius != false){
		$grocery_ecommerce_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$grocery_ecommerce_custom_css .='border-radius: '.esc_attr($grocery_ecommerce_product_border_radius).'px;';
		$grocery_ecommerce_custom_css .='}';
	}

	/*----- WooCommerce button css --------*/
	$grocery_ecommerce_product_button_top = get_theme_mod('grocery_ecommerce_product_button_top_padding',10);
	$grocery_ecommerce_product_button_bottom = get_theme_mod('grocery_ecommerce_product_button_bottom_padding',10);
	$grocery_ecommerce_product_button_left = get_theme_mod('grocery_ecommerce_product_button_left_padding',12);
	$grocery_ecommerce_product_button_right = get_theme_mod('grocery_ecommerce_product_button_right_padding',12);
	if($grocery_ecommerce_product_button_top != false || $grocery_ecommerce_product_button_bottom != false || $grocery_ecommerce_product_button_left != false || $grocery_ecommerce_product_button_right != false){
		$grocery_ecommerce_custom_css .='.woocommerce ul.products li.product .button, .woocommerce div.product form.cart .button, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button, .woocommerce #payment #place_order, .woocommerce-page #payment #place_order, button.woocommerce-button.button.woocommerce-form-login__submit, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
			$grocery_ecommerce_custom_css .='padding-top: '.esc_attr($grocery_ecommerce_product_button_top).'px; padding-bottom: '.esc_attr($grocery_ecommerce_product_button_bottom).'px; padding-left: '.esc_attr($grocery_ecommerce_product_button_left).'px; padding-right: '.esc_attr($grocery_ecommerce_product_button_right).'px;';
		$grocery_ecommerce_custom_css .='}';
	}

	$grocery_ecommerce_product_button_border_radius = get_theme_mod('grocery_ecommerce_product_button_border_radius');
	if($grocery_ecommerce_product_button_border_radius != false){
		$grocery_ecommerce_custom_css .='.woocommerce ul.products li.product .button, .woocommerce div.product form.cart .button, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button, a.checkout-button.button.alt.wc-forward, .woocommerce #payment #place_order, .woocommerce-page #payment #place_order, button.woocommerce-button.button.woocommerce-form-login__submit{';
			$grocery_ecommerce_custom_css .='border-radius: '.esc_attr($grocery_ecommerce_product_button_border_radius).'px;';
		$grocery_ecommerce_custom_css .='}';
	}

	/*----- WooCommerce product sale css --------*/
	$grocery_ecommerce_product_sale_top = get_theme_mod('grocery_ecommerce_product_sale_top_padding');
	$grocery_ecommerce_product_sale_bottom = get_theme_mod('grocery_ecommerce_product_sale_bottom_padding');
	$grocery_ecommerce_product_sale_left = get_theme_mod('grocery_ecommerce_product_sale_left_padding');
	$grocery_ecommerce_product_sale_right = get_theme_mod('grocery_ecommerce_product_sale_right_padding');
	if($grocery_ecommerce_product_sale_top != false || $grocery_ecommerce_product_sale_bottom != false || $grocery_ecommerce_product_sale_left != false || $grocery_ecommerce_product_sale_right != false){
		$grocery_ecommerce_custom_css .='.woocommerce span.onsale {';
			$grocery_ecommerce_custom_css .='padding-top: '.esc_attr($grocery_ecommerce_product_sale_top).'px; padding-bottom: '.esc_attr($grocery_ecommerce_product_sale_bottom).'px; padding-left: '.esc_attr($grocery_ecommerce_product_sale_left).'px; padding-right: '.esc_attr($grocery_ecommerce_product_sale_right).'px;';
		$grocery_ecommerce_custom_css .='}';
	}

	$grocery_ecommerce_product_sale_border_radius = get_theme_mod('grocery_ecommerce_product_sale_border_radius',0);
	if($grocery_ecommerce_product_sale_border_radius != false){
		$grocery_ecommerce_custom_css .='.woocommerce span.onsale {';
			$grocery_ecommerce_custom_css .='border-radius: '.esc_attr($grocery_ecommerce_product_sale_border_radius).'px;';
		$grocery_ecommerce_custom_css .='}';
	}

	$grocery_ecommerce_menu_case = get_theme_mod('grocery_ecommerce_product_sale_position', 'Right');
	if($grocery_ecommerce_menu_case == 'Right' ){
		$grocery_ecommerce_custom_css .='.woocommerce ul.products li.product .onsale{';
			$grocery_ecommerce_custom_css .=' left:auto; right:0;';
		$grocery_ecommerce_custom_css .='}';
	}elseif($grocery_ecommerce_menu_case == 'Left' ){
		$grocery_ecommerce_custom_css .='.woocommerce ul.products li.product .onsale{';
			$grocery_ecommerce_custom_css .=' left:-10px; right:auto;';
		$grocery_ecommerce_custom_css .='}';
	}

	$grocery_ecommerce_product_sale_font_size = get_theme_mod('grocery_ecommerce_product_sale_font_size',13);
	$grocery_ecommerce_custom_css .='.woocommerce span.onsale {';
		$grocery_ecommerce_custom_css .='font-size: '.esc_attr($grocery_ecommerce_product_sale_font_size).'px;';
	$grocery_ecommerce_custom_css .='}';


	/*---- Comment form ----*/
	$grocery_ecommerce_comment_width = get_theme_mod('grocery_ecommerce_comment_width', '100');
	$grocery_ecommerce_custom_css .='#comments textarea{';
		$grocery_ecommerce_custom_css .=' width:'.esc_attr($grocery_ecommerce_comment_width).'%;';
	$grocery_ecommerce_custom_css .='}';

	$grocery_ecommerce_comment_submit_text = get_theme_mod('grocery_ecommerce_comment_submit_text', 'Post Comment');
	if($grocery_ecommerce_comment_submit_text == ''){
		$grocery_ecommerce_custom_css .='#comments p.form-submit {';
			$grocery_ecommerce_custom_css .='display: none;';
		$grocery_ecommerce_custom_css .='}';
	}

	$grocery_ecommerce_comment_title = get_theme_mod('grocery_ecommerce_comment_title', 'Leave a Reply');
	if($grocery_ecommerce_comment_title == ''){
		$grocery_ecommerce_custom_css .='#comments h2#reply-title {';
			$grocery_ecommerce_custom_css .='display: none;';
		$grocery_ecommerce_custom_css .='}';
	}

	/*------ Footer background css -------*/
	$grocery_ecommerce_footer_bg_color = get_theme_mod('grocery_ecommerce_footer_bg_color');
	if($grocery_ecommerce_footer_bg_color != false){
		$grocery_ecommerce_custom_css .='.footerinner{';
			$grocery_ecommerce_custom_css .='background-color: '.esc_attr($grocery_ecommerce_footer_bg_color).';';
		$grocery_ecommerce_custom_css .='}';
	}

	$grocery_ecommerce_footer_bg_image = get_theme_mod('grocery_ecommerce_footer_bg_image');
	if($grocery_ecommerce_footer_bg_image != false){
		$grocery_ecommerce_custom_css .='.footerinner{';
			$grocery_ecommerce_custom_css .='background: url('.esc_attr($grocery_ecommerce_footer_bg_image).');';
		$grocery_ecommerce_custom_css .='}';
	}

	/*----- Featured image css -----*/
	$grocery_ecommerce_feature_image_border_radius = get_theme_mod('grocery_ecommerce_feature_image_border_radius');
	if($grocery_ecommerce_feature_image_border_radius != false){
		$grocery_ecommerce_custom_css .='.blog-sec img{';
			$grocery_ecommerce_custom_css .='border-radius: '.esc_attr($grocery_ecommerce_feature_image_border_radius).'px;';
		$grocery_ecommerce_custom_css .='}';
	}

	$grocery_ecommerce_feature_image_shadow = get_theme_mod('grocery_ecommerce_feature_image_shadow');
	if($grocery_ecommerce_feature_image_shadow != false){
		$grocery_ecommerce_custom_css .='.blog-sec img{';
			$grocery_ecommerce_custom_css .='box-shadow: '.esc_attr($grocery_ecommerce_feature_image_shadow).'px '.esc_attr($grocery_ecommerce_feature_image_shadow).'px '.esc_attr($grocery_ecommerce_feature_image_shadow).'px #aaa;';
		$grocery_ecommerce_custom_css .='}';
	}

	/*------ Sticky header padding ------------*/
	$grocery_ecommerce_top_sticky_header_padding = get_theme_mod('grocery_ecommerce_top_sticky_header_padding');
	$grocery_ecommerce_bottom_sticky_header_padding = get_theme_mod('grocery_ecommerce_bottom_sticky_header_padding');
	$grocery_ecommerce_custom_css .=' .fixed-header{';
		$grocery_ecommerce_custom_css .=' padding-top: '.esc_attr($grocery_ecommerce_top_sticky_header_padding).'px; padding-bottom: '.esc_attr($grocery_ecommerce_bottom_sticky_header_padding).'px';
	$grocery_ecommerce_custom_css .='}';

		// featured image dimention
	$grocery_ecommerce_blog_image_dimension = get_theme_mod('grocery_ecommerce_blog_image_dimension', 'default');
	$grocery_ecommerce_feature_image_custom_width = get_theme_mod('grocery_ecommerce_feature_image_custom_width',250);
	$grocery_ecommerce_feature_image_custom_height = get_theme_mod('grocery_ecommerce_feature_image_custom_height',250);
	if($grocery_ecommerce_blog_image_dimension == 'custom'){
		$grocery_ecommerce_custom_css .='.blog-sec img{';
			$grocery_ecommerce_custom_css .='width: '.esc_attr($grocery_ecommerce_feature_image_custom_width).'px; height: '.esc_attr($grocery_ecommerce_feature_image_custom_height).'px;';
		$grocery_ecommerce_custom_css .='}';
	}

	/*------ Related products ---------*/
	$grocery_ecommerce_related_products = get_theme_mod('grocery_ecommerce_single_related_products',true);
	if($grocery_ecommerce_related_products == false){
		$grocery_ecommerce_custom_css .=' .related.products{';
			$grocery_ecommerce_custom_css .='display: none;';
		$grocery_ecommerce_custom_css .='}';
	}

	/*-------- Menu Font Size --------*/
	$grocery_ecommerce_menu_font_size = get_theme_mod('grocery_ecommerce_menu_font_size',13);
	if($grocery_ecommerce_menu_font_size != false){
		$grocery_ecommerce_custom_css .='.nav-menu li a{';
			$grocery_ecommerce_custom_css .='font-size: '.esc_attr($grocery_ecommerce_menu_font_size).'px;';
		$grocery_ecommerce_custom_css .='}';
	}

	$grocery_ecommerce_menu_font_weight = get_theme_mod('grocery_ecommerce_menu_font_weight');
	$grocery_ecommerce_custom_css .='.nav-menu li a{';
		$grocery_ecommerce_custom_css .='font-weight: '.esc_attr($grocery_ecommerce_menu_font_weight).';';
	$grocery_ecommerce_custom_css .='}';

	// Featured image header
	$header_image_url = grocery_ecommerce_banner_image( $image_url = '' );
	$grocery_ecommerce_custom_css .='#page-site-header{';
		$grocery_ecommerce_custom_css .='background-image: url('. esc_url( $header_image_url ).'); background-size: cover;';
	$grocery_ecommerce_custom_css .='}';

	$grocery_ecommerce_post_featured_image = get_theme_mod('grocery_ecommerce_post_featured_image', 'in-content');
	if($grocery_ecommerce_post_featured_image == 'banner' ){
		$grocery_ecommerce_custom_css .='.single #wrapper h1, .page #wrapper h1, .page #wrapper img{';
			$grocery_ecommerce_custom_css .=' display: none;';
		$grocery_ecommerce_custom_css .='}';
		$grocery_ecommerce_custom_css .='.page-template-custom-front-page #page-site-header{';
			$grocery_ecommerce_custom_css .=' display: none;';
		$grocery_ecommerce_custom_css .='}';
	}

	// Woocommerce Shop page pagination
	$grocery_ecommerce_shop_page_navigation = get_theme_mod('grocery_ecommerce_shop_page_navigation',true);
	if ($grocery_ecommerce_shop_page_navigation == false) {
		$grocery_ecommerce_custom_css .='.woocommerce nav.woocommerce-pagination{';
			$grocery_ecommerce_custom_css .='display: none;';
		$grocery_ecommerce_custom_css .='}';
	}

	/*----- Blog Post display type css ------*/
	$grocery_ecommerce_blog_post_display_type = get_theme_mod('grocery_ecommerce_blog_post_display_type', 'blocks');
	if($grocery_ecommerce_blog_post_display_type == 'without blocks' ){
		$grocery_ecommerce_custom_css .='.blog .blog-sec, .blog #sidebar .widget{';
			$grocery_ecommerce_custom_css .='border: 0;';
		$grocery_ecommerce_custom_css .='}';
	}

	/*---------- Responsive style ---------*/

	$grocery_ecommerce_toggle_button_bg_color_settings = get_theme_mod('grocery_ecommerce_toggle_button_bg_color_settings');
	$grocery_ecommerce_custom_css .='.toggle-menu {';
	$grocery_ecommerce_custom_css .='background-color: '.esc_attr($grocery_ecommerce_toggle_button_bg_color_settings).';';
	$grocery_ecommerce_custom_css .='} ';

	if (get_theme_mod('grocery_ecommerce_hide_topbar_responsive',true) == true && get_theme_mod('grocery_ecommerce_top_header',false) == false) {
		$grocery_ecommerce_custom_css .='.top-bar{';
			$grocery_ecommerce_custom_css .=' display: none;';
		$grocery_ecommerce_custom_css .='} ';
	}

	if (get_theme_mod('grocery_ecommerce_sticky_header_responsive') == false) {
		$grocery_ecommerce_custom_css .='@media screen and (max-width: 575px){
			.sticky{';
			$grocery_ecommerce_custom_css .=' position: static;';
		$grocery_ecommerce_custom_css .='} }';
	}

	if (get_theme_mod('grocery_ecommerce_hide_topbar_responsive',true) == false) {
		$grocery_ecommerce_custom_css .='@media screen and (max-width: 575px){
			.top-bar{';
			$grocery_ecommerce_custom_css .=' display: none;';
		$grocery_ecommerce_custom_css .='} }';
	} else if(get_theme_mod('grocery_ecommerce_hide_topbar_responsive',true) == true){
		$grocery_ecommerce_custom_css .='@media screen and (max-width: 575px){
			.top-bar{';
			$grocery_ecommerce_custom_css .=' display: block;';
		$grocery_ecommerce_custom_css .='} }';
	}

	$grocery_ecommerce_resp_sidebar = get_theme_mod( 'grocery_ecommerce_sidebar_hide_show',true);
    if($grocery_ecommerce_resp_sidebar == true){
    	$grocery_ecommerce_custom_css .='@media screen and (max-width:575px) {';
		$grocery_ecommerce_custom_css .='#sidebar{';
			$grocery_ecommerce_custom_css .='display:block;';
		$grocery_ecommerce_custom_css .='} }';
	}else if($grocery_ecommerce_resp_sidebar == false){
		$grocery_ecommerce_custom_css .='@media screen and (max-width:575px) {';
		$grocery_ecommerce_custom_css .='#sidebar{';
			$grocery_ecommerce_custom_css .='display:none;';
		$grocery_ecommerce_custom_css .='} }';
	}

	// Site title Font Size
	$grocery_ecommerce_site_title_font_size = get_theme_mod('grocery_ecommerce_site_title_font_size', '25');
	$grocery_ecommerce_custom_css .='.logo h1, .logo p.site-title{';
		$grocery_ecommerce_custom_css .='font-size: '.esc_attr($grocery_ecommerce_site_title_font_size).'px;';
	$grocery_ecommerce_custom_css .='}';

	// Site tagline Font Size
	$grocery_ecommerce_site_tagline_font_size = get_theme_mod('grocery_ecommerce_site_tagline_font_size', '14');
	$grocery_ecommerce_custom_css .='.logo p.site-description{';
		$grocery_ecommerce_custom_css .='font-size: '.esc_attr($grocery_ecommerce_site_tagline_font_size).'px;';
	$grocery_ecommerce_custom_css .='}';

	/*---- Slider Content Position -----*/
	$grocery_ecommerce_top_position = get_theme_mod('grocery_ecommerce_slider_top_position');
	$grocery_ecommerce_bottom_position = get_theme_mod('grocery_ecommerce_slider_bottom_position');
	$grocery_ecommerce_left_position = get_theme_mod('grocery_ecommerce_slider_left_position');
	$grocery_ecommerce_right_position = get_theme_mod('grocery_ecommerce_slider_right_position');
	if($grocery_ecommerce_top_position != false || $grocery_ecommerce_bottom_position != false || $grocery_ecommerce_left_position != false || $grocery_ecommerce_right_position != false){
		$grocery_ecommerce_custom_css .='#slider .carousel-caption{';
			$grocery_ecommerce_custom_css .='top: '.esc_attr($grocery_ecommerce_top_position).'%; bottom: '.esc_attr($grocery_ecommerce_bottom_position).'%; left: '.esc_attr($grocery_ecommerce_left_position).'%; right: '.esc_attr($grocery_ecommerce_right_position).'%;';
		$grocery_ecommerce_custom_css .='}';
	}

	// Slider Arrows hover color
	$grocery_ecommerce_slider_arrows_hover_color = get_theme_mod('grocery_ecommerce_slider_arrows_hover_color','#05a845');
	$grocery_ecommerce_custom_css .='#slider .carousel-control-prev-icon:hover,#slider .carousel-control-next-icon:hover{';
			$grocery_ecommerce_custom_css .='background-color: '.esc_attr($grocery_ecommerce_slider_arrows_hover_color).' !important;';
	$grocery_ecommerce_custom_css .='}';

	/*--------------------------- Slider Opacity -------------------*/
	$grocery_ecommerce_theme_lay = get_theme_mod( 'grocery_ecommerce_slider_image_opacity','0.7');
	if($grocery_ecommerce_theme_lay == '0'){
		$grocery_ecommerce_custom_css .='#slider img{';
			$grocery_ecommerce_custom_css .='opacity:0';
		$grocery_ecommerce_custom_css .='}';
		}else if($grocery_ecommerce_theme_lay == '0.1'){
		$grocery_ecommerce_custom_css .='#slider img{';
			$grocery_ecommerce_custom_css .='opacity:0.1';
		$grocery_ecommerce_custom_css .='}';
		}else if($grocery_ecommerce_theme_lay == '0.2'){
		$grocery_ecommerce_custom_css .='#slider img{';
			$grocery_ecommerce_custom_css .='opacity:0.2';
		$grocery_ecommerce_custom_css .='}';
		}else if($grocery_ecommerce_theme_lay == '0.3'){
		$grocery_ecommerce_custom_css .='#slider img{';
			$grocery_ecommerce_custom_css .='opacity:0.3';
		$grocery_ecommerce_custom_css .='}';
		}else if($grocery_ecommerce_theme_lay == '0.4'){
		$grocery_ecommerce_custom_css .='#slider img{';
			$grocery_ecommerce_custom_css .='opacity:0.4';
		$grocery_ecommerce_custom_css .='}';
		}else if($grocery_ecommerce_theme_lay == '0.5'){
		$grocery_ecommerce_custom_css .='#slider img{';
			$grocery_ecommerce_custom_css .='opacity:0.5';
		$grocery_ecommerce_custom_css .='}';
		}else if($grocery_ecommerce_theme_lay == '0.6'){
		$grocery_ecommerce_custom_css .='#slider img{';
			$grocery_ecommerce_custom_css .='opacity:0.6';
		$grocery_ecommerce_custom_css .='}';
		}else if($grocery_ecommerce_theme_lay == '0.7'){
		$grocery_ecommerce_custom_css .='#slider img{';
			$grocery_ecommerce_custom_css .='opacity:0.7';
		$grocery_ecommerce_custom_css .='}';
		}else if($grocery_ecommerce_theme_lay == '0.8'){
		$grocery_ecommerce_custom_css .='#slider img{';
			$grocery_ecommerce_custom_css .='opacity:0.8';
		$grocery_ecommerce_custom_css .='}';
		}else if($grocery_ecommerce_theme_lay == '0.9'){
		$grocery_ecommerce_custom_css .='#slider img{';
			$grocery_ecommerce_custom_css .='opacity:0.9';
		$grocery_ecommerce_custom_css .='}';
		}

	/*-----------Slider Content Layout ----------------*/

	$grocery_ecommerce_slider_layout = get_theme_mod( 'grocery_ecommerce_slider_alignment_option','Center Align');
    if($grocery_ecommerce_slider_layout == 'Left Align'){
		$grocery_ecommerce_custom_css .='#slider .carousel-caption, #slider .inner_carousel{';
			$grocery_ecommerce_custom_css .='text-align:left;';
		$grocery_ecommerce_custom_css .='}';
		$grocery_ecommerce_custom_css .='#slider .carousel-caption{';
		$grocery_ecommerce_custom_css .='left:15%; right:30%;';
		$grocery_ecommerce_custom_css .='}';
	}else if($grocery_ecommerce_slider_layout == 'Center Align'){
		$grocery_ecommerce_custom_css .='#slider .carousel-caption, #slider .inner_carousel{';
			$grocery_ecommerce_custom_css .='text-align:center;';
		$grocery_ecommerce_custom_css .='}';
		$grocery_ecommerce_custom_css .='#slider .carousel-caption{';
		$grocery_ecommerce_custom_css .='left:24%; right:24%;';
		$grocery_ecommerce_custom_css .='}';
	}else if($grocery_ecommerce_slider_layout == 'Right Align'){
		$grocery_ecommerce_custom_css .='#slider .carousel-caption, #slider .inner_carousel{';
			$grocery_ecommerce_custom_css .='text-align:right;';
		$grocery_ecommerce_custom_css .='}';
		$grocery_ecommerce_custom_css .='#slider .carousel-caption{';
		$grocery_ecommerce_custom_css .='left:30%; right:15%;';
		$grocery_ecommerce_custom_css .='}';
	}	

	// slider overlay
	$grocery_ecommerce_slider_overlay = get_theme_mod('grocery_ecommerce_slider_overlay', true);
	if($grocery_ecommerce_slider_overlay == false){
		$grocery_ecommerce_custom_css .='#slider img{';
			$grocery_ecommerce_custom_css .='opacity:1;';
		$grocery_ecommerce_custom_css .='}';
	} 
	$grocery_ecommerce_slider_image_overlay_color = get_theme_mod('grocery_ecommerce_slider_image_overlay_color', true);
	if($grocery_ecommerce_slider_overlay != false){
		$grocery_ecommerce_custom_css .='#slider .carousel-item{';
			$grocery_ecommerce_custom_css .='background-color: '.esc_attr($grocery_ecommerce_slider_image_overlay_color).'!important;';
		$grocery_ecommerce_custom_css .='}';
	}	

	/*-------- Blog Post Alignment ------*/
	$grocery_ecommerce_post_alignment = get_theme_mod('grocery_ecommerce_blog_post_alignment', 'center');
	if($grocery_ecommerce_post_alignment == 'left' ){
		$grocery_ecommerce_custom_css .='.blog-sec, .blog-sec h2, .post-info, .blogbtn{';
			$grocery_ecommerce_custom_css .=' text-align: '. $grocery_ecommerce_post_alignment .'!important;';
		$grocery_ecommerce_custom_css .='}';
	}elseif($grocery_ecommerce_post_alignment == 'right' ){
		$grocery_ecommerce_custom_css .='.blog-sec, .blog-sec h2, .post-info, .blogbtn{';
			$grocery_ecommerce_custom_css .='text-align: '. $grocery_ecommerce_post_alignment .'!important;';
		$grocery_ecommerce_custom_css .='}';
	}	

	// responsive settings
	if (get_theme_mod('grocery_ecommerce_preloader_responsive',false) == true && get_theme_mod('grocery_ecommerce_preloader',false) == false) {
		$grocery_ecommerce_custom_css .='@media screen and (min-width: 575px){
			.preloader, #overlayer, .tg-loader{';
			$grocery_ecommerce_custom_css .=' visibility: hidden;';
		$grocery_ecommerce_custom_css .='} }';
	}
	if (get_theme_mod('grocery_ecommerce_preloader_responsive',false) == false) {
		$grocery_ecommerce_custom_css .='@media screen and (max-width: 575px){
			.preloader, #overlayer, .tg-loader{';
			$grocery_ecommerce_custom_css .=' visibility: hidden;';
		$grocery_ecommerce_custom_css .='} }';
	}

	// scroll to top
	$grocery_ecommerce_scroll = get_theme_mod( 'grocery_ecommerce_backtotop_responsive',true);
	if (get_theme_mod('grocery_ecommerce_backtotop_responsive',true) == true && get_theme_mod('grocery_ecommerce_hide_scroll',true) == false) {
    	$grocery_ecommerce_custom_css .='.show-back-to-top{';
			$grocery_ecommerce_custom_css .='visibility: hidden !important;';
		$grocery_ecommerce_custom_css .='} ';
	}
    if($grocery_ecommerce_scroll == true){
    	$grocery_ecommerce_custom_css .='@media screen and (max-width:575px) {';
		$grocery_ecommerce_custom_css .='.show-back-to-top{';
			$grocery_ecommerce_custom_css .='visibility: visible !important;';
		$grocery_ecommerce_custom_css .='} }';
	}else if($grocery_ecommerce_scroll == false){
		$grocery_ecommerce_custom_css .='@media screen and (max-width:575px) {';
		$grocery_ecommerce_custom_css .='.show-back-to-top{';
			$grocery_ecommerce_custom_css .='visibility: hidden !important;';
		$grocery_ecommerce_custom_css .='} }';
	}

	/*------ Footer background css -------*/
	$grocery_ecommerce_copyright_bg_color = get_theme_mod('grocery_ecommerce_copyright_bg_color');
	if($grocery_ecommerce_copyright_bg_color != false){
		$grocery_ecommerce_custom_css .='.inner{';
			$grocery_ecommerce_custom_css .='background-color: '.esc_attr($grocery_ecommerce_copyright_bg_color).';';
		$grocery_ecommerce_custom_css .='}';
	}

	// site logo padding 
	$grocery_ecommerce_logo_spacing = get_theme_mod('grocery_ecommerce_logo_spacing', '');
	$grocery_ecommerce_custom_css .='.logo{';
	$grocery_ecommerce_custom_css .='padding: '.esc_attr($grocery_ecommerce_logo_spacing).'px;';
	$grocery_ecommerce_custom_css .='}';

	// site title color
	$grocery_ecommerce_site_title_text_color = get_theme_mod('grocery_ecommerce_site_title_text_color');
	$grocery_ecommerce_custom_css .='.logo h1 a, .logo p.site-title a{';
		$grocery_ecommerce_custom_css .='color: '.esc_attr($grocery_ecommerce_site_title_text_color).' !important;';
	$grocery_ecommerce_custom_css .='}';

	// site tagline color
	$grocery_ecommerce_site_tagline_text_color = get_theme_mod('grocery_ecommerce_site_tagline_text_color');
	$grocery_ecommerce_custom_css .='.logo p.site-description{';
		$grocery_ecommerce_custom_css .='color: '.esc_attr($grocery_ecommerce_site_tagline_text_color).' !important;';
	$grocery_ecommerce_custom_css .='}';

	// responsive slider
	if (get_theme_mod('grocery_ecommerce_slider_responsive',true) == true && get_theme_mod('grocery_ecommerce_show_slider',false) == false) {
		$grocery_ecommerce_custom_css .='@media screen and (min-width: 575px){
			#slider{';
			$grocery_ecommerce_custom_css .=' display: none;';
		$grocery_ecommerce_custom_css .='} }';
	}
	if (get_theme_mod('grocery_ecommerce_slider_responsive',true) == false) {
		$grocery_ecommerce_custom_css .='@media screen and (max-width: 575px){
			#slider{';
			$grocery_ecommerce_custom_css .=' display: none;';
		$grocery_ecommerce_custom_css .='} }';
	}

	// slider button
	if (get_theme_mod('grocery_ecommerce_slider_button_responsive',true) == true && get_theme_mod('grocery_ecommerce_slider_button',true) == false) {
		$grocery_ecommerce_custom_css .='@media screen and (min-width: 575px){
			.read-more{';
			$grocery_ecommerce_custom_css .=' display: none;';
		$grocery_ecommerce_custom_css .='} }';
	}
	if (get_theme_mod('grocery_ecommerce_slider_button_responsive',true) == false) {
		$grocery_ecommerce_custom_css .='@media screen and (max-width: 575px){
			.read-more{';
			$grocery_ecommerce_custom_css .=' display: none;';
		$grocery_ecommerce_custom_css .='} }';
	}

	// Slider Button color
	$grocery_ecommerce_slider_btn_color = get_theme_mod('grocery_ecommerce_slider_btn_color','#fff');
	$grocery_ecommerce_custom_css .='.read-more a{';
			$grocery_ecommerce_custom_css .='color: '.esc_attr($grocery_ecommerce_slider_btn_color).' !important;';
	$grocery_ecommerce_custom_css .='}';

	// Slider button bg color
	$grocery_ecommerce_slider_btn_bg_color = get_theme_mod('grocery_ecommerce_slider_btn_bg_color','#0A472E');
	$grocery_ecommerce_custom_css .='.read-more a{';
			$grocery_ecommerce_custom_css .='background: '.esc_attr($grocery_ecommerce_slider_btn_bg_color).' !important;';
	$grocery_ecommerce_custom_css .='}';

	// Slider button border radius
	$grocery_ecommerce_slider_btn_border_radius = get_theme_mod('grocery_ecommerce_slider_btn_border_radius','5');
	$grocery_ecommerce_custom_css .='.read-more a{';
		$grocery_ecommerce_custom_css .='border-radius: '.esc_attr($grocery_ecommerce_slider_btn_border_radius).'px !important;';
	$grocery_ecommerce_custom_css .='}';

	// Slider button lable hover color
	$grocery_ecommerce_slider_btn_lable_hover_color = get_theme_mod('grocery_ecommerce_slider_btn_lable_hover_color','#fff');
	$grocery_ecommerce_custom_css .='.read-more a:hover{';
			$grocery_ecommerce_custom_css .='color: '.esc_attr($grocery_ecommerce_slider_btn_lable_hover_color).' !important;';
	$grocery_ecommerce_custom_css .='}';

	// Slider button bg hover color
	$grocery_ecommerce_slider_btn_bg_hover_color = get_theme_mod('grocery_ecommerce_slider_btn_bg_hover_color','#05A845');
	$grocery_ecommerce_custom_css .='#slider .read-more a:hover{';
			$grocery_ecommerce_custom_css .='background: '.esc_attr($grocery_ecommerce_slider_btn_bg_hover_color).';';
	$grocery_ecommerce_custom_css .='}';

	/*---- Slider Height ------*/
	$grocery_ecommerce_slider_height = get_theme_mod('grocery_ecommerce_slider_height');
	$grocery_ecommerce_custom_css .='#slider img{';
		$grocery_ecommerce_custom_css .='height: '.esc_attr($grocery_ecommerce_slider_height).'px;';
	$grocery_ecommerce_custom_css .='}';
	$grocery_ecommerce_custom_css .='@media screen and (max-width: 768px){
		#slider img{';
		$grocery_ecommerce_custom_css .='height: auto;';
	$grocery_ecommerce_custom_css .='} }';

	// Metabox Seperator
	$grocery_ecommerce_metabox_seperator = get_theme_mod('grocery_ecommerce_metabox_seperator');
	if($grocery_ecommerce_metabox_seperator != '' ){
		$grocery_ecommerce_custom_css .='.post-info span:after{';
			$grocery_ecommerce_custom_css .=' content: "'.esc_attr($grocery_ecommerce_metabox_seperator).'"; padding-left:10px;';
		$grocery_ecommerce_custom_css .='}';
		$grocery_ecommerce_custom_css .='.post-info span:last-child:after{';
			$grocery_ecommerce_custom_css .=' content: none;';
		$grocery_ecommerce_custom_css .='}';
	}

// menu padding
	$grocery_ecommerce_menu_padding = get_theme_mod('grocery_ecommerce_menu_padding',10);
	$grocery_ecommerce_custom_css .='.nav-menu ul li a, .sf-arrows ul .sf-with-ul, .sf-arrows .sf-with-ul{';
		$grocery_ecommerce_custom_css .='padding-top: '.esc_attr($grocery_ecommerce_menu_padding).'px;';
		$grocery_ecommerce_custom_css .='padding-bottom: '.esc_attr($grocery_ecommerce_menu_padding).'px;';
	$grocery_ecommerce_custom_css .='}';

	// menu text transform
	$grocery_ecommerce_theme_lay = get_theme_mod( 'grocery_ecommerce_text_tranform_menu','Uppercase');
    if($grocery_ecommerce_theme_lay == 'Uppercase'){
		$grocery_ecommerce_custom_css .='.nav-menu ul li a{';
			$grocery_ecommerce_custom_css .='';
		$grocery_ecommerce_custom_css .='}';
	}else if($grocery_ecommerce_theme_lay == 'Lowercase'){
		$grocery_ecommerce_custom_css .='.nav-menu ul li a{';
			$grocery_ecommerce_custom_css .='text-transform: lowercase;';
		$grocery_ecommerce_custom_css .='}';
	}
	else if($grocery_ecommerce_theme_lay == 'Capitalize'){
		$grocery_ecommerce_custom_css .='.nav-menu ul li a{';
			$grocery_ecommerce_custom_css .='text-transform: Capitalize;';
		$grocery_ecommerce_custom_css .='}';
	}

	// menu color
	$grocery_ecommerce_menu_color = get_theme_mod('grocery_ecommerce_menu_color');
	$grocery_ecommerce_custom_css .='.nav-menu a,.nav-menu .current_page_item > a, .nav-menu .current-menu-item > a, .nav-menu .current_page_ancestor > a{';
			$grocery_ecommerce_custom_css .='color: '.esc_attr($grocery_ecommerce_menu_color).' !important;';
	$grocery_ecommerce_custom_css .='}';
	$grocery_ecommerce_custom_css .='.nav-menu ul li.current_page_item a:before{';
			$grocery_ecommerce_custom_css .='background-color: '.esc_attr($grocery_ecommerce_menu_color).' !important;';
	$grocery_ecommerce_custom_css .='}';

	// menu hover color
	$grocery_ecommerce_menu_hover_color = get_theme_mod('grocery_ecommerce_menu_hover_color');
	$grocery_ecommerce_custom_css .='.nav-menu a:hover, .nav-menu ul li a:hover{';
			$grocery_ecommerce_custom_css .='color: '.esc_attr($grocery_ecommerce_menu_hover_color).' !important;';
	$grocery_ecommerce_custom_css .='}';
	$grocery_ecommerce_custom_css .='.nav-menu ul li a:before{';
			$grocery_ecommerce_custom_css .='background-color: '.esc_attr($grocery_ecommerce_menu_hover_color).' !important;';
	$grocery_ecommerce_custom_css .='}';

	// Submenu color
	$grocery_ecommerce_submenu_menu_color = get_theme_mod('grocery_ecommerce_submenu_menu_color');
	$grocery_ecommerce_custom_css .='.nav-menu ul.sub-menu a, .nav-menu ul.sub-menu li a,.nav-menu ul.children a, .nav-menu ul.children li a{';
			$grocery_ecommerce_custom_css .='color: '.esc_attr($grocery_ecommerce_submenu_menu_color).' !important;';
	$grocery_ecommerce_custom_css .='}';

	// submenu hover color
	$grocery_ecommerce_submenu_hover_color = get_theme_mod('grocery_ecommerce_submenu_hover_color');
	$grocery_ecommerce_custom_css .='.nav-menu ul.sub-menu a:hover, .nav-menu ul.sub-menu li a:hover.nav-menu ul.children a:hover, .nav-menu ul.children li a:hover{';
			$grocery_ecommerce_custom_css .='color: '.esc_attr($grocery_ecommerce_submenu_hover_color).' !important;';
	$grocery_ecommerce_custom_css .='}';

	// Breadcrumb color option
	$grocery_ecommerce_breadcrumb_color = get_theme_mod('grocery_ecommerce_breadcrumb_color');
	$grocery_ecommerce_custom_css .='.bradcrumbs a,.bradcrumbs span{';
		$grocery_ecommerce_custom_css .='color: '.esc_attr($grocery_ecommerce_breadcrumb_color).'!important;';
	$grocery_ecommerce_custom_css .='}';

	// Breadcrumb bg color option
	$grocery_ecommerce_breadcrumb_background_color = get_theme_mod('grocery_ecommerce_breadcrumb_background_color');
	$grocery_ecommerce_custom_css .='.bradcrumbs a,.bradcrumbs span{';
		$grocery_ecommerce_custom_css .='background-color: '.esc_attr($grocery_ecommerce_breadcrumb_background_color).'!important;';
	$grocery_ecommerce_custom_css .='}';

	// Breadcrumb hover color option
	$grocery_ecommerce_breadcrumb_hover_color = get_theme_mod('grocery_ecommerce_breadcrumb_hover_color');
	$grocery_ecommerce_custom_css .='.bradcrumbs a:hover{';
		$grocery_ecommerce_custom_css .='color: '.esc_attr($grocery_ecommerce_breadcrumb_hover_color).'!important;';
	$grocery_ecommerce_custom_css .='}';

	// Breadcrumb hover bg color option
	$grocery_ecommerce_breadcrumb_hover_bg_color = get_theme_mod('grocery_ecommerce_breadcrumb_hover_bg_color');
	$grocery_ecommerce_custom_css .='#maincontent .bradcrumbs a:hover{';
		$grocery_ecommerce_custom_css .='background-color: '.esc_attr($grocery_ecommerce_breadcrumb_hover_bg_color).'!important;';
	$grocery_ecommerce_custom_css .='}';

	// Single post image border radious
	$grocery_ecommerce_single_post_img_border_radius = get_theme_mod('grocery_ecommerce_single_post_img_border_radius', 0);
	$grocery_ecommerce_custom_css .='.feature-box img{';
		$grocery_ecommerce_custom_css .='border-radius: '.esc_attr($grocery_ecommerce_single_post_img_border_radius).'px;';
	$grocery_ecommerce_custom_css .='}';

	// Single post image box shadow
	$grocery_ecommerce_single_post_img_box_shadow = get_theme_mod('grocery_ecommerce_single_post_img_box_shadow',0);
	$grocery_ecommerce_custom_css .='.feature-box img{';
		$grocery_ecommerce_custom_css .='box-shadow: '.esc_attr($grocery_ecommerce_single_post_img_box_shadow).'px '.esc_attr($grocery_ecommerce_single_post_img_box_shadow).'px '.esc_attr($grocery_ecommerce_single_post_img_box_shadow).'px #ccc;';
	$grocery_ecommerce_custom_css .='}';