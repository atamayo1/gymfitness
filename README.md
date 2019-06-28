# gymfitness
Plantilla Gym con Wordpress

**Wordpress**

**Loop de Wordpress:**

    <?php while (have_posts()) : the_post(); ?>
    <?php endwhile; ?>

**Funciones para usar en el loop de wordpress:**

**Titulo:**

	<?php the_title(); ?>

**Contenido:**

	<?php the_content(); ?>

**Autor:**

    <?php the_author(); ?>

**Fecha:**

	<?php the_date(); ?>

**Archivo de las Entradas**

	single.php

**Archivo General**

	index.php

**Archivo de las Paginas**

	page.php

**Funciones personalizadas (css, js, bootstrap, jquery) se agregan en el archivo**

	functions.php

**Las funciones se añaden al Hook functions.php**

	add_action($tag, $function_to_add, $priority, $accepted_args)

**Función para mostrar el menú functions.php**
    
    function nombredefuncion_menus() {
        register_nav_menus(array(
            'menu_principal' => __('Menu Principal', 'gymfitness')
        ));
    }
    add_action('init', 'gymfitness_menus');
    
**Función para mostrar el menu en el header.php**

	//Menu de Navegación, agregar mas utilizando el arreglo
	<?php 
        $args = array(
        'theme-location' => 'menu-principal',
        'container' => 'nav',
        'container_class' => 'menu-principal'
        );

        wp_nav_menu($args);
    ?>
    
**Función para llamar los scripts y los estilos en el header.php**

	<?php wp_head(); ?>

**Función para mostrar los scripts y los estilos functions.php**

    //Scripts y Styles
    function gymfitness_scripts_styles()
    {
        wp_enqueue_style('normalize', get_stylesheet_uri().'/css/normalize.css', array(), '8.0.1');
        wp_enqueue_style('googleFont', 'https://fonts.googleapis.com/css?family=Open+Sans|Raleway:400,700,900|Staatliches&display=swap', array(), '1.0.0');
        //La hoja de estilo principal
        wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googleFont'), '1.0.0');
        
    }
    add_action('wp_enqueue_scripts', 'gymfitness_scripts_styles');