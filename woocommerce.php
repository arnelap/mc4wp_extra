<?php
/*
//field selection, to be used to map birtday and address fields to checkout
$mailchimp_extra = new MC4WP_MailChimp();

$available_mailchimp_fields = array();
foreach ($opts['lists'] as $list) {
	$available_mailchimp_fields = array_merge($available_mailchimp_fields, $mailchimp_extra->get_list_merge_fields($list));
}

?>
<select name="mc4wp_extra[woocommerce][field]" id="mc4wp_extra_woocommerce_field">
	<option value=""><?php _e('Select a field', 'mc4wp_extra'); ?></option>
	<?php foreach ($available_mailchimp_fields as $field) : ?>
        <?php ?>
		<option value="<?php echo esc_attr($field->tag); ?>"><?php echo esc_html($field->name); ?></option>

	<?php endforeach; ?>
</select>
<pre>
<?php print_r($available_mailchimp_fields); ?>
</pre>
*/