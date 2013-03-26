<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


// menu()  ------------------------------------------------------------------------

if ( ! function_exists('menu'))
{
    function menu( $items, $sel = '', $class = '' )
   {
        if( ! empty( $class ) ) {
            $menu = '<ul class="' . $class . '">' . "\n";
        } else {
            $menu = '<ul>' . "\n";
        }
        foreach( $items as $item ) {
            $id = ( ! empty( $item['id'] ) ) ? ' id="'. $item['id'] . '"' : '';
            $current = ( in_array( $sel, $item ) ) ? ' class="current"' : '';
            $menu .= '<li' . $current . '><a href="' . base_url() . $item['link'] . '"'.$id . '>' . $item['title'] . '</a></li>' . "\n";
        }
        $menu .= '</ul>' . "\n";
        return $menu;
    }
}


// menup() ------------------------------------------------------------------------

if ( ! function_exists('menup'))
{
    function menup( $items, $sel = '', $class = '', $sep = '|' )
   {
        if( ! empty( $class ) ) {
            $menup = '<p class="' . $class . '">' . "\n";
        } else {
            $menup = '<p>' . "\n";
        }
        $count = count($items);
        $i = 0;
        foreach( $items as $item ) 
        {
            $id = ( ! empty( $item['id'] ) ) ? ' id="'. $item['id'] . '"' : '';
            $current = ( in_array( $sel, $item ) ) ? ' class="current"' : '';
            $menup .= '<a href="' . base_url() . $item['link'] . '"'.$id . ' ' . $current . '>' . $item['title'] . '</a>' . "\n";
            $i++;
            if( $count != $i )
            {
                $menup .= ' ' . trim( $sep ) . ' ';
            }
        }
        $menup .= '</p>' . "\n";
        return $menup;
    }
}

/* End of file nav_helper.php */
/* Location: ./system/helpers/nav_helper.php */