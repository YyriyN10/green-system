<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action('carbon_fields_register_fields', 'green_system_home_page_fields');

	function green_system_home_page_fields(){
		Container::make( 'post_meta', __('Головний екран') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-home.php' );
		         } )

		         ->add_fields( array(
			         Field::make_text('green_system_home_main_screen_title'.green_system_lang_prefix(), 'Головний заголовок')
						->set_help_text('Щоб виділити ткуст жовтим оберніть його тегом &#60;span&#62;жовтий текст в середені&#60;/span&#62;'),
			         Field::make_text('green_system_home_main_screen_subtitle'.green_system_lang_prefix(), 'Підзаголовок'),
			         Field::make_image('green_system_home_main_screen_image'.green_system_lang_prefix(), 'Зображення')
			            ->set_value_type('url')
		         ));

		Container::make( 'post_meta', __('Переваги') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-home.php' );
		         } )

		         ->add_fields( array(
			         Field::make_complex('green_system_home_advantages_list'.green_system_lang_prefix(), 'Перелік переваг')
			            ->add_fields(array(
			            	Field::make_select('name_type', 'Значення чи відео?')
								->set_options(array(
									'set_name' => 'Значення',
									'set_video' => 'Відео'
								)),
			            	Field::make_text('name', 'Значення')
								->set_conditional_logic(array(
									'relation' => 'AND',
									array(
										'field' => 'name_type',
										'value' => 'set_name',
										'compare' => '=',
									)
								)),
				            Field::make_file('video', 'Відео')
				                 ->set_value_type('url')
				                 ->set_conditional_logic(array(
					                 'relation' => 'AND',
					                 array(
						                 'field' => 'name_type',
						                 'value' => 'set_video',
						                 'compare' => '=',
					                 )
				                 )),
				            Field::make_image('video_poster', 'Посткр для відео')
				                 ->set_conditional_logic(array(
					                 'relation' => 'AND',
					                 array(
						                 'field' => 'name_type',
						                 'value' => 'set_video',
						                 'compare' => '=',
					                 )
				                 )),
				            Field::make_text('text', 'Опис')

			            ))

		         ));

		Container::make( 'post_meta', __('Про нас') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-home.php' );
		         } )

		         ->add_fields( array(
		         	    Field::make_text('green_system_home_about_us_block_title'.green_system_lang_prefix(), 'Заголовок блоку'),
			            Field::make_text('green_system_home_about_us_subtitle'.green_system_lang_prefix(), 'Підзаголовок'),
			            Field::make_rich_text('green_system_home_about_us_text'.green_system_lang_prefix(), 'Текст блоку'),

		         ));

		Container::make( 'post_meta', __('Рішення для вас') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-home.php' );
		         } )

		         ->add_fields( array(
			         Field::make_text('green_system_home_solution_for_you_block_title'.green_system_lang_prefix(), 'Заголовок блоку'),
			         Field::make_text('green_system_home_solution_for_you_subtitle'.green_system_lang_prefix(), 'Підзаголовок блоку'),
			         Field::make_complex('green_system_home_solution_for_you_list'.green_system_lang_prefix(), 'Перелік рішень')
			              ->add_fields(array(
			              	  Field::make_text('name', 'Назва рішення'),
				              Field::make_image('image', 'Зображення'),
				              Field::make_textarea('description', 'Короткий опис')
								->set_rows(3),
				              Field::make_text('page_link', 'Посилання на сторінкау')
				                ->set_attribute('type', 'url')

			              ))

		         ));

		Container::make( 'post_meta', __('Чому ми?') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-home.php' );
		         } )

		         ->add_fields( array(
			         Field::make_text('green_system_home_why_us_block_title'.green_system_lang_prefix(), 'Заголовок блоку'),
			         Field::make_complex('green_system_home_why_us_advantage_list'.green_system_lang_prefix(), 'Перелік переваг')
			            ->add_fields(array(
			            	Field::make_text('name', 'Назва переваги'),
			            	Field::make_complex('sub_advantages_list', 'Що входить до переваги')
								->add_fields(array(
									Field::make_text('text', 'Текст')
								)),
			            	Field::make_image('icon', 'Іконка переваги')
				                ->set_value_type('url')
			            )),
			         Field::make_complex('green_system_home_why_us_image_gallery'.green_system_lang_prefix(), 'Галірея зображень')
			            ->add_fields(array(
			            	Field::make_image('image', 'Зображення')
			            ))
		         ));

		Container::make( 'post_meta', __('Форма зворотнього звʼязку') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-home.php' );
		         } )

		         ->add_fields( array(
			         Field::make_text('green_system_home_form_block_title'.green_system_lang_prefix(), 'Заголовок форми'),
			         Field::make_text('green_system_home_form_text'.green_system_lang_prefix(), 'Текст заклику у формі'),
		         ));
	}