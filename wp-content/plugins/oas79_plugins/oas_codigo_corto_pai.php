<?php

/*
Plugin Name: codigo_corto_pai
Plugin URI: www.google.com
Description: Este plugin sirve para mediante un codigo corto por ejemplo "lot" colocar 
             un comando que se ejecute en el cuerpo 
Author: Oscar Apaza 
Version: 1.0 
Author URI: 
Licence: GPL2

*/

add_action('init','oas_codigo_corto_pai');

if(!function_exists("oas_codigo_corto_pai"))
{
    function oas_codigo_corto_pai()
    {
        
        add_shortcode('pai','pai');
    }
}
if(!function_exists("pai"))
{
    function pai($args,$content)
    {
        return "<p><a href=http://www.elpaisonline.com>www.elpaisonline.com</a></p>".$content;
        
    }
}


