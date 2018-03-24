<?php

/*
Plugin Name: codigo_corto_pts
Plugin URI: www.google.com
Description: Este plugin sirve para mediante un codigo corto por ejemplo "pts" colocar 
             un comando que se ejecute en el cuerpo 
Author: Oscar Apaza 
Version: 1.0 
Author URI: 
Licence: GPL2

*/

add_action('init','oas_codigo_corto_pts');

if(!function_exists("oas_codigo_corto_pts"))
{
    function oas_codigo_corto_pts()
    {
      
        add_shortcode('potosi','potosi');
    }
}
if(!function_exists("potosi"))
{
    function potosi($args,$content)
    {
        return "<p><a href=http://www.elpotosi.net>www.elpotosi.net</a></p>";
        
    }
}


