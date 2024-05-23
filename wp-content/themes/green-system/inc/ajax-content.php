<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	add_action( 'wp_enqueue_scripts', 'green_system_ajax_data', 99 );
	function green_system_ajax_data(){

		wp_localize_script('green-system-js-main', 'green_system_ajax',
			array(
				'url' => admin_url('admin-ajax.php')
			)
		);

	}

	/**
	 * More projects
	 */

	add_action('wp_ajax_more_projects', 'more_projects_callback');
	add_action('wp_ajax_nopriv_more_projects', 'more_projects_callback');

	function more_projects_callback(){

		$catId = $_POST['catId'];
		$currentProjectId = $_POST['currentProjectId'];

		$moreProjectsArgs = array(
			'tax_query' => array(
				array(
					'taxonomy' => 'solar_types_tax',
					'field' => 'id',
					'lang' => false,
					'suppress_filters' => false,
					'terms' => $catId

				)
			),
			'post_type' => 'realized_objects',
			'orderby' 	 => 'date',
	    'post_status'  => 'publish',
			'suppress_filters' => false,
			'lang' => false,
			'offset' => 4,
      'post__not_in' => array($currentProjectId),
		);

		$moreProjectsList = new WP_Query( $moreProjectsArgs  );

		if ( $moreProjectsList->have_posts() ) :?>

			<?php	while ( $moreProjectsList->have_posts() ) : $moreProjectsList->the_post(); ?>

        <a href="<?php the_permalink();?>" class="projects-item col-lg-3 col-sm-6 col-6">
                       <span class="inner">
                         <span class="projects-item__preview">
                           <img
                               src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0];?>"
                               alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE);?>"
                           >
                           <span class="projects-item__more">
                             <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
  <path d="M20 6.04275C18.9093 6.04275 18 6.9099 18 8.00061V8.04303C18 9.12384 18.8762 10 19.957 10H20.043C21.1238 10 22 9.1238 22 8.04295V8.00069C22 6.90994 21.0907 6.04275 20 6.04275Z" fill="#F7FDF8"/>
  <path d="M22 15.9826C22 14.9142 21.173 14.004 20.1046 14.0002C20.0698 14.0001 20.0349 14 20 14C19.9651 14 19.9302 14.0001 19.8954 14.0002C18.827 14.004 18 14.9142 18 15.9826C18 17.0871 18.8954 18 20 18C21.1046 18 22 17.0871 22 15.9826Z" fill="#F7FDF8"/>
  <path d="M22 23.9826C22 22.9142 21.173 22.004 20.1046 22.0002C20.0698 22.0001 20.0349 22 20 22C19.9651 22 19.9302 22.0001 19.8954 22.0002C18.827 22.004 18 22.9142 18 23.9826C18 25.0871 18.8954 26 20 26C21.1046 26 22 25.0871 22 23.9826Z" fill="#F7FDF8"/>
  <path d="M20 30.0427C18.9093 30.0427 18 30.9099 18 32.0006V32.043C18 33.1238 18.8762 34 19.957 34H20.043C21.1238 34 22 33.1238 22 32.043V32.0007C22 30.9099 21.0907 30.0427 20 30.0427Z" fill="#F7FDF8"/>
  <path d="M33.9573 20C33.9573 18.9093 33.0901 18 31.9994 18L31.957 18C30.8762 18 30 18.8762 30 19.957L30 20.043C30 21.1238 30.8762 22 31.957 22L31.9993 22C33.0901 22 33.9573 21.0907 33.9573 20Z" fill="#F7FDF8"/>
  <path d="M24.0174 22C25.0858 22 25.996 21.173 25.9998 20.1046C25.9999 20.0698 26 20.0349 26 20C26 19.9651 25.9999 19.9302 25.9998 19.8954C25.996 18.827 25.0858 18 24.0174 18C22.9129 18 22 18.8954 22 20C22 21.1046 22.9129 22 24.0174 22Z" fill="#F7FDF8"/>
  <path d="M16.0174 22C17.0858 22 17.996 21.173 17.9998 20.1046C17.9999 20.0698 18 20.0349 18 20C18 19.9651 17.9999 19.9302 17.9998 19.8954C17.996 18.827 17.0858 18 16.0174 18C14.9129 18 14 18.8954 14 20C14 21.1046 14.9129 22 16.0174 22Z" fill="#F7FDF8"/>
  <path d="M9.95725 20C9.95725 18.9093 9.0901 18 7.99939 18L7.95697 18C6.87616 18 6 18.8762 6 19.957L6 20.043C6 21.1238 6.8762 22 7.95705 22L7.99931 22C9.09006 22 9.95725 21.0907 9.95725 20Z" fill="#F7FDF8"/>
  <path d="M28.0174 15C29.0858 15 29.996 14.173 29.9998 13.1046C29.9999 13.0698 30 13.0349 30 13C30 12.9651 29.9999 12.9302 29.9998 12.8954C29.996 11.827 29.0858 11 28.0174 11C26.9129 11 26 11.8954 26 13C26 14.1046 26.9129 15 28.0174 15Z" fill="#F7FDF8"/>
  <path d="M28.0174 30C29.0858 30 29.996 29.173 29.9998 28.1046C29.9999 28.0698 30 28.0349 30 28C30 27.9651 29.9999 27.9302 29.9998 27.8954C29.996 26.827 29.0858 26 28.0174 26C26.9129 26 26 26.8954 26 28C26 29.1046 26.9129 30 28.0174 30Z" fill="#F7FDF8"/>
  <path d="M12.0174 15C13.0858 15 13.996 14.173 13.9998 13.1046C13.9999 13.0698 14 13.0349 14 13C14 12.9651 13.9999 12.9302 13.9998 12.8954C13.996 11.827 13.0858 11 12.0174 11C10.9129 11 10 11.8954 10 13C10 14.1046 10.9129 15 12.0174 15Z" fill="#F7FDF8"/>
  <path d="M12.0174 30C13.0858 30 13.996 29.173 13.9998 28.1046C13.9999 28.0698 14 28.0349 14 28C14 27.9651 13.9999 27.9302 13.9998 27.8954C13.996 26.827 13.0858 26 12.0174 26C10.9129 26 10 26.8954 10 28C10 29.1046 10.9129 30 12.0174 30Z" fill="#F7FDF8"/>
