<?php

/*
Plugin Name: oas_codigo_corto_raz
Plugin URI: www.google.com
Description: Este plugin sirve para mediante un codigo corto por ejemplo "lot" colocar 
             un comando que se ejecute en el cuerpo 
Author: Oscar Apaza 
Version: 1.0 
Author URI: 
Licence: GPL2

*/

add_action('init','oas_codigo_corto_raz');

if(!function_exists("oas_codigo_corto_raz"))
{
    function oas_codigo_corto_raz()
    {
        
        add_shortcode('raz','raz');
    }
}
if(!function_exists("raz"))
{
    function raz($args,$content)
    {
        return "<p><a href=http://www.la-razon.com>	www.la-razon.com</a></p>".$content;
        
    }
}


