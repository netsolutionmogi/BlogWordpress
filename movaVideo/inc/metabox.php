<?
add_filter( 'rwmb_meta_boxes', 'prefix_meta_boxes' );
function prefix_meta_boxes( $meta_boxes ) {
    $meta_boxes[] = array(
        'title'  => 'Informações Adicionais',
		'post_types' => 'post',
        'fields' => array(
            array(
                'id'   => 'subtitulo',
                'name' => 'SubTitulo',
                'type' => 'text',
            ),
            array(
                'id'   => 'resumo',
                'name' => 'Resumo',
                'type' => 'textarea',
            ),
			// VÍDEO
                array(
                    'name' => esc_html__( 'Vídeo do Youtube', 'your-prefix' ),
                    'id'   => "{$prefix}oembed",
                    'desc' => esc_html__( 'URL do Vídeo', 'your-prefix' ),
                    'type' => 'oembed',
                ),
        ),
    );
    return $meta_boxes;
}


?>