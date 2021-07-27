<?php 
/**
 * @Packge     : Constructo
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer panels and sections
 *
 */

/***********************************
 * Register customizer panels
 ***********************************/

$panels = array(
    /**
     * Theme Options Panel
     */
    array(
        'id'   => 'constructo_theme_options_panel',
        'args' => array(
            'priority'       => 0,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => esc_html__( 'Theme Options', 'constructo' ),
        ),
    )
);


/***********************************
 * Register customizer sections
 ***********************************/


$sections = array(

    /**
     * General Section
     */
    array(
        'id'   => 'constructo_general_section',
        'args' => array(
            'title'    => esc_html__( 'General', 'constructo' ),
            'panel'    => 'constructo_theme_options_panel',
            'priority' => 1,
        ),
    ),

    /**
     * Social Profiles Section
     */
    array(
        'id'   => 'constructo_social_section',
        'args' => array(
            'title'    => esc_html__( 'Social Profiles', 'constructo' ),
            'panel'    => 'constructo_theme_options_panel',
            'priority' => 2,
        ),
    ),
    
    /**
     * Header Section
     */
    array(
        'id'   => 'constructo_header_section',
        'args' => array(
            'title'    => esc_html__( 'Header', 'constructo' ),
            'panel'    => 'constructo_theme_options_panel',
            'priority' => 3,
        ),
    ),

    /**
     * Blog Section
     */
    array(
        'id'   => 'constructo_blog_section',
        'args' => array(
            'title'    => esc_html__( 'Blog', 'constructo' ),
            'panel'    => 'constructo_theme_options_panel',
            'priority' => 4,
        ),
    ),

    /**
     * Reservation Section
     */
    array(
        'id'   => 'constructo_reservation_section',
        'args' => array(
            'title'    => esc_html__( 'Reservation or Query Settings', 'constructo' ),
            'panel'    => 'constructo_theme_options_panel',
            'priority' => 5,
        ),
    ),

    /**
     * Instagram Section
     */
    array(
        'id'   => 'constructo_instagram_section',
        'args' => array(
            'title'    => esc_html__( 'Instagram Settings', 'constructo' ),
            'panel'    => 'constructo_theme_options_panel',
            'priority' => 6,
        ),
    ),


    /**
     * 404 Page Section
     */
    array(
        'id'   => 'constructo_fof_section',
        'args' => array(
            'title'    => esc_html__( '404 Page', 'constructo' ),
            'panel'    => 'constructo_theme_options_panel',
            'priority' => 7,
        ),
    ),

    /**
     * Footer Section
     */
    array(
        'id'   => 'constructo_footer_section',
        'args' => array(
            'title'    => esc_html__( 'Footer Page', 'constructo' ),
            'panel'    => 'constructo_theme_options_panel',
            'priority' => 8,
        ),
    ),



);


/***********************************
 * Add customizer elements
 ***********************************/
$collection = array(
    'panel'   => $panels,
    'section' => $sections,
);

Epsilon_Customizer::add_multiple( $collection );

?>