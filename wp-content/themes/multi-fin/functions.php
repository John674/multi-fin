<?php
/**
 * Functions and definitions
 */
// Constants
require get_template_directory() . '/inc/constants.php';

if ( ! function_exists('multi_fin_setup')) {
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     *
     * @return void
     *
     */
    function multi_fin_setup(): void
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Twenty Twenty-One, use a find and replace
         * to change 'multi_fin' to the name of your theme in all the template files.
         */
        load_theme_textdomain('multi_fin', get_template_directory() . '/languages');

        /*
         * Let WordPress manage the document title.
         * This theme does not use a hard-coded <title> tag in the document head,
         * WordPress will provide it for us.
         */
        add_theme_support('title-tag');

        /**
         * Add post-formats support.
         */
        add_theme_support(
            'post-formats',
            [
                'link',
                'aside',
                'gallery',
                'image',
                'quote',
                'status',
                'video',
                'audio',
                'chat',
            ]
        );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        /*$width = 117;
        $height = 76;*/
        //add_image_size( GALLERY_THUMB, $width, $height, [ 'left', 'top' ] );

        register_nav_menus(
            [
                'primary' => esc_html__('Primary menu', 'multi_fin'),
                'lang_switcher' => esc_html__('Language menu', 'multi_fin'),


            ]
        );

        //add_image_size( EVENT_POST_TYPE . '_thumb', 423, 190, [ 'center', 'center' ] );
    }
}
function remove_default_image_sizes($sizes)
{

    /* Default WordPress */
    unset($sizes['thumbnail']);       // Remove Thumbnail (150 x 150 hard cropped)
    unset($sizes['medium']);          // Remove Medium resolution (300 x 300 max height 300px)
    unset($sizes['medium_large']);    // Remove Medium Large (added in WP 4.4) resolution (768 x 0 infinite height)
    unset($sizes['large']);           // Remove Large resolution (1024 x 1024 max height 1024px)

    return $sizes;
}

//add_filter('intermediate_image_sizes_advanced', 'remove_default_image_sizes');

add_action('after_setup_theme', 'multi_fin_setup');

add_action('init', function () {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
});

add_action('wp_enqueue_scripts', function () {
    global $post;


    wp_dequeue_style('wp-block-library'); // WordPress core
    wp_dequeue_style('page-list-style'); // WordPress core
    wp_dequeue_style('wp-block-library-theme'); // WordPress core
    wp_dequeue_style('contact-form-7'); // WordPress core
    wp_deregister_script( 'wp-polyfill' );
    wp_deregister_script( 'regenerator-runtime' );
    wp_dequeue_script('wp-polyfill');


    $pluginsStyleVersion = filemtime(get_template_directory() . '/assets/css/plugins.css');
    wp_enqueue_style('multi_fin-plugins', get_template_directory_uri() . '/assets/css/plugins.css', [], $pluginsStyleVersion);

	$mainStyleVersion = filemtime(get_template_directory() . '/assets/css/style.css');
    wp_enqueue_style('multi_fin-main', get_template_directory_uri() . '/assets/css/style.css', ['multi_fin-plugins'], $mainStyleVersion);

    $aquaColorVersion = filemtime(get_template_directory() . '/assets/css/colors/aqua.css');
    wp_enqueue_style('aqua-color', get_template_directory_uri() . '/assets/css/colors/aqua.css', ['multi_fin-main'], $aquaColorVersion);


    $thicccboiFontsVersion = filemtime(get_template_directory() . '/assets/css/fonts/thicccboi.css');
    wp_enqueue_style('thicccboi-fonts', get_template_directory_uri() . '/assets/css/fonts/thicccboi.css', ['multi_fin-main'], $thicccboiFontsVersion);

    $pluginsScriptVersion = filemtime(get_template_directory() . '/assets/js/plugins.js');
    wp_enqueue_script('multi_fin-plugins', get_template_directory_uri() . '/assets/js/plugins.js', [], $pluginsScriptVersion, true);

    $themeScriptVersion = filemtime(get_template_directory() . '/assets/js/theme.js');
    wp_enqueue_script('multi_fin-theme', get_template_directory_uri() . '/assets/js/theme.js', ['multi_fin-plugins'], $themeScriptVersion, true);

}, 100);


add_filter('upload_mimes', function ($mimes) {
    $mimes['json'] = 'application/json';
    //$mimes['pdf'] = 'application/pdf';
    $mimes['svg'] = 'image/svg+xml';

    return $mimes;
});
// Enhance the theme by hooking into WordPress.
//require get_template_directory() . '/inc/template-functions.php';

function renderACFLink($link, $classes = 'btn', $wrap = false)
{
    if (is_array($link)) {
        $link_url = esc_url($link['url']);
        $link_title = esc_html(strip_tags($link['title']));
        $link_title = $wrap ? "<span>$link_title</span>" : $link_title;
        $link_target = $link['target'] ?: '_self';
        $link_target = esc_attr($link_target);
    } else {
        $link_url = esc_url($link);
        $link_title = esc_html($link);
        $link_target = esc_attr('_self');
    }

    echo "<a class='$classes' href='$link_url' target='$link_target'>$link_title</a>";
}

function renderACFImg($img, $attrs = [], $size = false)
{
    $strAttrs = '';
    if (is_array($img)) {
        $img_url = $img['sizes'][$size] ?? $img['url'];
        $img_url = esc_url($img_url);
        $img_alt = $img['alt'] ?: $img['title'];

    } else {
        $img_url = esc_url($img);
        $img_alt = '';
    }
    $strAttrs .= "src='$img_url'";
    $strAttrs .= "alt='$img_alt'";
    if ( ! empty($attrs)) {
        foreach ($attrs as $attr => $value) {
            $strAttrs .= "$attr='$value'";
        }

    }

    echo sprintf("<img  %s />", $strAttrs);
}


// Blocks
require get_template_directory() . '/inc/blocks.php';



//Options
require get_template_directory() . '/inc/options.php';
add_filter('wpcf7_autop_or_not', '__return_false');

