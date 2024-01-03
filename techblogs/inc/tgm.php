<?php

require_once get_theme_file_path("/lib/class-tgm-plugin-activation.php");
add_action('tgmpa_register', 'tech_register_required_plugins');
function tech_register_required_plugins()
{
	$plugins = array(
		// This is an example of how to include a plugin from the WordPress Plugin Repository.
		array(
			'name' => 'ACF',
			'slug' => 'advanced-custom-fields',
			'required' => false,
		),
		array(
			'name' => 'CMB2',
			'slug' => 'cmb2',
			'required' => false,
		),
		array(
			'name' => 'CMB2',
			'slug' => 'cmb2-attached-posts',
			'required' => true,
			'source' => 'https://codeload.github.com/CMB2/cmb2-attached-posts/zip/refs/heads/master',
		),

	);
	$config = array(
		'id' => 'tech-required-plugins',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu' => 'tgmpa-install-plugins', // Menu slug.
		'has_notices' => true,                    // Show admin notices or not.
		'dismissable' => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg' => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message' => '',
	);

	tgmpa($plugins, $config);
}
