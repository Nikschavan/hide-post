<?php
/**
 * Plugin Name:     Unlist Posts & Pages
 * Plugin URI:      https://github.com/Nikschavan/hide-post
 * Description:     Unlist Posts from dispying anywhere on the site, only access the post with a direct link.
 * Author:          Nikhil Chavan
 * Author URI:      https://www.nikhilchavan.com/
 * Text Domain:     unlist-posts
 * Domain Path:     /languages
 * Version:         1.1.3
 *
 * @package         Hide_Post
 */

defined( 'ABSPATH' ) or exit;

define( 'UNLIST_POSTS_DIR', plugin_dir_path( __FILE__ ) );
define( 'UNLIST_POSTS_URI', plugins_url( '/', __FILE__ ) );
define( 'UNLIST_POSTS_VER', '1.1.3' );

require_once UNLIST_POSTS_DIR . 'class-unlist-posts.php';
