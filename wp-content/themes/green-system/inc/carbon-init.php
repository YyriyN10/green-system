<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * Add Carbon Fields
	 */

	add_action( 'after_setup_theme', 'carbon_load' );

	function carbon_load() {
		require get_template_directory() . '/vendor/autoload.php';
		\Carbon_Fields\Carbon_Fields::boot();
	}

	/**
	 * WPML Support
	 */

	function green_system_lang_prefix() {
		$prefix = '';
		if ( ! defined( 'ICL_LANGUAGE_CODE' ) ) {
			return $prefix;
		}

		$prefix = '_' . ICL_LANGUAGE_CODE;
		return $prefix;
	}

	/**
	 * Templates groups
	 */

	require ('carbon-fields/page-options.php');
	require ('carbon-fields/page-home.php');
	require ('carbon-fields/page-power-plant.php');
	require ('carbon-fields/page-our-productions.php');
	require ('carbon-fields/page-realized-objects-list.php');
	require ('carbon-fields/page-about-us.php');
	require ('carbon-fields/page-questions-answers.php');
	require ('carbon-fields/page-guarantees.php');
	require ('carbon-fields/page-service.php');
	require ('carbon-fields/post-solar-type.php');
	require ('carbon-fields/post-realized-objects.php');
	require ('carbon-fields/post-reviews.php');
	require ('carbon-fields/page-ess.php');
	require ('carbon-fields/page-car-charging-station.php');
	require ('carbon-fields/page-our-product.php');

