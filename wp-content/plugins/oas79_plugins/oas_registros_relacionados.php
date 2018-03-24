<?php
/*
Plugin Name: oas_registros_relacionados
Plugin URI: www.google.com
Description: Este plugin sirve para mostrar registros relacionados al final del cuerpo de la pagina en una cantidad de tres
Author: Oscar Apaza 
Version: 1.0 
Author URI: 
Licence: GPL2

*/
add_filter("the_content","oas_post_contenido_relacionado");

if(!function_exists("oas_post_contenido_relacionado"))
{
    function oas_post_contenido_relacionado($content)
    {
        if(!is_singular('post'))
        {
            return $content;
        }else
        {
            $categorias=get_the_terms(get_the_ID(),"category");
            $array=array();
            foreach($categorias as $categoria)
            {
                $array[]=$categoria->term_id;
            }
            //print_r($array);
            
            $loop=new WP_Query
            (
                array
                (
                    "category_in"=>$array,
                    "posts_per_page"=>3,
                    'post_not_in'=>array(get_the_ID()),
                    'orderby'=>'rand'
                )
            );
            if($loop->have_posts())
            {
                $content.="Post Relacionados";
                $content.="<hr />";
                $content.="<ul>";
                    while($loop->have_posts())
                    {
                        $loop->the_post();
                        $content.= "<li>";
                        $content.='<a href="'.get_permalink().'">'.get_the_title().'</a>';
                        $content.= "</li>";
                    }
                $content.="</ul>";
            }
            wp_reset_query();
            return $content;
        }
    }
}