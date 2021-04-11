<?php

register_nav_menus(
	array(
		'menu-1' => __( 'Primary', 'twentysixteen' ),
		'menu-2'  => __( 'Footer', 'twentysixteen' ),
        'menu-3'  => __( 'Social', 'twentysixteen' ),
	)
);

add_theme_support( 'post-thumbnails' );

function blue_owl_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'twentysixteen' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer left', 'twentysixteen' ),
		'id'            => 'sidebar-footer',
		'description'   => esc_html__( 'Footer area', 'twentysixteen' ),
		'before_widget' => '<div id="%1$s" class="col-lg-4 col-md-6 col-12 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>	<ul class="footer-contact"></ul>',
	) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer center', 'twentysixteen' ),
        'id'            => 'sidebar-footer1',
        'description'   => esc_html__( 'Footer area', 'twentysixteen' ),
        'before_widget' => '<div id="%1$s" class="col-lg-4 col-md-6 col-12 %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>   <ul class="footer-contact"></ul>',
    ) );
}
add_action( 'widgets_init', 'blue_owl_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function blue_owl_scripts() {
	wp_enqueue_style( 'blue-owl-style', get_stylesheet_uri() );
	wp_enqueue_style( 'blue-owl-bootstrap', get_stylesheet_directory_uri() . '/assets/style/bootstrap.min.css' );
	wp_enqueue_style( 'blue-owl-carousel', get_stylesheet_directory_uri() . '/assets/style/owl.carousel.min.css' );
	wp_enqueue_style( 'blue-owl-theme', get_stylesheet_directory_uri() . '/assets/style/owl.theme.default.min.css' );
	wp_enqueue_style( 'blue-owl-main', get_stylesheet_directory_uri() . '/assets/style/main.css' );
  
    wp_enqueue_script('jQuery');
 	wp_enqueue_script( 'blue-owl-jQuery', get_stylesheet_directory_uri() . '/assets/js/jquery-3.2.1.min.js', array(), '20151215', true );
	wp_enqueue_script( 'blue-owl-owl-carousel', get_stylesheet_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '20151215', true );
    wp_enqueue_script( 'blue-owl-main', get_stylesheet_directory_uri() . '/assets/js/main.js', array(), '20151215', true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'blue_owl_scripts' );
function font_awesome() {
  if (!is_admin()) {
    wp_register_style('font-awesome', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css');
    wp_enqueue_style('font-awesome');
  }
}
add_action('wp_enqueue_scripts', 'font_awesome');

function create_post_type() {
    $labels = array(
        'name'                  => _x( 'Sliders', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Slider', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Sliders', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Slider', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'add_new_item'          => __( 'Add New Slider', 'textdomain' ),
        'new_item'              => __( 'New Slider', 'textdomain' ),
        'edit_item'             => __( 'Edit Slider', 'textdomain' ),
        'view_item'             => __( 'View Slider', 'textdomain' ),
        'all_items'             => __( 'All Sliders', 'textdomain' ),
        'search_items'          => __( 'Search Sliders', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Sliders:', 'textdomain' ),
        
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'slider' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'menu_icon'          => 'dashicons-format-image',
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail'),
    );
 
    register_post_type( 'book', $args );
}
 
add_action( 'init', 'create_post_type' );


function create_new_post_type() {
    $labels = array(
        'name'                  => _x( 'Portfolio', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Portfolio', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Portfolio', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Portfolio', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'portfolio' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'menu_icon'          => 'dashicons-admin-home',
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail'),
    );
 
    register_post_type( 'portfolio', $args );
}
 
add_action( 'init', 'create_new_post_type' );

function create_news_post() {
    $labels = array(
        'name'                  => _x( 'News', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'News', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'News', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'News', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'news' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'menu_icon'          => 'dashicons-admin-customizer',
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail'),
    );
 
    register_post_type( 'news', $args );
}
 
add_action( 'init', 'create_news_post' ); 


///metabox

function wph_add_metabox(){
    add_meta_box('before_publish', 'Benefits', 
    'wph_metabox_title', 'page', 'side', 'high');
}
function wph_metabox_title() { ?>
    <h2>RESPONSIVE DESIGN</h2>
    <p>I am so clever that sometimes I do not understand a single word of what I am saying and get very confused.</p>

<?php }
add_action('add_meta_boxes', 'wph_add_metabox');
//
