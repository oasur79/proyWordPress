<?php

/*
Plugin Name: oas_codigo_corto_ben
Plugin URI: www.google.com
Description: Este plugin sirve para mediante un codigo corto por ejemplo "lot" colocar 
             un comando que se ejecute en el cuerpo 
Author: Oscar Apaza 
Version: 1.0 
Author URI: 
Licence: GPL2

*/

add_action('init','oas_codigo_corto_ben');

if(!function_exists("oas_codigo_corto_ben"))
{
    function oas_codigo_corto_ben()
    {
        
        add_shortcode('ben','ben');
    }
}
if(!function_exists("ben"))
{
    function ben($args,$content)
    {
        return "<p><a href=http://www.lapalabradelbeni.com.bo>www.lapalabradelbeni.com.bo</a></p>".$content;
        
    }
}


