<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>ImageFlow</title>
		<meta name="robots" content="index, follow, noarchive" />
		<link rel="stylesheet" href=<?php drupal_get_path('module', 'opendtp');?>"/style.css" type="text/css" />

		<!-- This includes the ImageFlow CSS and JavaScript -->
		<link rel="stylesheet" href=<?php drupal_get_path('module', 'opendtp');?>"/imageflow.packed.css" type="text/css" />
		<script type="text/javascript" src=<?php drupal_get_path('module', 'opendtp');?>"/imageflow.packed.js"></script>

	</head>
	<body>
		<h1>ImageFlow</h1>

		<!-- This is all the XHTML ImageFlow needs -->
		<div id="myImageFlow" class="imageflow">
			<img src=<?php drupal_get_path('module', 'opendtp');?>"/img/img1.png" longdesc=<?php drupal_get_path('module', 'opendtp');?>"/img/img1.png" width="400" height="300" alt="Image 1" />
			<?php
			echo $content
			?>
		</div>

	</body>
</html>
