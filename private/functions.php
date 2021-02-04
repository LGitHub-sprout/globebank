<?php
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