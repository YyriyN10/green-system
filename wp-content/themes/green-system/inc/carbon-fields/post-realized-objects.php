<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action('carbon_fields_register_fields', 'green_system_realized_objects_post_fields');

	function green_system_realized_objects_post_fields(){
		Container::make( 'post_meta', __('Інформація про обʼєкт') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'realized_objects' );
			         $homeFields->where( 'post_template', '=', 'template-realized-objects-page.php' );
		         } )

		         ->add_fields( array(
		         	 Field::make_text('green_system_realized_objects_location'.green_system_lang_prefix(), 'Назва локації'),
		         	 Field::make_text('green_system_realized_objects_date'.green_system_lang_prefix(), 'Дата реалізації'),
			         Field::make_complex('green_system_realized_objects_advantages'.green_system_lang_prefix(), 'Перелік переваг')
						->add_fields(array(
							Field::make_text('text', 'Опис переваги'),
							Field::make_text('sense', 'Значення переваги')
						)),
			         Field::make_rich_text('green_system_realized_objects_description'.green_system_lang_prefix(), 'Опис обʼєкту'),
			         Field::make_complex('green_system_realized_objects_complete_list'.green_system_lang_prefix(), 'Перелік викоростивуваного обладнання')
						->add_fields(array(
							Field::make_image('image', 'Зображення обладнання'),
							Field::make_text('name', 'Назва обладнання')
						)),
			         Field::make_complex('green_system_realized_objects_completed_works'.green_system_lang_prefix(), 'Перелік виконаних робіт')
			              ->add_fields(array(
				              Field::make_textarea('name', 'Опис роботи')
				                   ->set_rows(2)
			              )),

			         Field::make_complex('green_system_realized_objects_guarantees_list'.green_system_lang_prefix(), 'Перелік гарантій')
							->add_fields(array(
								Field::make_text('text', 'Текст гарантії')
							)),


			         Field::make_complex('green_system_realized_objects_gallery'.green_system_lang_prefix(), 'Галірея зображень')
			              ->add_fields(array(
				              Field::make_image('image', 'Зображення')
			              )),

			         Field::make_text('green_system_realized_objects_form_title'.green_system_lang_prefix(), 'Заголовок форми'),
			         Field::make_text('green_system_realized_objects_form_call'.green_system_lang_prefix(), 'Текст заклику форми'),



		         ));

	}
