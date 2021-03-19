<?php require_once '../../private/initialize.php'; ?>
<?php $page_title = 'Staff Area'; ?>

<!-- Using include allows using $page_title  -->
<?php include SHARED_PATH . '/staff_header.php'; ?>

<!-- Whereas function calling include doesn't allow using $page_title -->
<?php // get_header(); ?>

<div class="page">

	<div id="content">

		<h2>Staff Area</h2>
		<ul>
			<li><a href="<?php echo url_for( '/staff/pages/index.php') ?>">Pages</a></li>
			<li><a href="<?php echo url_for( '/staff/subjects/index.php') ?>">Subjects</a></li>
		</ul>

		<p><a href="https://www.wnyc.org/story/covid-19-vaccine-will-it-protect-against-new-variants-and-do-you-need-a-2nd-dose">WNYC article on covid vaccines</a></p>
		
	</div><!-- .content -->
	
</div><!-- .page -->

<?php get_footer(); ?>