</svg>
                             <span class="text"><?php echo esc_html( pll__( 'Переглянути' ) ); ?></span>
                           </span>
                         </span>
                         <span class="projects-item__info">
                           <span class="projects-item__name"><?php the_title();?></span>
                           <span class="projects-item__location">
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                <path d="M10 18.8334C10 18.8334 16.25 13.8334 16.25 8.41675C16.25 4.96508 13.4517 2.16675 10 2.16675C6.54833 2.16675 3.75 4.96508 3.75 8.41675C3.75 13.8334 10 18.8334 10 18.8334Z" stroke="#FDB62C" stroke-width="1.66667" stroke-linejoin="round"/>
                                <path d="M10 10.9167C10.3283 10.9167 10.6534 10.8521 10.9567 10.7264C11.26 10.6008 11.5356 10.4167 11.7678 10.1845C11.9999 9.95237 12.1841 9.67677 12.3097 9.37346C12.4353 9.07014 12.5 8.74505 12.5 8.41675C12.5 8.08844 12.4353 7.76335 12.3097 7.46004C12.1841 7.15673 11.9999 6.88113 11.7678 6.64898C11.5356 6.41683 11.26 6.23269 10.9567 6.10705C10.6534 5.98141 10.3283 5.91675 10 5.91675C9.33696 5.91675 8.70107 6.18014 8.23223 6.64898C7.76339 7.11782 7.5 7.75371 7.5 8.41675C7.5 9.07979 7.76339 9.71567 8.23223 10.1845C8.70107 10.6534 9.33696 10.9167 10 10.9167Z" stroke="#FDB62C" stroke-width="1.66667" stroke-linejoin="round"/>
                              </svg>
                             <?php echo carbon_get_post_meta(get_the_ID(), 'green_system_realized_objects_location'.green_system_lang_prefix());?>
                           </span>
                         </span>
                       </span>
        </a>

			<?php endwhile;?>

		<?php endif; ?>
		<?php wp_reset_postdata();

		wp_die();
	}

	/**
	 * Our projects
	 */

	add_action('wp_ajax_change_project_category', 'change_project_category_callback');
	add_action('wp_ajax_nopriv_change_project_category', 'change_project_category_callback');

	function change_project_category_callback(){

		$catId = $_POST['catId'];

		if ( $catId == 0 ){
      $projectsArgs = array(
        'post_type' => 'realized_objects',
        'orderby' 	 => 'date',
        'post_status'  => 'publish',
        'suppress_filters' => false,
        'lang' => false,
        'posts_per_page' => 4
      );

      $projectsList = new WP_Query( $projectsArgs );

		if ( $projectsList->have_posts() ) :?>
			<?php	while ( $projectsList->have_posts() ) : $projectsList->the_post(); ?>
         <a href="<?php the_permalink();?>" class="projects-item col-lg-3 col-sm-6 col-6">
            <span class="inner">
              <span class="projects-item__preview">
                           <img
                               src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0];?>"
                               alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE);?>"
                           >
                           <span class="projects-item__more">
                             <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
  <path d="M20 6.04275C18.9093 6.04275 18 6.9099 18 8.00061V8.04303C18 9.12384 18.8762 10 19.957 10H20.043C21.1238 10 22 9.1238 22 8.04295V8.00069C22 6.90994 21.0907 6.04275 20 6.04275Z" fill="#F7FDF8"/>
  <path d="M22 15.9826C22 14.9142 21.173 14.004 20.1046 14.0002C20.0698 14.0001 20.0349 14 20 14C19.9651 14 19.9302 14.0001 19.8954 14.0002C18.827 14.004 18 14.9142 18 15.9826C18 17.0871 18.8954 18 20 18C21.1046 18 22 17.0871 22 15.9826Z" fill="#F7FDF8"/>
  <path d="M22 23.9826C22 22.9142 21.173 22.004 20.1046 22.0002C20.0698 22.0001 20.0349 22 20 22C19.9651 22 19.9302 22.0001 19.8954 22.0002C18.827 22.004 18 22.9142 18 23.9826C18 25.0871 18.8954 26 20 26C21.1046 26 22 25.0871 22 23.9826Z" fill="#F7FDF8"/>
  <path d="M20 30.0427C18.9093 30.0427 18 30.9099 18 32.0006V32.043C18 33.1238 18.8762 34 19.957 34H20.043C21.1238 34 22 33.1238 22 32.043V32.0007C22 30.9099 21.0907 30.0427 20 30.0427Z" fill="#F7FDF8"/>
  <path d="M33.9573 20C33.9573 18.9093 33.0901 18 31.9994 18L31.957 18C30.8762 18 30 18.8762 30 19.957L30 20.043C30 21.1238 30.8762 22 31.957 22L31.9993 22C33.0901 22 33.9573 21.0907 33.9573 20Z" fill="#F7FDF8"/>
  <path d="M24.0174 22C25.0858 22 25.996 21.173 25.9998 20.1046C25.9999 20.0698 26 20.0349 26 20C26 19.9651 25.9999 19.9302 25.9998 19.8954C25.996 18.827 25.0858 18 24.0174 18C22.9129 18 22 18.8954 22 20C22 21.1046 22.9129 22 24.0174 22Z" fill="#F7FDF8"/>
  <path d="M16.0174 22C17.0858 22 17.996 21.173 17.9998 20.1046C17.9999 20.0698 18 20.0349 18 20C18 19.9651 17.9999 19.9302 17.9998 19.8954C17.996 18.827 17.0858 18 16.0174 18C14.9129 18 14 18.8954 14 20C14 21.1046 14.9129 22 16.0174 22Z" fill="#F7FDF8"/>
  <path d="M9.95725 20C9.95725 18.9093 9.0901 18 7.99939 18L7.95697 18C6.87616 18 6 18.8762 6 19.957L6 20.043C6 21.1238 6.8762 22 7.95705 22L7.99931 22C9.09006 22 9.95725 21.0907 9.95725 20Z" fill="#F7FDF8"/>
  <path d="M28.0174 15C29.0858 15 29.996 14.173 29.9998 13.1046C29.9999 13.0698 30 13.0349 30 13C30 12.9651 29.9999 12.9302 29.9998 12.8954C29.996 11.827 29.0858 11 28.0174 11C26.9129 11 26 11.8954 26 13C26 14.1046 26.9129 15 28.0174 15Z" fill="#F7FDF8"/>
  <path d="M28.0174 30C29.0858 30 29.996 29.173 29.9998 28.1046C29.9999 28.0698 30 28.0349 30 28C30 27.9651 29.9999 27.9302 29.9998 27.8954C29.996 26.827 29.0858 26 28.0174 26C26.9129 26 26 26.8954 26 28C26 29.1046 26.9129 30 28.0174 30Z" fill="#F7FDF8"/>
  <path d="M12.0174 15C13.0858 15 13.996 14.173 13.9998 13.1046C13.9999 13.0698 14 13.0349 14 13C14 12.9651 13.9999 12.9302 13.9998 12.8954C13.996 11.827 13.0858 11 12.0174 11C10.9129 11 10 11.8954 10 13C10 14.1046 10.9129 15 12.0174 15Z" fill="#F7FDF8"/>
  <path d="M12.0174 30C13.0858 30 13.996 29.173 13.9998 28.1046C13.9999 28.0698 14 28.0349 14 28C14 27.9651 13.9999 27.9302 13.9998 27.8954C13.996 26.827 13.0858 26 12.0174 26C10.9129 26 10 26.8954 10 28C10 29.1046 10.9129 30 12.0174 30Z" fill="#F7FDF8"/>
