<?php

/*
Plugin Name: oas_codigo_corto_pat
Plugin URI: www.google.com
Description: Este plugin sirve para mediante un codigo corto por ejemplo "lot" colocar 
             un comando que se ejecute en el cuerpo 
Author: Oscar Apaza 
Version: 1.0 
Author URI: 
Licence: GPL2

*/

add_action('init','oas_codigo_corto_pat');

if(!function_exists("oas_codigo_corto_pat"))
{
    function oas_codigo_corto_pat()
    {
        
        add_shortcode('pat','pat');
    }
}
if(!function_exists("pat"))
{
    function pat($args,$content)
    {
        return "<p><a href=http://www.lapatriaenlinea.com>www.lapatriaenlinea.com</a></p>".$content;
        
    }
}


