<?php 
function load_scripts(){
    //Load scripts:
    wp_enqueue_script('jquery'); # Loading the WordPress bundled jQuery version.
    //may add more scripts to load like jquery-ui
}
add_action('wp_enqueue_scripts', 'load_scripts');
register_nav_menus(array('menu'=> 'Main Menu',));
register_nav_menus(array('menu-store'=> 'Main Tienda',));

//Activar todos los botones del editor

function todos_los_botones($buttons) {
$buttons[] = 'fontselect'; //Selector de tipo de fuente
$buttons[] = 'fontsizeselect'; //Selector de tamaño de fuente
$buttons[] = 'styleselect'; //Selector de estilos de párrafo mucho más amplio
$buttons[] = 'backcolor'; //Color de fondo de párrafo
$buttons[] = 'newdocument'; //Nuevo documento inline
$buttons[] = 'cut'; //Cortar texto
$buttons[] = 'copy'; //Copiar texto
$buttons[] = 'charmap'; //Mapa de caracteres
$buttons[] = 'hr'; //Línea horizontal
$buttons[] = 'visualaid'; //Ayudas visuales del editor
return $buttons;
}
add_filter("mce_buttons_3", "todos_los_botones");
function get_post_image( $iImageNumber = 0, $bPrint = false )
{
    global $post;
    $szPostContent = $post->post_content;
    $szSearchPattern = '~<img [^\>]*\ />~';
    preg_match( $szSearchPattern, $szPostContent, $pics );
    if ( $bPrint == true && !empty($pics) ) echo $pics[$iImageNumber]; else return $pics[$iImageNumber];
}
add_theme_support('post-thumbnails');

function allow_nbsp_in_tinymce( $mceInit ) {
    $mceInit['entities'] = '160,nbsp,38,amp,60,lt,62,gt';   
    $mceInit['entity_encoding'] = 'named';
    return $mceInit;
}
add_filter( 'tiny_mce_before_init', 'allow_nbsp_in_tinymce' );
function new_excerpt_length($length) {
	return 25;
}
add_filter('excerpt_length', 'new_excerpt_length');

register_sidebar(array(

'name' => 'Slider',
'id'  => 'slider_intro',
'before_widget'=>'',
'after_widget'=>'',
'before_title'=>'<h2>',
'after_title'=>'</h2>',
    ));
register_sidebar(array(

'name' => 'Cols 01',
'id'  => 'col_01',
'before_widget'=>'<div class="col-lg-4">',
'after_widget'=>'</div>',
'before_title'=>'<h2>',
'after_title'=>'</h2>',
    ));
register_sidebar(array(

'name' => 'Full 02',
'id'  => 'full_02',
'before_widget'=>'<div class="col strat-frame">',
'after_widget'=>'</div>',
'before_title'=>'<h2>',
'after_title'=>'</h2>',
    ));
register_sidebar(array(

'name' => 'Full 03',
'id'  => 'full_03',
'before_widget'=>'<div class="col strat-frame">',
'after_widget'=>'</div>',
'before_title'=>'<h2>',
'after_title'=>'</h2>',
    ));
register_sidebar(array(

'name' => 'Full 04',
'id'  => 'full_04',
'before_widget'=>'<div class="col">',
'after_widget'=>'</div>',
'before_title'=>'<h2>',
'after_title'=>'</h2>',
    ));
register_sidebar(array(

'name' => 'Col Page',
'id'  => 'col_page',
'before_widget'=>'<div class="col">',
'after_widget'=>'</div>',
'before_title'=>'<h2>',
'after_title'=>'</h2>',
    ));
register_sidebar(array(

'name' => 'Full Fundacion',
'id'  => 'full_fundacion',
'before_widget'=>'<div class="col">',
'after_widget'=>'</div>',
'before_title'=>'<h2>',
'after_title'=>'</h2>',
    ));
register_sidebar(array(

'name' => 'Full Bottom Page',
'id'  => 'full_page',
'before_widget'=>'<div class="col">',
'after_widget'=>'</div>',
'before_title'=>'<h2>',
'after_title'=>'</h2>',
    ));
register_sidebar(array(

'name' => 'Full Bottom Post',
'id'  => 'full_post',
'before_widget'=>'<div class="col">',
'after_widget'=>'</div>',
'before_title'=>'<h2>',
'after_title'=>'</h2>',
    ));
//Customizer
add_action( 'customize_register', 'theme_custom_register' );
function theme_custom_register($wp_customize) {
    $wp_customize->add_section( 'redes_sociales', array(
        'title'          => __( 'Redes Sociales', 'SokkerGroup' ),
        'priority'       => 35
    ) );
     //Campo Facebook
    $wp_customize->add_setting('rrss_theme_options[rs_facebook]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
    ));
    $wp_customize->add_control('theme_rrss_facebook', array(
        'label'      => __('Facebook', 'SokkerGroup'),
        'section'    => 'redes_sociales',
        'settings'   => 'rrss_theme_options[rs_facebook]',
    ));
    //Campo Twitter
    $wp_customize->add_setting('rrss_theme_options[rs_twitter]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
    ));
    $wp_customize->add_control('theme_rrss_twitter', array(
        'label'      => __('Twitter', 'SokkerGroup'),
        'section'    => 'redes_sociales',
        'settings'   => 'rrss_theme_options[rs_twitter]',
    ));
    //Campo Youtube
    $wp_customize->add_setting('rrss_theme_options[rs_youtube]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
    ));
    $wp_customize->add_control('theme_rrss_youtube', array(
        'label'      => __('Youtube', 'SokkerGroup'),
        'section'    => 'redes_sociales',
        'settings'   => 'rrss_theme_options[rs_youtube]',
    ));
    //Campo Instagram
    $wp_customize->add_setting('rrss_theme_options[rs_instagram]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
    ));
    $wp_customize->add_control('theme_rrss_instagram', array(
        'label'      => __('Instagram', 'SokkerGroup'),
        'section'    => 'redes_sociales',
        'settings'   => 'rrss_theme_options[rs_instagram]',
    ));
}
//Customizer
?>