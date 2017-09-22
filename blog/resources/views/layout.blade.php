<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../styles.css">
		<title>СУПЕР-ВИЗИТКА</title>
	</head>
	<body>
		<header id="header">
			<div id="logo">
				<img src="logo.png">
			</div>
		</header>
		<div id="content">
			<?php 
				if (isset($content)) {
					include $content;	
				} else {
					echo "U R wrong<br/>(no content)<br/>";
					for ($i=0; $i < 10; $i++) { 
						echo $i;
						echo "<br/>";
					}
				}
			 ?>
		</div>
		<div id="footer">
			<div id="logo-footer">
				<img src="logo.png">
			</div>
		</div>
	</body>
</html>