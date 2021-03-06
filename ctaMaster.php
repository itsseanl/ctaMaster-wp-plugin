<?php 

/**
 * Plugin name:    ctaMaster
 * PLugin URI:     https://github.com/itsseanl
 * Description:    Handle notifying your users with banners, pop-ups, and more with ctaMaster!
 * Version:        0.0.1
 * Author:         Sean Lyons
 * Author URI:     https://itsseanl.com
 * License:        GPL v2
 *  License URI:   https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:    ctaMaster
 */

if ( ! defined('ABSPATH')):
    die;
endif;

//add_action hook creates new menu option in wp-admin based on the 
add_action('admin_menu', 'ctaMaster_plugin_setup_menu');

add_action('template_redirect', function(){
    include ('controller.php');
});


function ctaMaster_plugin_setup_menu(){
        add_menu_page( 'ctaMaster', 'ctaMaster', 'manage_options', 'ctaMaster', 'ctaMaster_init' );
}
function ctaMaster_init(){
    if (is_admin()){
    wp_enqueue_style( 'style1', plugins_url( '/style.css' , __FILE__ ) );
    wp_enqueue_script( 'script', plugins_url( '/maincontrol.js' , __FILE__ ) );
    include ('enable.php');
    echo $enable;
    include ('view.php');
    view($enable);

    }

    $myCtaMasterPath = plugins_url();
}
