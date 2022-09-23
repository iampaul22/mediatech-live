<?php

/**
 * buddyboss-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package BuddyBoss_Theme
 */
$init_file = get_template_directory() . '/inc/init.php';

if ( ! file_exists( $init_file ) ) {
	$err_msg = __( 'Could not load the starter file!', 'buddyboss-theme' );
	wp_die( esc_html( $err_msg ) );
}

require_once $init_file;

/**
 * Theme Global Function Caller Helper.
 *
 * @return \BuddyBossTheme\BaseTheme
 */
function buddyboss_theme() {
	return \BuddyBossTheme\BaseTheme::instance();
}

buddyboss_theme(); // Instantiate.


/************* Theme Activation **************/

require_once locate_template( '/inc/theme-activation.php' );

/**
 * Register the required plugins for this theme.
 */

add_action( 'bbta_register', 'buddyboss_theme_register_required_plugins' );

if ( ! function_exists( 'buddyboss_theme_register_required_plugins' ) ) {
	function buddyboss_theme_register_required_plugins() {

		/**
		 * Array of plugin arrays. Required keys are name and slug.
		 * If the source is NOT from the .org repo, then source is also required.
		 */
		$plugins = array();

		/**
		 * Array of configuration settings. Amend each line as needed.
		 * If you want the default strings to be available under your own theme domain,
		 * leave the strings uncommented.
		 * Some of the strings are added into a sprintf, so see the comments at the
		 * end of each line for what each argument will be.
		 */
		$config = array(
			'domain'       => 'buddyboss-theme',
			// Text domain - likely want to be the same as your theme.
			'default_path' => '',
			// Default absolute path to pre-packaged plugins
			'parent_slug'  => 'themes.php',
			// Default parent URL slug
			'menu'         => 'install-required-plugins',
			// Menu slug
			'has_notices'  => true,
			// Show admin notices or not
			'is_automatic' => false,
			// Automatically activate plugins after installation or not
			'message'      => '',
			// Message to output right before the plugins table
			'strings'      => array(
				'page_title'                      => __( 'Install Required Plugins', 'buddyboss-theme' ),
				'menu_title'                      => __( 'Install Plugins', 'buddyboss-theme' ),
				'installing'                      => __( 'Installing Plugin: %s', 'buddyboss-theme' ),
				// %1$s = plugin name
				'oops'                            => __( 'Something went wrong with the plugin API.', 'buddyboss-theme' ),
				'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'buddyboss-theme' ),
				// %1$s = plugin name(s)
				'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'buddyboss-theme' ),
				// %1$s = plugin name(s)
				'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'buddyboss-theme' ),
				// %1$s = plugin name(s)
				'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'buddyboss-theme' ),
				// %1$s = plugin name(s)
				'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'buddyboss-theme' ),
				// %1$s = plugin name(s)
				'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'buddyboss-theme' ),
				// %1$s = plugin name(s)
				'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'buddyboss-theme' ),
				// %1$s = plugin name(s)
				'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'buddyboss-theme' ),
				// %1$s = plugin name(s)
				'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'buddyboss-theme' ),
				'activate_link'                   => _n_noop( 'Activate installed plugin', 'Activate installed plugins', 'buddyboss-theme' ),
				'return'                          => __( 'Return to Required Plugins Installer', 'buddyboss-theme' ),
				'plugin_activated'                => __( 'Plugin activated successfully.', 'buddyboss-theme' ),
				'complete'                        => __( 'All plugins installed and activated successfully. %s', 'buddyboss-theme' ),
				// %1$s = dashboard link
				'nag_type'                        => __( 'updated', 'buddyboss-theme' ),
				// Determines admin notice type - can only be 'updated' or 'error'
			),
		);

		bbta( $plugins, $config );

	}
}