</svg>
                             <span class="text"><?php echo esc_html( pll__( 'Переглянути' ) ); ?></span>
                           </span>
                         </span>
              <span class="projects-item__info">
                           <span class="projects-item__name"><?php the_title();?></span>
                           <span class="projects-item__location">
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                <path d="M10 18.8334C10 18.8334 16.25 13.8334 16.25 8.41675C16.25 4.96508 13.4517 2.16675 10 2.16675C6.54833 2.16675 3.75 4.96508 3.75 8.41675C3.75 13.8334 10 18.8334 10 18.8334Z" stroke="#FDB62C" stroke-width="1.66667" stroke-linejoin="round"/>
                                <path d="M10 10.9167C10.3283 10.9167 10.6534 10.8521 10.9567 10.7264C11.26 10.6008 11.5356 10.4167 11.7678 10.1845C11.9999 9.95237 12.1841 9.67677 12.3097 9.37346C12.4353 9.07014 12.5 8.74505 12.5 8.41675C12.5 8.08844 12.4353 7.76335 12.3097 7.46004C12.1841 7.15673 11.9999 6.88113 11.7678 6.64898C11.5356 6.41683 11.26 6.23269 10.9567 6.10705C10.6534 5.98141 10.3283 5.91675 10 5.91675C9.33696 5.91675 8.70107 6.18014 8.23223 6.64898C7.76339 7.11782 7.5 7.75371 7.5 8.41675C7.5 9.07979 7.76339 9.71567 8.23223 10.1845C8.70107 10.6534 9.33696 10.9167 10 10.9167Z" stroke="#FDB62C" stroke-width="1.66667" stroke-linejoin="round"/>
                              </svg>
                             <?php echo carbon_get_post_meta(get_the_ID(), 'green_system_realized_objects_location'.green_system_lang_prefix());?>
                           </span>
                         </span>
            </span>
         </a>
			<?php endwhile;?>
		<?php endif; ?>
		<?php wp_reset_postdata();

	}else{

		$projectsArgs = array(
			'tax_query' => array(
				array(
					'taxonomy' => 'solar_types_tax',
					'field' => 'id',
					'lang' => false,
					'suppress_filters' => false,
					'terms' => $catId

				)
			),
			'post_type' => 'realized_objects',
			'orderby' 	 => 'date',
			'suppress_filters' => false,
			'lang' => false,
			'posts_per_page' => 4
		);

		$projectsList = new WP_Query( $projectsArgs );

		if ( $projectsList->have_posts() ) :?>

			<?php	while ( $projectsList->have_posts() ) : $projectsList->the_post(); ?>
        <a href="<?php the_permalink();?>" class="projects-item col-lg-3 col-sm-6 col-6">
            <span class="inner">
              <span class="projects-item__preview">
                           <img
                               src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0];?>"
                               alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE);?>"
                           >
                           <span class="projects-item__more">
                             <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
  <path d="M20 6.04275C18.9093 6.04275 18 6.9099 18 8.00061V8.04303C18 9.12384 18.8762 10 19.957 10H20.043C21.1238 10 22 9.1238 22 8.04295V8.00069C22 6.90994 21.0907 6.04275 20 6.04275Z" fill="#F7FDF8"/>
  <path d="M22 15.9826C22 14.9142 21.173 14.004 20.1046 14.0002C20.0698 14.0001 20.0349 14 20 14C19.9651 14 19.9302 14.0001 19.8954 14.0002C18.827 14.004 18 14.9142 18 15.9826C18 17.0871 18.8954 18 20 18C21.1046 18 22 17.0871 22 15.9826Z" fill="#F7FDF8"/>
  <path d="M22 23.9826C22 22.9142 21.173 22.004 20.1046 22.0002C20.0698 22.0001 20.0349 22 20 22C19.9651 22 19.9302 22.0001 19.8954 22.0002C18.827 22.004 18 22.9142 18 23.9826C18 25.0871 18.8954 26 20 26C21.1046 26 22 25.0871 22 23.9826Z" fill="#F7FDF8"/>
  <path d="M20 30.0427C18.9093 30.0427 18 30.9099 18 32.0006V32.043C18 33.1238 18.8762 34 19.957 34H20.043C21.1238 34 22 33.1238 22 32.043V32.0007C22 30.9099 21.0907 30.0427 20 30.0427Z" fill="#F7FDF8"/>
  <path d="M33.9573 20C33.9573 18.9093 33.0901 18 31.9994 18L31.957 18C30.8762 18 30 18.8762 30 19.957L30 20.043C30 21.1238 30.8762 22 31.957 22L31.9993 22C33.0901 22 33.9573 21.0907 33.9573 20Z" fill="#F7FDF8"/>
  <path d="M24.0174 22C25.0858 22 25.996 21.173 25.9998 20.1046C25.9999 20.0698 26 20.0349 26 20C26 19.9651 25.9999 19.9302 25.9998 19.8954C25.996 18.827 25.0858 18 24.0174 18C22.9129 18 22 18.8954 22 20C22 21.1046 22.9129 22 24.0174 22Z" fill="#F7FDF8"/>
  <path d="M16.0174 22C17.0858 22 17.996 21.173 17.9998 20.1046C17.9999 20.0698 18 20.0349 18 20C18 19.9651 17.9999 19.9302 17.9998 19.8954C17.996 18.827 17.0858 18 16.0174 18C14.9129 18 14 18.8954 14 20C14 21.1046 14.9129 22 16.0174 22Z" fill="#F7FDF8"/>
  <path d="M9.95725 20C9.95725 18.9093 9.0901 18 7.99939 18L7.95697 18C6.87616 18 6 18.8762 6 19.957L6 20.043C6 21.1238 6.8762 22 7.95705 22L7.99931 22C9.09006 22 9.95725 21.0907 9.95725 20Z" fill="#F7FDF8"/>
  <path d="M28.0174 15C29.0858 15 29.996 14.173 29.9998 13.1046C29.9999 13.0698 30 13.0349 30 13C30 12.9651 29.9999 12.9302 29.9998 12.8954C29.996 11.827 29.0858 11 28.0174 11C26.9129 11 26 11.8954 26 13C26 14.1046 26.9129 15 28.0174 15Z" fill="#F7FDF8"/>
  <path d="M28.0174 30C29.0858 30 29.996 29.173 29.9998 28.1046C29.9999 28.0698 30 28.0349 30 28C30 27.9651 29.9999 27.9302 29.9998 27.8954C29.996 26.827 29.0858 26 28.0174 26C26.9129 26 26 26.8954 26 28C26 29.1046 26.9129 30 28.0174 30Z" fill="#F7FDF8"/>
  <path d="M12.0174 15C13.0858 15 13.996 14.173 13.9998 13.1046C13.9999 13.0698 14 13.0349 14 13C14 12.9651 13.9999 12.9302 13.9998 12.8954C13.996 11.827 13.0858 11 12.0174 11C10.9129 11 10 11.8954 10 13C10 14.1046 10.9129 15 12.0174 15Z" fill="#F7FDF8"/>
  <path d="M12.0174 30C13.0858 30 13.996 29.173 13.9998 28.1046C13.9999 28.0698 14 28.0349 14 28C14 27.9651 13.9999 27.9302 13.9998 27.8954C13.996 26.827 13.0858 26 12.0174 26C10.9129 26 10 26.8954 10 28C10 29.1046 10.9129 30 12.0174 30Z" fill="#F7FDF8"/>
