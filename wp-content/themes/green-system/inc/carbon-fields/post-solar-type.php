<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action('carbon_fields_register_fields', 'green_system_solar_type_post_fields');

	function green_system_solar_type_post_fields(){
		Container::make( 'post_meta', __('Інформація про товар') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'solar_types' );
			         $homeFields->where( 'post_template', '=', 'template-solar-type-page.php' );
		         } )

		         ->add_fields( array(
		         	 Field::make_text('green_system_solar_type_custom_title'.green_system_lang_prefix(), 'Кастомна назва продукту')
			             ->set_help_text('Щоб виділити ткуст жирним оберніть його тегом &#60;span&#62;жирний текст в середені&#60;/span&#62;'),
			         Field::make( 'text', 'green_system_solar_type_price'.green_system_lang_prefix(), 'Вартість товару'),
			         Field::make_complex('green_system_solar_type_gallery'.green_system_lang_prefix(), 'Галірея зображень')
										->add_fields(array(
											Field::make_image('image', 'Зображення')
										)),
			         Field::make_radio('green_system_solar_type_complete_or_characteristics'.green_system_lang_prefix(), 'Оберіть тип переліку')
									->set_options(array(
										'complete' => 'Комплектація',
										'characteristics' => 'Характеристики'
									)),

			         Field::make_complex('green_system_solar_type_complete'.green_system_lang_prefix(), 'Комплектація')
				         ->set_conditional_logic( array(
					         'relation' => 'AND',
					         array(
						         'field' => 'green_system_solar_type_complete_or_characteristics'.green_system_lang_prefix(),
						         'value' => 'complete',
						         'compare' => '=',
					         )
				         ) )
			            ->add_fields(array(
			            	Field::make_text('equipment', 'Обладнання'),
				            Field::make_text('number', 'Кількість')
			            )),

			         Field::make_complex('green_system_solar_type_characteristics'.green_system_lang_prefix(), 'Характеристики')
			              ->set_conditional_logic( array(
				              'relation' => 'AND',
				              array(
					              'field' => 'green_system_solar_type_complete_or_characteristics'.green_system_lang_prefix(),
					              'value' => 'characteristics',
					              'compare' => '=',
				              )
			              ) )
			              ->add_fields(array(
				              Field::make_text('equipment', 'Назва'),
				              Field::make_text('number', 'Значення')
			              )),
			         Field::make_complex('green_system_solar_type_options_equipment'.green_system_lang_prefix(), 'Опційне облажнання')
		              ->add_fields(array(
		              	Field::make_text('name', 'Назва облажнання'),
			              Field::make_text('price', 'Вартость')
		              )),
			         Field::make_complex('green_system_solar_type_paid_separately'.green_system_lang_prefix(), 'Окремо сплачується')
			              ->add_fields(array(
				              Field::make_text('name', 'Назва послуги'),
				              Field::make_text('cost', 'Вартість послуги')
			              )),
			         Field::make_text('green_system_solar_type_montage_time'.green_system_lang_prefix(), 'Строк виконання монтажних робіт'),
			         Field::make_text('green_system_solar_type_faq_title'.green_system_lang_prefix(), 'Заголовок блоку "Питання/відповіді"'),
			         Field::make_complex('green_system_solar_type_faq'.green_system_lang_prefix(), 'Питання/відповіді')
			              ->add_fields(array(
				              Field::make_text('question', 'Питання'),
				              Field::make_rich_text('answer', 'Відповідь')
			              )),
			         Field::make_text('green_system_solar_type_call_text'.green_system_lang_prefix(), 'Текст заклику надіслати заявку'),
			         Field::make_text('green_system_solar_type_form_title'.green_system_lang_prefix(), 'Заголовок форми'),
			         Field::make_text('green_system_solar_type_form_call'.green_system_lang_prefix(), 'Текст заклику'),
			         Field::make_text('green_system_solar_type_form_kay'.green_system_lang_prefix(), 'Ключ чторнки для інтеграції')

		         ));
	}


