<?php
/*
/*
Plugin Name: oas_metadatos
Plugin URI: www.google.com
Description: Este plugin sirve para incluir campos en el momento que se edita el cuerpo por ejemplo: inputs, label, etc
Author: Oscar Apaza 
Version: 1.0 
Author URI: 
Licence: GPL2


*/
add_action("add_meta_boxes","oas_agregar_campo_def");
add_action("save_post","oas_guardar_campo");
add_filter("the_content","oas_getContent");
/**
 * cargamos todos los datos del post
 * */
if(!function_exists("oas_carga_data"))
{
    function oas_carga_data()
    {
        $values=get_post_custom($post->ID);
        //print_r($values);
        $campo=esc_attr($values["oas_campo"][0]);
        return $campo;
    }
}
/**
 * definimos el metadato
 * */
if(!function_exists("oas_agregar_campo_def"))
{
    function oas_agregar_campo_def()
    {
        add_meta_box("oas_campo","Nuevo mensaje","oas_agregar_campo","post");
    }
}
/**
 * agregamos el campo al formulario
 * */
if(!function_exists("oas_agregar_campo"))
{
    function oas_agregar_campo()
    {
    
        ?>
        <label>Agreque aqui el nuevo mensaje...</label>
        <input type="text" name="oas_campo" id="oas_campo" value="<?php echo oas_carga_data();?>" placeholder="Nuevo mensaje" />
        <?php
    }
}
/**
 * guardamos lo que se escribió en el campo
 * */
if(!function_exists("oas_guardar_campo"))
{
    function oas_guardar_campo($post_id)
    {
        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE  ) 
            {
		      return;
	       }
        // Check the user's permissions.
    	if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) 
            {
    
        		if ( ! current_user_can( 'edit_page', $post_id ) ) 
                    {
            			return;
            		}
    
            } else {
        
        		if ( ! current_user_can( 'edit_post', $post_id ) ) 
                {
        			return;
        		}
        	}
         $dato=sanitize_text_field($_POST["oas_campo"]);
         update_post_meta( $post_id, 'oas_campo', $dato );
    }
}
/**
 * mostramos el dato en el detalle de los post
 * */
 if(!function_exists("oas_getContent"))
 {
    function oas_getContent($content)
    {
        if(!is_singular('post'))
        {
            return $content;
        }else
        {
            $content.=" <hr /><b>Nuevo mensaje: </b>".oas_carga_data()."<p></p>";
            return $content;
        }
    }
 }
