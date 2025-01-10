<table class="form-table">
        <tbody>
            <tr valign="top">
                <th scope="row">
                    <?php _e('Email notification', 'mc4wp_extra'); ?>
                </th>
                <td>
                <input 
                    type="email" 
                    class="widefat" 
                    id="mc4wp_extra[apilogemail]" 
                    name="mc4wp_extra[apilogemail]" 
                    placeholder="Example: yourname@your-domain.com"
                    value="<?php echo esc_attr(isset(get_option('mc4wp_extra')[ 'apilogemail' ]) ? get_option('mc4wp_extra')[ 'apilogemail' ] : ''); ?>" 
                />
                <p class="description"><?php echo esc_html__('Fill an email address where you want to receive notifications of API errors. Leave empty if you don\'t want to receive email notifications.', 'mc4wp_extra'); ?></p>
                </td>
            </tr>
        </tbody>
    </table>