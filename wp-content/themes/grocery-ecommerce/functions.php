<?php
/**
 * Grocery Ecommerce functions and definitions
 * @package Grocery Ecommerce
 */

/* Breadcrumb Begin */
function grocery_ecommerce_the_breadcrumb() {
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
		} 	elseif (is_page()) {
			echo "<span> ";
			the_title();
		}
	}
}

/* Theme Setup */
if ( ! function_exists( 'grocery_ecommerce_setup' ) ) :

function grocery_ecommerce_setup() {

	$GLOBALS['content_width'] = apply_filters( 'grocery_ecommerce_content_width', 640 );
	load_theme_textdomain( 'grocery-ecommerce', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'html5', array( 'comment-list', 'search-form', 'comment-form', ) );
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	add_image_size('grocery-ecommerce-homepage-thumb',240,145,true);
	
    register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'grocery-ecommerce' ),
	) );

	add_theme_support( 'custom-background', array(
		'default-color' => 'f1f1f1'
	) );
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
	add_editor_style( array( 'css/editor-style.css',grocery_ecommerce_font_url() ) );

}
endif;
add_action( 'after_setup_theme', 'grocery_ecommerce_setup' );

/* Theme Widgets Setup */
function grocery_ecommerce_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'grocery-ecommerce' ),
		'description'   => __( 'Appears on blog page sidebar', 'grocery-ecommerce' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s p-2 mb-4">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title mb-2 py-2 px-1 text-center">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'grocery-ecommerce' ),
		'description'   => __( 'Appears on page sidebar', 'grocery-ecommerce' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s p-2 mb-4">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title mb-2 py-2 px-1 text-center">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Third Column Sidebar', 'grocery-ecommerce' ),
		'description'   => __( 'Appears on page sidebar', 'grocery-ecommerce' ),
		'id'            => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s p-2 mb-4">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title mb-2 py-2 px-1 text-center">',
		'after_title'   => '</h3>',
	) );

	$grocery_ecommerce_footer_columns = get_theme_mod('grocery_ecommerce_footer_widget', '4');
	for ($i=1; $i<=$grocery_ecommerce_footer_columns; $i++) {
		register_sidebar( array(
			'name'          => __( 'Footer ', 'grocery-ecommerce' ) . $i,
			'id'            => 'footer-' . $i,
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s py-3">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title pb-2 mb-2">',
			'after_title'   => '</h3>',
		) );
	}
	register_sidebar( array(
			'name'          => __( 'Shop Page Sidebar', 'grocery-ecommerce' ),
			'description'   => __( 'Appears on shop page', 'grocery-ecommerce' ),	
			'id'            => 'woocommerce_sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Single Product Page Sidebar', 'grocery-ecommerce' ),
		'description'   => __( 'Appears on shop page', 'grocery-ecommerce' ),
		'id'            => 'woocommerce-single-sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'grocery_ecommerce_widgets_init' );

/* Theme Font URL */
function grocery_ecommerce_font_url(){
	$font_family   = array(
		'Staatliches',
		'Kalam:wght@300;400;700',
		'PT+Sans:ital,wght@0,400;0,700;1,400;1,700',
		'Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900',
		'Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700',
		'Overpass:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Playball',
		'Alegreya:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
		'Julius+Sans+One',
		'Arsenal:ital,wght@0,400;0,700;1,400;1,700',
		'Slabo+13px',
		'Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900',
		'Overpass+Mono:wght@300;400;500;600;700',
		'Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900',
		'Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900',
		'Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700',
		'Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Arimo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
		'Quicksand:wght@300;400;500;600;700',
		'Padauk:wght@400;700',
		'Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000',
		'Inconsolata:wght@200;300;400;500;600;700;800;900',
		'Bitter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Pacifico',
		'Indie+Flower',
		'VT323',
		'Dosis:wght@200;300;400;500;600;700;800',
		'Frank+Ruhl+Libre:wght@300;400;500;700;900',
		'Fjalla+One',
		'Oxygen:wght@300;400;700',
		'Arvo:ital,wght@0,400;0,700;1,400;1,700',
		'Noto+Serif:ital,wght@0,400;0,700;1,400;1,700',
		'Lobster',
		'Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700',
		'Yanone+Kaffeesatz:wght@200;300;400;500;600;700',
		'Anton',
		'Libre+Baskerville:ital,wght@0,400;0,700;1,400',
		'Bree+Serif',
		'Gloria+Hallelujah',
		'Abril+Fatface',
		'Varela+Round',
		'Vampiro+One',
		'Shadows+Into+Light',
		'Cuprum:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Rokkitt:wght@100;200;300;400;500;600;700;800;900',
		'Vollkorn:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
		'Francois+One',
		'Orbitron:wght@400;500;600;700;800;900',
		'Patua+One',
		'Acme',
		'Satisfy',
		'Quattrocento+Sans:ital,wght@0,400;0,700;1,400;1,700',
		'Architects+Daughter',
		'Russo+One',
		'Monda:wght@400;700',
		'Righteous',
		'Lobster+Two:ital,wght@0,400;0,700;1,400;1,700',
		'Hammersmith+One',
		'Courgette',
		'Permanent+Marke',
		'Cherry+Swash:wght@400;700',
		'Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700',
		'Poiret+One',
		'BenchNine:wght@300;400;700',
		'Economica:ital,wght@0,400;0,700;1,400;1,700',
		'Handlee',
		'Cardo:ital,wght@0,400;0,700;1,400',
		'Alfa+Slab+One',
		'Averia+Serif+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700',
		'Cookie',
		'Chewy',
		'Great+Vibes',
		'Coming+Soon',
		'Philosopher:ital,wght@0,400;0,700;1,400;1,700',
		'Days+One',
		'Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Shrikhand',
		'Tangerine:wght@400;700',
		'IM+Fell+English+SC',
		'Boogaloo',
		'Bangers',
		'Fredoka+One',
		'Bad+Script',
		'Volkhov:ital,wght@0,400;0,700;1,400;1,700',
		'Shadows+Into+Light+Two',
		'Marck+Script',
		'Sacramento',
		'Unica+One',
		'Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Livvic:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900',
		'Exo+2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Archivo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800',
		'Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700',
		'Josefin+Slab:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700'

	);

	$fonts_url = add_query_arg( array(
		'family' => implode( '&family=', $font_family ),
		'display' => 'swap',
	), 'https://fonts.googleapis.com/css2' );

	$contents = wptt_get_webfont_url( esc_url_raw( $fonts_url ) );
	return $contents;
}

/*radio button sanitization*/
 function grocery_ecommerce_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

/* Excerpt Limit Begin */
function grocery_ecommerce_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

function grocery_ecommerce_sanitize_dropdown_pages( $page_id, $setting ) {
  	// Ensure $input is an absolute integer.
  	$page_id = absint( $page_id );
  	// If $page_id is an ID of a published page, return it; otherwise, return the default.
  	return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'grocery_ecommerce_loop_columns');
	if (!function_exists('grocery_ecommerce_loop_columns')) {
	function grocery_ecommerce_loop_columns() {
		return get_theme_mod( 'grocery_ecommerce_products_per_row', '3' ); // 3 products per row
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'grocery_ecommerce_products_per_page' );
function grocery_ecommerce_products_per_page( $cols ) {
  	return  get_theme_mod( 'grocery_ecommerce_products_per_page',9);
}

/* Theme enqueue scripts */
function grocery_ecommerce_scripts() {
	wp_enqueue_style( 'grocery-ecommerce-font',grocery_ecommerce_font_url(), array() );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri().'/css/bootstrap.css' );
	wp_enqueue_style( 'grocery-ecommerce-basic-style', get_stylesheet_uri() );
	wp_style_add_data( 'grocery-ecommerce-style', 'rtl', 'replace' );
	wp_enqueue_style( 'grocery-ecommerce-block-pattern-frontend', get_template_directory_uri().'/block-patterns/css/block-frontend.css' );
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri().'/css/fontawesome-all.css' );
	wp_enqueue_style( 'grocery-ecommerce-block-style', get_theme_file_uri('/css/blocks-style.css') );
	// Paragraph
    $grocery_ecommerce_paragraph_color = get_theme_mod('grocery_ecommerce_paragraph_color', '');
    $grocery_ecommerce_paragraph_font_family = get_theme_mod('grocery_ecommerce_paragraph_font_family', '');
    $grocery_ecommerce_paragraph_font_size = get_theme_mod('grocery_ecommerce_paragraph_font_size', '');
	// "a" tag
	$grocery_ecommerce_atag_color = get_theme_mod('grocery_ecommerce_atag_color', '');
    $grocery_ecommerce_atag_font_family = get_theme_mod('grocery_ecommerce_atag_font_family', '');
	// "li" tag
	$grocery_ecommerce_li_color = get_theme_mod('grocery_ecommerce_li_color', '');
    $grocery_ecommerce_li_font_family = get_theme_mod('grocery_ecommerce_li_font_family', '');
	// H1
	$grocery_ecommerce_h1_color = get_theme_mod('grocery_ecommerce_h1_color', '');
    $grocery_ecommerce_h1_font_family = get_theme_mod('grocery_ecommerce_h1_font_family', '');
    $grocery_ecommerce_h1_font_size = get_theme_mod('grocery_ecommerce_h1_font_size', '');
	// H2
	$grocery_ecommerce_h2_color = get_theme_mod('grocery_ecommerce_h2_color', '');
    $grocery_ecommerce_h2_font_family = get_theme_mod('grocery_ecommerce_h2_font_family', '');
    $grocery_ecommerce_h2_font_size = get_theme_mod('grocery_ecommerce_h2_font_size', '');
	// H3
	$grocery_ecommerce_h3_color = get_theme_mod('grocery_ecommerce_h3_color', '');
    $grocery_ecommerce_h3_font_family = get_theme_mod('grocery_ecommerce_h3_font_family', '');
    $grocery_ecommerce_h3_font_size = get_theme_mod('grocery_ecommerce_h3_font_size', '');
	// H4
	$grocery_ecommerce_h4_color = get_theme_mod('grocery_ecommerce_h4_color', '');
    $grocery_ecommerce_h4_font_family = get_theme_mod('grocery_ecommerce_h4_font_family', '');
    $grocery_ecommerce_h4_font_size = get_theme_mod('grocery_ecommerce_h4_font_size', '');
	// H5
	$grocery_ecommerce_h5_color = get_theme_mod('grocery_ecommerce_h5_color', '');
    $grocery_ecommerce_h5_font_family = get_theme_mod('grocery_ecommerce_h5_font_family', '');
    $grocery_ecommerce_h5_font_size = get_theme_mod('grocery_ecommerce_h5_font_size', '');
	// H6
	$grocery_ecommerce_h6_color = get_theme_mod('grocery_ecommerce_h6_color', '');
    $grocery_ecommerce_h6_font_family = get_theme_mod('grocery_ecommerce_h6_font_family', '');
    $grocery_ecommerce_h6_font_size = get_theme_mod('grocery_ecommerce_h6_font_size', '');

	$grocery_ecommerce_custom_css ='
		p,span{
		    color:'.esc_html($grocery_ecommerce_paragraph_color).'!important;
		    font-family: '.esc_html($grocery_ecommerce_paragraph_font_family).';
		    font-size: '.esc_html($grocery_ecommerce_paragraph_font_size).';
		}
		a{
		    color:'.esc_html($grocery_ecommerce_atag_color).'!important;
		    font-family: '.esc_html($grocery_ecommerce_atag_font_family).';
		}
		li{
		    color:'.esc_html($grocery_ecommerce_li_color).'!important;
		    font-family: '.esc_html($grocery_ecommerce_li_font_family).';
		}
		h1{
		    color:'.esc_html($grocery_ecommerce_h1_color).'!important;
		    font-family: '.esc_html($grocery_ecommerce_h1_font_family).'!important;
		    font-size: '.esc_html($grocery_ecommerce_h1_font_size).'!important;
		}
		h2{
		    color:'.esc_html($grocery_ecommerce_h2_color).'!important;
		    font-family: '.esc_html($grocery_ecommerce_h2_font_family).'!important;
		    font-size: '.esc_html($grocery_ecommerce_h2_font_size).'!important;
		}
		h3{
		    color:'.esc_html($grocery_ecommerce_h3_color).'!important;
		    font-family: '.esc_html($grocery_ecommerce_h3_font_family).'!important;
		    font-size: '.esc_html($grocery_ecommerce_h3_font_size).'!important;
		}
		h4{
		    color:'.esc_html($grocery_ecommerce_h4_color).'!important;
		    font-family: '.esc_html($grocery_ecommerce_h4_font_family).'!important;
		    font-size: '.esc_html($grocery_ecommerce_h4_font_size).'!important;
		}
		h5{
		    color:'.esc_html($grocery_ecommerce_h5_color).'!important;
		    font-family: '.esc_html($grocery_ecommerce_h5_font_family).'!important;
		    font-size: '.esc_html($grocery_ecommerce_h5_font_size).'!important;
		}
		h6{
		    color:'.esc_html($grocery_ecommerce_h6_color).'!important;
		    font-family: '.esc_html($grocery_ecommerce_h6_font_family).'!important;
		    font-size: '.esc_html($grocery_ecommerce_h6_font_size).'!important;
		}
	';

	wp_add_inline_style( 'grocery-ecommerce-basic-style',$grocery_ecommerce_custom_css );
	
	wp_enqueue_script( 'grocery-ecommerce-customscripts', get_template_directory_uri() . '/js/custom.js', array('jquery') );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', array('jquery') );

	wp_enqueue_script( 'jquery-superfish', get_template_directory_uri() . '/js/jquery.superfish.js', array('jquery') ,'',true);
	require get_parent_theme_file_path( '/inc/color-option.php' );
	wp_add_inline_style( 'grocery-ecommerce-basic-style',$grocery_ecommerce_custom_css );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'grocery_ecommerce_scripts' );
