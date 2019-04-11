<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

	<!--
	
	 __  __     __     __  __     __  __     __    __     ______    
	/\ \/\ \   /\ \   /\ \/\ \   /\_\_\_\   /\ "-./  \   /\  ___\   
	\ \ \_\ \  \ \ \  \ \ \_\ \  \/_/\_\/_  \ \ \-./\ \  \ \  __\   
	 \ \_____\  \ \_\  \ \_____\   /\_\/\_\  \ \_\ \ \_\  \ \_____\ 
	  \/_____/   \/_/   \/_____/   \/_/\/_/   \/_/  \/_/   \/_____/ 
	                                                                
	-->

	<?php wp_head(); ?>

</head>
<body>
	
	<h1>UI/UX</h1>

	<div id="particles"></div>

	<?php wp_footer(); ?>
		
</body>
</html>