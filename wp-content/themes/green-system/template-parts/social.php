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
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path d="M24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 17.9895 4.3882 22.954 10.125 23.8542V15.4687H7.07812V12H10.125V9.35625C10.125 6.34875 11.9166 4.6875 14.6576 4.6875C15.9701 4.6875 17.3438 4.92187 17.3438 4.92187V7.875H15.8306C14.34 7.875 13.875 8.80008 13.875 9.75V12H17.2031L16.6711 15.4687H13.875V23.8542C19.6118 22.954 24 17.9895 24 12Z" fill="#384438"/>
        </svg>
        <span>Facebook</span>

			</a>
		</li>
	<?php endif;?>
	<?php if( $instLink ):?>
		<li>
			<a href="<?php echo $instLink;?>" target="_blank" rel="nofollow">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
          <path d="M12.7 2.16094C15.9062 2.16094 16.2859 2.175 17.5468 2.23125C18.7187 2.28281 19.3515 2.47969 19.7734 2.64375C20.3312 2.85938 20.7343 3.12188 21.1515 3.53906C21.5734 3.96094 21.8312 4.35938 22.0468 4.91719C22.2109 5.33906 22.4078 5.97656 22.4593 7.14375C22.5156 8.40937 22.5296 8.78906 22.5296 11.9906C22.5296 15.1969 22.5156 15.5766 22.4593 16.8375C22.4078 18.0094 22.2109 18.6422 22.0468 19.0641C21.8312 19.6219 21.5687 20.025 21.1515 20.4422C20.7296 20.8641 20.3312 21.1219 19.7734 21.3375C19.3515 21.5016 18.714 21.6984 17.5468 21.75C16.2812 21.8062 15.9015 21.8203 12.7 21.8203C9.4937 21.8203 9.11401 21.8062 7.85308 21.75C6.6812 21.6984 6.04839 21.5016 5.62651 21.3375C5.0687 21.1219 4.66558 20.8594 4.24839 20.4422C3.82651 20.0203 3.5687 19.6219 3.35308 19.0641C3.18901 18.6422 2.99214 18.0047 2.94058 16.8375C2.88433 15.5719 2.87026 15.1922 2.87026 11.9906C2.87026 8.78438 2.88433 8.40469 2.94058 7.14375C2.99214 5.97187 3.18901 5.33906 3.35308 4.91719C3.5687 4.35938 3.8312 3.95625 4.24839 3.53906C4.67026 3.11719 5.0687 2.85938 5.62651 2.64375C6.04839 2.47969 6.68589 2.28281 7.85308 2.23125C9.11401 2.175 9.4937 2.16094 12.7 2.16094ZM12.7 0C9.44214 0 9.03433 0.0140625 7.75464 0.0703125C6.47964 0.126563 5.60308 0.332812 4.8437 0.628125C4.05151 0.9375 3.3812 1.34531 2.71558 2.01562C2.04526 2.68125 1.63745 3.35156 1.32808 4.13906C1.03276 4.90313 0.826514 5.775 0.770264 7.05C0.714014 8.33437 0.699951 8.74219 0.699951 12C0.699951 15.2578 0.714014 15.6656 0.770264 16.9453C0.826514 18.2203 1.03276 19.0969 1.32808 19.8563C1.63745 20.6484 2.04526 21.3188 2.71558 21.9844C3.3812 22.65 4.05151 23.0625 4.83901 23.3672C5.60308 23.6625 6.47495 23.8687 7.74995 23.925C9.02964 23.9812 9.43745 23.9953 12.6953 23.9953C15.9531 23.9953 16.3609 23.9812 17.6406 23.925C18.9156 23.8687 19.7921 23.6625 20.5515 23.3672C21.339 23.0625 22.0093 22.65 22.675 21.9844C23.3406 21.3188 23.7531 20.6484 24.0578 19.8609C24.3531 19.0969 24.5593 18.225 24.6156 16.95C24.6718 15.6703 24.6859 15.2625 24.6859 12.0047C24.6859 8.74688 24.6718 8.33906 24.6156 7.05938C24.5593 5.78438 24.3531 4.90781 24.0578 4.14844C23.7625 3.35156 23.3546 2.68125 22.6843 2.01562C22.0187 1.35 21.3484 0.9375 20.5609 0.632812C19.7968 0.3375 18.925 0.13125 17.65 0.075C16.3656 0.0140625 15.9578 0 12.7 0Z" fill="#384438"/>
          <path d="M12.7 5.83594C9.29683 5.83594 6.53589 8.59688 6.53589 12C6.53589 15.4031 9.29683 18.1641 12.7 18.1641C16.1031 18.1641 18.864 15.4031 18.864 12C18.864 8.59688 16.1031 5.83594 12.7 5.83594ZM12.7 15.9984C10.4921 15.9984 8.70151 14.2078 8.70151 12C8.70151 9.79219 10.4921 8.00156 12.7 8.00156C14.9078 8.00156 16.6984 9.79219 16.6984 12C16.6984 14.2078 14.9078 15.9984 12.7 15.9984Z" fill="#384438"/>
          <path d="M20.5468 5.59214C20.5468 6.38902 19.9 7.0312 19.1078 7.0312C18.3109 7.0312 17.6687 6.38433 17.6687 5.59214C17.6687 4.79526 18.3156 4.15308 19.1078 4.15308C19.9 4.15308 20.5468 4.79995 20.5468 5.59214Z" fill="#384438"/>
        </svg>
        <span>Instagram</span>

			</a>
		</li>
	<?php endif;?>
	<?php if( $inLink  ):?>
		<li>
			<a href="<?php echo $inLink ;?>" target="_blank" rel="nofollow">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
          <<path d="M22.8234 0H2.37185C1.39216 0 0.599976 0.773438 0.599976 1.72969V22.2656C0.599976 23.2219 1.39216 24 2.37185 24H22.8234C23.8031 24 24.6 23.2219 24.6 22.2703V1.72969C24.6 0.773438 23.8031 0 22.8234 0ZM7.72029 20.4516H4.15779V8.99531H7.72029V20.4516ZM5.93904 7.43438C4.79529 7.43438 3.87185 6.51094 3.87185 5.37187C3.87185 4.23281 4.79529 3.30937 5.93904 3.30937C7.0781 3.30937 8.00154 4.23281 8.00154 5.37187C8.00154 6.50625 7.0781 7.43438 5.93904 7.43438ZM21.0515 20.4516H17.4937V14.8828C17.4937 13.5562 17.4703 11.8453 15.6422 11.8453C13.7906 11.8453 13.5093 13.2937 13.5093 14.7891V20.4516H9.95623V8.99531H13.3687V10.5609H13.4156C13.889 9.66094 15.0515 8.70938 16.7812 8.70938C20.3859 8.70938 21.0515 11.0813 21.0515 14.1656V20.4516Z" fill="#384438"/>
        </svg>
        <span>Linkedin</span>

			</a>
		</li>
	<?php endif;?>
	<?php if( $youyubeLink ):?>
      <li>
        <a href="<?php echo $youyubeLink;?>" target="_blank" rel="nofollow">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
            <path d="M24.161 7.20005C24.161 7.20005 23.9266 5.54536 23.2047 4.8188C22.2906 3.86255 21.2688 3.85786 20.8 3.80161C17.4438 3.55786 12.4047 3.55786 12.4047 3.55786H12.3953C12.3953 3.55786 7.35627 3.55786 4.00002 3.80161C3.53127 3.85786 2.5094 3.86255 1.59534 4.8188C0.873462 5.54536 0.643774 7.20005 0.643774 7.20005C0.643774 7.20005 0.400024 9.14536 0.400024 11.086V12.9047C0.400024 14.8454 0.639087 16.7907 0.639087 16.7907C0.639087 16.7907 0.873462 18.4454 1.59065 19.1719C2.50471 20.1282 3.70471 20.0954 4.23909 20.1985C6.16096 20.3813 12.4 20.4375 12.4 20.4375C12.4 20.4375 17.4438 20.4282 20.8 20.1891C21.2688 20.1329 22.2906 20.1282 23.2047 19.1719C23.9266 18.4454 24.161 16.7907 24.161 16.7907C24.161 16.7907 24.4 14.85 24.4 12.9047V11.086C24.4 9.14536 24.161 7.20005 24.161 7.20005ZM9.92034 15.1125V8.36724L16.4031 11.7516L9.92034 15.1125Z" fill="#384438"/>
          </svg>
          <span>Youtube</span>

        </a>
      </li>
	<?php endif;?>

</ul>
<?php endif;?>
