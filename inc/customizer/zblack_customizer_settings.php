<?php

function zblack_sanitize_default( $value ) {
	return $value;
}
function zblack_register_theme_customizer( $wp_customize ) {

 	$wp_customize->add_panel( 'zblack_theme_options' ,
        array(
            'title'       => esc_html__( 'ZBLACK: Theme Options', 'zblack' ),
            'description' => ''
        )
    );

	// Add Sections
	$wp_customize->add_section( 'zblack_help' , array(
	    'title'       => esc_html__( 'THEME HELP', 'zblack' ),
	    'description' => '',
	    'priority'   => 17,
	    'panel'       => 'zblack_theme_options',
	) );

	$wp_customize->add_section( 'zblack_new_section_custom_css' , array(
   		'title'      => 'Custom CSS',
   		'description'=> 'Add your custom CSS which will overwrite the theme CSS',
   		'priority'   => 16,
	    'panel'       => 'zblack_theme_options',
	) );
	
	$wp_customize->add_section( 'zblack_new_section_color_accent' , array(
   		'title'      => 'Colors: Accent',
   		'description'=> '',
   		'priority'   => 15,
	    'panel'       => 'zblack_theme_options',
	) );
	
	$wp_customize->add_section( 'zblack_new_section_color_post_color' , array(
   		'title'      => 'Colors: Posts',
   		'description'=> '',
   		'priority'   => 14,
	    'panel'       => 'zblack_theme_options',
	) );
	
	$wp_customize->add_section( 'zblack_new_section_color_footer' , array(
   		'title'      => 'Colors: Footer',
   		'description'=> '',
   		'priority'   => 13,
	    'panel'       => 'zblack_theme_options',
	) );
	
	$wp_customize->add_section( 'zblack_new_section_color_sidebar' , array(
   		'title'      => 'Colors: Sidebar',
   		'description'=> '',
   		'priority'   => 12,
	    'panel'       => 'zblack_theme_options',
	) );
	
	$wp_customize->add_section( 'zblack_new_section_mobile' , array(
		'title'      => 'Colors: Mobile Menu',
		'description'=> '',
		'priority'   => 11,
	    'panel'       => 'zblack_theme_options',
	) );
	
	$wp_customize->add_section( 'zblack_new_section_color_topbar' , array(
   		'title'      => 'Colors: Top Bar',
   		'description'=> '',
   		'priority'   => 10,
	    'panel'       => 'zblack_theme_options',
	) );
	
	$wp_customize->add_section( 'zblack_new_section_footer' , array(
   		'title'      => 'Footer Settings',
   		'description'=> '',
   		'priority'   => 9,
	    'panel'       => 'zblack_theme_options',
	) );
	
	$wp_customize->add_section( 'zblack_new_section_social' , array(
   		'title'      => 'Social Media Settings',
   		'description'=> 'Enter your social media usernames. Icons will not show if left blank.',
   		'priority'   => 8,
	    'panel'       => 'zblack_theme_options',
	) );
	
	$wp_customize->add_section( 'zblack_new_section_page' , array(
   		'title'      => 'Page Settings',
   		'description'=> '',
   		'priority'   => 7,
	    'panel'       => 'zblack_theme_options',
	) );
	
	$wp_customize->add_section( 'zblack_new_section_post' , array(
   		'title'      => 'Post Settings',
   		'description'=> '',
   		'priority'   => 6,
	    'panel'       => 'zblack_theme_options',
	) );
	
	$wp_customize->add_section( 'zblack_new_section_promo' , array(
		'title'      => 'Promo Box Settings',
		'description'=> '',
		'priority'   => 5,
	    'panel'       => 'zblack_theme_options',
	) );
	
	$wp_customize->add_section( 'zblack_new_section_featured' , array(
		'title'      => 'Featured Area Settings',
		'description'=> '',
		'priority'   => 4,
	    'panel'       => 'zblack_theme_options',
	) );
	
	$wp_customize->add_section( 'zblack_new_section_topbar' , array(
		'title'      => 'Top Bar Settings',
		'description'=> '',
		'priority'   => 3,
	    'panel'       => 'zblack_theme_options',
	) );
	
	$wp_customize->add_section( 'zblack_new_section_logo_header' , array(
   		'title'      => 'Logo and Header Settings',
   		'description'=> '',
   		'priority'   => 2,
	    'panel'       => 'zblack_theme_options',
	) );
	
	$wp_customize->add_section( 'zblack_new_section_general' , array(
   		'title'      => 'General Settings',
   		'description'=> '',
   		'priority'   => 1,
	    'panel'       => 'zblack_theme_options',
	) );
	
	// Add Setting

		// General
		$wp_customize->add_setting(
	        'zblack_home_layout',
	        array(
	            'default'     => 'full',
	            'sanitize_callback' => 'zblack_sanitize_default'
	        )
	    );
		
		$wp_customize->add_setting(
	        'zblack_archive_layout',
	        array(
	            'default'     => 'full',
	            'sanitize_callback' => 'zblack_sanitize_default'
	        )
	    );
		
		$wp_customize->add_setting(
	        'zblack_sidebar_homepage',
	        array(
	            'default'     => false,
	            'sanitize_callback' => 'zblack_sanitize_default'
	        )
	    );
		
		$wp_customize->add_setting(
	        'zblack_sidebar_post',
	        array(
	            'default'     => false,
	            'sanitize_callback' => 'zblack_sanitize_default'
	        )
	    );
		$wp_customize->add_setting(
	        'zblack_sidebar_archive',
	        array(
	            'default'     => false,
	            'sanitize_callback' => 'zblack_sanitize_default'
	        )
	    );
		
		// Header & Logo
		$wp_customize->add_setting(
	        'zblack_logo',
				array(
					'default'     => '',
	            'sanitize_callback' => 'zblack_sanitize_default'
				)
	    );
		$wp_customize->add_setting(
	        'zblack_header_padding_top',
	        array(
	            'default'     => '56',
	            'sanitize_callback' => 'zblack_sanitize_default'
	        )
	    );
		$wp_customize->add_setting(
	        'zblack_header_padding_bottom',
	        array(
	            'default'     => '56',
	            'sanitize_callback' => 'zblack_sanitize_default'
	        )
	    );
		
		// Top Bar
		$wp_customize->add_setting(
	        'zblack_topbar_social_check',
	        array(
	            'default'     => false,
	            'sanitize_callback' => 'zblack_sanitize_default'
	        )
	    );
		$wp_customize->add_setting(
	        'zblack_topbar_search_check',
	        array(
	            'default'     => false,
	            'sanitize_callback' => 'zblack_sanitize_default'
	        )
	    );
		
		// Featured area
		$wp_customize->add_setting(
	        'zblack_featured_slider',
	        array(
	            'default'     => false,
	            'sanitize_callback' => 'zblack_sanitize_default'
	        )
	    );
		$wp_customize->add_setting(
	        'zblack_featured_cat',
				array(
					'default'     => '',
	            'sanitize_callback' => 'zblack_sanitize_default'
				)
	    );
		$wp_customize->add_setting(
	        'zblack_featured_id',
	        array(
	            'default'     => '',
	            'sanitize_callback' => 'zblack_sanitize_default'
	        )
	    );
		$wp_customize->add_setting(
	        'zblack_featured_slider_slides',
	        array(
	            'default'     => '5',
	            'sanitize_callback' => 'zblack_sanitize_default'
	        )
	    );
		
		// Promo Boxes
		$wp_customize->add_setting(
	        'zblack_promo',
	        array(
	            'default'     => false,
	            'sanitize_callback' => 'zblack_sanitize_default'
	        )
	    );
		$wp_customize->add_setting(
	        'zblack_promo1_title',
	        array(
	            'default'     => '',
	            'sanitize_callback' => 'zblack_sanitize_default'
	        )
	    );
		$wp_customize->add_setting(
	        'zblack_promo1_image',
				array(
					'default'     => '',
	            'sanitize_callback' => 'zblack_sanitize_default'
				)
	    );
		$wp_customize->add_setting(
	        'zblack_promo1_url',
	        array(
	            'default'     => '',
	            'sanitize_callback' => 'zblack_sanitize_default'
	        )
	    );
		$wp_customize->add_setting(
	        'zblack_promo2_title',
	        array(
	            'default'     => '',
	            'sanitize_callback' => 'zblack_sanitize_default'
	        )
	    );
		$wp_customize->add_setting(
	        'zblack_promo2_image',
				array(
					'default'     => '',
	            'sanitize_callback' => 'zblack_sanitize_default'
				)
	    );
		$wp_customize->add_setting(
	        'zblack_promo2_url',
	        array(
	            'default'     => '',
	            'sanitize_callback' => 'zblack_sanitize_default'
	        )
	    );
		$wp_customize->add_setting(
	        'zblack_promo3_title',
	        array(
	            'default'     => '',
	            'sanitize_callback' => 'zblack_sanitize_default'
	        )
	    );
		$wp_customize->add_setting(
	        'zblack_promo3_image',
				array(
					'default'     => '',
	            	'sanitize_callback' => 'zblack_sanitize_default'
				)
	    );
		$wp_customize->add_setting(
	        'zblack_promo3_url',
	        array(
	            'default'     => '',
	            'sanitize_callback' => 'zblack_sanitize_default'
	        )
	    );
		
		// Post Settings
		$wp_customize->add_setting(
	        'zblack_post_tags',
	        array(
	            'default'     => false,
	            'sanitize_callback' => 'zblack_sanitize_default'
	        )
	    );
		$wp_customize->add_setting(
	        'zblack_post_author',
	        array(
	            'default'     => false,
	            'sanitize_callback' => 'zblack_sanitize_default'
	        )
	    );
		$wp_customize->add_setting(
	        'zblack_post_related',
	        array(
	            'default'     => false,
	            'sanitize_callback' => 'zblack_sanitize_default'
	        )
	    );
		$wp_customize->add_setting(
	        'zblack_post_share',
	        array(
	            'default'     => false,
	            'sanitize_callback' => 'zblack_sanitize_default'
	        )
	    );
		$wp_customize->add_setting(
	        'zblack_post_share_author',
	        array(
	            'default'     => false,
	            'sanitize_callback' => 'zblack_sanitize_default'
	        )
	    );
		$wp_customize->add_setting(
	        'zblack_post_comment_link',
	        array(
	            'default'     => false,
	            'sanitize_callback' => 'zblack_sanitize_default'
	        )
	    );
		$wp_customize->add_setting(
	        'zblack_post_thumb',
	        array(
	            'default'     => false,
	            'sanitize_callback' => 'zblack_sanitize_default'
	        )
	    );
		$wp_customize->add_setting(
	        'zblack_post_date',
	        array(
	            'default'     => false,
	            'sanitize_callback' => 'zblack_sanitize_default'
	        )
	    );
		$wp_customize->add_setting(
	        'zblack_post_cat',
	        array(
	            'default'     => false,
	            'sanitize_callback' => 'zblack_sanitize_default'
	        )
	    );
		
		// Page
		$wp_customize->add_setting(
	        'zblack_page_share',
	        array(
	            'default'     => false,
	            'sanitize_callback' => 'zblack_sanitize_default'
	        )
	    );
		
		// Social Media
		
		$wp_customize->add_setting(
	        'zblack_facebook',
	        array(
	            'default'     => '',
	            'sanitize_callback' => 'zblack_sanitize_default'
	        )
	    );
		$wp_customize->add_setting(
	        'zblack_twitter',
	        array(
	            'default'     => '',
	            'sanitize_callback' => 'zblack_sanitize_default'
	        )
	    );
		$wp_customize->add_setting(
	        'zblack_instagram',
	        array(
	            'default'     => '',
	            'sanitize_callback' => 'zblack_sanitize_default'
	        )
	    );
		$wp_customize->add_setting(
	        'zblack_pinterest',
	        array(
	            'default'     => '',
	            'sanitize_callback' => 'zblack_sanitize_default'
	        )
	    );
		$wp_customize->add_setting(
	        'zblack_tumblr',
	        array(
	            'default'     => '',
	            'sanitize_callback' => 'zblack_sanitize_default'
	        )
	    );
		$wp_customize->add_setting(
	        'zblack_bloglovin',
	        array(
	            'default'     => '',
	            'sanitize_callback' => 'zblack_sanitize_default'
	        )
	    );
		$wp_customize->add_setting(
	        'zblack_tumblr',
	        array(
	            'default'     => '',
	            'sanitize_callback' => 'zblack_sanitize_default'
	        )
	    );
		$wp_customize->add_setting(
	        'zblack_google',
	        array(
	            'default'     => '',
	            'sanitize_callback' => 'zblack_sanitize_default'
	        )
	    );
		$wp_customize->add_setting(
	        'zblack_youtube',
	        array(
	            'default'     => '',
	            'sanitize_callback' => 'zblack_sanitize_default'
	        )
	    );
	    $wp_customize->add_setting(
	        'zblack_dribbble',
	        array(
	            'default'     => '',
	            'sanitize_callback' => 'zblack_sanitize_default'
	        )
	    );
	    $wp_customize->add_setting(
	        'zblack_soundcloud',
	        array(
	            'default'     => '',
	            'sanitize_callback' => 'zblack_sanitize_default'
	        )
	    );
	    $wp_customize->add_setting(
	        'zblack_vimeo',
	        array(
	            'default'     => '',
	            'sanitize_callback' => 'zblack_sanitize_default'
	        )
	    );
		$wp_customize->add_setting(
	        'zblack_linkedin',
	        array(
	            'default'     => '',
	            'sanitize_callback' => 'zblack_sanitize_default'
	        )
	    );
		$wp_customize->add_setting(
	        'zblack_rss',
	        array(
	            'default'     => '',
	            'sanitize_callback' => 'zblack_sanitize_default'
	        )
	    );
	    $wp_customize->add_setting(
	        'zblack_stumbleupon',
	        array(
	            'default'     => '',
	            'sanitize_callback' => 'zblack_sanitize_default'
	        )
	    );
	    
		
		// Footer
		$wp_customize->add_setting(
	        'zblack_footer_copyright',
	        array(
	            'default'     => 'Designed with <i style="color:#FF4A4A" class="fa fa-heart"></i> by ZThemes.net',
	            'sanitize_callback' => 'zblack_sanitize_default'
	        )
	    );
		$wp_customize->add_setting(
	        'zblack_footer_share',
	        array(
	            'default'     => false,
	            'sanitize_callback' => 'zblack_sanitize_default'
	        )
	    );
		
		// Colors
		
			// Top bar
			$wp_customize->add_setting(
				'zblack_topbar_bg',
				array(
					'default'     => '#000',
	            	'sanitize_callback' => 'zblack_sanitize_default'
				)
			);

			$wp_customize->add_setting(
				'zblack_topbar_nav_color',
				array(
					'default'     => '#ffffff',
	            	'sanitize_callback' => 'zblack_sanitize_default'
				)
			);
			$wp_customize->add_setting(
				'zblack_topbar_nav_color_hover',
				array(
					'default'     => '#999999',
	            	'sanitize_callback' => 'zblack_sanitize_default'
				)
			);
			
			$wp_customize->add_setting(
				'zblack_drop_bg',
				array(
					'default'     => '#000',
	            	'sanitize_callback' => 'zblack_sanitize_default'
				)
			);
			$wp_customize->add_setting(
				'zblack_drop_border',
				array(
					'default'     => '#333333',
	            	'sanitize_callback' => 'zblack_sanitize_default'
				)
			);
			$wp_customize->add_setting(
				'zblack_drop_text_color',
				array(
					'default'     => '#999999',
	            	'sanitize_callback' => 'zblack_sanitize_default'
				)
			);
			$wp_customize->add_setting(
				'zblack_drop_text_hover_bg',
				array(
					'default'     => '#333333',
	            	'sanitize_callback' => 'zblack_sanitize_default'
				)
			);
			$wp_customize->add_setting(
				'zblack_drop_text_hover_color',
				array(
					'default'     => '#ffffff',
	            	'sanitize_callback' => 'zblack_sanitize_default'
				)
			);
			
			$wp_customize->add_setting(
				'zblack_topbar_social_color',
				array(
					'default'     => '#ffffff',
	            	'sanitize_callback' => 'zblack_sanitize_default'
				)
			);
			$wp_customize->add_setting(
				'zblack_topbar_social_color_hover',
				array(
					'default'     => '#C39F76',
	            	'sanitize_callback' => 'zblack_sanitize_default'
				)
			);
			
			$wp_customize->add_setting(
				'zblack_topbar_search_magnify',
				array(
					'default'     => '#888888',
	            	'sanitize_callback' => 'zblack_sanitize_default'
				)
			);
			
			// Mobile Menu colors
			$wp_customize->add_setting(
				'zblack_mobile_bg',
				array(
					'default'     => '#000',
	            	'sanitize_callback' => 'zblack_sanitize_default'
				)
			);
			$wp_customize->add_setting(
				'zblack_mobile_text',
				array(
					'default'     => '#ffffff',
	            	'sanitize_callback' => 'zblack_sanitize_default'
				)
			);
			$wp_customize->add_setting(
				'zblack_mobile_icon',
				array(
					'default'     => '#ffffff',
	            	'sanitize_callback' => 'zblack_sanitize_default'
				)
			);
			
			// Sidebar
			$wp_customize->add_setting(
				'zblack_sidebar_title_bg',
				array(
					'default'     => '#000',
	            	'sanitize_callback' => 'zblack_sanitize_default'
				)
			);
			$wp_customize->add_setting(
				'zblack_sidebar_title_text',
				array(
					'default'     => '#ffffff',
	            	'sanitize_callback' => 'zblack_sanitize_default'
				)
			);
			$wp_customize->add_setting(
				'zblack_sidebar_social_icon',
				array(
					'default'     => '#000000',
	            	'sanitize_callback' => 'zblack_sanitize_default'
				)
			);
			$wp_customize->add_setting(
				'zblack_sidebar_social_icon_hover',
				array(
					'default'     => '#C39F76',
	            	'sanitize_callback' => 'zblack_sanitize_default'
				)
			);
			$wp_customize->add_setting(
				'zblack_sidebar_newsletter_bg',
				array(
					'default'     => '#f1f1f1',
	            	'sanitize_callback' => 'zblack_sanitize_default'
				)
			);
			$wp_customize->add_setting(
				'zblack_sidebar_newsletter_text',
				array(
					'default'     => '#444444',
	            	'sanitize_callback' => 'zblack_sanitize_default'
				)
			);
			$wp_customize->add_setting(
				'zblack_sidebar_newsletter_button_bg',
				array(
					'default'     => '#000',
	            	'sanitize_callback' => 'zblack_sanitize_default'
				)
			);
			$wp_customize->add_setting(
				'zblack_sidebar_newsletter_button_text',
				array(
					'default'     => '#ffffff',
	            	'sanitize_callback' => 'zblack_sanitize_default'
				)
			);
			$wp_customize->add_setting(
				'zblack_sidebar_newsletter_button_bg_hover',
				array(
					'default'     => '#C39F76',
	            	'sanitize_callback' => 'zblack_sanitize_default'
				)
			);
			$wp_customize->add_setting(
				'zblack_sidebar_newsletter_button_text_hover',
				array(
					'default'     => '#ffffff',
	            	'sanitize_callback' => 'zblack_sanitize_default'
				)
			);
			
			// Footer
			$wp_customize->add_setting(
				'zblack_footer_bg',
				array(
					'default'     => '#000',
	            	'sanitize_callback' => 'zblack_sanitize_default'
				)
			);
			$wp_customize->add_setting(
				'zblack_footer_social',
				array(
					'default'     => '#ffffff',
	            	'sanitize_callback' => 'zblack_sanitize_default'
				)
			);
			$wp_customize->add_setting(
				'zblack_footer_social_hover',
				array(
					'default'     => '#C39F76',
	            	'sanitize_callback' => 'zblack_sanitize_default'
				)
			);
			$wp_customize->add_setting(
				'zblack_footer_social_line',
				array(
					'default'     => '#313131',
	            	'sanitize_callback' => 'zblack_sanitize_default'
				)
			);
			$wp_customize->add_setting(
				'zblack_footer_copyright_color',
				array(
					'default'     => '#888888',
	            	'sanitize_callback' => 'zblack_sanitize_default'
				)
			);
			$wp_customize->add_setting(
				'zblack_footer_copyright_link',
				array(
					'default'     => '#ffffff',
	            	'sanitize_callback' => 'zblack_sanitize_default'
				)
			);
			
			// Posts
			$wp_customize->add_setting(
				'zblack_post_title',
				array(
					'default'     => '#000000',
	            	'sanitize_callback' => 'zblack_sanitize_default'
				)
			);
			$wp_customize->add_setting(
				'zblack_post_title_divider',
				array(
					'default'     => '#000000',
	            	'sanitize_callback' => 'zblack_sanitize_default'
				)
			);
			$wp_customize->add_setting(
				'zblack_post_text',
				array(
					'default'     => '#242424',
	            	'sanitize_callback' => 'zblack_sanitize_default'
				)
			);
			$wp_customize->add_setting(
				'zblack_post_h',
				array(
					'default'     => '#242424',
	            	'sanitize_callback' => 'zblack_sanitize_default'
				)
			);
			
			$wp_customize->add_setting(
				'zblack_post_share_color',
				array(
					'default'     => '#000000',
	            	'sanitize_callback' => 'zblack_sanitize_default'
				)
			);
			$wp_customize->add_setting(
				'zblack_post_share_color_hover',
				array(
					'default'     => '#C39F76',
	            	'sanitize_callback' => 'zblack_sanitize_default'
				)
			);
			
			// accent
			$wp_customize->add_setting(
				'zblack_accent_color',
				array(
					'default'     => '#fff',
	            	'sanitize_callback' => 'zblack_sanitize_default'
				)
			);
			
			// Custom CSS
			$wp_customize->add_setting(
				'zblack_custom_css',
				array(
					'default'     => '',
	            	'sanitize_callback' => 'zblack_sanitize_default'
				)
			);
			
			$wp_customize->add_setting( 'zblack_docs', array(
		        'sanitize_callback' => 'sanitize_text_field',
		    ) );
		
	// Add Control
	
		// General
		
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'home_layout',
				array(
					'label'          => 'Homepage Layout',
					'section'        => 'zblack_new_section_general',
					'settings'       => 'zblack_home_layout',
					'type'           => 'radio',
					'priority'	 => 3,
					'choices'        => array(
						'full'   => 'Full Post Layout',
						'grid'  => 'Grid Post Layout',
						'full_grid'  => '1 Full Post then Grid Layout',
						'list'  => 'List Post Layout',
						'full_list'  => '1 Full Post then List Layout',
					)
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'archive_layout',
				array(
					'label'          => 'Archive Layout',
					'section'        => 'zblack_new_section_general',
					'settings'       => 'zblack_archive_layout',
					'type'           => 'radio',
					'priority'	 => 3,
					'choices'        => array(
						'full'   => 'Full Post Layout',
						'grid'  => 'Grid Post Layout',
						'full_grid'  => '1 Full Post then Grid Layout',
						'list'  => 'List Post Layout',
						'full_list'  => '1 Full Post then List Layout',
					)
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sidebar_homepage',
				array(
					'label'      => 'Disable Sidebar on Homepage',
					'section'    => 'zblack_new_section_general',
					'settings'   => 'zblack_sidebar_homepage',
					'type'		 => 'checkbox',
					'priority'	 => 4
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sidebar_post',
				array(
					'label'      => 'Disable Sidebar on Posts',
					'section'    => 'zblack_new_section_general',
					'settings'   => 'zblack_sidebar_post',
					'type'		 => 'checkbox',
					'priority'	 => 5
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sidebar_archive',
				array(
					'label'      => 'Disable Sidebar on Archives',
					'section'    => 'zblack_new_section_general',
					'settings'   => 'zblack_sidebar_archive',
					'type'		 => 'checkbox',
					'priority'	 => 6
				)
			)
		);
		
		// Header and Logo
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'upload_logo',
				array(
					'label'      => 'Upload Logo',
					'section'    => 'zblack_new_section_logo_header',
					'settings'   => 'zblack_logo',
					'priority'	 => 20
				)
			)
		);
		
		$wp_customize->add_control(
			new Customize_Number_Control(
				$wp_customize,
				'header_padding_top',
				array(
					'label'      => 'Top Header Padding',
					'section'    => 'zblack_new_section_logo_header',
					'settings'   => 'zblack_header_padding_top',
					'type'		 => 'number',
					'priority'	 => 22
				)
			)
		);
		$wp_customize->add_control(
			new Customize_Number_Control(
				$wp_customize,
				'header_padding_bottom',
				array(
					'label'      => 'Bottom Header Padding',
					'section'    => 'zblack_new_section_logo_header',
					'settings'   => 'zblack_header_padding_bottom',
					'type'		 => 'number',
					'priority'	 => 23
				)
			)
		);
		
		// Top Bar
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'topbar_social_check',
				array(
					'label'      => 'Disable Top Bar Social Icons',
					'section'    => 'zblack_new_section_topbar',
					'settings'   => 'zblack_topbar_social_check',
					'type'		 => 'checkbox',
					'priority'	 => 3
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'topbar_search_check',
				array(
					'label'      => 'Disable Top Bar Search',
					'section'    => 'zblack_new_section_topbar',
					'settings'   => 'zblack_topbar_search_check',
					'type'		 => 'checkbox',
					'priority'	 => 4
				)
			)
		);
		
		// Featured area
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'featured_slider',
				array(
					'label'      => 'Enable Featured Slider',
					'section'    => 'zblack_new_section_featured',
					'settings'   => 'zblack_featured_slider',
					'type'		 => 'checkbox',
					'priority'	 => 2
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Category_Control(
				$wp_customize,
				'featured_cat',
				array(
					'label'    => 'Select Featured Category',
					'settings' => 'zblack_featured_cat',
					'section'  => 'zblack_new_section_featured',
					'priority'	 => 3
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'featured_id',
				array(
					'label'      => 'Select featured post/page IDs',
					'section'    => 'zblack_new_section_featured',
					'settings'   => 'zblack_featured_id',
					'type'		 => 'text',
					'priority'	 => 4
				)
			)
		);
		
		$wp_customize->add_control(
			new Customize_Number_Control(
				$wp_customize,
				'featured_slider_slides',
				array(
					'label'      => 'Amount of Slides',
					'section'    => 'zblack_new_section_featured',
					'settings'   => 'zblack_featured_slider_slides',
					'type'		 => 'number',
					'priority'	 => 5
				)
			)
		);
		
		// Promo Boxes
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'promo',
				array(
					'label'      => 'Enable Promo Boxes',
					'section'    => 'zblack_new_section_promo',
					'settings'   => 'zblack_promo',
					'type'		 => 'checkbox',
					'priority'	 => 1
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'promo1_title',
				array(
					'label'      => 'Promo Box #1 Title',
					'section'    => 'zblack_new_section_promo',
					'settings'   => 'zblack_promo1_title',
					'type'		 => 'text',
					'priority'	 => 3
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'promo1_image',
				array(
					'label'      => 'Promo Box #1 Image',
					'section'    => 'zblack_new_section_promo',
					'settings'   => 'zblack_promo1_image',
					'priority'	 => 4
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'promo1_url',
				array(
					'label'      => 'Promo Box #1 URL',
					'section'    => 'zblack_new_section_promo',
					'settings'   => 'zblack_promo1_url',
					'type'		 => 'text',
					'priority'	 => 5
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'promo2_title',
				array(
					'label'      => 'Promo Box #2 Title',
					'section'    => 'zblack_new_section_promo',
					'settings'   => 'zblack_promo2_title',
					'type'		 => 'text',
					'priority'	 => 6
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'promo2_image',
				array(
					'label'      => 'Promo Box #2 Image',
					'section'    => 'zblack_new_section_promo',
					'settings'   => 'zblack_promo2_image',
					'priority'	 => 7
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'promo2_url',
				array(
					'label'      => 'Promo Box #2 URL',
					'section'    => 'zblack_new_section_promo',
					'settings'   => 'zblack_promo2_url',
					'type'		 => 'text',
					'priority'	 => 8
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'promo3_title',
				array(
					'label'      => 'Promo Box #3 Title',
					'section'    => 'zblack_new_section_promo',
					'settings'   => 'zblack_promo3_title',
					'type'		 => 'text',
					'priority'	 => 9
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'promo3_image',
				array(
					'label'      => 'Promo Box #3 Image',
					'section'    => 'zblack_new_section_promo',
					'settings'   => 'zblack_promo3_image',
					'priority'	 => 10
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'promo3_url',
				array(
					'label'      => 'Promo Box #3 URL',
					'section'    => 'zblack_new_section_promo',
					'settings'   => 'zblack_promo3_url',
					'type'		 => 'text',
					'priority'	 => 11
				)
			)
		);
		
		// Post Settings
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_thumb',
				array(
					'label'      => 'Hide Featured Image from top of Post',
					'section'    => 'zblack_new_section_post',
					'settings'   => 'zblack_post_thumb',
					'type'		 => 'checkbox',
					'priority'	 => 1
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_cat',
				array(
					'label'      => 'Hide Category',
					'section'    => 'zblack_new_section_post',
					'settings'   => 'zblack_post_cat',
					'type'		 => 'checkbox',
					'priority'	 => 2
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_date',
				array(
					'label'      => 'Hide Date',
					'section'    => 'zblack_new_section_post',
					'settings'   => 'zblack_post_date',
					'type'		 => 'checkbox',
					'priority'	 => 3
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_tags',
				array(
					'label'      => 'Hide Tags',
					'section'    => 'zblack_new_section_post',
					'settings'   => 'zblack_post_tags',
					'type'		 => 'checkbox',
					'priority'	 => 4
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_share',
				array(
					'label'      => 'Hide Share Buttons',
					'section'    => 'zblack_new_section_post',
					'settings'   => 'zblack_post_share',
					'type'		 => 'checkbox',
					'priority'	 => 5
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_share_author',
				array(
					'label'      => 'Hide Author Name',
					'section'    => 'zblack_new_section_post',
					'settings'   => 'zblack_post_share_author',
					'type'		 => 'checkbox',
					'priority'	 => 6
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_comment_link',
				array(
					'label'      => 'Hide Comment Link',
					'section'    => 'zblack_new_section_post',
					'settings'   => 'zblack_post_comment_link',
					'type'		 => 'checkbox',
					'priority'	 => 7
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_author',
				array(
					'label'      => 'Hide Author Box',
					'section'    => 'zblack_new_section_post',
					'settings'   => 'zblack_post_author',
					'type'		 => 'checkbox',
					'priority'	 => 8
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_related',
				array(
					'label'      => 'Hide Related Posts Box',
					'section'    => 'zblack_new_section_post',
					'settings'   => 'zblack_post_related',
					'type'		 => 'checkbox',
					'priority'	 => 9
				)
			)
		);
		
		// Page
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'page_share',
				array(
					'label'      => 'Hide Share Buttons',
					'section'    => 'zblack_new_section_page',
					'settings'   => 'zblack_page_share',
					'type'		 => 'checkbox',
					'priority'	 => 1
				)
			)
		);
		
		// Social Media
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'facebook',
				array(
					'label'      => 'Facebook',
					'section'    => 'zblack_new_section_social',
					'settings'   => 'zblack_facebook',
					'type'		 => 'text',
					'priority'	 => 1
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'twitter',
				array(
					'label'      => 'Twitter',
					'section'    => 'zblack_new_section_social',
					'settings'   => 'zblack_twitter',
					'type'		 => 'text',
					'priority'	 => 2
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'instagram',
				array(
					'label'      => 'Instagram',
					'section'    => 'zblack_new_section_social',
					'settings'   => 'zblack_instagram',
					'type'		 => 'text',
					'priority'	 => 3
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'pinterest',
				array(
					'label'      => 'Pinterest',
					'section'    => 'zblack_new_section_social',
					'settings'   => 'zblack_pinterest',
					'type'		 => 'text',
					'priority'	 => 4
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'bloglovin',
				array(
					'label'      => 'Bloglovin',
					'section'    => 'zblack_new_section_social',
					'settings'   => 'zblack_bloglovin',
					'type'		 => 'text',
					'priority'	 => 5
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'google',
				array(
					'label'      => 'Google Plus',
					'section'    => 'zblack_new_section_social',
					'settings'   => 'zblack_google',
					'type'		 => 'text',
					'priority'	 => 6
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'tumblr',
				array(
					'label'      => 'Tumblr',
					'section'    => 'zblack_new_section_social',
					'settings'   => 'zblack_tumblr',
					'type'		 => 'text',
					'priority'	 => 7
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'youtube',
				array(
					'label'      => 'Youtube',
					'section'    => 'zblack_new_section_social',
					'settings'   => 'zblack_youtube',
					'type'		 => 'text',
					'priority'	 => 8
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'dribbble',
				array(
					'label'      => 'Dribbble',
					'section'    => 'zblack_new_section_social',
					'settings'   => 'zblack_dribbble',
					'type'		 => 'text',
					'priority'	 => 9
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'soundcloud',
				array(
					'label'      => 'Soundcloud',
					'section'    => 'zblack_new_section_social',
					'settings'   => 'zblack_soundcloud',
					'type'		 => 'text',
					'priority'	 => 10
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'vimeo',
				array(
					'label'      => 'Vimeo',
					'section'    => 'zblack_new_section_social',
					'settings'   => 'zblack_vimeo',
					'type'		 => 'text',
					'priority'	 => 11
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'linkedin',
				array(
					'label'      => 'Linkedin (Use full URL to your Linkedin profile)',
					'section'    => 'zblack_new_section_social',
					'settings'   => 'zblack_linkedin',
					'type'		 => 'text',
					'priority'	 => 12
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'rss',
				array(
					'label'      => 'RSS Link',
					'section'    => 'zblack_new_section_social',
					'settings'   => 'zblack_rss',
					'type'		 => 'text',
					'priority'	 => 13
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'stumbleupon',
				array(
					'label'      => 'Stumbleupon (Use full URL to your Stumbleupon profile)',
					'section'    => 'zblack_new_section_social',
					'settings'   => 'zblack_stumbleupon',
					'type'		 => 'text',
					'priority'	 => 14
				)
			)
		);
		
		// Footer
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'footer_copyright',
				array(
					'label'      => 'Footer Copyright Text',
					'section'    => 'zblack_new_section_footer',
					'settings'   => 'zblack_footer_copyright',
					'type'		 => 'text',
					'priority'	 => 1
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'footer_share',
				array(
					'label'      => 'Hide Footer Share Links',
					'section'    => 'zblack_new_section_footer',
					'settings'   => 'zblack_footer_share',
					'type'		 => 'checkbox',
					'priority'	 => 2
				)
			)
		);
		
		// Colors
			
			// Top bar Colors
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'topbar_bg',
					array(
						'label'      => 'Top Bar BG',
						'section'    => 'zblack_new_section_color_topbar',
						'settings'   => 'zblack_topbar_bg',
						'priority'	 => 1
					)
				)
			);
			
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'topbar_nav_color',
					array(
						'label'      => 'Top Bar Menu Text Color',
						'section'    => 'zblack_new_section_color_topbar',
						'settings'   => 'zblack_topbar_nav_color',
						'priority'	 => 2
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'topbar_nav_color_hover',
					array(
						'label'      => 'Top Bar Menu Text Hover Color',
						'section'    => 'zblack_new_section_color_topbar',
						'settings'   => 'zblack_topbar_nav_color_hover',
						'priority'	 => 3
					)
				)
			);
			
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'drop_bg',
					array(
						'label'      => 'Dropdown BG',
						'section'    => 'zblack_new_section_color_topbar',
						'settings'   => 'zblack_drop_bg',
						'priority'	 => 4
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'drop_border',
					array(
						'label'      => 'Dropdown Border Color',
						'section'    => 'zblack_new_section_color_topbar',
						'settings'   => 'zblack_drop_border',
						'priority'	 => 5
					)
				)
			);
			
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'drop_text_color',
					array(
						'label'      => 'Dropdown Text Color',
						'section'    => 'zblack_new_section_color_topbar',
						'settings'   => 'zblack_drop_text_color',
						'priority'	 => 6
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'drop_text_hover_bg',
					array(
						'label'      => 'Dropdown Text Hover BG',
						'section'    => 'zblack_new_section_color_topbar',
						'settings'   => 'zblack_drop_text_hover_bg',
						'priority'	 => 7
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'drop_text_hover_color',
					array(
						'label'      => 'Dropdown Text Hover Color',
						'section'    => 'zblack_new_section_color_topbar',
						'settings'   => 'zblack_drop_text_hover_color',
						'priority'	 => 8
					)
				)
			);
			
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'topbar_social_color',
					array(
						'label'      => 'Top Bar Social Icons',
						'section'    => 'zblack_new_section_color_topbar',
						'settings'   => 'zblack_topbar_social_color',
						'priority'	 => 9
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'topbar_social_color_hover',
					array(
						'label'      => 'Top Bar Social Icons Hover',
						'section'    => 'zblack_new_section_color_topbar',
						'settings'   => 'zblack_topbar_social_color_hover',
						'priority'	 => 11
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'topbar_search_magnify',
					array(
						'label'      => 'Top Bar Search Magnify Color',
						'section'    => 'zblack_new_section_color_topbar',
						'settings'   => 'zblack_topbar_search_magnify',
						'priority'	 => 13
					)
				)
			);
			
			// Mobile menu
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'mobile_bg',
					array(
						'label'      => 'Mobile Menu BG Color',
						'section'    => 'zblack_new_section_mobile',
						'settings'   => 'zblack_mobile_bg',
						'priority'	 => 1
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'mobile_text',
					array(
						'label'      => 'Mobile Menu Link Color',
						'section'    => 'zblack_new_section_mobile',
						'settings'   => 'zblack_mobile_text',
						'priority'	 => 2
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'mobile_icon',
					array(
						'label'      => 'Mobile Menu Toggle Icon Color',
						'section'    => 'zblack_new_section_mobile',
						'settings'   => 'zblack_mobile_icon',
						'priority'	 => 3
					)
				)
			);
			
			// Sidebar
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'sidebar_title_bg',
					array(
						'label'      => 'Sidebar Widget Title BG',
						'section'    => 'zblack_new_section_color_sidebar',
						'settings'   => 'zblack_sidebar_title_bg',
						'priority'	 => 1
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'sidebar_title_text',
					array(
						'label'      => 'Sidebar Widget Title Text Color',
						'section'    => 'zblack_new_section_color_sidebar',
						'settings'   => 'zblack_sidebar_title_text',
						'priority'	 => 3
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'sidebar_social_icon',
					array(
						'label'      => 'Sidebar Social Icon Color',
						'section'    => 'zblack_new_section_color_sidebar',
						'settings'   => 'zblack_sidebar_social_icon',
						'priority'	 => 4
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'sidebar_social_icon_hover',
					array(
						'label'      => 'Sidebar Social Icon Hover Color',
						'section'    => 'zblack_new_section_color_sidebar',
						'settings'   => 'zblack_sidebar_social_icon_hover',
						'priority'	 => 5
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'sidebar_newsletter_bg',
					array(
						'label'      => 'Mailchimp Widget BG Color',
						'section'    => 'zblack_new_section_color_sidebar',
						'settings'   => 'zblack_sidebar_newsletter_bg',
						'priority'	 => 6
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'sidebar_newsletter_text',
					array(
						'label'      => 'Mailchimp Widget Text Color',
						'section'    => 'zblack_new_section_color_sidebar',
						'settings'   => 'zblack_sidebar_newsletter_text',
						'priority'	 => 7
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'sidebar_newsletter_button_bg',
					array(
						'label'      => 'Mailchimp Widget Button BG Color',
						'section'    => 'zblack_new_section_color_sidebar',
						'settings'   => 'zblack_sidebar_newsletter_button_bg',
						'priority'	 => 8
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'sidebar_newsletter_button_text',
					array(
						'label'      => 'Mailchimp Widget Button Text Color',
						'section'    => 'zblack_new_section_color_sidebar',
						'settings'   => 'zblack_sidebar_newsletter_button_text',
						'priority'	 => 9
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'sidebar_newsletter_button_bg_hover',
					array(
						'label'      => 'Mailchimp Widget Button BG Hover Color',
						'section'    => 'zblack_new_section_color_sidebar',
						'settings'   => 'zblack_sidebar_newsletter_button_bg_hover',
						'priority'	 => 10
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'sidebar_newsletter_button_text_hover',
					array(
						'label'      => 'Mailchimp Widget Button Text Hover Color',
						'section'    => 'zblack_new_section_color_sidebar',
						'settings'   => 'zblack_sidebar_newsletter_button_text_hover',
						'priority'	 => 11
					)
				)
			);
			
			// Footer
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'footer_bg',
					array(
						'label'      => 'Footer BG Color',
						'section'    => 'zblack_new_section_color_footer',
						'settings'   => 'zblack_footer_bg',
						'priority'	 => 1
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'footer_social',
					array(
						'label'      => 'Footer Social Icon Color',
						'section'    => 'zblack_new_section_color_footer',
						'settings'   => 'zblack_footer_social',
						'priority'	 => 2
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'footer_social_hover',
					array(
						'label'      => 'Footer Social Icon Hover Color',
						'section'    => 'zblack_new_section_color_footer',
						'settings'   => 'zblack_footer_social_hover',
						'priority'	 => 3
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'footer_social_line',
					array(
						'label'      => 'Footer Social Separator Line',
						'section'    => 'zblack_new_section_color_footer',
						'settings'   => 'zblack_footer_social_line',
						'priority'	 => 4
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'footer_copyright_color',
					array(
						'label'      => 'Footer Copyright Text Color',
						'section'    => 'zblack_new_section_color_footer',
						'settings'   => 'zblack_footer_copyright_color',
						'priority'	 => 5
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'footer_copyright_link',
					array(
						'label'      => 'Footer Copyright Link Color',
						'section'    => 'zblack_new_section_color_footer',
						'settings'   => 'zblack_footer_copyright_link',
						'priority'	 => 6
					)
				)
			);
			
			// Posts
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'post_title',
					array(
						'label'      => 'Post Title Color',
						'section'    => 'zblack_new_section_color_post_color',
						'settings'   => 'zblack_post_title',
						'priority'	 => 1
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'post_title_divider',
					array(
						'label'      => 'Post Title Divider Color',
						'section'    => 'zblack_new_section_color_post_color',
						'settings'   => 'zblack_post_title_divider',
						'priority'	 => 2
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'post_text',
					array(
						'label'      => 'Post Text Color',
						'section'    => 'zblack_new_section_color_post_color',
						'settings'   => 'zblack_post_text',
						'priority'	 => 2
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'post_h',
					array(
						'label'      => 'Post H1-H6 Color',
						'section'    => 'zblack_new_section_color_post_color',
						'settings'   => 'zblack_post_h',
						'priority'	 => 3
					)
				)
			);
			
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'post_share_color',
					array(
						'label'      => 'Post Share Link Color',
						'section'    => 'zblack_new_section_color_post_color',
						'settings'   => 'zblack_post_share_color',
						'priority'	 => 8
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'post_share_color_hover',
					array(
						'label'      => 'Post Share Link Hover Color',
						'section'    => 'zblack_new_section_color_post_color',
						'settings'   => 'zblack_post_share_color_hover',
						'priority'	 => 9
					)
				)
			);
			
			// Accent
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'accent_color',
					array(
						'label'      => 'Accent Color',
						'section'    => 'zblack_new_section_color_accent',
						'settings'   => 'zblack_accent_color',
						'priority'	 => 1
					)
				)
			);
			
			// Custom CSS
			$wp_customize->add_control(
				new Customize_CustomCss_Control(
					$wp_customize,
					'custom_css',
					array(
						'label'      => 'Custom CSS',
						'section'    => 'zblack_new_section_custom_css',
						'settings'   => 'zblack_custom_css',
						'type'		 => 'custom_css',
						'priority'	 => 1
					)
				)
			);

			$wp_customize->add_control(
		        new ZBlack_Customize_Control(
		            $wp_customize,
		            'zblack_docs',
		            array(
		                'label'      => esc_html__( 'ZBlack Theme.', 'zblack' ),
		                'description'   => '<span>Say Hello,</span><span>We are ZThemes Team.</span><span><a class="zblack-help-sp" target="_blank" href="//zthemes.net/">View Portfolio</a></span><span><a class="zblack-help-sp" target="_blank" href="//zthemes.net/themes/black">Docs & Details</a></span><span><a class="zblack-help-sp" target="_blank" href="//zthemes.net/contact">Support here</a></span><span>Thanks for purchasing my item!</span>',
		                'section'    => 'zblack_help',
		            )
		        )
			);
 
}

add_action( 'customize_register', 'zblack_register_theme_customizer' );

function zblack_customizer_load_css(){
    wp_enqueue_style( 'zblack-customizer', get_template_directory_uri() . '/css/customizer.css' );
}
add_action('customize_controls_print_styles', 'zblack_customizer_load_css');

?>