<?php
/*
Plugin Name: oas_hook
Plugin URI: www.google.com
Description:Este Plugins permite cargar un título y una descripción como widget  
Author: Oscar Apaza 
Version: 1.0 
Author URI: 
Licence: GPL2

*/
add_action("admin_menu","cc_opciones_de_admin");
add_action("admin_init","cc_opciones_de_admin_init");
/**
 * acá registramos los campos que usaremos en un nuestra configuración del plugins
 * */
if(!function_exists("cc_opciones_de_admin_init"))
{
    function cc_opciones_de_admin_init()
    {
        register_setting("cc-group","cc_opciones_titulo");
        register_setting("cc-group","cc_opciones_description");
    }
}
/**
 * acá inicializamos el panel de nuestro Plugins
 * */
if(!function_exists("cc_opciones_de_admin"))
{
    function cc_opciones_de_admin()
    {
        add_options_page("Opciones de mi Plugins","Opciones de mi Plugins","manage_options","CC","cc_get_opciones_de_admin");
    }
}
/**
 * acá creamos el código HTML con el que se muestra nuestro panel
 * */
if(!function_exists("cc_get_opciones_de_admin"))
{
    function cc_get_opciones_de_admin()
    {
        ?>
        <div class="wpap">
            <?php screen_icon()?><h2>Opciones de mi Plugins</h2>
            <h3 class="title">Descripción</h3>

            <form method="post" action="options.php">
                 <?php settings_fields("cc-group")?>
                 <?php @do_settings_fields("cc-group")?>
                 <table class="form-table">
                    <tr valign="top">
                        <th scope="row">
                            <label for="cc_opciones_titulo">Título</label>
                        </th>
                        <td>
                            <input type="text" name="cc_opciones_titulo" value="<?php echo get_option("cc_opciones_titulo")?>" />
                            <br />
                            <small></small>
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">
                            <label for="cc_opciones_description">Descripción</label>
                        </th>
                        <td>
                            <textarea name="cc_opciones_description"><?php echo get_option("cc_opciones_description")?></textarea>
                            <br />
                            <small></small>
                        </td>
                    </tr>
                 </table>
                 <?php @submit_button()?>
            </form>
        </div>
        <?php
    }
}











