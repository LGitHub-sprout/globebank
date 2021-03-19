<?php
/**
 * Print the 'Create New Subject' form.
 */

require_once '../../../private/initialize.php';

$page_title = "Create New Subject";
include SHARED_PATH . '/staff_header.php';
?>

<div id="content">

	<h2>Create New Subject</h2>

	<p><a href="<?php echo url_for( '/staff/subjects/index.php' ); ?>" class="action">Back to Subjects</a></p>

	<form action="<?php echo url_for( '/staff/subjects/new.php' ); ?>" method="post">
		<fieldset>
			<legend>Create New Subject</legend>

			<dl>
				<dt><label for="menu_name">Menu Name: </label></dt>
				<dd><input type="text" name="menu_name" id="menu_name" value="<?php echo $menu_name; ?>"></dd>

				<dt><label for="position">Position: </label></dt>
				<dd>
					<select name="position" id="position">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
					</select>
				</dd>

				<dt><label for="visible">Visible: </label></dt>
				<dd><input type="hidden" name="visible" value="0"></dd>
				<dd><input type="checkbox" name="visible" value="1"></dd>

				<div class="operations">
					<input type="submit" name="submit" value="Create Subject">
				</div>


			</dl>

		</fieldset>
	</form>
	

</div><!-- #content -->

<?php include SHARED_PATH . '/staff_footer.php'; ?>