<?php

/**
 *
 * @link              https://lapzor.com
 * @since             1.0.0
 * @package           Mc4wp_Extra
 *
 * @wordpress-plugin
 * Plugin Name:       MC4WP Extra
 * Requires Plugins:  mailchimp-for-wordpress
 * Plugin URI:        https://lapzor.com
 * Description:       Extra features for MC4WP. 
 * Version:           1.0.0
 * Author:            Lapzor
 * Author URI:        https://lapzor.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       mc4wp-extra
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
define( 'MC4WP_EXTRA_VERSION', '1.0.0' );

class mc4wp_extra {

	public function __construct() {
		add_action('admin_init', array($this, 'mc4wp_extra_register_settings'));

		add_action('mc4wp_admin_after_integration_settings', array($this, 'mc4wp_extra_admin_after_integration_settings'), 40, 2);

		$this->mc4wp_extra_hooks();
	}

	public function mc4wp_extra_register_settings() {
    	register_setting('mc4wp_integrations_settings', 'mc4wp_extra');
	}

	public function mc4wp_extra_admin_after_integration_settings(MC4WP_Integration $integration, $opts)
	{
		//add the option to set tags per integration method 
		include __DIR__ . '/integrationtags.php';

		//add further extra options if available
		$file = __DIR__ . '/' . $integration->slug . '.php';
		if (file_exists($file)) {
			include $file;
		}
	}

	public function mc4wp_extra_hooks() {
		$integrations_to_add_tag_to = array('affiliatewp', 'buddypress', 'contact-form-7', 'custom', 'easy-digital-downloads', 'events-manager', 'gravity-forms', 'memberpress', 'ninja-forms', 'woocommerce', 'wp-comment-form', 'wp-registration-form', 'wpforms');


		foreach ($integrations_to_add_tag_to as $integration) {
			if (isset(get_option('mc4wp_extra')[$integration.'tag']) && !empty(get_option('mc4wp_extra')[$integration.'tag'])) {
				add_filter( 'mc4wp_integration_'.$integration.'_subscriber_data', function(MC4WP_MailChimp_Subscriber $subscriber) use ($integration) {
					$tags = explode(',', get_option('mc4wp_extra')[$integration.'tag']);
					foreach($tags as $tag) {
						$subscriber->tags[] = trim($tag);
					}
					return $subscriber;
				});
			}
		}




		 //Need to be repeated for each integration method

		add_filter( 'mc4wp_integration_subscriber_data', function(MC4WP_MailChimp_Subscriber $subscriber) {

		$subscriber->tags[] = 'My tag';


		return $subscriber;
		});


	}

}
new mc4wp_extra();




