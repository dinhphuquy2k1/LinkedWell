<?php 

	get_header();
	
	get_sidebar('top');
	
	do_action('haaski_minimal_featured_posts');
	
	get_sidebar('header');
	
	if ( !savana_lite_setting('savana_lite_home_layout') || savana_lite_setting('savana_lite_home_layout') == 'col-md-4' ) {
				
		get_template_part('layouts/home', 'masonry'); 

	} else if ( strstr(savana_lite_setting('savana_lite_home_layout'), 'sidebar' )) { 

		get_template_part('layouts/home', 'sidebar'); 

	} else { 
		
		get_template_part('layouts/home', 'classic');
			
	}

	get_footer(); 
	
?>