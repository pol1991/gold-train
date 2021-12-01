<?php
/**
 * Registers options with the Theme Customizer
 *
 * @param      object    $wp_customize    The WordPress Theme Customizer
 * @package    Gold Train
 */

function gold_train_sanitize_number_absint( $number, $setting ) {
    // Ensure $number is an absolute integer (whole number, zero or greater).
    $number = absint( $number );
  
    // If the input is an absolute integer, return it; otherwise, return the default
    return ( $number ? $number : $setting->default );
  }

  function gold_train_sanitize_email( $email, $setting ) {
	return ( is_email($email) ? $email : $setting->default );
}

add_action( 'customize_register', 'gold_train_customize_register' );
function gold_train_customize_register( $wp_customize ) {
  // All the Customize Options you create goes here

  // Move Homepage Settings section underneath the "Site Identity" section
  
  $wp_customize->get_section('title_tagline')->priority = 1;
  $wp_customize->get_section('static_front_page')->priority = 2;
  //$wp_customize->get_section( 'gold_train_theme_options')->priority = 3;
  // $wp_customize->get_section('static_front_page')->title = __( 'Home page preferences', 'gold-train' );
  

  // Theme Options Panel
$wp_customize->add_panel( 'gold_train_theme_options', 
[
    'priority'       => 20,
    'title'            => __( 'GOLD TRAIN WP', 'gold-train' ),
    'description'      => __( 'Tutaj Speronalizujesz nasz szablon', 'gold-train' ),
]
);

// Text Options Section Inside Theme
$wp_customize->add_section( 'gold_train_text_options', 
    array(
        'title'         => __( 'O Firmie', 'gold-train' ),
        'priority'      => 1,
        'panel'         => 'gold_train_theme_options'
    ) 
);

// BRAND NAME

// Setting for Brand name.
$wp_customize->add_setting( 'gold_train_brand_name',
    array(
        'capability' => 'edit_theme_options',
        'default'           => __( 'Nazwa twojej firmy... ', 'gold-train' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);

// Control for Brand name.
$wp_customize->add_control( 'gold_train_brand_name', 
    array(
        'type'        => 'text',
        'priority'    => 10,
        'section'     => 'gold_train_text_options',
        'label'       => 'Nazwa firmy',
        'description' => 'Tutaj wpisz pełną nazwę swojej firmy',
    ) 
);

//PHONE NUMBER

// Setting for Phone number.
$wp_customize->add_setting( 'gold_train_phone_number',
    array(
        'capability' => 'edit_theme_options',
        'default'           => __( 'np: +48500500500 ', 'gold-train' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);

// Control for Phone number.
$wp_customize->add_control( 'gold_train_phone_number', 
    array(
        'type'        => 'text',
        'priority'    => 10,
        'section'     => 'gold_train_text_options',
        'label'       => 'Telefon',
        'description' => 'Tutaj podaj swój numer kontaktowy',
        'input_attrs' => array(
            'min' => __(9),
            'max' => __(12),
          ),
    ) 
);

//Email

// Setting for Email.
$wp_customize->add_setting( 'gold_train_email_address',
    array(
        'capability' => 'edit_theme_options',
        'default'           => __( 'email@twojafirma.pl ', 'gold-train' ),
        'sanitize_callback' => 'gold_train_sanitize_email',
        'transport'         => 'refresh',
    )
);

// Control for Email.
$wp_customize->add_control( 'gold_train_email_address', 
    array(
        'type'        => 'email',
        'priority'    => 10,
        'section'     => 'gold_train_text_options',
        'label'       => __('Adres Email'),
        'description' => __('Tutaj wpisz adres email'),
        'input_attrs' => array(
            'placeholder' => __( 'email@twojafirma.pl' ),
          ),
    ) 
);

}