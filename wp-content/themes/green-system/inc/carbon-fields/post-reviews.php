<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action('carbon_fields_register_fields', 'green_system_reviews_type_post_fields');

	function green_system_reviews_type_post_fields(){
		Container::make( 'post_meta', __('Відгук') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'reviews' );
		         } )

		         ->add_fields( array(
		         	 Field::make_select('green_system_reviews_type_review_type'.green_system_lang_prefix(), 'Оберіть тип відгуку')
						->set_options(array(
							'set_video' => 'Відео відгук',
							'set_text' => 'Текстовий відгук'
						)),
			         Field::make_file('green_system_reviews_type_video'.green_system_lang_prefix(), 'Відео файл з відгуком')
						 ->set_value_type('url')
				         ->set_conditional_logic( array(
					         'relation' => 'AND',
					         array(
						         'field' => 'green_system_reviews_type_review_type'.green_system_lang_prefix(),
						         'value' => 'set_video',
						         'compare' => '=',
					         )
				         ) ),
			         Field::make_rich_text('green_system_reviews_type_text'.green_system_lang_prefix(), 'Текст відгуку')
				         ->set_conditional_logic( array(
					         'relation' => 'AND',
					         array(
						         'field' => 'green_system_reviews_type_review_type'.green_system_lang_prefix(),
						         'value' => 'set_text',
						         'compare' => '=',
					         )
				         ) ),
			         Field::make_text('green_system_reviews_type_city'.green_system_lang_prefix(), 'Місто')

		         ));
	}
