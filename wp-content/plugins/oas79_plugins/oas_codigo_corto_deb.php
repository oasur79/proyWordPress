<?php

/*
Plugin Name: oas_codigo_corto_deb
Plugin URI: www.google.com
Description: Este plugin sirve para mediante un codigo corto por ejemplo "lot" colocar 
             un comando que se ejecute en el cuerpo 
Author: Oscar Apaza 
Version: 1.0 
Author URI: 
Licence: GPL2

*/

add_action('init','oas_codigo_corto_deb');

if(!function_exists("oas_codigo_corto_deb"))
{
    function oas_codigo_corto_deb()
    {
        
        add_shortcode('deb','deb');
    }
}
if(!function_exists("deb"))
{
    function deb($args,$content)
    {
        return "<p><a href=http://www.eldeber.com.bo>www.eldeber.com.bo</a></p>".$content;
        
    }
}


