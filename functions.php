<?php

// Set Content Width
if ( ! isset( $content_width ) )
	$content_width = 1080;

// Theme set up
add_action( 'after_setup_theme', 'zblack_theme_setup' );
if ( !function_exists('zblack_theme_setup') ) {

	function zblack_theme_setup() {
	
		// Register navigation menu
		register_nav_menus(
			array(
				'main-menu' => 'Primary Menu',
			)
		);
		
		// Localization support
		load_theme_textdomain('zblack', get_template_directory() . '/lang');
		add_theme_support( "title-tag" );
		add_theme_support( 'automatic-feed-links' );

		// Post formats
		add_theme_support( 'post-formats', array( 'gallery', 'video', 'audio' ) );
		
		// Featured image
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'full-thumb', 1080, 0, true );
		add_image_size( 'slider-thumb', 1080, 530, true );
		add_image_size( 'misc-thumb', 520, 400, true );

		// Woocommerce
		add_theme_support('woocommerce');

		// Remove sidebar on Products page
		remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
	}

}

/*** WooCommerce settings ***/

// Change number related products
add_filter( 'woocommerce_output_related_products_args', 'zblack_jk_related_products_args' );
  function zblack_jk_related_products_args( $args ) {
	$args['posts_per_page'] = 3; // 4 related products
	$args['columns'] = 3; // arranged in 2 columns
	return $args;
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'zblack_loop_columns');
if (!function_exists('zblack_loop_columns')) {
	function zblack_loop_columns() {
		return 3;
	}
}

// Remove woocommerce breadcrumb
add_action( 'init', 'zblack_jk_remove_wc_breadcrumbs' );
function zblack_jk_remove_wc_breadcrumbs() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}


// Register & enqueue styles/scripts
add_action( 'wp_enqueue_scripts','zblack_load_scripts' );
function zblack_load_scripts() {

	// Register scripts and styles
	wp_enqueue_style('zblack-style', esc_url(get_template_directory_uri() . '/style.css'));
	wp_enqueue_style('jquery-bxslider', esc_url(get_template_directory_uri() . '/css/jquery.bxslider.css'));
	wp_enqueue_style('font-awesome-css', esc_url(get_template_directory_uri() . '/css/font-awesome.min.css'));

	wp_enqueue_script('fitvids', get_template_directory_uri() . '/js/fitvids.js', array('jquery'), false, true);
	wp_enqueue_script('slicknav', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), false, true);
	wp_enqueue_script('bxslider', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array('jquery'), false, true);
    wp_enqueue_script('zblack-scripts', get_template_directory_uri() . '/js/zblack.js', array('jquery'), false, true);

	// Fonts
	wp_enqueue_style('default_body_font', 'https://fonts.googleapis.com/css?family=Lato');
	wp_enqueue_style('default_heading_font', 'http://fonts.googleapis.com/css?family=Montserrat:400,700');
	
	if (is_singular() && get_option('thread_comments'))	wp_enqueue_script('comment-reply');
	
}

// Theme Options
require get_template_directory() . '/inc/customizer/zblack_custom_controller.php';
require get_template_directory() . '/inc/customizer/zblack_customizer_settings.php';
require get_template_directory() . '/inc/customizer/zblack_customizer_style.php';

// Widgets
require get_template_directory() . '/inc/widgets/about_widget.php';
require get_template_directory() . '/inc/widgets/post_widget.php';
require get_template_directory() . '/inc/widgets/social_widget.php';
require get_template_directory() . '/inc/widgets/facebook_widget.php';

// Register widgets
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => 'Sidebar',
		'id' => 'sidebar-1',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	));
	register_sidebar(array(
		'name' => 'Instagram Footer',
		'id' => 'sidebar-2',
		'before_widget' => '<div id="%1$s" class="instagram-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="instagram-title">',
		'after_title' => '</h4>',
		'description' => 'Use the "Instagram" widget here. IMPORTANT: For best result set number of photos to 8.',
	));
}

