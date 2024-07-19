<?php

/*-----------------------------------------------------------------------------------*/
/* Enqueue scripts */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('haaski_minimal_enqueue_scripts')) {

	function haaski_minimal_enqueue_scripts() {

		wp_dequeue_script('savana-lite-navigation');

		wp_enqueue_style(
			'owl.carousel',
			get_stylesheet_directory_uri() . '/assets/css/owl.carousel.css', 
			array(), '2.3.4'
		);

		wp_enqueue_style(
			'owl.theme.default',
			get_stylesheet_directory_uri() . '/assets/css/owl.theme.default.css', 
			array(), '2.3.4'
		);

		wp_enqueue_style(
			'haaski-minimal-owl-theme',
			get_stylesheet_directory_uri() . '/assets/css/haaski.minimal.owl.theme.css', 
			array(), '1.0.0'
		);

		wp_enqueue_script(
			'haaski-minimal-navigation',
			get_stylesheet_directory_uri() . '/assets/js/navigation.js',
			array('jquery'), 
			'1.0',
			TRUE
		);

		wp_localize_script( 'haaski-minimal-navigation', 'accessibleNavigationScreenReaderText', array(
			'expandMain'   => __( 'Open the main menu', 'haaski-minimal' ),
			'collapseMain' => __( 'Close the main menu', 'haaski-minimal' ),
			'expandChild'   => __( 'expand submenu', 'haaski-minimal' ),
			'collapseChild' => __( 'collapse submenu', 'haaski-minimal' ),
		));

		wp_enqueue_script(
			'jquery.ticker',
			get_stylesheet_directory_uri() . '/assets/js/jquery.ticker.js',
			array('jquery'),
			'1.2.1',
			TRUE
		);

		wp_enqueue_script(
			'owl.carousel',
			get_stylesheet_directory_uri() . '/assets/js/owl.carousel.js',
			array('jquery'),
			'2.3.4', 
			TRUE
		);

		wp_deregister_style( 'google-fonts' );
		
		wp_deregister_style( 'savana-lite-style' );
		wp_deregister_style( 'savana-lite-' . esc_attr(get_theme_mod('savana_lite_skin', 'orange')) );

		wp_enqueue_style( 'haaski-minimal-parent-style' , get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'haaski-minimal-style' , get_stylesheet_directory_uri() . '/style.css' );

		wp_enqueue_style(
			'haaski-minimal-' . esc_attr(get_theme_mod('savana_lite_skin', 'orange')),
			get_stylesheet_directory_uri() . '/assets/skins/' . esc_attr(get_theme_mod('savana_lite_skin', 'orange')) . '.css',
			array( 'haaski-minimal-style' ),
			'1.0.0'
		);
		
		wp_enqueue_script(
			'haaski-minimal-script',
			get_stylesheet_directory_uri() . '/assets/js/script.js',
			array('jquery'),
			'1.0.0',
			TRUE
		);

		$googleFontsArgs = array(
			'family' =>    str_replace('|', '%7C', haaski_minimal_google_font_args()),
			'subset' =>    'latin,latin-ext'
		);

		wp_enqueue_style('google-fonts', add_query_arg ( $googleFontsArgs, "https://fonts.googleapis.com/css" ), array(), '1.0.0' );

	}

	add_action( 'wp_enqueue_scripts', 'haaski_minimal_enqueue_scripts', 999);

}

/*-----------------------------------------------------------------------------------*/
/* Replace hooks */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('haaski_minimal_replace_hooks')) {

	function haaski_minimal_replace_hooks() {

		remove_action( 'savana_lite_mobile_menu', 'savana_lite_mobile_menu_function' );
		remove_action( 'savana_lite_slick_slider', 'savana_lite_slick_slider_function');
		remove_action( 'savana_lite_thumbnail', 'savana_lite_thumbnail_function', 10, 2 );
		remove_action( 'savana_lite_before_content', 'savana_lite_before_content_function' );
		remove_action( 'savana_lite_archive_title', 'savana_lite_archive_title_function' );
		remove_action( 'savana_lite_searched_item', 'savana_lite_searched_item_function' );
		
	}

	add_action('init','haaski_minimal_replace_hooks');

}

