<?php
/**
 * @see get_the_title() -- retrieve post title -- for similarities btwn $page_title
 * and setting a default value awa '$before' '$after' and '$echo' args.
 * 
 * @link https://developer.wordpress.org/reference/functions/get_the_title/#source 
 */
$page_title = ! isset( $page_title ) ? 'Main Menu' : $page_title; ?>

<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="x-ua-compatible" content="IE-edge">
		<link rel="stylesheet" href="<?php echo url_for( 'styles/style.css' ); ?>">
		<title>GBI - <?php echo $page_title; ?></title>
	</head>
	<body>
		<div class="page">

			<header class="site-header">
				<h1>GBI Staff Area</h1>

				<nav class="main-menu">
					<ul>
						<li><a href="<?php echo url_for( 'staff/index.php' ); ?>">Main Menu</a></li>
					</ul>
				</nav>
			</header>