<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo(title); ?></title>
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php bloginfo(stylesheet_url); ?>">
</head>
<body>
	<div class="navbar-fixed">
	  <nav class=" blue-grey darken-2">
	    <div class="nav-wrapper">
	      <a href="#!" class="brand-logo center black-text flow-text white-text"><?php bloginfo(name) ?></a>
	    </div>
	  </nav>
	</div>