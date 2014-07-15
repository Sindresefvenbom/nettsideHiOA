<?PHP
add_filter( 'twentyeleven_color_schemes', 'twentyeleven_color_schemes_sphioa' );
add_action( 'twentyeleven_enqueue_color_scheme', 'twentyeleven_enqueue_color_scheme_sphioa' );

function twentyeleven_color_schemes_sphioa(  ) {
['sphioa'] = array(
'value' => 'sphioa',
'label' => __( 'SP HiOA ny og bedre', 'twentyeleven' ),
'thumbnail' => get_stylesheet_directory_uri() . '/sphioa.png',
// FIXME bytt med riktig I guess
'default_link_color' => '#000',
);
return ;
}

function twentyeleven_enqueue_color_scheme_sphioa(  ) {
if ( 'sphioa' ==  )
wp_enqueue_style( 'sphioa', get_stylesheet_directory_uri() . '/sphioa.css', array(), null );
}
?>
