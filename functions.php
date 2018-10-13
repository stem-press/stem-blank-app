<?php

/**
 * This file bootstraps your Stem app.  Whatever you'd normally do in a functions.php file you can do in the "onSetup"
 * callback down at the bottom of the file.
 *
 * If you are using composer for whatever, make sure you uncomment out the require_once line below too.
 */


/**
 * Must include this for trellis deploys.
 */
if (!class_exists(\ILab\Stem\Core\Context::class)) {
    return;
}

/**
 * If using any composer stuff, be sure to add the autoload
 */
//require_once('vendor/autoload.php');


/**
 * Create the context for this theme.
 *
 */
$context=\ILab\Stem\Core\Context::initialize(dirname(__FILE__));

/**
 * Setup functions
 */
$context->onSetup(function() use ($context) {
    // Here we do any setup
    add_filter('upload_mimes', function($mimes){
        $mimes['svg'] = 'image/svg+xml';
        return $mimes;
    });

    add_action('admin_bar_menu', function($wp_admin_bar){
        $wp_admin_bar->remove_menu('customize');
        $wp_admin_bar->remove_menu('comments');
        $wp_admin_bar->remove_menu('wp-logo');
    }, 999);
});
