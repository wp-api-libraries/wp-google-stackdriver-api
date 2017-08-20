<?php
/**
 * WP Google Stackdriver Logging API
 *
 * @link https://cloud.google.com/logging/docs/reference/v2/rest/#service-logginggoogleapiscom
 * @package WP-API-Libraries\WP-Google-Stackdriver-API
 */
 
/*
* Plugin Name: WP Google Storage API
* Plugin URI: https://github.com/wp-api-libraries/wp-google-stackdriver-api
* Description: Perform API requests to Google Stackdriver Logging in WordPress.
* Author: WP API Libraries
* Version: 1.0.2
* Author URI: https://wp-api-libraries.com
* GitHub Plugin URI: https://github.com/wp-api-libraries/wp-google-stackdriver-api
* GitHub Branch: master
*/

/* Exit if accessed directly. */
if ( ! defined( 'ABSPATH' ) ) { exit; }

/* Check if class exists. */
if ( ! class_exists( 'GoogleStackdriverAPI' ) ) {
	
	/**
	 * GoogleStackdriverAPI Class.
	 */
	class GoogleStackdriverAPI {
		
		/**
		 * BaseAPI Endpoint
		 *
		 * @var string
		 * @access protected
		 */
		protected $base_uri = 'https://logging.googleapis.com/v2';
		
		
		
		/* BILLING ACCOUTNS LOGS. */
		
		// https://cloud.google.com/logging/docs/reference/v2/rest/v2/billingAccounts.logs/delete
		function delete_billing_accounts_logs( $log_name ) {
			
		}
		
		// https://cloud.google.com/logging/docs/reference/v2/rest/v2/billingAccounts.logs/list
		function list_billing_accounts_logs( $parent, $page_size, $page_token ) {
			
		}
		
		/* BILLING ACCOUTNS SINKS. */
		
		
		/* ENTRIES. */
		
		
		/* FOLDER - LOGS. */
		
		
		/* FOLDER - SINKS. */
		
		
		/* MONITORED RESOURCE DESCRIPTORS. */
		
		/* ORGANIZATIONS - LOGS. */
		
		/* ORGANIZATIONS - SINKS. */
		
		/* PROJECTS - LOGS. */
		
		/* PROJECTS - METRICS. */
		
		/* PROJECTS - SINKS. */
		
	}
}		