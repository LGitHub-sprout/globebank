<?php
// define( 'PRIVATE_PATH', dirname( __FILE__ ) );
// define( 'PROJECT_PATH', dirname( PRIVATE_PATH ) );
// define( 'PUBLIC_PATH', PROJECT_PATH . '/public' );
// define( 'SHARED_PATH', PRIVATE_PATH . '/shared' );

define( 'PROJECT_PATH', dirname( __DIR__ ) );
define( 'PRIVATE_PATH', PROJECT_PATH . '/private' );
define( 'SHARED_PATH', PRIVATE_PATH . '/shared' );
define( 'PUBLIC_PATH', PROJECT_PATH . '/public' );



/**
 * Code relative path to the URL for linking purposes
 *
 * super globals:
 * array containing info such as headers, paths, script locations.
 * created by web server. (no guarantee to be provided).
 *
 * $_SERVER — server and execution environ info
 * $_SERVER['SCRIPT_NAME'] contains the current script's path.
 *
 * @link https://stackoverflow.com/questions/65960718/string-concatination-with-php-constant-working-on-localhost-but-not-on-server
 *
 * per Kevin Skoglun:
 * Assign the root URL to a PHP constant (for linking)
 * Don't need to include the domain
 * Use same document root as webserver ($_SERVER)
 * 	Can set a hardcoded value:
 * 	define( 'ROOT', 'http://globebank:8888/public/')
 *		// perhaps for a production machine?
 *		// don't understand. does it work in production? 
 * 		define( 'ROOT', '' ); // doesn't work on MAMP local
 */
// my solution
// Relative path to /public directory
// returns part of haystack string starting from and including the first occurrence of needle to the end of haystack.
$public = strstr( $_SERVER[ 'SCRIPT_NAME'], '/s', true );
if ( ! defined( 'ROOT' ) ) {
	define( 'ROOT', $public );
}

// Kevin Skoglund solution 
// find the numeric position of the first occurrence of needle in the haystack string.
// $public = strpos( $_SERVER['SCRIPT_NAME'], '/public' ) + 7;
// returns part of haystack starting from and including the first occurrence of needle to the end of haystack.
// $doc_root = substr( $_SERVER['SCRIPT_NAME'], 0, $public );
// define( 'ROOT', $doc_root );

require_once 'functions.php';
































