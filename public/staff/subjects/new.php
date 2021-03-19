<?php require_once '../../../private/initialize.php';

$page_title = "New Subject";
include SHARED_PATH . '/staff_header.php';

/**
 * Print new Subject results. 
 * Redirect all other page requests. 
 *
 * Notes:
 *	Printing form depends on whether it's a POST or GET request.
 *	Set param $vars and print to page (depending whether POST or GET).
 *	Don't forget to redirect.
 */
if ( request_is_post() ) { // If POST request, then set params and print to page.
	$menu_name = $_POST[ 'menu_name' ] ? $_POST[ 'menu_name' ] : '';
	$position = $_POST[ 'position' ] ? $_POST[ 'position' ] : '';
	$visible = $_POST[ 'visible' ] ? $_POST[ 'visible' ] : '';

	echo "<p>Menu Name: $menu_name </p>";
	echo "<p>Position: $position </p>";
	echo "<p>Visible: $visible </p>";
} else {
	// All other requests, redirect.
	redirect_to( url_for( 'staff/subjects/create.php' ) );
}
?>

<div id="content">

	<h2>New Subject</h2>

	<p><a href="<?php echo url_for( '/staff/subjects/index.php' ); ?>">Back to Subjects</a></p>

</div>

<?php include SHARED_PATH . '/staff_footer.php'; ?>






