/*** Enqueue block editor style */
function grocery_ecommerce_block_editor_styles() {
	wp_enqueue_style( 'grocery-ecommerce-font', grocery_ecommerce_font_url(), array() );
    wp_enqueue_style( 'grocery-ecommerce-block-patterns-style-editor', get_theme_file_uri( '/block-patterns/css/block-editor.css' ), false, '1.0', 'all' );
    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri().'/assets/css/bootstrap.css' );
}
add_action( 'enqueue_block_editor_assets', 'grocery_ecommerce_block_editor_styles' );


/* Theme Credit link */
define('GROCERY_ECOMMERCE_THEMESGLANCE_PRO_THEME_URL',__('https://www.themesglance.com/themes/woocommerce-grocery-store-wordpress-theme/','grocery-ecommerce'));
define('GROCERY_ECOMMERCE_THEMESGLANCE_THEME_DOC',__('https://themesglance.com/demo/docs/tg-grocery-ecommerce-pro/','grocery-ecommerce'));
define('GROCERY_ECOMMERCE_THEMESGLANCE_LIVE_DEMO',__('https://www.themesglance.com/grocery-ecommerce/','grocery-ecommerce'));
define('GROCERY_ECOMMERCE_THEMESGLANCE_FREE_THEME_DOC',__('https://themesglance.com/demo/docs/free-grocery-ecommerce/','grocery-ecommerce'));
define('GROCERY_ECOMMERCE_THEMESGLANCE_SUPPORT',__('https://wordpress.org/support/theme/grocery-ecommerce/','grocery-ecommerce'));
define('GROCERY_ECOMMERCE_THEMESGLANCE_REVIEW',__('https://wordpress.org/support/theme/grocery-ecommerce/reviews/#new-post','grocery-ecommerce'));
define('GROCERY_ECOMMERCE_SITE_URL',__('https://www.themesglance.com/themes/free-grocery-ecommerce-wordpress-theme/','grocery-ecommerce'));

