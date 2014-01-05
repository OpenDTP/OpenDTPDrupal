<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>ImageFlow</title>
		<meta name="robots" content="index, follow, noarchive" />

		<!-- This includes the ImageFlow CSS and JavaScript -->
		<link rel="stylesheet" href=<?php echo $module_path; ?>/imageflow.packed.css type="text/css" />
		<script type="text/javascript" src=<?php echo $module_path; ?>/imageflow.js></script>

	</head>
	<body>
		<div id="myImageFlow" class="imageflow">
			<img src=<?php echo $module_path; ?>/img/img1.png width="400" height="300" alt="Image 1" />
			<img src=<?php echo $module_path; ?>/img/img1.png alt="Image 1.2" />
			<br/>
			<?php
				foreach $img in $images
					echo $img;
			?>
		</div>

	</body>
</html>
