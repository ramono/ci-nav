<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* Codeigniter Navigation Helper
*
* This is a small helper to create dynamic navigation menus in codeigniter. 
*
* @author Ramon Lapenta <me@ramonlapenta.com>
* @copyright Public Domain
* @license http://ramonlapenta.com/license.txt
*
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