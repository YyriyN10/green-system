<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action('carbon_fields_register_fields', 'green_system_car_charging_page_fields');

	function green_system_car_charging_page_fields(){
		Container::make( 'post_meta', __('Головний екран') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-car-charging-stantion.php' );
		         } )

		         ->add_fields( array(
			         Field::make_text('green_system_car_charging_main_screen_title'.green_system_lang_prefix(), 'Головний заголовок'),
			         Field::make_text('green_system_car_charging_main_screen_text'.green_system_lang_prefix(), 'Текст'),
			         Field::make_image('green_system_car_charging_main_screen_image'.green_system_lang_prefix(), 'Фонове зображення')
			              ->set_type('image')
			              ->set_value_type('url')
		         ));

		Container::make( 'post_meta', __('Чому ми') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-car-charging-stantion.php' );
		         } )

		         ->add_fields( array(
			         Field::make_text('green_system_car_charging_why_us_title'.green_system_lang_prefix(), 'Головний заголовок'),
			         Field::make_complex('green_system_car_charging_why_us_advantages_list'.green_system_lang_prefix(), 'Перелік переваг')
		                ->add_fields(array(
		                	Field::make_image('icon', 'Іконка')
			                  ->set_type('image')
		                    ->set_value_type('url'),
			                Field::make_rich_text('text', 'Текст')
		                )),
			         Field::make_image('green_system_car_charging_why_us_image'.green_system_lang_prefix(), 'Постер для відео')
			              ->set_type('image'),

			         Field::make_radio('green_system_car_charging_why_us_video_type'.green_system_lang_prefix(), 'Оберіть тип відео')
			              ->set_options(array(
				              'video_file' => 'Відео файл',
				              'video_youtube' => 'Відео з Youtube'
			              )),

			         Field::make_image('green_system_car_charging_why_us_video'.green_system_lang_prefix(), 'Відео')
			              ->set_type('video')
			              ->set_value_type('url')
				         ->set_conditional_logic(array(
					         'relation' => 'AND',
					         array(
						         'field' => 'green_system_car_charging_why_us_video_type'.green_system_lang_prefix(),
						         'value' => 'video_file',
						         'compare' => '=',
					         )
				         )),

			         Field::make_text('youtybe_video_id', 'ID відео з Youtube')
			              ->set_help_text('Приклад посилання https://www.youtube.com/watch?v=A2hOoCd1xPU де ID це A2hOoCd1xPU')
			              ->set_conditional_logic(array(
				              'relation' => 'AND',
				              array(
					              'field' => 'name_type',
					              'value' => 'set_video',
					              'compare' => '=',
				              ),
				              array(
					              'field' => 'video_type',
					              'value' => 'video_youtube',
					              'compare' => '=',
				              )
			              )),
		         ));

		Container::make( 'post_meta', __('Зарядні станції вдома') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-car-charging-stantion.php' );
		         } )

		         ->add_fields( array(
			         Field::make_text('green_system_car_charging_home_stations_title'.green_system_lang_prefix(), 'Головний заголовок'),
			         Field::make_complex('green_system_car_charging_home_stations_advantages_list'.green_system_lang_prefix(), 'Перелік переваг')
			              ->add_fields(array(
			              	Field::make_text('name', 'Назва'),
				              Field::make_rich_text('text', 'Текст'),
				              Field::make_image('icon', 'Іконка')
				                   ->set_type('image')
				                   ->set_value_type('url'),
			              )),
		         ));

		Container::make( 'post_meta', __('Заклик до дії') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-car-charging-stantion.php' );
		         } )

		         ->add_fields( array(
			         Field::make_text('green_system_car_charging_call_title'.green_system_lang_prefix(), 'Головний заголовок'),
			         Field::make_rich_text('green_system_car_charging_call_text'.green_system_lang_prefix(), 'Текст заклику')
		         ));

		Container::make( 'post_meta', __('Можливість для розвитрку бізнесу') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-car-charging-stantion.php' );
		         } )

		         ->add_fields( array(
			         Field::make_text('green_system_car_charging_business_opportunity_title'.green_system_lang_prefix(), 'Головний заголовок'),
			         Field::make_rich_text('green_system_car_charging_business_opportunity_list'.green_system_lang_prefix(), 'Перелік можливостей'),
			         Field::make_image('green_system_car_charging_business_opportunity_image'.green_system_lang_prefix(), 'Зображення блоку')
			          ->set_type('image')
		         ));

		Container::make( 'post_meta', __('Питання та відповіді') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-car-charging-stantion.php' );
		         } )

		         ->add_fields( array(
			         Field::make_text('green_system_car_charging_faq_title'.green_system_lang_prefix(), 'Головний заголовок'),
			         Field::make_complex('green_system_car_charging_faq_list'.green_system_lang_prefix(), 'Перелік питань')
			              ->add_fields(array(
			              	Field::make_text('question', 'Питання'),
				              Field::make_rich_text('answer', 'Відповідь')
			              )),

		         ));

		Container::make( 'post_meta', __('Форма зворотнього звʼязку') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-car-charging-stantion.php' );
		         } )

		         ->add_fields( array(
			         Field::make_text('green_system_car_charging_form_block_title'.green_system_lang_prefix(), 'Заголовок форми'),
			         Field::make_text('green_system_car_charging_form_text'.green_system_lang_prefix(), 'Текст заклику у формі'),
			         Field::make_text('green_system_car_charging_form_kay'.green_system_lang_prefix(), 'Ключ чторнки для інтеграції')
		         ));


	}