if ( ! function_exists( 'wp_body_open' ) ) {

	/**
	 * Shim for wp_body_open, ensuring backward compatibility with versions of WordPress older than 5.2.
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
}

/**
 * Load deprecated functions.
 */
require_once trailingslashit( get_template_directory() ) . 'inc/core/deprecated/deprecated-filters.php';
require_once trailingslashit( get_template_directory() ) . 'inc/core/deprecated/deprecated-hooks.php';
require_once trailingslashit( get_template_directory() ) . 'inc/core/deprecated/deprecated-functions.php';

/*  17-02-2022 */

add_shortcode('custom_share', 'custom_share_function'); 

add_shortcode('custom_feed', 'custom_feed_function');
function custom_feed_function(){
	echo '123'; ?>

	<?php bp_nouveau_before_activity_directory_content(); ?>

	<?php if ( is_user_logged_in() ) : ?>
		<?php bp_get_template_part( 'activity/post-form' ); ?>
	<?php endif; ?>

	<?php bp_nouveau_template_notices(); ?>

	<?php if ( ! bp_nouveau_is_object_nav_in_sidebar() ) : ?>

		<div class="flex actvity-head-bar">
			<?php bp_get_template_part( 'common/nav/directory-nav' ); ?>
			<?php bp_get_template_part( 'common/search-and-filters-bar' ); ?>
		</div>

	<?php endif; ?>

	<div class="screen-content">

		<?php bp_nouveau_activity_hook( 'before_directory', 'list' ); ?>

		<div id="activity-stream" class="activity" data-bp-list="activity">

				<div id="bp-ajax-loader"><?php bp_nouveau_user_feedback( 'directory-activity-loading' ); ?></div>

		</div><!-- .activity -->

		<?php bp_nouveau_after_activity_directory_content(); ?>

	</div><!-- // .screen-content -->
	<?php 
} 


add_shortcode('bp_custom_search','function_custom_search');
function function_custom_search(){
	ob_start();
?>
<style type="text/css">
	form.search-form {
    display: none !important;
}
#text-11 form.search-form {
    display: block !important;
}
</style>
<form role="search" method="get" class="search-form" action="https://mediatech.ventures/" data-hs-cf-bound="true">
	<label>
		<span class="screen-reader-text">Search for:</span>
		<input type="search" class="search-field-top" placeholder="Search" value="" name="s">
	</label>
<input type="hidden" name="bp_search" value="1"><input type="hidden" name="view" value="content"></form>
<?php 
return ob_get_flush(); 
wp_reset_query();
}

/* Perks Functionality */

/*------------------------------------*\
	Custom Post Types Perks
\*------------------------------------*/
// Create Custom Post type for a Demo, called perks-category

function post_type_perk(){
	
	$singular = 'Perk';
	$plural = 'Perks';


$labels = array(
	'name' 					=> $plural,
	'singular_name' 		=> $singular,
	'add_name' 				=> 'Add New'. $singular,
	'add_new_item'			=> 'Add New' . $singular,
	'edit' 					=> 'Edit'. $singular,
	'edit_item'				=> 'Edit' . $singular,
    'view' 					=> 'view'. $singular,
	'view_item' 			=> 'View' . $singular,	
	'search_term' 			=> 'Search' . $plural,
	'parent' 				=> 'Parent' . $singular,
	'not_found' 			=> 'No' . $plural .'found',
	'not_found_in_trash'	=> 'No' . $plural .'found in trash',

);


$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'perks' ),
		'menu_icon'          => 'dashicons-filter',
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => 1,
		'supports'           => array( 'title',  'thumbnail' , 'editor', 'excerpt' )
	);

register_post_type('perks-post', $args);


}

add_action('init','post_type_perk');


//Category

function register_taxonomy_perks_category(){

	$singular = 'Perk Category';
	$plural = 'Perks Category';


$labels = array(
		'name'                       => $plural,
		'singular_name'              => $singular,
		'search_items'               => 'Search' .$plural ,
		'popular_items'              => 'Popular' .$plural ,
		'all_items'                  => 'All' .$plural ,
		'parent_item'                =>  null,
		'parent_item_colon'          =>  null,
		'edit_item'                  => 'Edit' .$singular ,
		'update_item'                => 'Update' .$singular ,
		'add_new_item'               => 'Add' .$singular ,
		'new_item_name'              => 'New' .$singular. 'Name',
		'separate_items_with_commas' => 'separate' .$singular. 'With commas',
		'add_or_remove_items'        => 'Add or Remove' .$plural ,
		'choose_from_most_used'      => 'choose from most used' .$plural ,
		'not_found'                  => 'No' . $plural .'found',
		'menu_name'                  => $plural,
	);


 $args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'perks-category' ),
	);

