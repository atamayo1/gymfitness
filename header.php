<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GymFitness</title>
    <?php wp_head(); ?>
</head>
<body>
    
    <header>
        <div class="container">
            <div class="barra-navegacion">
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="logo sitio">
                </div>
                <?php 
                    $args = array(
                    'theme-location' => 'menu-principal',
                    'container' => 'nav',
                    'container_class' => 'menu-principal'
                    );

                    wp_nav_menu($args);
                ?>
                
            </div>
        </div>
    </header>
