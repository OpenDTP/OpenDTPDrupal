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
			<br/>
			<?php
/* 				foreach ($images as $img)
					echo $img; */
			?>
		</div>

	</body>
</html>
