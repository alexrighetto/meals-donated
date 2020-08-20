<?php 
/**
 * Plugin Name: Number of Meals 
 */

//https://github.com/jeremyHixon/RationalOptionPages
include( plugin_dir_path( __FILE__ ) . 'admin.php');

/*
how to use it

// Get all options for the page
$options = get_option( 'meals-donated', array() );
$meals = $options['number_of_meals'];
*/


add_filter( 'the_content', 'filter_the_content_in_the_main_loop', 1 );
 
function filter_the_content_in_the_main_loop( $content ) {
 
    // Check if we're inside the main loop in a single Post.
    if ( is_singular() OR is_singular($post_types = 'slick_slider')&& in_the_loop() && is_main_query() ) {
		
		$options = get_option( 'meals-donated', array() );
		$meals_n = $options['number_of_meals'];
		
		$keyword = '{$meals}';
		$content = strtr($content, array( $keyword => $meals_n));
		
		
		return $content ;
    }
 
    return $content;
}


// Add Shortcode
function axl_nom_print_meals() {

	$options = get_option( 'meals-donated', array() );
$meals = $options['number_of_meals'];
	return	 $meals;

}
add_shortcode( 'meals', 'axl_nom_print_meals' );



// simply use [meals] to print in php the numer of meals

//or use {$meals} in HTML 