</svg>
                             <span class="text"><?php echo esc_html( pll__( 'Переглянути' ) ); ?></span>
                           </span>
                         </span>
              <span class="projects-item__info">
                           <span class="projects-item__name"><?php the_title();?></span>
                           <span class="projects-item__location">
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                <path d="M10 18.8334C10 18.8334 16.25 13.8334 16.25 8.41675C16.25 4.96508 13.4517 2.16675 10 2.16675C6.54833 2.16675 3.75 4.96508 3.75 8.41675C3.75 13.8334 10 18.8334 10 18.8334Z" stroke="#FDB62C" stroke-width="1.66667" stroke-linejoin="round"/>
                                <path d="M10 10.9167C10.3283 10.9167 10.6534 10.8521 10.9567 10.7264C11.26 10.6008 11.5356 10.4167 11.7678 10.1845C11.9999 9.95237 12.1841 9.67677 12.3097 9.37346C12.4353 9.07014 12.5 8.74505 12.5 8.41675C12.5 8.08844 12.4353 7.76335 12.3097 7.46004C12.1841 7.15673 11.9999 6.88113 11.7678 6.64898C11.5356 6.41683 11.26 6.23269 10.9567 6.10705C10.6534 5.98141 10.3283 5.91675 10 5.91675C9.33696 5.91675 8.70107 6.18014 8.23223 6.64898C7.76339 7.11782 7.5 7.75371 7.5 8.41675C7.5 9.07979 7.76339 9.71567 8.23223 10.1845C8.70107 10.6534 9.33696 10.9167 10 10.9167Z" stroke="#FDB62C" stroke-width="1.66667" stroke-linejoin="round"/>
                              </svg>
                             <?php echo carbon_get_post_meta(get_the_ID(), 'green_system_realized_objects_location'.green_system_lang_prefix());?>
                           </span>
                         </span>
            </span>
        </a>
			<?php endwhile;?>

		<?php endif; ?>
		<?php wp_reset_postdata();

	}

		wp_die();
	}

	/**
	 * Main more projects
	 */

	add_action('wp_ajax_main_more_projects', 'main_more_projects_callback');
	add_action('wp_ajax_nopriv_main_more_projects', 'main_more_projects_callback');

	function main_more_projects_callback(){

		$catId = $_POST['catId'];

		if ( $catId == 0 ){
			$projectsArgs = array(
				'post_type' => 'realized_objects',
				'orderby' 	 => 'date',
				'post_status'  => 'publish',
				'suppress_filters' => false,
				'lang' => false,
		    'offset' => 4,
			);

			$projectsList = new WP_Query( $projectsArgs );

			if ( $projectsList->have_posts() ) :?>
				<?php	while ( $projectsList->have_posts() ) : $projectsList->the_post(); ?>
                <a href="<?php the_permalink();?>" class="projects-item col-lg-3 col-sm-6 col-6">
            <span class="inner">
              <span class="projects-item__preview">
                           <img
                               src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0];?>"
                               alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE);?>"
                           >
                           <span class="projects-item__more">
                             <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
  <path d="M20 6.04275C18.9093 6.04275 18 6.9099 18 8.00061V8.04303C18 9.12384 18.8762 10 19.957 10H20.043C21.1238 10 22 9.1238 22 8.04295V8.00069C22 6.90994 21.0907 6.04275 20 6.04275Z" fill="#F7FDF8"/>
  <path d="M22 15.9826C22 14.9142 21.173 14.004 20.1046 14.0002C20.0698 14.0001 20.0349 14 20 14C19.9651 14 19.9302 14.0001 19.8954 14.0002C18.827 14.004 18 14.9142 18 15.9826C18 17.0871 18.8954 18 20 18C21.1046 18 22 17.0871 22 15.9826Z" fill="#F7FDF8"/>
  <path d="M22 23.9826C22 22.9142 21.173 22.004 20.1046 22.0002C20.0698 22.0001 20.0349 22 20 22C19.9651 22 19.9302 22.0001 19.8954 22.0002C18.827 22.004 18 22.9142 18 23.9826C18 25.0871 18.8954 26 20 26C21.1046 26 22 25.0871 22 23.9826Z" fill="#F7FDF8"/>
  <path d="M20 30.0427C18.9093 30.0427 18 30.9099 18 32.0006V32.043C18 33.1238 18.8762 34 19.957 34H20.043C21.1238 34 22 33.1238 22 32.043V32.0007C22 30.9099 21.0907 30.0427 20 30.0427Z" fill="#F7FDF8"/>
  <path d="M33.9573 20C33.9573 18.9093 33.0901 18 31.9994 18L31.957 18C30.8762 18 30 18.8762 30 19.957L30 20.043C30 21.1238 30.8762 22 31.957 22L31.9993 22C33.0901 22 33.9573 21.0907 33.9573 20Z" fill="#F7FDF8"/>
  <path d="M24.0174 22C25.0858 22 25.996 21.173 25.9998 20.1046C25.9999 20.0698 26 20.0349 26 20C26 19.9651 25.9999 19.9302 25.9998 19.8954C25.996 18.827 25.0858 18 24.0174 18C22.9129 18 22 18.8954 22 20C22 21.1046 22.9129 22 24.0174 22Z" fill="#F7FDF8"/>
  <path d="M16.0174 22C17.0858 22 17.996 21.173 17.9998 20.1046C17.9999 20.0698 18 20.0349 18 20C18 19.9651 17.9999 19.9302 17.9998 19.8954C17.996 18.827 17.0858 18 16.0174 18C14.9129 18 14 18.8954 14 20C14 21.1046 14.9129 22 16.0174 22Z" fill="#F7FDF8"/>
  <path d="M9.95725 20C9.95725 18.9093 9.0901 18 7.99939 18L7.95697 18C6.87616 18 6 18.8762 6 19.957L6 20.043C6 21.1238 6.8762 22 7.95705 22L7.99931 22C9.09006 22 9.95725 21.0907 9.95725 20Z" fill="#F7FDF8"/>
  <path d="M28.0174 15C29.0858 15 29.996 14.173 29.9998 13.1046C29.9999 13.0698 30 13.0349 30 13C30 12.9651 29.9999 12.9302 29.9998 12.8954C29.996 11.827 29.0858 11 28.0174 11C26.9129 11 26 11.8954 26 13C26 14.1046 26.9129 15 28.0174 15Z" fill="#F7FDF8"/>
  <path d="M28.0174 30C29.0858 30 29.996 29.173 29.9998 28.1046C29.9999 28.0698 30 28.0349 30 28C30 27.9651 29.9999 27.9302 29.9998 27.8954C29.996 26.827 29.0858 26 28.0174 26C26.9129 26 26 26.8954 26 28C26 29.1046 26.9129 30 28.0174 30Z" fill="#F7FDF8"/>
  <path d="M12.0174 15C13.0858 15 13.996 14.173 13.9998 13.1046C13.9999 13.0698 14 13.0349 14 13C14 12.9651 13.9999 12.9302 13.9998 12.8954C13.996 11.827 13.0858 11 12.0174 11C10.9129 11 10 11.8954 10 13C10 14.1046 10.9129 15 12.0174 15Z" fill="#F7FDF8"/>
  <path d="M12.0174 30C13.0858 30 13.996 29.173 13.9998 28.1046C13.9999 28.0698 14 28.0349 14 28C14 27.9651 13.9999 27.9302 13.9998 27.8954C13.996 26.827 13.0858 26 12.0174 26C10.9129 26 10 26.8954 10 28C10 29.1046 10.9129 30 12.0174 30Z" fill="#F7FDF8"/>
