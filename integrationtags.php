<?php
//add tags option to integrations
$integrations_to_add_tag_to = array('affiliatewp', 'buddypress', 'contact-form-7', 'custom', 'easy-digital-downloads', 'events-manager', 'gravity-forms', 'memberpress', 'ninja-forms', 'woocommerce', 'wp-comment-form', 'wp-registration-form', 'wpforms');

if (in_array($integration->slug, $integrations_to_add_tag_to)) {
    ?>
    <table class="form-table">
    <?php
    $config = array(
        'element' => 'mc4wp_integrations['.$integration->slug.'][enabled]',
        'value'   => '1',
        'hide'    => false,
    );
    ?>
        <tbody class="integration-toggled-settings" data-showif="<?php echo esc_attr(json_encode($config)); ?>">
            <tr valign="top">
                <th scope="row">
                    <?php _e('Subscriber tags', 'mc4wp_extra'); ?>
                </th>
                <td>
                <input 
                    type="text" 
                    class="widefat" 
                    id="mc4wp_extra[<?php echo $integration->slug; ?>tag]" 
                    name="mc4wp_extra[<?php echo $integration->slug; ?>tag]" 
                    placeholder="Example: My tag, another tag"
                    value="<?php echo esc_attr(isset(get_option('mc4wp_extra')[ $integration->slug.'tag' ]) ? get_option('mc4wp_extra')[ $integration->slug.'tag' ] : ''); ?>" 
                />
                <p class="description"><?php echo esc_html__('The listed tags will be applied to all subscribers added or updated by this integration. Separate multiple values with a comma.', 'mc4wp_extra'); ?></p>
                </td>
            </tr>
        </tbody>
    </table>
<?php } ?>