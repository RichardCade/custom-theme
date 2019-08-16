<?php 

require_once get_template_directory() . '/library/class-tgm-plugin-activation.php';

add_action ('tgmpa_register', 'arkadia_theme_register_required_plugins' );

function arkadia_theme_register_required_plugins() {
   $plugins = array(
      array(
			'name'         => 'Yoast SEO', // The plugin name.
			'slug'         => 'wordpress-seo', // The plugin slug (typically the folder name).
			'required'			=> false,
			'force_activation'	=> false,
		),
     array(
			'name'         => 'Advanced Custom Fields', // The plugin name.
			'slug'         => 'advanced-custom-fields', // The plugin slug (typically the folder name).
			'required'			=> false,
			'force_activation'	=> false,
		),
          array(
			'name'         => 'GDPR Cookie Consent', // The plugin name.
			'slug'         => 'cookie-law-info', // The plugin slug (typically the folder name).
			'required'			=> false,
			'force_activation'	=> false,
		),
               array(
			'name'         => 'User Role Editor', // The plugin name.
			'slug'         => 'user-role-editor', // The plugin slug (typically the folder name).
			'required'			=> false,
			'force_activation'	=> false,
		),
               array(
			'name'         => 'Autoptimize', // The plugin name.
			'slug'         => 'autoptimize', // The plugin slug (typically the folder name).
			'required'			=> false,
			'force_activation'	=> false,
		),
                array(
			'name'         => 'WP Super Cache', // The plugin name.
			'slug'         => 'wp-super-cache', // The plugin slug (typically the folder name).
			'required'			=> false,
			'force_activation'	=> false,
		),
                    array(
			'name'         => 'UpdraftPlus WordPress Backup Plugin', // The plugin name.
			'slug'         => 'updraftplus', // The plugin slug (typically the folder name).
			'required'			=> false,
			'force_activation'	=> false,
		),
                         array(
			'name'         => 'All In One WP Security & Firewall', // The plugin name.
			'slug'         => 'all-in-one-wp-security-and-firewall', // The plugin slug (typically the folder name).
			'required'			=> false,
			'force_activation'	=> false,
		),
                              array(
			'name'         => 'Security & Firewall – MalCare Security', // The plugin name.
			'slug'         => 'malcare-security', // The plugin slug (typically the folder name).
			'required'			=> false,
			'force_activation'	=> false,
		),
                           array(
			'name'         => 'UpdraftPlus WordPress Backup Plugin', // The plugin name.
			'slug'         => 'updraftplus', // The plugin slug (typically the folder name).
			'required'			=> false,
			'force_activation'	=> false,
		),
                              array(
			'name'         => 'Gutenberg Blocks – Ultimate Addons for Gutenberg', // The plugin name.
			'slug'         => 'ultimate-addons-for-gutenberg', // The plugin slug (typically the folder name).
			'required'			=> false,
			'force_activation'	=> false,
		),
                    array(
			'name'         => 'Smush Image Compression and Optimization', // The plugin name.
			'slug'         => 'wp-smushit', // The plugin slug (typically the folder name).
			'required'			=> false,
			'force_activation'	=> false,
		)
   );
   
   tgmpa($plugins);
}