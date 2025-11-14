<?php
// === REGISTRO DEL TIPO DE POST "VIDEOJUEGOS" ===
function registrar_post_type_videojuegos() {
    $labels = array(
        'name'               => 'Videojuegos',
        'singular_name'      => 'Videojuego',
        'menu_name'          => 'Videojuegos',
        'name_admin_bar'     => 'Videojuego',
        'add_new'            => 'Añadir nuevo',
        'add_new_item'       => 'Añadir nuevo videojuego',
        'new_item'           => 'Nuevo videojuego',
        'edit_item'          => 'Editar videojuego',
        'view_item'          => 'Ver videojuego',
        'all_items'          => 'Todos los videojuegos',
        'search_items'       => 'Buscar videojuegos',
        'not_found'          => 'No se encontraron videojuegos.',
        'not_found_in_trash' => 'No hay videojuegos en la papelera.'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'menu_icon'          => 'dashicons-games', 
        'rewrite'            => array('slug' => 'videojuegos'),
        'supports'           => array('title', 'editor', 'thumbnail', 'comments'),
        'show_in_rest'       => true, 
        'taxonomies'         => array('category', 'post_tag'),
    );

    register_post_type('videojuegos', $args);
}
add_action('init', 'registrar_post_type_videojuegos');


// === Cargar estilos ===
function juegos_enqueue_styles() {

    // --- Estilos base ---
    wp_enqueue_style('juegos-reset', get_template_directory_uri() . '/css/reset.css', array(), time());
    wp_enqueue_style('juegos-global', get_template_directory_uri() . '/css/global.css', array('juegos-reset'), time());
    wp_enqueue_style('juegos-header', get_template_directory_uri() . '/css/header.css', array('juegos-global'), time());
    wp_enqueue_style('juegos-footer', get_template_directory_uri() . '/css/footer.css', array('juegos-global'), time());

    // --- Páginas específicas ---
    if (is_page_template('page-contacto.php')) {
        wp_enqueue_style('juegos-contacto', get_template_directory_uri() . '/css/contacto.css', array('juegos-global'), time());
    }

    if (is_page_template('page-historia.php')) {
        wp_enqueue_style('juegos-historia', get_template_directory_uri() . '/css/historia.css', array('juegos-global'), time());
    }

    if (is_page_template('page-consola.php')) {
        wp_enqueue_style('juegos-consola', get_template_directory_uri() . '/css/consola.css', array('juegos-global'), time());
    }

    if (is_post_type_archive('videojuegos')) {
        wp_enqueue_style('juegos-videojuegos', get_template_directory_uri() . '/css/juegos.css', array('juegos-global'), time());
    }

    if (is_singular('videojuegos')) { 
        wp_enqueue_style('juego-single', get_template_directory_uri() . '/css/juego.css', array('juegos-global'), time());
    }

    if(is_front_page()) {
        wp_enqueue_style('juegos-front-page', get_template_directory_uri() . '/css/front-page.css', array('juegos-global'), time());
    }

    if (is_home()) {
        wp_enqueue_style('juegos-noticias', get_template_directory_uri() . '/css/noticias.css', array('juegos-global'), time());
    }

    if (is_single() && 'post' === get_post_type()) {
        wp_enqueue_style('juego-single-noticia', get_template_directory_uri() . '/css/noticia.css', array('juegos-global'), time());
    }

    // --- Responsive ---
    wp_enqueue_style('juegos-responsive', get_template_directory_uri() . '/css/responsive.css', array('juegos-global'), time());
}
add_action('wp_enqueue_scripts', 'juegos_enqueue_styles');


// === Registrar menú ===
function juegos_register_menus() {
    register_nav_menus(array(
        'menu-principal' => __('Menú principal', 'mi-tema-juegos'),
    ));
}
add_action('after_setup_theme', 'juegos_register_menus');


// === Desactivar barra de administración ===
add_filter('show_admin_bar', '__return_false');
?>