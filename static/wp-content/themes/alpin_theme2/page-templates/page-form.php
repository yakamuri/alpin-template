<?php

/*
    Template Name: Form
 */

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Page form Template
 *
 * @file page-form.php
 */

$post = get_page_by_path('contacts/form', '', 'page');
$objPost = get_post(pll_get_post($post->ID));
?>

<div class="col-sm-6 col-xs-12 fleft">
	<div class="wrapper">
		<?php
			//$contact_form = 1;
			//$contact_form_language_override = 'ro_RO';
			//var_dump(pll_current_language());
		?>
		<?php echo do_shortcode(get_post_field('post_content', $objPost->ID)); ?>
	</div>
</div>