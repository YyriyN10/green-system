<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action('carbon_fields_register_fields', 'green_system_power_plant_page_fields');

	function green_system_power_plant_page_fields(){
		Container::make( 'post_meta', __('Головний екран') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-power-plant.php' );
		         } )

		         ->add_fields( array(
			         Field::make_text('green_system_power_plant_main_screen_title'.green_system_lang_prefix(), 'Головний заголовок')
						->set_help_text('Щоб виділити ткуст жовтим оберніть його тегом &#60;span&#62;жовтий текст в середені&#60;/span&#62;'),
			         Field::make_text('green_system_power_plant_main_screen_subtitle'.green_system_lang_prefix(), 'Підзаголовок'),
			         Field::make_image('green_system_power_plant_main_screen_image'.green_system_lang_prefix(), 'Зображення')
				         ->set_value_type('url')
		         ));


		Container::make( 'post_meta', __('Переваги') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-power-plant.php' );
		         } )

		         ->add_fields( array(
			         Field::make_complex('green_system_power_plant_advantages_list'.green_system_lang_prefix(), 'Перелік переваг')
			              ->add_fields(array(

				              Field::make_text('text', 'Текст'),
				              Field::make_image('icon', 'Іконка')
				                ->set_value_type('url')

			              ))

		         ));

		Container::make( 'post_meta', __('Ідеальне рішення якщо') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-power-plant.php' );
		         } )

		         ->add_fields( array(
		         	 Field::make_text('green_system_power_plant_ideal_solution_block_title'.green_system_lang_prefix(), 'Заголовок блоку'),
			         Field::make_complex('green_system_power_plant_ideal_solution_list'.green_system_lang_prefix(), 'Перелік умов')
			              ->add_fields(array(

				              Field::make_text('name', 'Назва'),
				              Field::make_textarea('text', 'Опис')
				                ->set_rows(3),
				              Field::make_image('icon', 'Іконка')
				                   ->set_value_type('url')

			              ))

		         ));

		Container::make( 'post_meta', __('Що ви отримаєте') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-power-plant.php' );
		         } )

		         ->add_fields( array(
			         Field::make_text('green_system_power_plant_what_you_get_block_title'.green_system_lang_prefix(), 'Заголовок блоку'),
			         Field::make_image('green_system_power_plant_what_you_get_image'.green_system_lang_prefix(), 'Зображення блоку'),
			         Field::make_complex('green_system_power_plant_what_you_get_list'.green_system_lang_prefix(), 'Перелік переваг')
			              ->add_fields(array(

				              Field::make_text('name', 'Назва'),
				              Field::make_textarea('text', 'Короткий опис')
				                ->set_rows(3)

			              ))

		         ));

		Container::make( 'post_meta', __('Заклик') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-power-plant.php' );
		         } )

		         ->add_fields( array(
			         Field::make_text('green_system_power_plant_call_block_title'.green_system_lang_prefix(), 'Заголовок блоку'),
			         Field::make_rich_text('green_system_power_plant_call_text'.green_system_lang_prefix(), 'Текст блоку'),
			         Field::make_image('green_system_power_plant_call_image'.green_system_lang_prefix(), 'Зображення блоку')

		         ));

		Container::make( 'post_meta', __('Особливості') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-power-plant.php' );
		         } )

		         ->add_fields( array(
			         Field::make_text('green_system_power_plant_features_block_title'.green_system_lang_prefix(), 'Заголовок блоку'),
			         Field::make_text('green_system_power_plant_features_description'.green_system_lang_prefix(), 'Текст прівʼю'),
			         Field::make_rich_text('green_system_power_plant_features_text'.green_system_lang_prefix(), 'Повний опис')

		         ));

		Container::make( 'post_meta', __('Форма зворотнього звʼязку') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'page' );
			         $homeFields->where( 'post_template', '=', 'template-power-plant.php' );
		         } )

		         ->add_fields( array(
			         Field::make_text('green_system_power_plant_form_block_title'.green_system_lang_prefix(), 'Заголовок форми'),
			         Field::make_text('green_system_power_plant_form_text'.green_system_lang_prefix(), 'Текст заклику у формі'),
		         ));
	}
