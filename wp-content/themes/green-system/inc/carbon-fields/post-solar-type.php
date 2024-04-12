<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action('carbon_fields_register_fields', 'green_system_solar_type_post_fields');

	function green_system_solar_type_post_fields(){
		Container::make( 'post_meta', __('Main screen') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'solar_types' );
			         $homeFields->where( 'post_template', '=', 'template-solar-type-page.php' );
		         } )

		         ->add_fields( array(
			         Field::make( 'text', 'green_system_solar_type_price'.green_system_lang_prefix(), 'Вартість товару'),
			         Field::make_complex('green_system_solar_type_gallery'.green_system_lang_prefix(), 'Галірея зображень')
						->add_fields(array(
							Field::make_image('image', 'Зображення')
						)),
			         Field::make_image('ua_teens_team_men_main_screen_pic'.ua_teens_lang_prefix(), 'Зображення на головному екрані')
		         ));






	}
