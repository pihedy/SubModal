<?php
// no direct access
defined( 'ABSPATH' ) or die;
?>

<div class="wrap">
    <h1>
        <?php echo $pluginData['Name'] ?>
    </h1>
    <form method="post" action="options.php">
    <?php
    settings_fields('subModalSettingsGroup');
    do_settings_sections('do_settings_sections');
    ?>
    <table class="form-table">
        <tbody>
            <tr>
                <th><?php _e('Megjelenő szöveg', 'goat') ?></th>
                <td>
                    <textarea name="showText" cols="50" rows="5"><?php echo esc_attr(get_option('showText')) ?></textarea>
                </td>
            </tr>
        </tbody>
    </table>
    <?php submit_button(); ?>
    </form>
</div>
