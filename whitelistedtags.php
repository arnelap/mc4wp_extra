<?php

if (in_array($integration->slug, $this->integrations_to_add_tag_whitelist_to)) {
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
                    <?php _e('Whitelisted tags', 'mc4wp_extra'); ?>
                </th>
                <td>
                <input 
                    type="text" 
                    class="widefat" 
                    id="mc4wp_extra[<?php echo $integration->slug; ?>tag_whitelist]" 
                    name="mc4wp_extra[<?php echo $integration->slug; ?>tag_whitelist]" 
                    placeholder="Example: My tag, another tag"
                    value="<?php echo esc_attr(isset(get_option('mc4wp_extra')[ $integration->slug.'tag_whitelist' ]) ? get_option('mc4wp_extra')[ $integration->slug.'tag_whitelist' ] : ''); ?>" 
                />
                <p class="description"><?php echo esc_html__('The listed tags won\'t automatically be set, but  they can be added to the form via any field that has the mc4wp_tag_ prefix to the fieldname. Separate multiple values with a comma.', 'mc4wp_extra'); ?></p>
                </td>
            </tr>
        </tbody>
    </table>
<?php } ?> 