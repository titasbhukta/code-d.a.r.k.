<?php

/**
 * @link              https://titasbhukta.com
 * @since             1.0.0
 * @package           Code_DARK
 *
 * @wordpress-plugin
 * Plugin Name:       Code D.A.R.K.
 * Plugin URI:        https://titasbhukta.com/plugin/code-dark
 * Description:       This is a plugin which enables you to add a dark mode to your site. It gives you a shortcode [Code_DARK] which can be used to add the mode toggle button to the site. The plugin handles the rest.
 * Version:           1.0.0
 * Author:            Titas Bhukta
 * Author URI:        https://titasbhukta.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       code-dark
 * Domain Path:       /languages
 */

 function code_dark_styles()
 {
    wp_register_style( 'code-dark-css', plugins_url( '/assets/code-dark.css', __FILE__ ), array(), '1.0.0', 'all' );
    wp_enqueue_style( 'code-dark-css' );
 }
 add_action( 'wp_enqueue_scripts', 'code_dark_styles' );

function code_dark_scripts(){ ?>

<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="<?php echo plugins_url( '/assets/code-dark.js', __FILE__ ) ?>"></script>

<?php } 

add_action('wp_footer', 'code_dark_scripts');

function code_dark_initiate() {
    return '<div class="code-dark-box"><i class="code-dark-icon"></i></div>';
}
add_shortcode('Code_DARK', 'code_dark_initiate');

?>