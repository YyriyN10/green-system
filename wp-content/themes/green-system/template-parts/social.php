<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	$fbLink = carbon_get_theme_option('green_system_facebook_link');
	$instLink = carbon_get_theme_option('green_system_instagram_link');
	$youyubeLink = carbon_get_theme_option('green_system_youtube_link');
	$inLink = carbon_get_theme_option('green_system_linkedin_link');

	if ( $fbLink || $instLink || $youyubeLink || $inLink ):
?>

<ul class="social-wrapper">
	<?php if( $fbLink ):?>
		<li>
			<a href="<?php echo $fbLink;?>" target="_blank" rel="nofollow">

			</a>
		</li>
	<?php endif;?>
	<?php if( $instLink ):?>
		<li>
			<a href="<?php echo $instLink;?>" target="_blank" rel="nofollow">

			</a>
		</li>
	<?php endif;?>
	<?php if( $youyubeLink ):?>
		<li>
			<a href="<?php echo $youyubeLink;?>" target="_blank" rel="nofollow">

			</a>
		</li>
	<?php endif;?>
	<?php if( $inLink  ):?>
		<li>
			<a href="<?php echo $inLink ;?>" target="_blank" rel="nofollow">

			</a>
		</li>
	<?php endif;?>

</ul>
<?php endif;?>
