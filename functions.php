<?php

function gymfitness_menus()
{
    register_nav_menus(array(
        'menu_principal' => __('Menu Principal', 'gymfitness')
    ));
}
add_action('init', 'gymfitness_menus');