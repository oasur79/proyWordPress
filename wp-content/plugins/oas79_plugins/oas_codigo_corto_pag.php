<?php

/*
Plugin Name: oas_codigo_corto_pag
Plugin URI: www.google.com
Description: Este plugin sirve para mediante un codigo corto por ejemplo "lot" colocar 
             un comando que se ejecute en el cuerpo 
Author: Oscar Apaza 
Version: 1.0 
Author URI: 
Licence: GPL2

*/

add_action('init','oas_codigo_corto_pag');

if(!function_exists("oas_codigo_corto_pag"))
{
    function oas_codigo_corto_pag()
    {
        
        add_shortcode('pag','pag');
    }
}
if(!function_exists("pag"))
{
    function pag($args,$content)
    {
        return "<p><a href=http://	www.paginasiete.bo>	www.paginasiete.bo</a></p>".$content;
        
    }
}


