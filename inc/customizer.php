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
				
			}

				
}
add_action( 'customize_register', 'seba_customizer' );