/*-----------------------------------------------------------------------------------*/
/* Theme setup */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('haaski_minimal_theme_setup')) {

	function haaski_minimal_theme_setup() {

		remove_theme_support('custom-header');
		
		unregister_nav_menu( 'top-menu' );
		register_nav_menu( 'secondary-menu', esc_attr__( 'Secondary Menu', 'haaski-minimal' ) );
		
		load_child_theme_textdomain( 'haaski-minimal', get_stylesheet_directory() . '/languages' );

		require_once( trailingslashit( get_stylesheet_directory() ) . 'core/functions/function-style.php' );
		require_once( trailingslashit( get_stylesheet_directory() ) . 'core/functions/google-fonts.php' );
		require_once( trailingslashit( get_stylesheet_directory() ) . 'core/post/related-post.php' );
		require_once( trailingslashit( get_stylesheet_directory() ) . 'core/templates/before-content.php' );
		require_once( trailingslashit( get_stylesheet_directory() ) . 'core/templates/related-posts.php' );
		require_once( trailingslashit( get_stylesheet_directory() ) . 'core/templates/featured-posts.php' );
		require_once( trailingslashit( get_stylesheet_directory() ) . 'core/templates/mobile-menu.php' );
		require_once( trailingslashit( get_stylesheet_directory() ) . 'core/templates/media.php' );

		if ( !get_theme_mod('savana_lite_logo_text_color') )
			set_theme_mod( 'savana_lite_logo_text_color', '#616161' );

		if ( !get_theme_mod('savana_lite_logo_font_size') )
			set_theme_mod( 'savana_lite_logo_font_size', '40px' );

		if ( !get_theme_mod('savana_lite_logo_description_top_margin') )
			set_theme_mod( 'savana_lite_logo_description_top_margin', '10px' );

		if ( !get_theme_mod('background_color') )
			set_theme_mod('background_color', 'ffffff' );

	}

	add_action( 'after_setup_theme', 'haaski_minimal_theme_setup', 100);

}