// COMMENTS LAYOUT
function zblack_comments($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;
		
	?>
	<li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
			
		<div class="thecomment">
						
			<div class="author-img">
				<?php echo get_avatar($comment,$args['avatar_size']); ?>
			</div>
				
			<div class="comment-text">
				<span class="reply">
					<?php comment_reply_link(array_merge( $args, array('reply_text' => __('Reply', 'zblack'), 'depth' => $depth, 'max_depth' => $args['max_depth'])), $comment->comment_ID); ?>
					<?php edit_comment_link(__('Edit', 'zblack')); ?>
				</span>
				<h6 class="author"><?php echo get_comment_author_link(); ?></h6>
				<span class="date"><?php printf(__('%1$s at %2$s', 'zblack'), get_comment_date(),  get_comment_time()) ?></span>
				<?php if ($comment->comment_approved == '0') : ?>
					<em><i class="icon-info-sign"></i> <?php _e('Comment awaiting approval', 'zblack'); ?></em>
					<br />
				<?php endif; ?>
				<?php comment_text(); ?>
			</div>
						
		</div>
			
	</li>

	<?php 
}

// PAGINATION
function zblack_pagination() {
	
	?>
	<div class="pagination">
		<div class="older"><?php next_posts_link(__( 'Older Posts →', 'zblack')); ?></div>
		<div class="newer"><?php previous_posts_link(__( '← Newer Posts', 'zblack')); ?></div>
	</div>		
	<?php

}

// PREVENT SCROLL ON READ MORE LINK
function remove_more_link_scroll( $link ) {
	$link = preg_replace( '|#more-[0-9]+|', '', $link );
	return $link;
}
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );

// AUTHOR SOCIAL LINKS
function zblack_contactmethods( $contactmethods ) {
	$contactmethods['twitter']   = 'Twitter Username';
	$contactmethods['facebook']  = 'Facebook Username';
	$contactmethods['google']    = 'Google Plus Username';
	$contactmethods['tumblr']    = 'Tumblr Username';
	$contactmethods['instagram'] = 'Instagram Username';
	$contactmethods['pinterest'] = 'Pinterest Username';
	return $contactmethods;
}
add_filter('user_contactmethods','zblack_contactmethods',10,1);

// TITLE TAG
function zblack_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() ) {
		return $title;
	}

	// Add the site name.
	$title .= get_bloginfo( 'name', 'display' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	}

	// Add a page number if necessary.
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
		$title = "$title $sep " . sprintf( __( 'Page %s', 'zblack' ), max( $paged, $page ) );
	}

	return $title;
}
add_filter( 'wp_title', 'zblack_wp_title', 10, 2 );

// TWITTER AMPERSAND ENTITY DECODE
function zblack_social_title( $title ) {
    $title = html_entity_decode( $title );
    $title = urlencode( $title );
    return $title;
}

// THE EXCERPT
function custom_excerpt_length( $length ) {
	return 200;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function zblack_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	
	if(count($words) > $word_limit) {
		array_pop($words);
	}
	
	return implode(' ', $words);
}

require get_template_directory() . '/inc/class-tgm-plugin-activation.php';
add_action('tgmpa_register', 'zblack_register_required_plugins');
function zblack_register_required_plugins()
{
	$plugins = array(
		array(
			'name'     				=> esc_html__('Vafpress Post Formats UI','zblack'),
			'slug'     				=> 'vafpress-post-formats-ui-develop',
			'source'   				=> esc_url('https://zthemes.net/wp-content/uploads/2017/01/vafpress-post-formats-ui-develop.zip'),
			'required' 				=> true,
			'version' 				=> '1.5',
			'force_activation' 		=> false,
			'force_deactivation' 	=> false,
			'external_url' 			=> ''
		),
    	array(
			'name'     				=> esc_html__('WP Instagram Widget','zblack'),
			'slug'     				=> 'wp-instagram-widget',
			'required' 				=> false,
			'force_activation' 		=> false,
			'force_deactivation' 	=> false,
			'external_url' 			=> ''
		),
		array(
			'name'     				=> esc_html__('Contact Form 7','zblack'),
			'slug'     				=> 'contact-form-7',
			'required' 				=> false,
			'version' 				=> '',
			'force_activation' 		=> false,
			'force_deactivation' 	=> false,
			'external_url' 			=> ''
		),
		array(
			'name'     				=> esc_html__('MailChimp for WordPress Lite','zblack'),
			'slug'     				=> 'mailchimp-for-wp',
			'required' 				=> false,
			'version' 				=> '',
			'force_activation' 		=> false,
			'force_deactivation' 	=> false,
			'external_url' 			=> ''
		),
		array(
			'name'     				=> esc_html__('Regenerate Thumbnails','zblack'),
			'slug'     				=> 'regenerate-thumbnails',
			'required' 				=> false,
			'version' 				=> '',
			'force_activation' 		=> false,
			'force_deactivation' 	=> false,
			'external_url' 			=> ''
		)
	);

	$config = array(
		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => true,                    // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to out
	);
	tgmpa($plugins, $config);
}