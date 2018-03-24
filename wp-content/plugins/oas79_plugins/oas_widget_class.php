<?php
class oas_widget_class extends WP_Widget
{
    public function __construct()
    {
        $opciones=array
        (
            "classname"=>"miclasecss",
            "description"=>"Sitios web asociados a la informacion"
        );
        $this->WP_Widget('css_id','Mi Widget',$opciones);
    }
    public function form($instance)
    {
        $defaults=array
        (
            "titulo"=>"Sitios web asociados a la informacion"
        );
        $instance=wp_parse_args((array)$instance,$defaults);
        $titulo=esc_attr($instance["titulo"]);
        ?>
        <p>Título : <input type="text" name="<?php echo $this->get_field_name("titulo")?>" value="<?php echo $titulo?>" class="widefat" /></p>
        <?php
        
    }
    public function update($new_instance,$old_instance)
    {
        $instance=$old_instance;
        $instance["titulo"]=strip_tags($new_instance["titulo"]);
        return $instance;
    }
    public function widget($args,$instance)
    {
        extract($args);
        $titulo=apply_filters('widget_title',$instance['titulo']);
        echo $before_widget;
        echo $before_title.$titulo.$after_title;
        ?>
        <ul>
            <li><a href="http://www.reforma.com/"> Reforma (MEX)<a></li>
            <li><a href="http://www.clarin.com/">Clarín (ARG)<a></li>
            <li><a href="http://elcomercio.pe/">El Comercio (PER)<a></li>
            <li><a href="http://www.ultimasnoticias.com.ve/">Últimas Noticias (VEN)<a></li>
            <li><a href="http://www.eltiempo.com/">El Tiempo (COL)<a></li>
            <li><a href="http://www.emol.com/">El Mercurio (CHI)<a></li>
        </ul>
        <?php
        echo $after_widget;
        
    }
    
}


