<?php

/*
Plugin Name: oas_codigo_corto_dia
Plugin URI: www.google.com
Description: Este plugin sirve para mediante un codigo corto por ejemplo "lot" colocar 
             un comando que se ejecute en el cuerpo 
Author: Oscar Apaza 
Version: 1.0 
Author URI: 
Licence: GPL2

*/

add_action('init','oas_codigo_corto_dia');

if(!function_exists("oas_codigo_corto_dia"))
{
    function oas_codigo_corto_dia()
    {
        
        add_shortcode('dia','dia');
    }
}
if(!function_exists("dia"))
{
    function dia($args,$content)
    {
        return "<p><a href=http://www.eldiario.net>www.eldiario.net</a></p>".$content;
        
    }
}


