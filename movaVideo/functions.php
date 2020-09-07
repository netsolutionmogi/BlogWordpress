<?

// Imagens dos posts
add_theme_support( 'post-thumbnails' );

// pegar o arquivo marca header
require get_template_directory() . '/inc/marca.php';

require get_template_directory() . '/inc/metabox.php';

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

register_nav_menus( array(
    'primary' => __( 'Menu Principal', 'movaVideo' ),
) );
// Links Uteis
register_nav_menus( array(
    'links-uteis' => __( 'Links Úteis', 'movaVideo' ),
) );
//function m1_customize_register( $wp_customize ) {
//    $wp_customize->add_setting('m1_logo'); // Add setting for logo uploader
         
    // Add control for logo uploader (actual uploader)
    //$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'm1_logo', array(
        //'label'    => __( 'Marca do Site', 'm1' ),
      //  'section'  => 'title_tagline',
    //    'settings' => 'm1_logo',
  //  ) ) );
//}
//add_action( 'customize_register', 'm1_customize_register' );

if ( function_exists('register_sidebar') )
{
    register_sidebar(array(
        'name' => __( 'Minha Conta'),
        'id' => 'sidebar-login',
        'description' => __( 'Formulario de login para o painel admin.'),
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );
	register_sidebar(array(
        'name' => __( 'Regras do Portal'),
        'id' => 'sidebar-regras',
        'description' => __( 'Informações sobre regras do portal.'),
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );
	register_sidebar(array(
        'name' => __( 'Sobre Nós Rodape'),
        'id' => 'sobre-nos-rodape',
        'description' => __( 'Um pouco sobre o Blog.'),
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );
	register_sidebar(array(
        'name' => __( 'Instagram'),
        'id' => 'instagram-rodape',
        'description' => __( 'Link do Instagram.'),
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );
	register_sidebar(array(
        'name' => __( 'Siderbar'),
        'id' => 'siderbar-internas',
        'description' => __( 'Elementos da sidebar,single e page.'),
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );
	register_sidebar(array(
        'name' => __( 'Siderbar Contato'),
        'id' => 'siderbar-contato',
        'description' => __( 'Informações Contato.'),
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );

}

/**
* Galeria de Imagens
*/
function pexeto_add_title_to_attachment( $markup, $id ){
	$att = get_post( $id );
	return str_replace('<a ', '<a title="'.$att->post_title.'" ', $markup);
}
add_filter('wp_get_attachment_link', 'pexeto_add_title_to_attachment', 10, 5);

/* PAGINAÇÃO WORDPRESS */
function wordpress_pagination() {
            global $wp_query;
 
            $big = 999999999;
 
            echo paginate_links( array(
                  'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                  'format' => '?paged=%#%',
                  'current' => max( 1, get_query_var('paged') ),
                  'total' => $wp_query->max_num_pages
            ) );
      }

?>