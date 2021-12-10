<?php
function cptui_register_my_cpts_madvare() {

	/**
	 * Post Type: Madvarer.
	 */

	$labels = [
		"name" => __( "Madvarer", "custom-post-type-ui" ),
		"singular_name" => __( "Madvare", "custom-post-type-ui" ),
		"menu_name" => __( "Madvarer", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Madvarer", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "Madvarer",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => false,
		"delete_with_user" => false,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "madvare", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-food",
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "madvare", $args );
}

add_action( 'init', 'cptui_register_my_cpts_madvare' );


function cptui_register_my_cpts_kaffe() {

	/**
	 * Post Type: Kaffe.
	 */

	$labels = [
		"name" => __( "Varme drikke", "custom-post-type-ui" ),
		"singular_name" => __( "kaffe", "custom-post-type-ui" ),
		"menu_name" => __( "Varme drikke", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "kaffe", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "Kaffe",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => false,
		"delete_with_user" => false,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "kaffe", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-coffee",
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "kaffe", $args );
}

add_action( 'init', 'cptui_register_my_cpts_kaffe' );
add_action( 'wp_head', function () { ?>
    <script>
    if ("serviceWorker" in navigator) {
		navigator.serviceWorker.register("/sandbox/3sem-eksamen/wp-content/themes/analog/public/js/serviceWorker.js");
	}
    </script>
<?php } );
function my_scripts() {
    wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/public/css/style.css', false, '1.0', 'all' );
	wp_enqueue_script("script", get_template_directory_uri() . '/public/js/script.js');
	wp_enqueue_script("serviceWorker", get_template_directory_uri() . '/public/js/serviceWorker.js', '', '', true);
	if (is_page('find-os')) {
		wp_enqueue_style(
			'leaflet-style', 'https://unpkg.com/leaflet@1.7.1/dist/leaflet.css');
		wp_style_add_data('leaflet-style', ['integrity', 'crossorigin'] , ['sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==', '']);
		wp_enqueue_script('leaflet', 'https://unpkg.com/leaflet@1.7.1/dist/leaflet.js', [], false, false);
		wp_script_add_data('leaflet', ['integrity', 'crossorigin'] , ['sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==', '']);
	}
}
function allow_modern_images( $mime_types ) {
  $mime_types['webp'] = 'image/webp';
  $mime_types['heic'] = 'image/heic';
  $mime_types['heif'] = 'image/heif';
  $mime_types['heics'] = 'image/heic-sequence';
  $mime_types['heifs'] = 'image/heif-sequence';
  $mime_types['avif'] = 'image/avif';
  $mime_types['avis'] = 'image/avif-sequence';
  return $mime_types;
}
add_filter( 'upload_mimes', 'allow_modern_images', 1, 1 );
add_action( 'wp_enqueue_scripts', 'my_scripts', 'allow_modern_images', 'script');

// DEFER
function mind_defer_scripts( $tag, $handle, $src ) {
  $defer = array(
    'script'
  );
  if ( in_array( $handle, $defer ) ) {
     return '<script src="' . $src . '" defer="defer" type="text/javascript"></script>' . "\n";
  }

    return $tag;
}
add_filter( 'script_loader_tag', 'mind_defer_scripts', 10, 3 );
?>