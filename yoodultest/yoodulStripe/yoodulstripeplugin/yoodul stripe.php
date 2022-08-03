<?php
/**
 * Plugin Name:       Yoodul Stripe
 * Description:       Handles payment method.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Usman Mustapha
 */

 if(!defined('ABSPATH'))
 {
    exit;
 }

add_filter('show_admin_bar', '__return_false');

add_action('admin_menu', 'test_plugin_setup_menu');
 
function test_plugin_setup_menu(){
    add_menu_page( 'Test Plugin Page', 'Yoodul Stripe', 'manage_options', 'test-plugin', 'test_init' );
}
 
function test_init(){
    echo "<h1>Hello Yoodul!</h1>
    <p>  Your Stripe Api credentials</p>
    <p>  Name- Usman Mustapha</p>
    <p>  Email- usmanmustaphabolaji@gmail.com</p>
    <p>  Test Api Key- pk_test_51LS1OrGBHfI2QwR81DnJUd89s7uY4Vwj5qWCJwyLFiO7lw8XemnET5AvF0JFkQN5VGQF3A0frLykZHCdaILUs0Xc00c9eWraQw</p>";         
}

class YoodulStripe {
    public function create_yoodul_stripe()
    {
    $stripe = new \Stripe\StripeClient("pk_test_51LS1OrGBHfI2QwR81DnJUd89s7uY4Vwj5qWCJwyLFiO7lw8XemnET5AvF0JFkQN5VGQF3A0frLykZHCdaILUs0Xc00c9eWraQw");
    }
    
}

?>