/*-----------------------------------------------------------------------------------*/
/* Customize register */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('haaski_minimal_customize_register')) {

	function haaski_minimal_customize_register( $wp_customize ) {

		$wp_customize->remove_panel('featured_links_panel');
		$wp_customize->remove_section('slideshow_section');
		$wp_customize->remove_section('topmenu_section');
		
		$wp_customize->remove_control('savana_lite_enable_slideshow_overlay');
		$wp_customize->remove_control('savana_lite_enable_topbar');
		$wp_customize->remove_control('savana_lite_sticky_header');
		$wp_customize->remove_control('savana_lite_enable_header_search_form');
		$wp_customize->remove_control('savana_lite_enable_breadcrumb');
		$wp_customize->remove_control('savana_lite_enable_category_title');
		$wp_customize->remove_control('savana_lite_enable_searched_item');

		/* Main settins panel > Topbar section
		========================================================================== */

		$wp_customize->add_section( 'haaski_minimal_topbar_section', array(
			'title' => esc_html__( 'Topbar','haaski-minimal'),
			'panel' => 'general_panel',
			'priority' => 7,
			'description' => esc_html__('From this section you can manage the topbar','haaski-minimal'),
		));

	   /**
		* Main settins panel > Topbar section > Enable topbar option
		*/

		$wp_customize->add_setting( 'haaski_minimal_enable_topbar_section', array(
			'default' => 'on',
			'sanitize_callback' => 'haaski_minimal_checkbox_sanize',
		));

		$wp_customize->add_control( 'haaski_minimal_enable_topbar_section' , array(
			'type' => 'checkbox',
			'section' => 'haaski_minimal_topbar_section',
			'label' => esc_html__('Topbar section','haaski-minimal'),
			'description' => esc_html__('Do you want to enable the topbar?','haaski-minimal'),
		));

	   /**
		* Main settins panel > Topbar section > Enable topbar socials option
		*/

		$wp_customize->add_setting( 'haaski_minimal_enable_topbar_socials', array(
			'default' => 'on',
			'sanitize_callback' => 'haaski_minimal_checkbox_sanize',
		));

		$wp_customize->add_control( 'haaski_minimal_enable_topbar_socials' , array(
			'type' => 'checkbox',
			'section' => 'haaski_minimal_topbar_section',
			'label' => esc_html__('Social links','haaski-minimal'),
			'description' => esc_html__('Do you want to show the social links in the topbar?','haaski-minimal'),
		));

	   /**
		* Main settins panel > Topbar section > Enable news ticker option
		*/

		$wp_customize->add_setting( 'haaski_minimal_enable_news_ticker', array(
			'default' => 'on',
			'sanitize_callback' => 'haaski_minimal_checkbox_sanize',
		));

		$wp_customize->add_control( 'haaski_minimal_enable_news_ticker' , array(
			'type' => 'checkbox',
			'section' => 'haaski_minimal_topbar_section',
			'label' => esc_html__('News ticker','haaski-minimal'),
			'description' => esc_html__('Do you want to enable the news ticker?','haaski-minimal'),
		));

	   /**
		* Main settins panel > Topbar section > Enable news ticker whole website option
		*/

		$wp_customize->add_setting( 'haaski_minimal_enable_newsticker_whole_website', array(
			'default' => 'on',
			'sanitize_callback' => 'haaski_minimal_checkbox_sanize',
		));

		$wp_customize->add_control( 'haaski_minimal_enable_newsticker_whole_website' , array(
			'type' => 'checkbox',
			'section' => 'haaski_minimal_topbar_section',
			'label' => esc_html__('Show newsticker on whole website','haaski-minimal'),
			'description' => esc_html__('Do you want to show the news ticker on whole website?','haaski-minimal'),
		));

	   /**
	   * Main settins panel > Topbar section > News ticker title option
		*/

	   $wp_customize->add_setting( 'haaski_minimal_news_ticker_title', array(
		   'default' => esc_html__('HOT','haaski-minimal'),
		   'sanitize_callback' => 'sanitize_text_field',
	   ));

	   $wp_customize->add_control( 'haaski_minimal_news_ticker_title' , array(
		   'type' => 'text',
		   'section' => 'haaski_minimal_topbar_section',
		   'label' => esc_html__('News ticker title','haaski-minimal'),
		   'description' => esc_html__('Insert the title for the news ticker','haaski-minimal'),
	   ));

	   /**
		* Main settins panel > Topbar section > News ticker category option
		*/

	   $wp_customize->add_setting( 'haaski_minimal_news_ticker_category', array(
		   'default' => 'all',
			'sanitize_callback' => 'haaski_minimal_select_sanitize',
		));

	   $wp_customize->add_control( 'haaski_minimal_news_ticker_category' , array(
		   'type' => 'select',
		   'section' => 'haaski_minimal_topbar_section',
		   'label' => esc_html__('News ticker category','haaski-minimal'),
		   'description' => esc_html__('Please select the category of the news ticker.','haaski-minimal'),
		   'choices'  => haaski_minimal_get_categories(),
	   ));

	   /**
	   * Main settins panel > Topbar section > News ticker order option
		*/

	   $wp_customize->add_setting( 'haaski_minimal_news_ticker_order', array(
		   'default' => 'date',
		   'sanitize_callback' => 'haaski_minimal_select_sanitize',
	   ));

	   $wp_customize->add_control( 'haaski_minimal_news_ticker_order' , array(
		   'type' => 'select',
		   'section' => 'haaski_minimal_topbar_section',
		   'label' => esc_html__('News ticker order by','haaski-minimal'),
		   'description' => esc_html__('How you want to order the articles?.','haaski-minimal'),
		   'choices'  => array (
			   'title' => esc_html__( 'Post title','haaski-minimal'),
			   'rand' => esc_html__( 'Randomly','haaski-minimal'),
			   'comment_count' => esc_html__( 'Comment count','haaski-minimal'),
			   'date' => esc_html__( 'Post date','haaski-minimal'),
		   ),
	   ));

	   /**
	   * Main settins panel > Topbar section > News ticker sort order option
		*/

	   $wp_customize->add_setting( 'haaski_minimal_news_ticker_sort_order', array(
		   'default' => 'desc',
		   'sanitize_callback' => 'haaski_minimal_select_sanitize',
	   ));

	   $wp_customize->add_control( 'haaski_minimal_news_ticker_sort_order' , array(
		   'type' => 'select',
		   'section' => 'haaski_minimal_topbar_section',
		   'label' => esc_html__('News ticker sort order','haaski-minimal'),
		   'description' => esc_html__('Select the order of the articles.','haaski-minimal'),
		   'choices'  => array (
			   'asc' => esc_html__( 'Ascending','haaski-minimal'),
			   'desc' => esc_html__( 'Descending','haaski-minimal'),
		   ),
	   ));

	   /**
		* Main settins panel > Topbar section > News ticker limit option
		*/

	   $wp_customize->add_setting( 'haaski_minimal_news_ticker_limit', array(
		   'sanitize_callback' => 'haaski_minimal_limit_sanitize',
		   'default' => 5,
	   ));

	   $wp_customize->add_control( 'haaski_minimal_news_ticker_limit' , array(
		   'type' => 'number',
		   'section' => 'haaski_minimal_topbar_section',
		   'label' => esc_html__('News ticker post limit','haaski-minimal'),
		   'description' => esc_html__('Please select the category of the news ticker.','haaski-minimal'),
		   'input_attrs' => array('min' => 1)
	   ));

		/* Slideshow section
		   ========================================================================== */
		
		$wp_customize->add_section('haaski_minimal_post_slideshow_section', array(
			'title' => esc_html__( 'Slideshow', 'haaski-minimal' ),
			'description' => esc_html__('From this section you can manage the slideshow on homepage','haaski-minimal'),
			'priority' => 8,
			'panel' => 'general_panel',
		));

		/**
		 * Slideshow section > Slideshow layout option
		 */

		 $wp_customize->add_setting( 'haaski_minimal_post_slideshow_layout', array(
			'default' => 'layout-1',
			'sanitize_callback' => 'haaski_minimal_select_sanitize',
		));

		$wp_customize->add_control( 'haaski_minimal_post_slideshow_layout' , array(
			'priority' => 8,
			'type' => 'select',
			'section' => 'haaski_minimal_post_slideshow_section',
			'label' => esc_html__('Grid layout','haaski-minimal'),
			'description' => esc_html__('Please select one of available layouts for the desktop devices.','haaski-minimal'),
			'choices'  => array (
			   'disable' => esc_html__( 'Disable','haaski-minimal'),
			   'layout-1' => esc_html__( 'Layout 1','haaski-minimal'),
			   'layout-2' => esc_html__( 'Layout 2','haaski-minimal'),
			   'layout-3' => esc_html__( 'Layout 3','haaski-minimal'),
			   'layout-4' => esc_html__( 'Layout 4','haaski-minimal'),
			   'layout-5' => esc_html__( 'Layout 5','haaski-minimal'),
			   'layout-6' => esc_html__( 'Layout 6','haaski-minimal'),
			),
		));

		/**
		 * Slideshow section > Slideshow category option
		 */

		$wp_customize->add_setting( 'haaski_minimal_slideshow_category', array(
			'default' => 'all',
			'sanitize_callback' => 'haaski_minimal_select_sanitize',
		));

	   	$wp_customize->add_control( 'haaski_minimal_slideshow_category' , array(
		   'priority' => 9,
		   'type' => 'select',
		   'section' => 'haaski_minimal_post_slideshow_section',
		   'label' => esc_html__('Category','haaski-minimal'),
		   'description' => esc_html__('Please select the category of the slideshow.','haaski-minimal'),
		   'choices'  => haaski_minimal_get_categories(),
		));

		/**
		 * Slideshow section > Featured posts items option
		 */

		$wp_customize->add_setting( 'haaski_minimal_featured_posts_items', array(
			'default' => '3',
			'sanitize_callback' => 'haaski_minimal_select_sanitize',
		));

		$wp_customize->add_control( 'haaski_minimal_featured_posts_items' , array(
			'priority' => 9,
			'type' => 'select',
			'section' => 'haaski_minimal_post_slideshow_section',
			'label' => esc_html__('Slideshow items','haaski-minimal'),
			'description' => esc_html__('Please note that, since it is a post grid, each slide contains 3 articles.','haaski-minimal'),
			'choices'  => array (
			   '1' => esc_html__( '1 slide with 3 posts','haaski-minimal'),
			   '2' => esc_html__( '2 slide with 6 posts','haaski-minimal'),
			   '3' => esc_html__( '3 slide with 9 posts','haaski-minimal'),
			   '4' => esc_html__( '4 slide with 12 posts','haaski-minimal'),
			   '5' => esc_html__( '5 slide with 15 posts','haaski-minimal'),
			),
		));

		/**
		 * Slideshow section > Slideshow dots option
		 */

		$wp_customize->add_setting( 'haaski_minimal_slideshow_dots', array(
			'default' => true,
			'sanitize_callback' => 'haaski_minimal_checkbox_sanize',
			'transport'  => 'refresh'
		));
		
		$wp_customize->add_control( 'haaski_minimal_slideshow_dots', array(
			'label' => esc_html__( 'Show Dots','haaski-minimal'),
			'section' => 'haaski_minimal_post_slideshow_section',
			'type' => 'checkbox',
		));

		/* Typography panel > Google Fonts section
		========================================================================== */

		$wp_customize->add_section( 'haaski_minimal_fonts', array(
			'title' => esc_html__( 'Google Fonts','haaski-minimal'),
			'panel' => 'typography_panel',
			'priority' => 9,
			'description' => esc_html__('From this section you can select one of the 18 Google Fonts included with Haaski Minimal','haaski-minimal'),
		));

		/**
		 * Typography panel > Google Fonts section > Site font option
		 */

		$wp_customize->add_setting( 'haaski_minimal_body_font_family', array(
			'default' => 'Raleway:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic',
			'sanitize_callback' => 'haaski_minimal_select_sanitize',
		));

		$wp_customize->add_control( 'haaski_minimal_body_font_family' , array(
			'priority' => 9,
			'type' => 'select',
			'section' => 'haaski_minimal_fonts',
			'label' => esc_html__('Site font','haaski-minimal'),
			'description' => esc_html__('Choose the font for your website.','haaski-minimal'),
			'choices' => haaski_minimal_google_fonts(),
		));

		/**
		 * Main settins panel > General settings section > Related posts option
		 */

		$wp_customize->add_setting( 'haaski_minimal_enable_related_posts', array(
			'default' => 'on',
			'sanitize_callback' => 'haaski_minimal_checkbox_sanize',
		));

		$wp_customize->add_control( 'haaski_minimal_enable_related_posts' , array(
			'type' => 'checkbox',
			'section' => 'settings_section',
			'label' => esc_html__('Related posts','haaski-minimal'),
			'description' => esc_html__('Do you want to display the related posts at the end of each article?','haaski-minimal'),
		));
		
		function haaski_minimal_select_sanitize ($value, $setting) {
		
			global $wp_customize;
					
			$control = $wp_customize->get_control( $setting->id );
				 
			if ( array_key_exists( $value, $control->choices ) ) {
					
				return $value;
					
			} else {
					
				return $setting->default;
					
			}
			
		}

		function haaski_minimal_checkbox_sanize ($input) {

			return $input ? true : false;

		}

	}

	add_action( 'customize_register', 'haaski_minimal_customize_register', 11 );

}

