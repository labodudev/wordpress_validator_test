<?php
/**
 * Plugin Name: wordpress_test_validator
 * Description: An example with wordpress-validator
 * Version: 1.0.0
 * Author: labodudev
 * Author URI: http://labodudev.fr
 * Requires at least: 4.1
 * Tested up to: 4.4
 */
if ( !defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_action( 'wp_ajax_test', 'ajax_test' );

function ajax_test() {
  check_ajax_referer( 'ajax_test' );
        // Il manque une vérification de nonce, cette fonction n'est pas valide wordpress-validator
  	wp_send_json_success( array( 'La requête n'est pas sécurisée!' ) );
}

?>
