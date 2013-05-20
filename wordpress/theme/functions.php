<?php
/**
 * Created by JetBrains PhpStorm.
 * User: mfloryan
 * Date: 12/05/2013
 * Time: 17:30
 * To change this template use File | Settings | File Templates.
 */


function menu_registration() {
    register_nav_menus(array(
        'nav-menu' => 'Navigation Menu',
        'home-menu' => 'Home Page Menu'
    ));
}


add_action( 'init', 'menu_registration' );