register_taxonomy( 'perks-category', 'perks-post', $args );
}

add_action('init','register_taxonomy_perks_category');


//Tag

function register_taxonomy_perks_tag(){

	$singular = 'Perk Tag';
	$plural = 'Perks Tag';


$labels = array(
		'name'                       => $plural,
		'singular_name'              => $singular,
		'search_items'               => 'Search' .$plural ,
		'popular_items'              => 'Popular' .$plural ,
		'all_items'                  => 'All' .$plural ,
		'parent_item'                =>  null,
		'parent_item_colon'          =>  null,
		'edit_item'                  => 'Edit' .$singular ,
		'update_item'                => 'Update' .$singular ,
		'add_new_item'               => 'Add' .$singular ,
		'new_item_name'              => 'New' .$singular. 'Name',
		'separate_items_with_commas' => 'separate' .$singular. 'With commas',
		'add_or_remove_items'        => 'Add or Remaove' .$plural ,
		'choose_from_most_used'      => 'choose from most used' .$plural ,
		'not_found'                  => 'No' . $plural .'found',
		'menu_name'                  => $plural,
	);


 $args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'perks-tag' ),
	);

register_taxonomy( 'perks-tag', 'perks-post', $args );
}

add_action('init','register_taxonomy_perks_tag');


/* shortcode for Perks functionality */

