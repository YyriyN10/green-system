<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action('carbon_fields_register_fields', 'green_system_our_products_post_fields');

	function green_system_our_products_post_fields(){
		Container::make( 'post_meta', __('Інформація про товар') )
		         ->where( function( $homeFields ) {
			         $homeFields->where( 'post_type', '=', 'our_products' );
			         $homeFields->where( 'post_template', '=', 'template-our-product-page.php' );
		         } )

		         ->add_fields( array(
			         Field::make_text('green_system_our_products_custom_title'.green_system_lang_prefix(), 'Примітка'),

			         Field::make( 'text', 'green_system_our_products_price'.green_system_lang_prefix(), 'Вартість товару'),
			         Field::make_complex('green_system_our_products_gallery'.green_system_lang_prefix(), 'Галірея зображень')
			              ->add_fields(array(
				              Field::make_image('image', 'Зображення')
			              )),
			         Field::make_radio('green_system_our_products_complete_or_characteristics'.green_system_lang_prefix(), 'Оберіть тип переліку')
			              ->set_options(array(
				              'complete' => 'Комплектація',
				              'characteristics' => 'Характеристики'
			              )),

			         Field::make_complex('green_system_our_products_complete'.green_system_lang_prefix(), 'Комплектація')
			              ->set_conditional_logic( array(
				              'relation' => 'AND',
				              array(
					              'field' => 'green_system_our_products_complete_or_characteristics'.green_system_lang_prefix(),
					              'value' => 'complete',
					              'compare' => '=',
				              )
			              ) )
			              ->add_fields(array(
				              Field::make_text('equipment', 'Обладнання'),
				              Field::make_text('number', 'Кількість')
			              )),

			         Field::make_complex('green_system_our_products_characteristics'.green_system_lang_prefix(), 'Характеристики')
			              ->set_conditional_logic( array(
				              'relation' => 'AND',
				              array(
					              'field' => 'green_system_our_products_complete_or_characteristics'.green_system_lang_prefix(),
					              'value' => 'characteristics',
					              'compare' => '=',
				              )
			              ) )
			              ->add_fields(array(
				              Field::make_text('equipment', 'Назва'),
				              Field::make_text('number', 'Значення')
			              )),
			         Field::make_complex('green_system_our_products_options_equipment'.green_system_lang_prefix(), 'Опційне облажнання')
			              ->add_fields(array(
				              Field::make_text('name', 'Назва облажнання'),
				              Field::make_text('price', 'Вартость')
			              )),
			         Field::make_complex('green_system_our_products_paid_separately'.green_system_lang_prefix(), 'Окремо сплачується')
			              ->add_fields(array(
				              Field::make_text('name', 'Назва послуги'),
				              Field::make_text('cost', 'Вартість послуги')
			              )),
			         Field::make_text('green_system_our_products_montage_time'.green_system_lang_prefix(), 'Строк виконання монтажних робіт'),

			         Field::make_select('green_system_solar_type_content_type'.green_system_lang_prefix(), 'Оберіть тип опису')
				         ->add_options( array(
					         'faq' => 'Питання/відповідь',
					         'description' => 'Опис',
				         ) ),
			         Field::make_text('green_system_our_products_faq_title'.green_system_lang_prefix(), 'Заголовок блоку "Питання/відповіді"')
				         ->set_conditional_logic( array(
					         'relation' => 'AND',
					         array(
						         'field' => 'green_system_solar_type_content_type'.green_system_lang_prefix(),
						         'value' => 'faq',
						         'compare' => '=',
					         )
				         ) ),
			         Field::make_complex('green_system_our_products_faq'.green_system_lang_prefix(), 'Питання/відповіді')
				         ->set_conditional_logic( array(
					         'relation' => 'AND',
					         array(
						         'field' => 'green_system_solar_type_content_type'.green_system_lang_prefix(),
						         'value' => 'faq',
						         'compare' => '=',
					         )
				         ) )
			              ->add_fields(array(
				              Field::make_text('question', 'Питання'),
				              Field::make_rich_text('answer', 'Відповідь')
			              )),
			         Field::make_text('green_system_our_products_description_title'.green_system_lang_prefix(), 'Заголовок блоку "Опис"')
			              ->set_conditional_logic( array(
				              'relation' => 'AND',
				              array(
					              'field' => 'green_system_solar_type_content_type'.green_system_lang_prefix(),
					              'value' => 'description',
					              'compare' => '=',
				              )
			              ) ),
			         Field::make_rich_text('green_system_our_products_description_text'.green_system_lang_prefix(), 'Текст опису')
			              ->set_conditional_logic( array(
				              'relation' => 'AND',
				              array(
					              'field' => 'green_system_solar_type_content_type'.green_system_lang_prefix(),
					              'value' => 'description',
					              'compare' => '=',
				              )
			              ) ),
			         Field::make_text('green_system_our_products_call_text'.green_system_lang_prefix(), 'Текст заклику надіслати заявку'),
			         Field::make_text('green_system_our_products_form_title'.green_system_lang_prefix(), 'Заголовок форми'),
			         Field::make_text('green_system_our_products_form_call'.green_system_lang_prefix(), 'Текст заклику'),
			         Field::make_text('green_system_our_products_form_kay'.green_system_lang_prefix(), 'Ключ чторнки для інтеграції')

		         ));
	}


