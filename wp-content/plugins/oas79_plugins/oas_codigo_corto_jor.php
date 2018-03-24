<?php

/*
Plugin Name: oas_codigo_corto_jor
Plugin URI: www.google.com
Description: Este plugin sirve para mediante un codigo corto por ejemplo "lot" colocar 
             un comando que se ejecute en el cuerpo 
Author: Oscar Apaza 
Version: 1.0 
Author URI: 
Licence: GPL2

*/

add_action('init','oas_codigo_corto_jor');

if(!function_exists("oas_codigo_corto_jor"))
{
    function oas_codigo_corto_jor()
    {
        
        add_shortcode('jor','jor');
    }
}
if(!function_exists("jor"))
{
    function jor($args,$content)
    {
        return "<p><a href=http://www.jornadanet.com>www.jornadanet.com</a></p>".$content;
        
    }
}