function wpb_demo_shortcode() { ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<style>

body {
  margin: 0;
  background: #f5f5f5;
  font-family: "Poppins", sans-serif;
  line-height: 2em;
}

.content-wrapper .row {
    /*display: flex;
    flex-direction: row;*/
    flex-wrap: wrap;
}
.content-wrapper .col {
    /*display: flex;
    width: 50%;
    max-width: 50%;
    margin-bottom: 20px;*/
    flex: 0 0 50%;
}


.wrapper {
  max-width: 100%;
  margin: 0 auto;
  margin-top: 80px;
}
.tab-image img {
    width: 100%;
    max-width: 100%;
    height: 343px;
    object-fit: cover;
    border-radius: 10px!important;
}
.tab-wrapper {
  text-align: center;
  display: block;
  margin: auto;
  max-width: 780px;
}

.tabs {
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
}

.tab-link {
  margin: 0 auto;
  list-style: none;
  padding: 15px;
  color: black;
  cursor: pointer;
  font-weight: 300;
  transition: all ease 0.5s;
  border-bottom: solid 3px rgba(255, 255, 255, 0);
  letter-spacing: 1px;
  width: 110px;
}

.tab-link:hover {
    color: black;
    border-color: black;
}

.tab-link.active {
  color: #333;
  border-color: #333;
}

.tab-link:nth-of-type(1).active {
    color: black;
    border-color: black;
    font-weight: bold;
}

.tab-link:nth-of-type(2).active {
    color: black;
    border-color: black;
    font-weight: bold;
}

.tab-link:nth-of-type(3).active {
    color: black;
    border-color: black;
    font-weight: bold;
}
.tab-content {
  display: none;
  text-align: center;
  color: #888;
  font-weight: 300;
  font-size: 15px;
  opacity: 0;
  transform: translateY(15px);
  animation: fadeIn 0.5s ease 1 forwards;
}
.content-wrapper .col {
    display: flex;
    width: 100%;
    max-width: 100%;
    margin-bottom:20px;
}
li.tab-link.active {
	background-color: #b11d1d;
    color: white !important;
    font-weight: bold !important;
    box-shadow: 0px 3px 6px rgb(0 0 0 / 25%);
    width: 160px;
}
.tab-content.active {
  display: block;
}
.content-wrapper .row {
    display: flex;
    flex-direction: row;
}
.tab-text h1 {
	font-size: 24px;
    color: black;
    text-align: center;
    position: relative;
    text-transform: uppercase;
    font-family: Montserrat, sans-serif;
    font-weight: 700;
    font-style: normal;
    margin-bottom: 0px;
    
}
.tab-text {
    width: 100%;
    max-width: 100%;
}

.tab-text p {
	font-size: 16px;
    width: 100%;
    color: #4D5C6D;
    font-family: "Open Sans", sans-serif;
    font-weight: 400;
    font-style: normal;
    max-width: 100%;
    margin-bottom: 5px;
}



.tab-text a {
	font-size: 14px;
    text-decoration: none;
    font-family: "Open Sans", sans-serif;
    font-weight: 400;
    font-style: normal;
    color: #e21f28 !important;
}

.tab-text h5 {
    font-size: 14px;
    text-decoration: none;
    color: red;
    font-weight: 300;
    /* margin-bottom: -20px; */
}

.tab-text h4 {
    font-size: 12px;
    color: black;
    font-family: "Open Sans", sans-serif;
    font-weight: 400;
    font-style: normal;
}
.tab-register a {
    font-size: 14px;
    text-decoration: none;
    font-family: "Open Sans", sans-serif;
    font-weight: 400;
    font-style: normal;
    color: #e21f28 !important;
}

.tab-register {
    margin-top: 15px;
}

p.tab-connect a {color: #000 !important;font-size: 12px;font-family: "Open Sans", sans-serif;
    font-weight: 400;
    font-style: normal;}

p.tab-connect {
    font-size: 12px;
	margin-top:-5px;
}



.tab-text h3 {
	font-size: 14px;
    font-family: "Open Sans", sans-serif;
    font-weight: 400;
    font-style: normal;
    color: #000000;
    margin-bottom: 0;
}

.tab-text h2 {
    font-size: 14px;
    color: black;
    font-weight: 300;
}

.tab-text button {
	font-weight: 300;
    background: #524949;
    max-width: 100%;
    border-radius: 10px;
    padding-left: 30px;
    padding-right: 30px;
    padding-top: 10px;
    padding-bottom: 10px;
    text-transform: uppercase;
    width: 80%;
    color: #fff;
    background-color: #32373c;
    box-shadow: none;
    cursor: pointer;
    display: inline-block;
    font-size: 1.125em;
    text-align: center;
    text-decoration: none;
    word-break: break-word;
    box-sizing: border-box;
}
.tab-register a {
    font-size: 14px;
    text-decoration: none;
    font-family: "Open Sans", sans-serif;
    font-weight: 400;
    font-style: normal;
    color: #e21f28 !important;
}
.tab-register {
    margin-top: 20px;
}
.content-wrapper {
    margin-top: 70px;
}

@keyframes fadeIn {
  100% {
    opacity: 1;
    transform: none;
  }
}

</style>
<body>
    <section class="custom-tab-section">  
    <div class="wrapper">
        <div class="tab-wrapper">
            <ul class="tabs">
            	<?php 
	            	$args = array(
					     'taxonomy' => 'perks-tag',
					        'orderby' => 'name',
					        'order'   => 'ASC'
					);


					$tags = get_tags($args);
					foreach ( $tags as $tag2 ) :
            	?>
                    <li class="tab-link" data-tab="<?php echo $tag2->term_id; ?>"><?php echo $tag2->name; ?></li>
                    <!-- <li class="tab-link" data-tab="2">Tab 2</li>
                    <li class="tab-link" data-tab="3">Tab 3</li>
                    <li class="tab-link" data-tab="4">Tab 4</li>
                    <li class="tab-link" data-tab="5">Tab 5</li> -->
                    <?php endforeach; ?>
            </ul>
        </div>
    
        <div class="content-wrapper">
    <?php foreach ( $tags as $tag2 ) :?>
            <div id="tab-<?php echo $tag2->term_id; ?>" class="tab-content">
                <div class="tab-row-content">
                    <div class="container">
                    <div class="row">
                    	<?php 
                    	$code = array( 'post_type' => 'perks-post',
	                    'posts_per_page' =>-1,
	                    'tax_query' => array(
					        array(
					            'taxonomy'  => 'perks-tag',
					            'field'     => 'term_id',
					            'terms'     => $tag2->term_id,
					        )
					    ),
	                );
                   

                   $loop1 = new WP_Query( $code );
                  // echo '<pre>';print_r($loop1->post->ID);echo '</pre>';
				   if ( $loop1->have_posts() ):
					 while ( $loop1->have_posts() ) : $loop1->the_post();
					 	$myimage = get_the_post_thumbnail_url($loop1->post->ID, 'full');
					 	$learn_more_url = get_post_meta($loop1->post->ID, 'learn_more_url', true );
					 	$register_url = get_post_meta($loop1->post->ID, 'register_url', true );
					 	$Connect_with_specialist_field = get_post_meta($loop1->post->ID, 'Connect_with_specialist_field', true );
                        $if_need_code = get_post_meta($loop1->post->ID, 'if_need_code', true );
                    	?>
                        <div class="col">
                          
                           <div class="tab-text">
                               <h1><?php the_title(); ?></h1>
                               <p><?php the_content(); ?></p>
                               <a href="<?php echo $learn_more_url; ?>">Learn More</a>
                               <div class="tab-register"><a href="<?php echo $register_url; ?>">Register</a></div>
                               <h4>[if needed: code]</h4>
                               <h3>Company Comunity</h3>
                               <p class="tab-connect">[<a href="<?php echo $Connect_with_specialist_field; ?>">Connect with specialist </a> ]</p>

                               <button>Brand Logo/PNG</button>
                            </div>
							<div class="tab-image 456">
                          	<?php if ($myimage == '') {?>
                          		<img src="https://mediatech.ventures/wp-content/uploads/2022/04/ef3-placeholder-image.jpg"/>
                          	<?php }else{?>
                          		<img src="<?php echo $myimage;?>"/>
                          	<?php } ?>
                              
                          </div>
                        </div>
                        <?php endwhile; endif; wp_reset_postdata();  ?>
                        
                    </div>
                    
                    </div>
                </div>
                </div>
            <?php endforeach;
             ?>
                 </div>
        </div>
        </section>
<!--     </div>
</section> -->

<script src="jquery-3.6.0.min.js"></script>
<script>
	jQuery(document).ready(function(){
		console.log('working');
		jQuery('li.tab-link:first-child').addClass('active');
		jQuery('.tab-content:nth-child(1)').addClass('active');
	});
jQuery('.tab-link').click( function() {
	var tabID = jQuery(this).attr('data-tab');
	
	jQuery(this).addClass('active').siblings().removeClass('active');
	
	jQuery('#tab-'+tabID).addClass('active').siblings().removeClass('active');
});
</script>


<?php
}

