<?php
require_once '../../../private/initialize.php';
/**
 * Edit the subjects table/array and print to screen the new value.
 *
 * Single Page Form Submission.
 */

/**
 * Prevent direct access to edit.php w/out an ID and redirect to main page.
 *
 * Notes:
 * 	edit.php needs to get an ID to edit the params.
 */
if ( ! isset( $_GET[ 'id' ] ) ) { // meaning GET request, not just whether $id is set?
	redirect_to( url_for( 'staff/subjects/index.php' ) );
}

// Assign/initialize ID, knowing it's been accessed via Edit link.
// I don't get why I have to explicitly set these--page works fine without them.
$id = $_GET[ 'id' ];
// Default initilizations for rest of params.
$menu_name = '';
$position = '';
$visible = '';

/**
 * Only POST request sets and prints params.
 *
 * Prevents form resubmission:
 * 	by default, GET request skips this and rest of code just prints the form.
 */
if ( request_is_post() ) {
	$menu_name = $_POST[ 'menu_name' ] ? $_POST[ 'menu_name' ] : '';
	$position = $_POST[ 'position'] ? $_POST[ 'position'] : '';
	$visible = $_POST[ 'visible'] ? $_POST[ 'visible'] : '';

	echo "<p>Menu Name: $menu_name </p>";
	echo "<p>Position: $position </p>";
	echo "<p>Visible: $visible </p>";
}

$page_title = "Edit Subject";
include SHARED_PATH . '/staff_header.php';

?>

<div id="content">
	<!-- https://html.spec.whatwg.org/multipage/named-characters.html#named-character-references -->
	<p><a href="<?php echo url_for( 'staff/subjects/index.php' ); ?>">&larrhk; Back to Subjects</a></p>

	<form action="<?php url_for( '/staff/subjects/edit.php?id=' . h(u( $id ) ) ); ?>" method="post">
		<fieldset>
			<legend>Edit Subject</legend>
			<!-- https://developer.mozilla.org/en-US/docs/Learn/Forms -->
			<dl>
				<dt><label for="menu_name">Menu Name</label></dt>
				<dd><input type="text" name="menu_name" value="<?php echo $menu_name ?>" id="menu_name"></dd>

				<dt><label for="position">Position</label></dt>
				<dd>
					<select name="position" id="position">
						<option value="1">1</option><!-- Default selection on form submission -->
						<option value="2" <?php echo $position === '2' ? 'selected' : ''; ?> >2</option>
						<option value="3" <?php echo $position === '3' ? 'selected' : ''; ?> >3</option>
					</select>
				</dd>

				<dt><label for="visible">Visible</label></dt>
				<dd><input type="hidden" name="checkbox" value="0" id="visible"></dd>
				<dd><input type="checkbox" name="visible" value="1" id="visible" <?php echo $visible === '1' ? 'checked' : ''; ?>></dd>

				<div class="operations">
					<input type="submit" name="submit" value="Edit Subject">				
				</div><!-- .operations -->
			</dl>
		</fieldset>
	</form>




</div><!-- #content -->

<?php include SHARED_PATH . '/staff_footer.php'; ?>




































