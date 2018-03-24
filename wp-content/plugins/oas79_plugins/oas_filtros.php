<?php
/*
Plugin Name: oas_filtros
Plugin URI: www.google.com
Description: Este plugin sirve para filtrar y colocarle un formato en particular a cada segmento del contenido
Author: Oscar Apaza 
Version: 1.0 
Author URI: 
Licence: GPL2
*/

add_filter("the_title","oas_filtrosEditTitulo");
add_filter("the_content","oas_filtrosEditCuerpo");

/**
 * esta función es para colocar en negrita cada título
 * */
if(!function_exists("oas_filtrosEditTitulo"))
{
    function oas_filtrosEditTitulo($text)
    {
        return "<b>".$text."</b>";
    }
}
/**
 * esta función es para dividir los articulos del cuerpo
 * */
 if(!function_exists("oas_filtrosEditCuerpo"))
 {
    function oas_filtrosEditCuerpo($text)
    {
        return "<hr>".$text."</hr>";
        //return strtoupper($text);
    }
 }
 
 