function grocery_ecommerce_credit_link() {
    echo "<a href=".esc_url(GROCERY_ECOMMERCE_SITE_URL)." target='_blank'>".esc_html__('Grocery Ecommerce WordPress Theme ','grocery-ecommerce')."</a>";
}


/*----- Related Posts Function ------*/
if ( ! function_exists( 'grocery_ecommerce_related_posts_function' ) ) {
	function grocery_ecommerce_related_posts_function() {
		wp_reset_postdata();
		global $post;

		// Define shared post arguments
		$args = array(
			'no_found_rows'          => true,
			'update_post_meta_cache' => false,
			'update_post_term_cache' => false,
			'ignore_sticky_posts'    => 1,
			'orderby'                => 'rand',
			'post__not_in'           => array( $post->ID ),
			'posts_per_page'    => absint( get_theme_mod( 'grocery_ecommerce_related_post_count', '3' ) ),
		);
		// Related by categories
		if ( get_theme_mod( 'grocery_ecommerce_post_shown_by', 'categories' ) == 'categories' ) {

			$cats = get_post_meta( $post->ID, 'related-posts', true );

			if ( ! $cats ) {
				$cats                 = wp_get_post_categories( $post->ID, array( 'fields' => 'ids' ) );
				$args['category__in'] = $cats;
			} else {
				$args['cat'] = $cats;
			}
		}
		// Related by tags
		if ( get_theme_mod( 'grocery_ecommerce_post_shown_by', 'categories' ) == 'tags' ) {

			$tags = get_post_meta( $post->ID, 'related-posts', true );

			if ( ! $tags ) {
				$tags            = wp_get_post_tags( $post->ID, array( 'fields' => 'ids' ) );
				$args['tag__in'] = $tags;
			} else {
				$args['tag_slug__in'] = explode( ',', $tags );
			}
			if ( ! $tags ) {
				$break = true;
			}
		}

		$query = ! isset( $break ) ? new WP_Query( $args ) : new WP_Query();

		return $query;
	}
}

