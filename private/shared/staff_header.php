<?php if ( ! isset( $page_title ) ) {
	$page_title = 'Main Menu';
} ?>
<?php
	// $page_title = ! isset( $page_title ) ? $page_title : 'Ternary';
?>

<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="x-ua-compatible" content="IE-edge">
		<link rel="stylesheet" href="<?php echo ROOT . '/styles/style.css'; ?>">
		<title>GBI - <?php echo $page_title; ?></title>
	</head>
	<body>
		<div class="page">

			<header class="site-header">

				<h1>GBI Staff Area</h1>

				<nav>
					<li><a href="#">Main Menu</a></li>
					<li><a href="#">Pages</a>
					<li><a href="#">Subjects</a></li>
					</li>
				</nav>

			</header>
