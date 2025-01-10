<?php
//add tags option to integrations

if (in_array($integration->slug, $this->integrations_to_add_tag_to)) {
    ?>
    <table class="form-table">
    <?php
    $config = array(
        'element' => 'mc4wp_integration['.$integration->slug.'][enabled]',
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
                    id="mc4wp_extra_integrations[<?php echo $integration->slug; ?>tag]" 
                    name="mc4wp_extra_integrations[<?php echo $integration->slug; ?>tag]" 
                    placeholder="Example: My tag, another tag"
                    value="<?php echo esc_attr(isset(get_option('mc4wp_extra_integrations')[ $integration->slug.'tag' ]) ? get_option('mc4wp_extra_integrations')[ $integration->slug.'tag' ] : ''); ?>" 
                />
                <p class="description"><?php echo esc_html__('The listed tags will be applied to all subscribers added or updated by this integration. Separate multiple values with a comma.', 'mc4wp_extra'); ?></p>
                </td>
            </tr>
        </tbody>
    </table>
<?php } ?>