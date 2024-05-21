<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stacey_pearson
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<?php wp_body_open(); ?>
		<div id="page" class="site">
			<?php
				$announcement_bar_text = get_field("announcement_bar_text", 'option');
				$header_logo = get_field("header_logo", 'option');
			?>
			<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'stacey_pearson' ); ?></a>	
			<header id="masthead" class="site-header" data-aos="fade-down" data-aos-easing="linear">		
				<?php if(!empty($announcement_bar_text)){ ?>
					<div class="announcement-bar">		
						<div class="container">
							<?php echo $announcement_bar_text; ?>
							<div class="close">
								<svg xmlns="http://www.w3.org/2000/svg" width="15.557" height="15.556" viewBox="0 0 15.557 15.556">
									<path id="Cancel" d="M7.778,9.192,1.414,15.557,0,14.142,6.364,7.778,0,1.414,1.414,0,7.778,6.364,14.142,0l1.415,1.414L9.192,7.778l6.364,6.364-1.415,1.415Z" fill="#fff"/>
								</svg>
							</div>
						</div>
					</div>
				<?php } ?>
				<div class="logo">
					<a href="<?php echo site_url();?>"><img src="<?php echo $header_logo['url']; ?>" alt="<?php echo $header_logo['alt']; ?>" title="Stacey Pearson" heiight="103" width="221"/></a>
				</div>
			</header><!-- #masthead -->
			<div id="smooth-wrapper">
				<div class="stage" id="smooth-content">