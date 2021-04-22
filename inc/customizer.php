<?php
/**
 * 
 *seba theme customizer
 * @package seba
 */


function seba_customizer($wp_customize){

    //--------------------------------- Copyright Section--------------------------------------------------

	$wp_customize->add_section(
		'sec_copyright', array(
			'title'			=> 'Copyright Settings',
			'description'	=> 'Copyright Section'
		)
	);

			// Field i - Copyright Text Box
			$wp_customize->add_setting(
				'set_copyright', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_copyright', array(
					'label'			=> 'Copyright',
					'description'	=> 'Please, add your copyright information here',
					'section'		=> 'sec_copyright',
					'type'			=> 'text'
				)
			);
	 //--------------------------------- Slider Section--------------------------------------------------
	 $wp_customize->add_section(
		'sec_slider', array(
			'title'			=> 'Set Slider ',
			'description'	=> 'Set Slider'
		)
	);
			

			
			for ($i=1; $i < 4; $i++) { 

				// Field I - Slider page Number i
			$wp_customize->add_setting(
				'set_slider_page'.$i, array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_slider_page'.$i, array(
					'label'			=> 'Set Slider page '.$i,
					'description'	=> 'chooce you page from list',
					'section'		=> 'sec_slider',
					'type'			=> 'dropdown-pages'
				)
			);

			// Field 2 - Slider button  text number3
			$wp_customize->add_setting(
				'set_slider_button_text'.$i, array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_text'.$i, array(
					'label'			=> 'Button text for page '.$i,
					'description'	=> 'Button text for page '.$i,
					'section'		=> 'sec_slider',
					'type'			=> 'text'
				)
			);
			// Field 3 - Slider URL  PAGE3
			$wp_customize->add_setting(
				'set_slider_URL'.$i, array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'esc_url_raw'
				)
			);

			$wp_customize->add_control(
				'set_slider_URL'.$i, array(
					'label'			=> 'page 3 URL',
					'description'	=> 'ENTER url for page '.$i,
					'section'		=> 'sec_slider',
					'type'			=> 'url'
				)
			);
				
			}//end for

		//--------------------------------- Home page settings--------------------------------------------------
		$wp_customize->add_section(
			'sec_home_page', array(
			'title'			=> 'Home page products and blog settings ',
			'description'	=> 'Home Page Section'
			)
		);

		
		//popular product shortcode in home page

		$wp_customize->add_Setting(
			'set_popular_products_heading',array(
				'type'     			=>'theme_mod',
				'default'  			=>'',
				'sanitize_calback'  =>'sanitize_text_field'
			)
		);
		$wp_customize->add_control(
			'set_popular_products_heading',array(
				'label' 			=>'popular product heading',
				'description' 		=>'write popular product heading',
				'section' 			=>'sec_home_page',
				'type'    			=>'text'
			)
		);

		$wp_customize->add_setting(
			'set_popular_max_num', array(
				'type'					=> 'theme_mod',
				'default'				=> '',
				'sanitize_callback'		=> 'absint'
			)
		);
		$wp_customize->add_control(
			'set_popular_max_num', array(
				'label'			=> 'popular products Max numbers',
				'description'	=> 'popular products Max numbers',
				'section'		=> 'sec_home_page',
				'type'			=> 'number'
			)
		);
		$wp_customize->add_setting(
			'set_popular_col_num' ,array(
				'type'         		=>'theme_mod',
				'default'      		=>'',
				'sanitize_callback' =>'absint',
			)
		);

		$wp_customize->add_control(
			'set_popular_col_num',array(
				'label'   		=>'popular products max Column',
				'description'	=>'popular products max Column',
				'section'       =>'sec_home_page',
				'type'			=> 'number'
			)
		);
		//new arrival products shortcode in home page
		$wp_customize->add_Setting(
			'set_new_arrival_products_heading',array(
				'type'     			=>'theme_mod',
				'default'  			=>'',
				'sanitize_calback'  =>'sanitize_text_field'
			)
		);
		$wp_customize->add_control(
			'set_new_arrival_products_heading',array(
				'label' 			=>'new arrival product heading',
				'description' 		=>'write new_arrival products heading',
				'section' 			=>'sec_home_page',
				'type'    			=>'text'
			)
		);
			
		$wp_customize->add_setting(
			'set_arrival_max_num', array(
				'type'					=> 'theme_mod',
				'default'				=> '',
				'sanitize_callback'		=> 'absint'
			)
		);
		$wp_customize->add_control(
			'set_arrival_max_num', array(
				'label'			=> 'new arrival products Max numbers',
				'description'	=> ' new arrival products Max numbers',
				'section'		=> 'sec_home_page',
				'type'			=> 'number'
			)
		);
		$wp_customize->add_setting(
			'set_arrival_col_num' ,array(
				'type'         		=>'theme_mod',
				'default'      		=>'',
				'sanitize_callback' =>'absint',
			)
		);
		$wp_customize->add_control(
			'set_arrival_col_num',array(
				'label'   		=>'New arrival products max Column',
				'description'	=>'New arrival products max Column',
				'section'       =>'sec_home_page',
				'type'			=> 'number'
			)
		);
		//Deal of the week in home page	
		$wp_customize->add_setting(
			'set_deal_show', array(
				'type'					=> 'theme_mod',
				'default'				=> '',
				'sanitize_callback'		=> 'fancy_sanitize_checkbox'
			)
		);
		$wp_customize->add_control(
			'set_deal_show', array(
				'label'			=> 'Show deal of the Deal of the week ',
				'section'		=> 'sec_home_page',
				'type'			=> 'checkbox'
			)
		);	
			
		$wp_customize->add_setting(
			'set_deal', array(
				'type'					=> 'theme_mod',
				'default'				=> '',
				'sanitize_callback'		=> 'absint'
			)
		);
		$wp_customize->add_control(
			'set_deal', array(
				'label'			=> 'Deal of the week product ID',
				'description'	=> 'Product ID TO display',
				'section'		=> 'sec_home_page',
				'type'			=> 'number'
			)
		);	

				
}
add_action( 'customize_register', 'seba_customizer' );
function fancy_sanitize_checkbox($checked){
	return ((isset($checked)&&true==$checked)?true:false);

}