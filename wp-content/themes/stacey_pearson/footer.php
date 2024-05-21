<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stacey_pearson
 */
?>
<?php
	$social_icons = get_field('social_icons', 'option');
	$footer_logo = get_field('footer_logo', 'option');
	$contact_text = get_field('contact_text', 'option');
	$contact_button_text = get_field('contact_button_text', 'option');
	$contact_form = get_field('contact_form', 'option');
	$disclaimer_text = get_field('disclaimer_text', 'option');
	$copyright_text = get_field('copyright_text', 'option');
?>

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="footercontainer">
				<?php if(!empty($social_icons)){ ?>
					<div class="column3">
						<ul>
							<?php foreach($social_icons as $icons){ ?>
								<li>
									<a href="<?php echo $icons['url']; ?>" target="_blank">
										<img class="" src="<?php echo $icons['icon']['url']; ?>" alt="<?php echo $icons['icon']['alt']; ?>" height="100%" width="100%" loading="lazy">
									</a>
								</li>
							<?php } ?>
						</ul>
					</div>
				<?php } ?>
				<div class="column<?php if(!empty($social_icons)){ ?>3<?php }else{?>6<?php } ?>">
					<a href="<?php echo home_url('/'); ?>">
						<img class="" src="<?php echo $footer_logo['url']; ?>" alt="<?php echo $footer_logo['alt']; ?>" height="100%" width="100%" loading="lazy">
					</a>
				</div>
				<div class="column3">
					<?php if(!empty($contact_text)){ ?>
						<p><?php echo $contact_text; ?></p>
					<?php } ?>
					<a href="#contact-modal" rel="modal:open" class="commonbtn"><?php echo $contact_button_text; ?></a>
				</div>
			</div>
			<?php if(!empty($disclaimer_text)){ ?>
				<p><?php echo $disclaimer_text; ?></p>
			<?php } ?>
			<hr/>
			<p>@<?php echo date('Y'); ?> <?php echo $copyright_text; ?></p>
		</div>
	</footer><!-- #colophon -->

	</div>
	</div>
	</div><!-- #page -->
	<?php wp_footer(); ?>
	</body>
</html>