</svg>
                             <span class="text"><?php echo esc_html( pll__( 'Переглянути' ) ); ?></span>
                           </span>
                         </span>
              <span class="projects-item__info">
                           <span class="projects-item__name"><?php the_title();?></span>
                           <span class="projects-item__location">
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                <path d="M10 18.8334C10 18.8334 16.25 13.8334 16.25 8.41675C16.25 4.96508 13.4517 2.16675 10 2.16675C6.54833 2.16675 3.75 4.96508 3.75 8.41675C3.75 13.8334 10 18.8334 10 18.8334Z" stroke="#FDB62C" stroke-width="1.66667" stroke-linejoin="round"/>
                                <path d="M10 10.9167C10.3283 10.9167 10.6534 10.8521 10.9567 10.7264C11.26 10.6008 11.5356 10.4167 11.7678 10.1845C11.9999 9.95237 12.1841 9.67677 12.3097 9.37346C12.4353 9.07014 12.5 8.74505 12.5 8.41675C12.5 8.08844 12.4353 7.76335 12.3097 7.46004C12.1841 7.15673 11.9999 6.88113 11.7678 6.64898C11.5356 6.41683 11.26 6.23269 10.9567 6.10705C10.6534 5.98141 10.3283 5.91675 10 5.91675C9.33696 5.91675 8.70107 6.18014 8.23223 6.64898C7.76339 7.11782 7.5 7.75371 7.5 8.41675C7.5 9.07979 7.76339 9.71567 8.23223 10.1845C8.70107 10.6534 9.33696 10.9167 10 10.9167Z" stroke="#FDB62C" stroke-width="1.66667" stroke-linejoin="round"/>
                              </svg>
                             <?php echo carbon_get_post_meta(get_the_ID(), 'green_system_realized_objects_location'.green_system_lang_prefix());?>
                           </span>
                         </span>
            </span>
                </a>
				<?php endwhile;?>
			<?php endif; ?>
			<?php wp_reset_postdata();

		}else{

			$projectsArgs = array(
				'tax_query' => array(
					array(
						'taxonomy' => 'solar_types_tax',
						'field' => 'id',
						'lang' => false,
						'suppress_filters' => false,
						'terms' => $catId

					)
				),
				'post_type' => 'realized_objects',
				'orderby' 	 => 'date',
				'suppress_filters' => false,
				'lang' => false,
		    'offset' => 4,
			);

			$projectsList = new WP_Query( $projectsArgs );

			if ( $projectsList->have_posts() ) :?>

				<?php	while ( $projectsList->have_posts() ) : $projectsList->the_post(); ?>
                <a href="<?php the_permalink();?>" class="projects-item col-lg-3 col-sm-6 col-6">
            <span class="inner">
              <span class="projects-item__preview">
                           <img
                               src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0];?>"
                               alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE);?>"
                           >
                           <span class="projects-item__more">
                             <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
  <path d="M20 6.04275C18.9093 6.04275 18 6.9099 18 8.00061V8.04303C18 9.12384 18.8762 10 19.957 10H20.043C21.1238 10 22 9.1238 22 8.04295V8.00069C22 6.90994 21.0907 6.04275 20 6.04275Z" fill="#F7FDF8"/>
  <path d="M22 15.9826C22 14.9142 21.173 14.004 20.1046 14.0002C20.0698 14.0001 20.0349 14 20 14C19.9651 14 19.9302 14.0001 19.8954 14.0002C18.827 14.004 18 14.9142 18 15.9826C18 17.0871 18.8954 18 20 18C21.1046 18 22 17.0871 22 15.9826Z" fill="#F7FDF8"/>
  <path d="M22 23.9826C22 22.9142 21.173 22.004 20.1046 22.0002C20.0698 22.0001 20.0349 22 20 22C19.9651 22 19.9302 22.0001 19.8954 22.0002C18.827 22.004 18 22.9142 18 23.9826C18 25.0871 18.8954 26 20 26C21.1046 26 22 25.0871 22 23.9826Z" fill="#F7FDF8"/>
  <path d="M20 30.0427C18.9093 30.0427 18 30.9099 18 32.0006V32.043C18 33.1238 18.8762 34 19.957 34H20.043C21.1238 34 22 33.1238 22 32.043V32.0007C22 30.9099 21.0907 30.0427 20 30.0427Z" fill="#F7FDF8"/>
  <path d="M33.9573 20C33.9573 18.9093 33.0901 18 31.9994 18L31.957 18C30.8762 18 30 18.8762 30 19.957L30 20.043C30 21.1238 30.8762 22 31.957 22L31.9993 22C33.0901 22 33.9573 21.0907 33.9573 20Z" fill="#F7FDF8"/>
  <path d="M24.0174 22C25.0858 22 25.996 21.173 25.9998 20.1046C25.9999 20.0698 26 20.0349 26 20C26 19.9651 25.9999 19.9302 25.9998 19.8954C25.996 18.827 25.0858 18 24.0174 18C22.9129 18 22 18.8954 22 20C22 21.1046 22.9129 22 24.0174 22Z" fill="#F7FDF8"/>
  <path d="M16.0174 22C17.0858 22 17.996 21.173 17.9998 20.1046C17.9999 20.0698 18 20.0349 18 20C18 19.9651 17.9999 19.9302 17.9998 19.8954C17.996 18.827 17.0858 18 16.0174 18C14.9129 18 14 18.8954 14 20C14 21.1046 14.9129 22 16.0174 22Z" fill="#F7FDF8"/>
  <path d="M9.95725 20C9.95725 18.9093 9.0901 18 7.99939 18L7.95697 18C6.87616 18 6 18.8762 6 19.957L6 20.043C6 21.1238 6.8762 22 7.95705 22L7.99931 22C9.09006 22 9.95725 21.0907 9.95725 20Z" fill="#F7FDF8"/>
  <path d="M28.0174 15C29.0858 15 29.996 14.173 29.9998 13.1046C29.9999 13.0698 30 13.0349 30 13C30 12.9651 29.9999 12.9302 29.9998 12.8954C29.996 11.827 29.0858 11 28.0174 11C26.9129 11 26 11.8954 26 13C26 14.1046 26.9129 15 28.0174 15Z" fill="#F7FDF8"/>
  <path d="M28.0174 30C29.0858 30 29.996 29.173 29.9998 28.1046C29.9999 28.0698 30 28.0349 30 28C30 27.9651 29.9999 27.9302 29.9998 27.8954C29.996 26.827 29.0858 26 28.0174 26C26.9129 26 26 26.8954 26 28C26 29.1046 26.9129 30 28.0174 30Z" fill="#F7FDF8"/>
  <path d="M12.0174 15C13.0858 15 13.996 14.173 13.9998 13.1046C13.9999 13.0698 14 13.0349 14 13C14 12.9651 13.9999 12.9302 13.9998 12.8954C13.996 11.827 13.0858 11 12.0174 11C10.9129 11 10 11.8954 10 13C10 14.1046 10.9129 15 12.0174 15Z" fill="#F7FDF8"/>
  <path d="M12.0174 30C13.0858 30 13.996 29.173 13.9998 28.1046C13.9999 28.0698 14 28.0349 14 28C14 27.9651 13.9999 27.9302 13.9998 27.8954C13.996 26.827 13.0858 26 12.0174 26C10.9129 26 10 26.8954 10 28C10 29.1046 10.9129 30 12.0174 30Z" fill="#F7FDF8"/>
