<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title><?php echo $theme_data['title']; ?></title>
		<?php echo $theme_data['metadata']; ?>	
	</head>
	<body>
		<div class="page">
			<?php echo theme_partial('header');?>
			<div class="body">
				<?php echo $theme_content;?>
			</div>
			<?php echo theme_partial('footer');?>
		</div>
	</body>
</html>  