/*-----------------------------------------------------------------------------------*/
/* POST ICON */
/*-----------------------------------------------------------------------------------*/ 

if (!function_exists('haaski_minimal_posticon')) {

	function haaski_minimal_posticon() {
		
		$html = '';
	
		$icons = array ( 
			'video' => 'fa fa-play' , 
			'gallery' => 'fa fa-camera' , 
			'audio' => 'fa fa-volume-up' , 
			'chat' => 'fa fa-users', 
			'status' => 'fa fa-keyboard-o', 
			'image' => 'fa fa-picture-o' ,
			'quote' => 'fa fa-quote-left', 
			'link' => 'fa fa-external-link', 
			'aside' => 'fa fa-file-text-o', 
		);
	
		if ( get_post_format() ) { 
		
			$html .= '<i class="'.esc_attr($icons[get_post_format()]).'"></i> '; 
			$html .= ucfirst( strtolower( esc_html(get_post_format()) )); 
		
		} else {
		
			$html .= '<i class="fa fa-pencil-square-o"></i> '; 
			$html .= esc_html__( 'Article','haaski-minimal'); 
		
		}

		return $html;
	
	}

}

/*-----------------------------------------------------------------------------------*/
/* GET POSTS ON SLIDESHOW */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('haaski_minimal_get_posts_on_slideshow')) {

	function haaski_minimal_get_posts_on_slideshow() {

		return intval(savana_lite_setting('haaski_minimal_featured_posts_items', 3)) * 3;

	}

}