add_shortcode('perks_post_type', 'wpb_demo_shortcode');




add_shortcode('test','test');
function test(){?>
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>-->
<style>

body {
  margin: 0;
  background: #f5f5f5;
  font-family: "Poppins", sans-serif;
  line-height: 2em;
}

.content-wrapper .row {
    /*display: flex;
    flex-direction: row;*/
    flex-wrap: wrap;
}
.content-wrapper .col {
    /*display: flex;
    width: 50%;
    max-width: 50%;
    margin-bottom: 20px;*/
    flex: 0 0 50%;
}


.wrapper {
  max-width: 100%;
  margin: 0 auto;
  margin-top: 80px;
}
.tab-image img {
    width: 100%;
    max-width: 100%;
    height: 343px;
    object-fit: cover;
    border-radius: 10px!important;
}
.tab-wrapper {
  text-align: center;
  display: block;
  margin: auto;
  max-width: 780px;
}

.tabs {
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
}

.tab-link {
  margin: 0 auto;
  list-style: none;
  padding: 15px;
  color: black;
  cursor: pointer;
  font-weight: 300;
  transition: all ease 0.5s;
  border-bottom: solid 3px rgba(255, 255, 255, 0);
  letter-spacing: 1px;
  width: 110px;
}

.tab-link:hover {
    color: black;
    border-color: black;
}

.tab-link.active {
  color: #333;
  border-color: #333;
}

.tab-link:nth-of-type(1).active {
    color: black;
    border-color: black;
    font-weight: bold;
}

.tab-link:nth-of-type(2).active {
    color: black;
    border-color: black;
    font-weight: bold;
}

.tab-link:nth-of-type(3).active {
    color: black;
    border-color: black;
    font-weight: bold;
}
.tab-content {
  display: none;
  text-align: center;
  color: #888;
  font-weight: 300;
  font-size: 15px;
  opacity: 0;
  transform: translateY(15px);
  animation: fadeIn 0.5s ease 1 forwards;
}
.content-wrapper .col {
    display: flex;
    width: 100%;
    max-width: 100%;
    margin-bottom:20px;
}
li.tab-link.active {
	background-color: #b11d1d;
    color: white !important;
    font-weight: bold !important;
    box-shadow: 0px 3px 6px rgb(0 0 0 / 25%);
    width: 160px;
}
.tab-content.active {
  display: block;
}
.content-wrapper .row {
    display: flex;
    flex-direction: row;
}
.tab-text h1 {
	font-size: 24px;
    color: black;
    text-align: center;
    position: relative;
    text-transform: uppercase;
    font-family: Montserrat, sans-serif;
    font-weight: 700;
    font-style: normal;
    margin-bottom: 0px;
    
}
.tab-text {
    width: 100%;
    max-width: 100%;
}

.tab-text p {
	font-size: 16px;
    width: 100%;
    color: #4D5C6D;
    font-family: "Open Sans", sans-serif;
    font-weight: 400;
    font-style: normal;
    max-width: 100%;
    margin-bottom: 5px;
}



.tab-text a {
	font-size: 14px;
    text-decoration: none;
    font-family: "Open Sans", sans-serif;
    font-weight: 400;
    font-style: normal;
    color: #e21f28 !important;
}

.tab-text h5 {
    font-size: 14px;
    text-decoration: none;
    color: red;
    font-weight: 300;
    /* margin-bottom: -20px; */
}

.tab-text h4 {
    font-size: 12px;
    color: black;
    font-family: "Open Sans", sans-serif;
    font-weight: 400;
    font-style: normal;
}
.tab-register a {
    font-size: 14px;
    text-decoration: none;
    font-family: "Open Sans", sans-serif;
    font-weight: 400;
    font-style: normal;
    color: #e21f28 !important;
}

.tab-register {
    margin-top: 15px;
}

p.tab-connect a {color: #000 !important;font-size: 12px;font-family: "Open Sans", sans-serif;
    font-weight: 400;
    font-style: normal;}

p.tab-connect {
    font-size: 12px;
	margin-top:-5px;
}



.tab-text h3 {
	font-size: 14px;
    font-family: "Open Sans", sans-serif;
    font-weight: 400;
    font-style: normal;
    color: #000000;
    margin-bottom: 0;
}

.tab-text h2 {
    font-size: 14px;
    color: black;
    font-weight: 300;
}

.tab-text button {
	font-weight: 300;
    background: #524949;
    max-width: 100%;
    border-radius: 10px;
    padding-left: 30px;
    padding-right: 30px;
    padding-top: 10px;
    padding-bottom: 10px;
    text-transform: uppercase;
    width: 80%;
    color: #fff;
    background-color: #32373c;
    box-shadow: none;
    cursor: pointer;
    display: inline-block;
    font-size: 1.125em;
    text-align: center;
    text-decoration: none;
    word-break: break-word;
    box-sizing: border-box;
}
.tab-register a {
    font-size: 14px;
    text-decoration: none;
    font-family: "Open Sans", sans-serif;
    font-weight: 400;
    font-style: normal;
    color: #e21f28 !important;
}
.tab-register {
    margin-top: 20px;
}
.content-wrapper {
    margin-top: 70px;
}

@keyframes fadeIn {
  100% {
    opacity: 1;
    transform: none;
  }
}
img.png_sec {
    height: 45px !important;
    object-fit: contain;
}
.tab-text{
    /* display: flex; */
    flex-direction: column;
    flex-wrap: nowrap;
    justify-content: center;
    align-content: center;
    align-items: center;
}
.tab-image {
    flex: 0 0 40% !important;
}
.tab-text {
    flex: 0 0 60% !important;
}
</style>
<body>
    <section class="custom-tab-section">  
    <div class="wrapper">
        <div class="tab-wrapper">
            <ul class="tabs">
            	<?php 
	            	$args = array(
					     'taxonomy' => 'perks-tag',
					        'orderby' => 'name',
					        'order'   => 'ASC'
					);


					$tags = get_tags($args);
					foreach ( $tags as $tag2 ) :
            	?>
                    <li class="tab-link" data-tab="<?php echo $tag2->term_id; ?>"><?php echo $tag2->name; ?></li>
                    <!-- <li class="tab-link" data-tab="2">Tab 2</li>
                    <li class="tab-link" data-tab="3">Tab 3</li>
                    <li class="tab-link" data-tab="4">Tab 4</li>
                    <li class="tab-link" data-tab="5">Tab 5</li> -->
                    <?php endforeach; ?>
            </ul>
        </div>
    
        <div class="content-wrapper">
    <?php foreach ( $tags as $tag2 ) :?>
            <div id="tab-<?php echo $tag2->term_id; ?>" class="tab-content">
                <div class="tab-row-content">
                    <div class="container">
                    <div class="row">
                    	<?php 
                    	$code = array( 'post_type' => 'perks-post',
	                    'posts_per_page' =>-1,
	                    'tax_query' => array(
					        array(
					            'taxonomy'  => 'perks-tag',
					            'field'     => 'term_id',
					            'terms'     => $tag2->term_id,
					        )
					    ),
	                );
                   

                   $loop1 = new WP_Query( $code );
                  // echo '<pre>';print_r($loop1->post->ID);echo '</pre>';
				   if ( $loop1->have_posts() ):
					 while ( $loop1->have_posts() ) : $loop1->the_post();
					 	$myimage = get_the_post_thumbnail_url($loop1->post->ID, 'full');
					 	$learn_more_url = get_post_meta($loop1->post->ID, 'learn_more_url', true );
					 	$register_url = get_post_meta($loop1->post->ID, 'register_url', true );
					 	$Connect_with_specialist_field = get_post_meta($loop1->post->ID, 'Connect_with_specialist_field', true );
                         $png_image_section = get_post_meta( $loop1->post->ID, 'png_image_section', true );
                         $if_need_code = get_post_meta($loop1->post->ID, 'if_need_code', true );
                         $company_community_field = get_post_meta($loop1->post->ID, 'company_community_field', true );
                         $connect_with_specialist = get_post_meta($loop1->post->ID, 'connect_with_specialist', true );
                         $content = get_the_content();
                    	?>
                        <div class="col">
                          
                           <div class="tab-text">
                               <h1><?php the_title(); ?></h1>
                               <p><?php echo $trimmed_content = wp_trim_words( $content, 20, NULL ); ?></p>
                               <a href="<?php echo $learn_more_url; ?>">Learn More</a>
                               <div class="tab-register"><a href="<?php echo $register_url; ?>">Register</a></div>
                               <?php if(!empty($if_need_code)): echo '<h4>['.$if_need_code.']</h4>'; endif; ?>
                               <?php if(!empty($company_community_field)): echo '<h3>'.$company_community_field.'</h3>'; endif; ?>
                               
                               <p class="tab-connect">[<a href="<?php echo $connect_with_specialist; ?>">Connect with specialist </a> ]</p>
                               <?php if(!empty($png_image_section)){
                                   echo '<img class="png_sec" src="'.$png_image_section.'"/>';
                               }
                            //    else{
                            //         echo '<img class="png_sec" src="https://mediatech.ventures/wp-content/uploads/2022/05/image_2022_05_25T13_53_15_536Z.png"/>';
                            //    }
                               ?>
                               <!-- <button>Brand Logo/PNG</button> -->
                            </div>
							<div class="tab-image 456">
                          	<?php if ($myimage == '') {?>
                          		<img src="https://mediatech.ventures/wp-content/uploads/2022/04/ef3-placeholder-image.jpg"/>
                          	<?php }else{?>
                          		<img src="<?php echo $myimage;?>"/>
                          	<?php } ?>
                              
                          </div>
                        </div>
                        <?php endwhile; endif; wp_reset_postdata();  ?>
                        
                    </div>
                    
                    </div>
                </div>
                </div>
            <?php endforeach;
             ?>
                 </div>
        </div>
        </section>
<!--     </div>
</section> -->

<script src="jquery-3.6.0.min.js"></script>
<script>
	jQuery(document).ready(function(){
		console.log('working');
		jQuery('li.tab-link:first-child').addClass('active');
		jQuery('.tab-content:nth-child(1)').addClass('active');
	});
jQuery('.tab-link').click( function() {
	var tabID = jQuery(this).attr('data-tab');
	
	jQuery(this).addClass('active').siblings().removeClass('active');
	
	jQuery('#tab-'+tabID).addClass('active').siblings().removeClass('active');
});
</script>
<?php }

