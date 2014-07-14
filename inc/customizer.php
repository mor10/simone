<?php
/**
 * simone Theme Customizer
 *
 * @package simone
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function simone_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'simone_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function simone_customize_preview_js() {
	wp_enqueue_script( 'simone_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'simone_customize_preview_js' );

/**
 * Add custom heading background color and site-wide link color
 */

function simone_register_theme_customizer( $wp_customize ) {

    $wp_customize->add_setting(
        'simone_header_color',
        array(
            'default'     => '#0587BF'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'header_color',
            array(
                'label'      => __( 'Header Color', 'simone' ),
                'section'    => 'colors',
                'settings'   => 'simone_header_color'
            )
        )
    );

    $wp_customize->add_setting(
        'simone_link_color',
        array(
            'default'     => '#000000'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'link_color',
            array(
                'label'      => __( 'Link Color', 'simone' ),
                'section'    => 'colors',
                'settings'   => 'simone_link_color'
            )
        )
    );

}
add_action( 'customize_register', 'simone_register_theme_customizer' );

function simone_customizer_css() {
    ?>
    <style type="text/css">
        .site-branding {
            background: <?php echo get_theme_mod( 'simone_header_color' ); ?>;
        }

        .category-list a:hover,
        .entry-meta a:hover,
        .tag-links a:hover,
        .widget-area a:hover,
        .nav-links a:hover,
        .comment-meta a:hover,
        .continue-reading a,
        .entry-title a:hover,
        .entry-content a,
        .comment-content a {
            color: <?php echo get_theme_mod( 'simone_link_color' ); ?>;
        }

        .border-custom {
            border: <?php echo get_theme_mod( 'simone_link_color' ); ?> solid 1px;
        }

    </style>
    <?php
}
add_action( 'wp_head', 'simone_customizer_css' );
