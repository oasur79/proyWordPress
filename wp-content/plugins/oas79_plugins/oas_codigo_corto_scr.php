<?php

/*
Plugin Name: codigo_corto_scr
Plugin URI: www.google.com
Description: Este plugin sirve para mediante un codigo corto por ejemplo "sur" colocar 
             un comando que se ejecute en el cuerpo 
Author: Oscar Apaza 
Version: 1.0 
Author URI: 
Licence: GPL2

*/

add_action('init','oas_codigo_corto_scr');

if(!function_exists("oas_codigo_corto_scr"))
{
    function oas_codigo_corto_scr()
    {
       
        add_shortcode('sur','sur');
    }
}
if(!function_exists("sur"))
{
    function sur($args,$content)
    {
        return "<p><a href=http://www.correodelsur.com>www.correodelsur.com</a></p>".$content;
        
    }
}


