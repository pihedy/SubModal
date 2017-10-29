<?php
/**
 * Plugin Name: SubModal
 * Plugin URI: https://github.com/pihedy/SubModal
 * Description: TODO
 * Version: 0.1.0
 * Author: Pihedy
 * Author URI: https://github.com/pihedy
 * Requires at least: 4.0
 * Tested up to: 4.8
 *
 * Text Domain: goat
 * Domain Path: /languages/
 *
 */

// no direct access
defined( 'ABSPATH' ) or die;

define('G_SUB_MODAL_ROOT', __FILE__);
define('G_SUB_MODAL_ROOT_URL', plugin_dir_url(__FILE__));
define('G_SUB_MODAL_INC', __DIR__ . '/include');
define('G_SUB_MODAL_INC_ADMIN', G_SUB_MODAL_INC . '/admin');
define('G_SUB_MODAL_INC_SITE', G_SUB_MODAL_INC . '/site');

// only admin
if (is_admin()) {
    require G_SUB_MODAL_INC_ADMIN . '/functions.php';
    new gSubModalAdmin;
}
