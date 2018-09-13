<?php

add_theme_support('post-thumbnails');

function maow_register_nav_menu(){
    register_nav_menu('primary','Header Navigation', 'Menu');
}

add_action('after_setup_theme','maow_register_nav_menu');