</svg>
                             <span class="text"><?php echo esc_html( pll__( 'Переглянути' ) ); ?></span>
                           </span>
                         </span>
              <span class="projects-item__info">
                           <span class="projects-item__name"><?php the_title();?></span>
                           <span class="projects-item__location">
                             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                <path d="M10 18.8334C10 18.8334 16.25 13.8334 16.25 8.41675C16.25 4.96508 13.4517 2.16675 10 2.16675C6.54833 2.16675 3.75 4.96508 3.75 8.41675C3.75 13.8334 10 18.8334 10 18.8334Z" stroke="#FDB62C" stroke-width="1.66667" stroke-linejoin="round"/>
                                <path d="M10 10.9167C10.3283 10.9167 10.6534 10.8521 10.9567 10.7264C11.26 10.6008 11.5356 10.4167 11.7678 10.1845C11.9999 9.95237 12.1841 9.67677 12.3097 9.37346C12.4353 9.07014 12.5 8.74505 12.5 8.41675C12.5 8.08844 12.4353 7.76335 12.3097 7.46004C12.1841 7.15673 11.9999 6.88113 11.7678 6.64898C11.5356 6.41683 11.26 6.23269 10.9567 6.10705C10.6534 5.98141 10.3283 5.91675 10 5.91675C9.33696 5.91675 8.70107 6.18014 8.23223 6.64898C7.76339 7.11782 7.5 7.75371 7.5 8.41675C7.5 9.07979 7.76339 9.71567 8.23223 10.1845C8.70107 10.6534 9.33696 10.9167 10 10.9167Z" stroke="#FDB62C" stroke-width="1.66667" stroke-linejoin="round"/>
                              </svg>
                             <?php echo carbon_get_post_meta(get_the_ID(), 'green_system_realized_objects_location'.green_system_lang_prefix());?>
                           </span>
                         </span>
            </span>
                </a>
				<?php endwhile;?>

			<?php endif; ?>
			<?php wp_reset_postdata();

		}

		wp_die();
	}

	/**
	 * Power plants types
	 */

	add_action('wp_ajax_change_power_plant_type', 'change_power_plant_type_callback');
	add_action('wp_ajax_nopriv_change_power_plant_type', 'change_power_plant_type_callback');

	function change_power_plant_type_callback(){

		$catId = $_POST['catId'];

		$powerPlantArgs = array(
			'tax_query' => array(
				array(
					'taxonomy' => 'solar_types_tax',
					'field' => 'id',
					'lang' => false,
					'suppress_filters' => false,
					'terms' => $catId

				)
			),
			'post_type' => 'solar_types',
			'orderby' 	 => 'date',
			'suppress_filters' => false,
			'lang' => false,
			'posts_per_page' => -1
		);

		$powerPlantList = new WP_Query( $powerPlantArgs );

		if ( $powerPlantList->have_posts() ) :?>

			<?php	while ( $powerPlantList->have_posts() ) : $powerPlantList->the_post(); ?>

            <a href="<?php the_permalink();?>" class="power-plant-item col-lg-4 col-sm-6" target="_blank">
		            <span class="plant__pic">
		              <img
                      class="lazy"
                      data-src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0];?>"
                      alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE);?>"
                  >
		            </span>
              <span class="plant__name"><?php the_title();?></span>
              <span class="plant__address"></span>
            </a>

			<?php endwhile;?>

		<?php endif; ?>
		<?php wp_reset_postdata();

		wp_die();
	}