function grocery_ecommerce_blog_image_dimension(){
	if(get_theme_mod('grocery_ecommerce_blog_image_dimension') == 'custom' ) {
		return true;
	}
	return false;
}

function grocery_ecommerce_excerpt_enabled(){
	if(get_theme_mod('grocery_ecommerce_blog_post_content') == 'Excerpt Content' ) {
		return true;
	}
	return false;
}
function grocery_ecommerce_button_enabled(){
	if(get_theme_mod('grocery_ecommerce_blog_button_text') != '' ) {
		return true;
	}
	return false;
}

function grocery_ecommerce_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

function grocery_ecommerce_sanitize_checkbox( $input ) {
	// Boolean check 
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

function grocery_ecommerce_sanitize_float( $input ) {
    return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
}
function grocery_ecommerce_slider_enabled(){
	if(get_theme_mod('grocery_ecommerce_show_slider') == true ) {
		return true;
	}
	return false;
}

/* Custom template tags for this theme. */
require get_template_directory() . '/inc/template-tags.php';

/* Customizer additions. */
require get_template_directory() . '/inc/customizer.php';

/* Implement the Custom Header feature. */
require get_template_directory() . '/inc/custom-header.php';

/* Implement the Get Started. */
require get_template_directory() . '/inc/getting-started/getting-started.php';

/* Implement the TGM. */
require get_template_directory() . '/inc/tgm.php';

/* Implement the Custom Header feature. */
require get_template_directory() . '/block-patterns/block-patterns.php';

/* webfont */
require get_template_directory() . '/inc/wptt-webfont-loader.php';