/* 27-07-2022 */

// function switch_homepage() {
//     if ( !is_user_logged_in() ) {
//         $page = 5104; // for logged in users
//         update_option( 'page_on_front', $page );
//         update_option( 'show_on_front', 'page' );

//      } 
//     else {
//         $page = 4946; // for logged out users
//         update_option( 'page_on_front', $page );
//         update_option( 'show_on_front', 'page' );
//     }
// }
// add_action( 'init', 'switch_homepage' );

add_action('wp_ajax_get_user_data', 'get_user_data_function'); // wp_ajax_{ACTION HERE} 
add_action('wp_ajax_nopriv_get_user_data', 'get_user_data_function');
function get_user_data_function(){
  
    if ( !is_user_logged_in() ) {
        $page = 5104; // for logged in users
        update_option( 'page_on_front', $page );
        //update_option( 'show_on_front', 'page' );
        echo 'News-feed';

     } 
    else {
        $page = 4946; // for logged out users
        //$page = 12421; // for logged out users
        update_option( 'page_on_front', $page );
        //update_option( 'show_on_front', 'page' );
        echo 'loging';
        echo 'home-main';
    }
}

add_action( 'init', function() {
    global $wp_rewrite;
    $wp_rewrite->set_permalink_structure('/%postname%/');
    $wp_rewrite->flush_rules();
} );


