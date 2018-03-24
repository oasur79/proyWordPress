<?php

/*
Plugin Name: oas_codigo_corto_star
Plugin URI: www.google.com
Description: Este plugin sirve para mediante un codigo corto por ejemplo "lot" colocar 
             un comando que se ejecute en el cuerpo 
Author: Oscar Apaza 
Version: 1.0 
Author URI: 
Licence: GPL2

*/

add_action('init','oas_codigo_corto_star');

if(!function_exists("oas_codigo_corto_star"))
{
    function oas_codigo_corto_star()
    {
        
        add_shortcode('star','star');
    }
}
if(!function_exists("star"))
{
    function star($args,$content)
    {
        return "<p><a href=http://	www.laestrelladeloriente.com>	www.laestrelladeloriente.com</a></p>".$content;
        
    }
}


