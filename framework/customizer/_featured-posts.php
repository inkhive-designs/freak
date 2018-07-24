<?php
//IMAGE GRID
function freak_customize_register_fp( $wp_customize ) {
	
	$wp_customize->add_section(
	    'freak_fc_grid',
	    array(
	        'title'     => __('Featured Posts','freak'),
	        'description'	=> __('<i>Set up a <b>Featured Area</b> showcasing Posts from a <b>Post Category</b></i>', 'freak'),
	        'priority'  => 36,
	    )
	);
	
	$wp_customize->add_setting(
	    'freak_grid_enable',
	    array( 'sanitize_callback' => 'freak_sanitize_checkbox' )
	);
	
	$wp_customize->add_control(
	    'freak_grid_enable', array(
	        'settings' 	=> 'freak_grid_enable',
	        'label'    	=> __( 'Enable for Home Page', 'freak' ),
	        'section'  	=> 'freak_fc_grid',
	        'type'     	=> 'checkbox',
	        'priority'	=> 1
	    )
	);
	
	
	$wp_customize->add_setting(
	    'freak_grid_title',
	    array( 
	   		'default'			=> '', 
	    	'sanitize_callback' => 'sanitize_text_field'
	    )
	);
	
	$wp_customize->add_control(
	    'freak_grid_title', array(
	        'settings' 		=> 'freak_grid_title',
	        'label'    		=> __( 'Title', 'freak' ),
	        'description'	=> __('Title for the Featured Poats Area', 'freak'),
	        'section'  		=> 'freak_fc_grid',
	        'type'     		=> 'text',
	    )
	);
	
	
	
	$wp_customize->add_setting(
	    'freak_grid_cat',
	    array(
		    'default'			=> '',
	    	'sanitize_callback' => 'freak_sanitize_category'
	    )
	);
	
	
	$wp_customize->add_control(
	    new WP_Customize_Category_Control(
	        $wp_customize,
	        'freak_grid_cat',
	        array(
	            'label'    => __('Select Posts Category for the Featured Area','freak'),
	            'settings' => 'freak_grid_cat',
	            'section'  => 'freak_fc_grid'
	        )
	    )
	);
	
	$wp_customize->add_setting(
	    'freak_grid_rows',
	    array( 
		    'default'			=> '0',
		    'sanitize_callback' => 'freak_sanitize_positive_number'
	    )
	);
	
	$wp_customize->add_control(
	    'freak_grid_rows', array(
	        'settings' => 'freak_grid_rows',
	        'label'    => __( 'Max No. of Posts in the Grid.', 'freak' ),
	        'description'	=> __('Enter 0 to Disable the Grid.', 'freak'),
	        'section'  => 'freak_fc_grid',
	        'type'     => 'number',
	    )
	);
	
}
add_action( 'customize_register', 'freak_customize_register_fp' );
