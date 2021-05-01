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
			'title'			=> __('Copyright Settings','seba'),
			'description'	=> __('Copyright Section','seba')
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
					'label'			=> __('Copyright','seba'),
					'description'	=>__( 'Please, add your copyright information here','seba'),
					'section'		=> 'sec_copyright',
					'type'			=> 'text'
				)
			);
	 //--------------------------------- Slider Section--------------------------------------------------
	 $wp_customize->add_section(
		'sec_slider', array(
			'title'			=> __( 'Set Slider ','seba'),
			'description'	=>  __('Set Slider','seba'),
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
					'label'			=>  __('Set Slider page '.$i,'seba'),
					'description'	=>  __('chooce you page from list','seba'),
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
					'label'			=> __('Button text for page '.$i,'seba'),
					'description'	=> __('Button text for page '.$i,'seba'),
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
					'label'			=> __('page 3 URL','seba'),
					'description'	=> __('ENTER url for page '.$i,'seba'),
					'section'		=> 'sec_slider',
					'type'			=> 'url'
				)
			);
				
			}//end for

		//--------------------------------- Home page settings--------------------------------------------------
		$wp_customize->add_section(
			'sec_home_page', array(
			'title'			=> __('Home page products and blog settings ','seba'),
			'description'	=> __('Home Page Section','seba'),
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
				'label' 			=>__('popular product heading','seba'),
				'description' 		=>__('write popular product heading','seba'),
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
				'label'			=>__( 'popular products Max numbers','seba'),
				'description'	=>__( 'popular products Max numbers','seba'),
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
				'label'   		=>__('popular products max Column','seba'),
				'description'	=>__('popular products max Column','seba'),
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
				'label' 			=>__('new arrival product heading','seba'),
				'description' 		=>__('write new_arrival products heading','seba'),
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
				'label'			=> __('new arrival products Max numbers','seba'),
				'description'	=> __(' new arrival products Max numbers','seba'),
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
				'label'   		=>__('New arrival products max Column','seba'),
				'description'	=>__('New arrival products max Column','seba'),
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
				'label'			=> __('Show deal of the Deal of the week ','seba'),
				'section'		=> __('sec_home_page','seba'),
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
				'label'			=> __('Deal of the week product ID','seba'),
				'description'	=>__( 'Product ID TO display','seba'),
				'section'		=> 'sec_home_page',
				'type'			=> 'number'
			)
		);
					//blog heading  in home page
		$wp_customize->add_Setting(
			'set_blog_heading',array(
				'type'     			=>'theme_mod',
				'default'  			=>'',
				'sanitize_calback'  =>'sanitize_text_field'
			)
		);
		$wp_customize->add_control(
			'set_blog_heading',array(
				'label' 			=>__('Blog heading','seba'),
				'description' 		=>__('Blog heading','seba'),
				'section' 			=>'sec_home_page',
				'type'    			=>'text'
			)
		);
		
		

				
}
add_action( 'customize_register', 'seba_customizer' );
function fancy_sanitize_checkbox($checked){
	return ((isset($checked)&&true==$checked)?true:false);

}