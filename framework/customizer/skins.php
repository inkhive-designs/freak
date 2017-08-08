<?php
//Logo Settings
function freak_customize_register_skins( $wp_customize ) {
$wp_customize->add_section( 'title_tagline' , array(
    'title'      => __( 'Title, Tagline & Logo', 'freak' ),
    'priority'   => 30,
) );

$wp_customize->add_setting( 'freak_logo' , array(
    'default'     => '',
    'sanitize_callback' => 'esc_url_raw',
) );
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'freak_logo',
        array(
            'label' => 'Upload Logo',
            'section' => 'title_tagline',
            'settings' => 'freak_logo',
            'priority' => 5,
        )
    )
);

$wp_customize->add_setting( 'freak_logo_resize' , array(
    'default'     => 100,
    'sanitize_callback' => 'freak_sanitize_positive_number',
) );
$wp_customize->add_control(
    'freak_logo_resize',
    array(
        'label' => __('Resize & Adjust Logo','freak'),
        'section' => 'title_tagline',
        'settings' => 'freak_logo_resize',
        'priority' => 6,
        'type' => 'range',
        'active_callback' => 'freak_logo_enabled',
        'input_attrs' => array(
            'min'   => 30,
            'max'   => 200,
            'step'  => 5,
        ),
    )
);

function freak_logo_enabled($control) {
    $option = $control->manager->get_setting('freak_logo');
    return $option->value() == true;
}



//Replace Header Text Color with, separate colors for Title and Description
//Override freak_site_titlecolor
$wp_customize->remove_control('display_header_text');
$wp_customize->remove_setting('header_textcolor');
$wp_customize->add_setting('freak_site_titlecolor', array(
    'default'     => '#FFFFFF',
    'sanitize_callback' => 'sanitize_hex_color',
));

$wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'freak_site_titlecolor', array(
        'label' => __('Site Title Color','freak'),
        'section' => 'colors',
        'settings' => 'freak_site_titlecolor',
        'type' => 'color'
    ) )
);

$wp_customize->add_setting('freak_header_desccolor', array(
    'default'     => '#c4c4c4',
    'sanitize_callback' => 'sanitize_hex_color',
));

$wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'freak_header_desccolor', array(
        'label' => __('Site Tagline Color','freak'),
        'section' => 'colors',
        'settings' => 'freak_header_desccolor',
        'type' => 'color'
    ) )
);
}
add_action( 'customize_register', 'freak_customize_register_skins' );