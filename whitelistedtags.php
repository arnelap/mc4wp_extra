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
                    id="mc4wp_extra_integrations[<?php echo $integration->slug; ?>tag_whitelist]" 
                    name="mc4wp_extra_integrations[<?php echo $integration->slug; ?>tag_whitelist]" 
                    placeholder="Example: My tag, another tag"
                    value="<?php echo esc_attr(isset(get_option('mc4wp_extra_integrations')[ $integration->slug.'tag_whitelist' ]) ? get_option('mc4wp_extra_integrations')[ $integration->slug.'tag_whitelist' ] : ''); ?>" 
                />
                <p class="description"><?php echo esc_html__('These tags are allowed to be set via any field in the form as long as the field\'s name starts with the mc4wp_tag_ prefix. Separate multiple values with a comma.', 'mc4wp_extra'); ?></p>
                </td>
            </tr>
        </tbody>
    </table>
<?php } ?> 