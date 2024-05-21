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
</section>

<?php
get_footer();
