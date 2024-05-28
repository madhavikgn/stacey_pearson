<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package stacey_pearson
 */

get_header();
$not_found_pg_image = get_field('not_found_pg_image', 'option');
$not_found_pg_title = get_field('not_found_pg_title', 'option');
$not_found_pg_sub_title = get_field('not_found_pg_sub_title', 'option');
$not_found_pg_button_text = get_field('not_found_pg_button_text', 'option');
$not_found_pg_button_url = get_field('not_found_pg_button_url', 'option');
?>
<section class="error-main">
	<div class="content">
		<div class="container">
			<div class="item-content"  data-aos="fade-left" data-aos-duration="1000">
				<h1><?php echo $not_found_pg_title; ?></h1>
				<h2><?php echo $not_found_pg_sub_title; ?></h2>
				<a class="backlink" href="<?php echo $not_found_pg_button_url; ?>"><?php echo $not_found_pg_button_text; ?></a>
			</div>
		</div>
	</div>

	<!-- Contact Form Popup -->
    <?php
        $contact_form_title = get_field('contact_form_title', 'option');
        $contact_form = get_field('contact_form', 'option');
    ?>
    <div id="contact-modal" class="modal contact-modal">
        <div class="modalcontent">
            <h1><?php echo $contact_form_title; ?></h1>
            <?php echo do_shortcode($contact_form); ?>
        </div>  
    </div>

    <!-- Thankyou Popup -->
    <?php
        $after_form_submit_text = get_field('after_form_submit_text', 'option');
    ?>
    <div id="thankyou-modal" class="modal contact-modal">
        <div class="modalcontent">
            <?php echo $after_form_submit_text; ?>
        </div>  
    </div>
</section>

<?php
get_footer();