/*-----------------------------------------------------------------------------------*/
/* Exclude featured posts on homepage */
/*-----------------------------------------------------------------------------------*/   

if (!function_exists('haaski_minimal_exclude_featured_posts_on_home')) {

	function haaski_minimal_exclude_featured_posts_on_home(&$query) {
		
		if ( 
			(
				$query->is_home() && 
				$query->is_main_query() &&
				strstr(savana_lite_setting('haaski_minimal_post_slideshow_layout','layout-1'), 'layout' ) == true
			)			
		){ 
	
			$offset = haaski_minimal_get_posts_on_slideshow();
			
			$ppp = get_option('posts_per_page');
		
			if ( $query->is_paged ) {
				$page_offset = $offset + ( ($query->query_vars['paged']-1) * $ppp );
				$query->set('offset', $page_offset );
			}
			else {
				$query->set('offset',$offset);
			}
	
		}
	
	}

	add_action('pre_get_posts', 'haaski_minimal_exclude_featured_posts_on_home', 1 );

}

/*-----------------------------------------------------------------------------------*/
/* Adjust offset pagination */
/*-----------------------------------------------------------------------------------*/   

if (!function_exists('haaski_minimal_adjust_offset_pagination')) {

	function haaski_minimal_adjust_offset_pagination($found_posts, $query) {
	
		$offset = haaski_minimal_get_posts_on_slideshow();
	
		if ( 
			(
				$query->is_home() && 
				$query->is_main_query() &&
				strstr(savana_lite_setting('haaski_minimal_post_slideshow_layout','layout-1'), 'layout' ) == true
			)			
		){ 
			return $found_posts - $offset;
		}
		
		return $found_posts;
	
	}

	add_filter('found_posts', 'haaski_minimal_adjust_offset_pagination', 1, 2 );

}