add_action( 'wp_enqueue_scripts', 'bbloomer_disable_woocommerce_cart_fragments', 11 ); 
 
function bbloomer_disable_woocommerce_cart_fragments() { 
   if ( is_front_page() ) wp_dequeue_script( 'wc-cart-fragments' ); 
}


add_filter( '\A7\WPE_Cache_Flush\wpe_cache_flush_token', function() {
$private_key = "VrKfkMdLOQd4wZFRFr5E
vyMcUS0Ti34t9Qd0JbJS
0mR0RRj9yLw1mnytTPGA
PnPl1ZATHUv2KAarIJkF
futLWHHBmdjgav97dLBt
mXyYNgU91dQ0YEdVm7l9
WH90tTGP5NVugNNDIeAv
FpDRMrUpXCaZyHmXi2eH
qHsvSPGIf9NDlL9u9NBd
g4p0Ro01DMkUiPOOZ0xC";
 return $private_key;
} );

add_filter( '\A7\WPE_Cache_Flush\wpe_cache_flush_token', function() {
  return $private_key;
} );

// Security reasons...
if( !function_exists( 'add_action' ) ){
    die('...');
}

// The activation hook
function isa_activation(){
    if( !wp_next_scheduled( 'isa_add_every_hour_event' ) ){
        wp_schedule_event( time(), 'every_hour', 'isa_add_every_hour_event' );
    }
}

register_activation_hook(   __FILE__, 'isa_activation' );

// The deactivation hook
function isa_deactivation(){
    if( wp_next_scheduled( 'isa_add_every_hour_event' ) ){
        wp_clear_scheduled_hook( 'isa_add_every_hour_event' );
    }
}

register_deactivation_hook( __FILE__, 'isa_deactivation' );


// The schedule filter hook
function isa_add_every_hour( $schedules ) {
    $schedules['every_hour'] = array(
            'interval'  => 180,
            'display'   => __( 'Every 1 hour', 'textdomain' )
    );
    return $schedules;
}

add_filter( 'cron_schedules', 'isa_add_every_hour' );


// The WP Cron event callback function
function isa_every_hour_event_func() {
    $ch = curl_init("https://mediatech.ventures/wp-json/wpe/cache-plugin/v1/clear_all_caches");
}

add_action( 'isa_add_every_hour_event', 'isa_every_hour_event_func' );