<?php 
/*
Plugin Name: aviso de activacion de plugin
Plugin URI: wwww.goldenkey.org
Description: reporte de activacion de plugins
Version: 1.0.0
Author: JazuSoft - M.Prystupa - 
*/

function Activar_mail () {   
};
function Desactivar_mail () {   
};
register_activation_hook( __FILE__, 'Activar_mail' );
register_deactivation_hook(__FILE__, 'Desactivar_mail');
add_action('admin_menu', 'mail_menu');

function mail_menu () {
    add_menu_page(
        'Mail', #Titulo
        'activar_plugin', #nombre del menu
        'manage_options', #permisos
        'mail_menu.php', #slug
        'mostrar', #Mostrar contenido
        plugin_dir_url(__FILE__) . 'img/globe.png', # icono
        "999" #posicion
    );
};
function activarPlugin(){
    $multiple_recipients = array(
        'msanchez@jazusoft.com',
        'tlanghi@jazusoft.com',
        'jganora@jazusoft.com',
        'jose@jazusoft.com',
        'fabian@jazusoft.com',
        'adunogent@jazusoft.com',
        'mbarreneche@jazusoft.com',
        'mprystupa@jazusoft.com' 
    );
    $subj = 'se activo un plugin';
    $body = 'se activo un plugin sincroniza tu repositorio';    
    wp_mail( $multiple_recipients, $subj, $body );
};
add_action('activate_plugin', 'activarPlugin');
