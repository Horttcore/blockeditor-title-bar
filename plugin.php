<?php
/**
 * Plugin Name: BlockEditor Title Bar
 * Plugin URI: https://ralfhortt.dev
 * Description: Improve visibility of the title bar in the block editor
 * Version: 1.0
 * Author: Ralf Hortt
 * Author URI: https://ralfhortt.dev
 * Text Domain: blockeditor-title-bar
 * Domain Path: /languages/
 * License: MIT
 */

namespace BlockEditorTitleBar\Plugin;

use RalfHortt\Assets\EditorStyle;

// ------------------------------------------------------------------------------
// Prevent direct file access
// ------------------------------------------------------------------------------
if (! defined('WPINC')) {
    exit;
}

// ------------------------------------------------------------------------------
// Autoloader
// ------------------------------------------------------------------------------
$autoloader = dirname(__FILE__).'/vendor/autoload.php';

if (is_readable($autoloader)) {
    require_once $autoloader;
}

// ------------------------------------------------------------------------------
// Bootstrap
// ------------------------------------------------------------------------------
(new EditorStyle('blockeditor-title-bar', plugin_dir_url(__FILE__).'css/style.css', [], null))->register();
