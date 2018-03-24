<?php

/*
Plugin Name: codigo_corto_lot
Plugin URI: www.google.com
Description: Este plugin sirve para mediante un codigo corto por ejemplo "lot" colocar 
             un comando que se ejecute en el cuerpo 
Author: Oscar Apaza 
Version: 1.0 
Author URI: 
Licence: GPL2

*/

add_action('init','oas_codigo_corto_lot');

if(!function_exists("oas_codigo_corto_lot"))
{
    function oas_codigo_corto_lot()
    {
        
        add_shortcode('lot','lot');
    }
}
if(!function_exists("lot"))
{
    function lot($args,$content)
    {
        return "<p><a href=http://www.lostiempos.com>www.lostiempos.com</a></p>".$content;
        
    }
}


