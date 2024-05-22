<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * Register a F.A.Q post type.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/register_post_type
	 *
	 * @since green_system 1.0
	 */

	function faq_post_type() {

		$labels = array(
			'name'               => _x( 'F.A.Q', 'post type general name', 'green_system' ),
			'singular_name'      => _x( 'F.A.Q', 'post type singular name', 'green_system' ),
			'menu_name'          => _x( 'F.A.Q', 'admin menu', 'green_system' ),
			'name_admin_bar'     => _x( 'F.A.Q', 'add new on admin bar', 'green_system' ),
			'add_new'            => _x( 'Додати нове', 'actions', 'green_system' ),
			'add_new_item'       => __( 'Додати нове питання', 'green_system' ),
			'new_item'           => __( 'Новие питання', 'green_system' ),
			'edit_item'          => __( 'Редагувати питання', 'green_system' ),
			'view_item'          => __( 'Дивитись питання', 'green_system' ),
			'all_items'          => __( 'Всі питання', 'green_system' ),
			'search_items'       => __( 'Шукати питання', 'green_system' ),
			'parent_item_colon'  => __( 'Батько питання:', 'green_system' ),
			'not_found'          => __( 'Питання не знайдено', 'green_system' ),
			'not_found_in_trash' => __( 'У кошику питання не знайдно', 'green_system' )
		);

		$args = array(
			'labels'             => $labels,
			'taxonomies'         => [],
			'description'        => __( 'Description.', 'faq' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'faq' ),
			'capability_type'    => 'post',
			'has_archive'        => false,
			'hierarchical'       => false,
			'exclude_from_search'=> false,
			'menu_position'      => 5,
			'menu_icon'          => 'dashicons-list-view',
			'supports'           => array( 'title', 'editor',)
		);

		register_post_type( 'faq', $args );
	}

	add_action( 'init', 'faq_post_type' );

	/**
	 * Register a solar power types post type.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/register_post_type
	 *
	 * @since green_system 1.0
	 */

	function solar_types_post_type() {

		$labels = array(
			'name'               => _x( 'Електростанції', 'post type general name', 'green_system' ),
			'singular_name'      => _x( 'Електростанції', 'post type singular name', 'green_system' ),
			'menu_name'          => _x( 'Електростанції', 'admin menu', 'green_system' ),
			'name_admin_bar'     => _x( 'Електростанції', 'add new on admin bar', 'green_system' ),
			'add_new'            => _x( 'Додати нову електростанцію', 'actions', 'green_system' ),
			'add_new_item'       => __( 'Додати нову електростанцію', 'green_system' ),
			'new_item'           => __( 'Нова електростанція', 'green_system' ),
			'edit_item'          => __( 'Редагувати електростанцію', 'green_system' ),
			'view_item'          => __( 'Дивитись електростанцію', 'green_system' ),
			'all_items'          => __( 'Всі електростанції', 'green_system' ),
			'search_items'       => __( 'Шукати електростанцію', 'green_system' ),
			'parent_item_colon'  => __( 'Батько електростанції:', 'green_system' ),
			'not_found'          => __( 'Електростанцію не знайдено', 'green_system' ),
			'not_found_in_trash' => __( 'У кошику електростанції не знайдно', 'green_system' )
		);

		$args = array(
			'labels'             => $labels,
			'taxonomies'         => ['solar_types_tax'],
			'description'        => __( 'Description.', 'solar_types' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'solar_types' ),
			'capability_type'    => 'post',
			'has_archive'        => false,
			'hierarchical'       => false,
			'exclude_from_search'=> false,
			'menu_position'      => 6,
			'menu_icon'          => 'dashicons-admin-multisite',
			'supports'           => array( 'title', 'thumbnail')
		);

		register_post_type( 'solar_types', $args );
	}

	add_action( 'init', 'solar_types_post_type' );

	add_action( 'init', 'solar_types_taxonomy' );
	function solar_types_taxonomy(){

		register_taxonomy('solar_types_tax', 'solar_types', array(
			'label'                 => 'solar_types_tax', // определяется параметром $labels->name
			'labels'                => array(
				'name'              => 'Типи електростанцій',
				'singular_name'     => 'Тип електростанції',
				'search_items'      => 'Пошук типу електростанції',
				'all_items'         => 'Всі типи електростанцій',
				'view_item '        => 'View Genre',
				'parent_item'       => 'Parent Genre',
				'parent_item_colon' => 'Parent Genre:',
				'edit_item'         => 'Редагувати тип електростанцій',
				'update_item'       => 'Оновити типу електростанцій',
				'add_new_item'      => 'Додати тип електростанції',
				'new_item_name'     => 'New Genre Name',
				'menu_name'         => 'Типи електростанцій',
			),
			'description'           => 'solar_types_tax', // описание таксономии
			'public'                => true,
			'publicly_queryable'    => true, // равен аргументу public
			'show_in_nav_menus'     => true, // равен аргументу public
			'show_ui'               => true, // равен аргументу public
			'show_in_menu'          => true, // равен аргументу show_ui
			'show_tagcloud'         => true, // равен аргументу show_ui
			'show_in_rest'          => true, // добавить в REST API
			'rest_base'             => true, // $taxonomy
			'hierarchical'          => true,
			'supports'           => array( 'title', 'thumbnail', 'revisions' ),

			/*'update_count_callback' => '_update_post_term_count',*/
			'rewrite'               => array('slug' => 'solar_types'),
			'query_var'             => $taxonomy, // название параметра запроса
			'capabilities'          => array(),
			'meta_box_cb'           => null, // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
			'show_admin_column'     => true, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
			/*'_builtin'              => false,*/
			'show_in_quick_edit'    => true, // по умолчанию значение show_ui
		) );
	}

	/**
	 * Register a realized objects post type.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/register_post_type
	 *
	 * @since green_system 1.0
	 */

	function realized_objects_post_type() {

		$labels = array(
			'name'               => _x( 'Реалізовані обʼєкти', 'post type general name', 'green_system' ),
			'singular_name'      => _x( 'Реалізовані обʼєкти', 'post type singular name', 'green_system' ),
			'menu_name'          => _x( 'Реалізовані обʼєкти', 'admin menu', 'green_system' ),
			'name_admin_bar'     => _x( 'Реалізовані обʼєкти', 'add new on admin bar', 'green_system' ),
			'add_new'            => _x( 'Додати новий обʼєкт', 'actions', 'green_system' ),
			'add_new_item'       => __( 'Додати новий обʼєкт', 'green_system' ),
			'new_item'           => __( 'Новий обʼєкт', 'green_system' ),
			'edit_item'          => __( 'Редагувати обʼєкт', 'green_system' ),
			'view_item'          => __( 'Дивитись обʼєкт', 'green_system' ),
			'all_items'          => __( 'Всі обʼєкти', 'green_system' ),
			'search_items'       => __( 'Шукати обʼєкт', 'green_system' ),
			'parent_item_colon'  => __( 'Батько обʼєкта:', 'green_system' ),
			'not_found'          => __( 'Обʼєкт не знайдено', 'green_system' ),
			'not_found_in_trash' => __( 'У кошику обʼєктів не знайдно', 'green_system' )
		);

		$args = array(
			'labels'             => $labels,
			'taxonomies'         => ['solar_types_tax'],
			'description'        => __( 'Description.', 'realized_objects' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'realized_objects' ),
			'capability_type'    => 'post',
			'has_archive'        => false,
			'hierarchical'       => false,
			'exclude_from_search'=> false,
			'menu_position'      => 7,
			'menu_icon'          => 'dashicons-excerpt-view',
			'supports'           => array( 'title', 'thumbnail', 'revisions')
		);

		register_post_type( 'realized_objects', $args );
	}

	add_action( 'init', 'realized_objects_post_type' );

	/**
	 * Register a reviews post type.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/register_post_type
	 *
	 * @since green_system 1.0
	 */

	function reviews_post_type() {

		$labels = array(
			'name'               => _x( 'Відгуки', 'post type general name', 'green_system' ),
			'singular_name'      => _x( 'Відгуки', 'post type singular name', 'green_system' ),
			'menu_name'          => _x( 'Відгуки', 'admin menu', 'green_system' ),
			'name_admin_bar'     => _x( 'Відгуки', 'add new on admin bar', 'green_system' ),
			'add_new'            => _x( 'Додати новий відгук', 'actions', 'green_system' ),
			'add_new_item'       => __( 'Додати новий відгук', 'green_system' ),
			'new_item'           => __( 'Новий відгук', 'green_system' ),
			'edit_item'          => __( 'Редагувати відгук', 'green_system' ),
			'view_item'          => __( 'Дивитись відгук', 'green_system' ),
			'all_items'          => __( 'Всі відгуки', 'green_system' ),
			'search_items'       => __( 'Шукати відгук', 'green_system' ),
			'parent_item_colon'  => __( 'Батько відгуку:', 'green_system' ),
			'not_found'          => __( 'Відгук не знайдено', 'green_system' ),
			'not_found_in_trash' => __( 'У кошику відгуків не знайдно', 'green_system' )
		);

		$args = array(
			'labels'             => $labels,
			'taxonomies'         => [],
			'description'        => __( 'Description.', 'reviews' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'reviews' ),
			'capability_type'    => 'post',
			'has_archive'        => false,
			'hierarchical'       => false,
			'exclude_from_search'=> false,
			'menu_position'      => 8,
			'menu_icon'          => 'dashicons-feedback',
			'supports'           => array( 'title', 'thumbnail',)
		);

		register_post_type( 'reviews', $args );
	}

	add_action( 'init', 'reviews_post_type' );
