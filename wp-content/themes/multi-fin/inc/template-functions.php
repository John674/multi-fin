<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 */

/**
 * Adds custom classes to the array of body classes.
 */
add_filter( 'body_class', function ( $classes ) {
    // Helps detect if JS is enabled or not.
    $classes[] = '';
    return $classes;
} );
