<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
  '/pagination.php',                      // Custom pagination for this theme.
  '/my-pagination.php',                   // My personal pagination for the foundry theme
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
);

foreach ( $understrap_includes as $file ) {
	$filepath = locate_template( '/inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}

/*
     * Creating a function to create our Works
     */
    
	 function custom_Works_type() {
        
        // Set UI labels for Custom Post Type
        $labels = array(
                        'name'                => _x( 'Works', 'Post Type General Name', 'foundry' ),
                        'singular_name'       => _x( 'Work', 'Post Type Singular Name', 'foundry' ),
                        'menu_name'           => __( 'Works', 'foundry' ),
                        'parent_item_colon'   => __( 'Parent Destination', 'foundry' ),
                        'all_items'           => __( 'All Works', 'foundry' ),
                        'view_item'           => __( 'View Works', 'foundry' ),
                        'add_new_item'        => __( 'Add New Works', 'foundry' ),
                        'add_new'             => __( 'Add New', 'foundry' ),
                        'edit_item'           => __( 'Edit Works', 'foundry' ),
                        'update_item'         => __( 'Update Works', 'foundry' ),
                        'search_items'        => __( 'Search Works', 'foundry' ),
                        'not_found'           => __( 'Not Found', 'foundry' ),
                        'not_found_in_trash'  => __( 'Not found in Trash', 'foundry' ),
                        );
        
        // Set other options for Custom Post Type
        
        $args = array(
                      'label'               => __( 'Works' ),
                      'description'         => __( 'Work of our portfolio'),
                      'labels'              => $labels,
                      // Features this CPT supports in Post Editor
                      'supports'            => array( 'title', 'editor', 'thumbnail','custom-fields'),

                      'taxonomies'          => array( 'category' ),
                   
                      /* A hierarchical CPT is like Pages and can have
                       * Parent and child items. A non-hierarchical CPT
                       * is like Posts.
                       */
                      'hierarchical'        => false,
                      'public'              => true,
                      'show_ui'             => true,
                      'show_in_menu'        => true,
                      'show_in_nav_menus'   => true,
                      'show_in_admin_bar'   => true,
                      'menu_position'       => 5,
                      'menu_icon'           => 'dashicons-portfolio',
                      'can_export'          => true,
                      'has_archive'         => true,
                      'exclude_from_search' => false,
                      'publicly_queryable'  => true,
                      'capability_type'     => 'post',
                      );
        
        // Registering your Custom Post Type
        register_post_type( 'works_post', $args );
        
    }
    
    /* Hook into the 'init' action so that the function
     * Containing our post type registration is not
     * unnecessarily executed.
     */
    
    add_action( 'init', 'custom_Works_type', 0 );



/*--------------------------addsvg----------------------------------------------*/
add_filter( 'upload_mimes', 'custom_upload_mimes' );
function custom_upload_mimes( $existing_mimes = array() ) {
  // Add the file extension to the array
  $existing_mimes['svg'] = 'image/svg+xml';
  return $existing_mimes;
}
/*-------------------------------------------------------------------------------*/


// ============== ajax handler to load more works =====
function my_loadmore_ajax_handler(){
 
	// prepare our arguments for the query
	$args = json_decode( stripslashes( $_POST['query'] ), true );
	$args['paged'] = $_POST['page'] + 1; // we need next page to be loaded
  $args['post_status'] = 'publish';
  $args['post_type'] = 'works_post';
  // $args['cat'] = ''
 
	// it is always better to use WP_Query but not here
	$works = query_posts( $args );
 
	if( have_posts() ) :
 
		// run the loop
    while( have_posts() ): the_post();

        $cat = get_the_category(); // array of object of WP_Term
        $postCat = $cat[0]; // object WP_Term for the current post
        
        $thumbnail_id  = get_post_thumbnail_id($works->ID);
				$thumbnail_alt = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true );
				$image = wp_get_attachment_image_src( $thumbnail_id,'large' ); 
    ?>

			
    <a href="<?php echo get_permalink() ?>" class="ajax-call new-loaded <?php echo $postCat->cat_name ?> "><article class="work-box" <?php echo $postCat->slug ?>"  >

    <div class="hovereffect">
      <img src="<?php echo $image[0]; ?>" alt="<?php echo $thumbnail_alt ?>" class="img-fluid" >
      <div class="overlay">
        <p class="work-cat"><?php echo $postCat->slug ?></p>
        <h2 class="work-title" ><?php the_title(); ?></h2>
        <p class="work-description info"><?php echo get_field('description')?></p>
      </div>
    </div>

  </article></a><!-- article.work-box -->
 <?php
 
		endwhile;
 
	endif;
	die; // here we exit the script and even no wp_reset_query() required!
}
add_action('wp_ajax_loadmore', 'my_loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore', 'my_loadmore_ajax_handler'); // wp_ajax_nopriv_{action}


// ============ Rename Post to Insight ============

function revcon_change_post_label() {
  global $menu;
  global $submenu;
  $menu[5][0] = 'Insights';
  $submenu['edit.php'][5][0] = 'Insights';
  $submenu['edit.php'][10][0] = 'Add Insight';
  $submenu['edit.php'][16][0] = 'Insights Tags';
}
function revcon_change_post_object() {
  global $wp_post_types;
  $labels = &$wp_post_types['post']->labels;
  $labels->name = 'Insights';
  $labels->singular_name = 'Insight';
  $labels->add_new = 'Add Insights';
  $labels->add_new_item = 'Add Insights';
  $labels->edit_item = 'Edit Insight';
  $labels->new_item = 'Insights';
  $labels->view_item = 'View Insights';
  $labels->search_items = 'Search Insights';
  $labels->not_found = 'No Insights found';
  $labels->not_found_in_trash = 'No Insights found in Trash';
  $labels->all_items = 'All Insights';
  $labels->menu_name = 'Insights';
  $labels->name_admin_bar = 'Insights';
}

add_action( 'admin_menu', 'revcon_change_post_label' );
add_action( 'init', 'revcon_change_post_object' );