/*-----------------------------------------------------------------------------------*/
/* Get post categories */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('haaski_minimal_get_categories')) {

	function haaski_minimal_get_categories() {

		$args = array(
			'taxonomy' => 'category',
			'hide_empty' => true,
		);

		$return['all'] = esc_html__( 'All categories', 'haaski-minimal' );

		foreach ( get_terms($args) as $cat) {
			$return[$cat->term_id] = $cat->name;
		}

		return $return;

	}

}

/*-----------------------------------------------------------------------------------*/
/* BODY CLASS HOOK */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('haaski_minimal_show_newsticker_whole_website')) {

	function haaski_minimal_show_newsticker_whole_website() {

		$result = false;

		if ( 
			( 
				is_home() || 
				is_front_page()
			) ||
			( 
				!is_home() && 
				!is_front_page() && 
				savana_lite_setting('haaski_minimal_enable_newsticker_whole_website','on') == 'on'
			)
		) {
			$result = true;
		}
		
		return $result;

	}

}

/*-----------------------------------------------------------------------------------*/
/* BODY CLASS HOOK */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('haaski_minimal_body_class_function')) {

	function haaski_minimal_body_class_function($classes) {

		if ( haaski_minimal_show_newsticker_whole_website() && savana_lite_setting('haaski_minimal_enable_news_ticker','on') == 'on' ) :
			$classes[] = 'topbar_show_newsticker';
		endif;
		
		if ( savana_lite_setting('haaski_minimal_enable_topbar_socials','on') == 'on' ) :
			$classes[] = 'topbar_show_socials';
		endif;
		
		return $classes;

	}

	add_filter('body_class', 'haaski_minimal_body_class_function');

}

?>
