<?php require_once '../../../private/initialize.php';

$subjects = array(
	array( 'id' => '1', 'position' => '1', 'visible' => '1', 'menu_name' => 'About Globe Bank' ),
	array( 'id' => '2', 'position' => '2', 'visible' => '1', 'menu_name' => 'Commercial' ),
	array( 'id' => '3', 'position' => '3', 'visible' => '1', 'menu_name' => 'Consumer' ),
	array( 'id' => '4', 'position' => '4', 'visible' => '1', 'menu_name' => 'Smal Business' )
);

$page_title = 'Subjects';
include SHARED_PATH . '/staff_header.php';
?>

<div class="page">
	<div id="content">

		<div class="subjects listing">
			<h2>Subjects</h2>

			<div class="actions">
				<p><a href="<?php echo url_for( '/staff/subjects/create.php' ); ?>" class="action">Create New Subject</a></p>
			</div><!-- .actions -->

			<table class="table-list">
				<tr>
					<th>ID</th>
					<th>Position</th>
					<th>Visible</th>
					<th>Menu Name</th>
					<th>&nbsp;</th>
					<th>&nbsp;</th>
					<th>&nbsp;</th>
				</tr>

				<?php foreach( $subjects as $subject ) { ?>
					<tr>
						<td><?php echo $subject['id']; ?></td>
						<td><?php echo $subject['position']; ?></td>
						<td><?php echo $subject['visible'] == 1 ? 'true' : 'false'; ?></td>
						<td><?php echo $subject['menu_name']; ?></td>
						<td><a class="action" href="<?php echo url_for( '/staff/subjects/edit.php?id=' . h(u( $subject[ 'id' ] ))); ?>">Edit</a></td>
						<td><a class="action" href="<?php echo url_for( 'staff/subjects/show.php?id=' . $subject['id'] ); ?>">View</a></td>
						<td><a class="action" href="" class="action">Delete</a></td>
					</tr>
				<?php } ?>
			</table>





		</div><!-- .subjects .listing -->
	</div><!-- .content -->
	
</div><!-- .page -->

<?php get_footer(); ?>










