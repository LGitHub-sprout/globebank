<?php require_once '../../../private/initialize.php'; ?>
<?php $page_title = 'Show'; ?>

<!-- Using include allows using $page_title  -->
<?php include SHARED_PATH . '/staff_header.php'; ?>

<!-- Whereas function calling include doesn't allow using $page_title -->
<?php // get_header(); ?>

<div class="page">

	<div id="content">

		<p><a href="<?php echo url_for( '/staff/subjects/index.php' ); ?>">&larrhk; Back to Subjects</a></p>

		<h2>Show</h2>
		
		<?php
		// Best practice to set default (1, or null) when querying $_GET. 
		$id = isset( $_GET['id'] ) ? $_GET['id'] : '';
		echo h( $id );
		?>

	</div><!-- .content -->
</div><!-- .page -->
<?php include SHARED_PATH . '/staff_footer.php'; ?>