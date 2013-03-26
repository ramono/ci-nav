<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Navigation Helper
 * Created by: Ramon Lapenta
 * Usage: 
 * Save this file into application/helpers folder
 * Create nav.php file on config folder with array containing menu
 * Autoload nav config file, url and nav helper
 * Call menu_ul('selected_item') on controller or template
 */

$config['nav'] = array(
    'home' => array(
        'id' => 'home',
        'title'  => 'Home',
        'link'   => ''
    ),
    'services' => array(
        'id' => 'services',
        'title'  => 'Services',
        'link'   => 'services'
    ),
    'clients' => array(
        'id' => 'clients',
        'title'  => 'Clients',
        'link'   => 'clients'
    ),
    'about' => array(
        'id' => 'about',
        'title'  => 'About Us',
        'link'   => 'about'
    ),
    'contact' => array(
        'id' => 'contact',
        'title'  => 'Contact Us',
        'link'   => 'contact'
    )
);


/* End of file nav.php */
/* Location: ./application/config/nav.php */