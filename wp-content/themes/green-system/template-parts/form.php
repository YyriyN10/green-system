<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}
	?>

<form method="post" >
	<input type="hidden" name="action" value="form_integration">
	<input type="hidden" name="site_url" value="<?php echo get_home_url('/');?>">
	<input type="hidden" name="site_lang" value="<?php echo get_bloginfo('language');?>">
	<input type="hidden" name="page_name" value="<?php the_title();?>">
	<div class="form-group">
		<input type="text" name="name" class="form-control" placeholder="<?php echo esc_html( pll__( 'Ваше ім’я' ) ); ?>" required >
	</div>
	<div class="form-group">
		<input type="tel" name="phone" class="form-control" placeholder="<?php echo esc_html( pll__( 'Контактний номер телефону' ) ); ?>" required >
	</div>
	<div class="form-group">
		<input type="email" name="email" class="form-control" placeholder="<?php echo esc_html( pll__( 'Ваш email' ) ); ?>>" required >
	</div>

	<button type="submit" class="button"><?php echo esc_html( pll__( 'Надіслати заявку' ) ); ?></button>
</form>
