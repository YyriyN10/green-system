<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	$phoneList = carbon_get_theme_option('green_system_phone_list');

	if ( $phoneList ):?>
		<ul class="phone-list">
			<?php foreach( $phoneList as $phone ):

				$phoneToColl = preg_replace( '/[^0-9]/', '', $phone['phone_number']);

				?>
				<li>
          <?php if( str_contains(strval($phone['phone_number']), '+') ):?>
            <a href="tel:+<?php echo $phoneToColl;?>" class="item"><?php echo $phone['phone_number'];?></a>
          <?php else :?>
            <a href="tel:<?php echo $phoneToColl;?>" class="item"><?php echo $phone['phone_number'];?></a>
          <?php endif;?>
				</li>
			<?php endforeach;?>

		</ul>

<?php endif;?>
