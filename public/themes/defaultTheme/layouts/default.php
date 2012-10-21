<!DOCTYPE html>
<html>
	<title><?php echo $theme_data['title']; ?></title>
	<?php echo $theme_data['metadata']; ?>
	
</html>
<body>
	<?php echo theme_partial("header"); //$theme_header; // ?>
	
	<div id="content_container" class='container-fluid'>
	    <?php echo $theme_content; ?>
	</div>
	
	<?php echo theme_partial("footer", array('footer_msg'=>'footer msg from default layout')); ?>
</body>
</html>