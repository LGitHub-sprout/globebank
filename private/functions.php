<?php

// add the leading '/' if not present
	function url_for( $script_path ) {
		if ( $script_path[0] != '/' ) {
			$script_path = '/' . $script_path;
		}
		return ROOT . $script_path;
	}

// Wrapper for htmlspecialchars()
if ( ! function_exists( h ) ) {
	function h( $string = '' ) {
		return htmlspecialchars( $string );
	}
}
// Wrapper for urlencode()
if ( ! function_exists( u ) ) {
	function u( $string = '' ) {
		return urlencode( $string );
	}
}

function redirect_to( $location ) {
	return header( "Location: " . $location );
}

function request_is_post() {
	return $_SERVER[ 'REQUEST_METHOD' ] == 'POST';
	exit;
}
function request_is_get() {
	return $_SERVER[ 'REQUEST_METHOD' ] == 'GET';
	exit;
}



























// need to find out why these wrapper functions don't allow passing $var via link
if ( ! function_exists( 'get_header' ) ) {
	function get_header() {
		include SHARED_PATH . '/staff_header.php';
	}
}
if ( ! function_exists( 'get_footer' ) ) {
	function get_footer() {
		include SHARED_PATH . '/staff_footer.php';
	}
}