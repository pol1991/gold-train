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

// -------- ABOUT BRAND
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

// ---------- SOCIAL MEDIA -----------

$wp_customize->add_section( 'gold_train_socials_options', 
    array(
        'title'         => __( 'Social Media', 'gold-train' ),
        'priority'      => 1,
        'panel'         => 'gold_train_theme_options'
    ) 
);

// Facebook

// Setting for Brand name.
$wp_customize->add_setting( 'gold_train_facebook_link',
    array(
        'capability' => 'edit_theme_options',
        'default'           => __( 'https://facebook.com/', 'gold-train' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);

// Control for Brand name.
$wp_customize->add_control( 'gold_train_facebook_link', 
    array(
        'type'        => 'text',
        'priority'    => 10,
        'section'     => 'gold_train_socials_options',
        'label'       => 'Facebook',
        'description' => 'Tutaj wrzuć link do swojego konta Facebook',
    ) 
);

// Youtube

// Setting 
$wp_customize->add_setting( 'gold_train_youtube_link',
    array(
        'capability' => 'edit_theme_options',
        'default'           => __( 'https://youtube.com/', 'gold-train' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);

// Control 
$wp_customize->add_control( 'gold_train_youtube_link', 
    array(
        'type'        => 'text',
        'priority'    => 10,
        'section'     => 'gold_train_socials_options',
        'label'       => 'Youtube',
        'description' => 'Tutaj wrzuć link do swojego konta Youtube',
    ) 
);

// ---------- SOCIAL MEDIA -----------

$wp_customize->add_section( 'gold_train_footer-options', 
    array(
        'title'         => __( 'Stopka', 'gold-train' ),
        'priority'      => 1,
        'panel'         => 'gold_train_theme_options'
    ) 
);


$wp_customize->add_setting( 'gold_train_footer_image', array(
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    'validate_callback' => 'gold_train_validate_image',
    'transport'         => 'refresh'
  ) );
  
  $wp_customize->add_control(
    new WP_Customize_Media_Control( $wp_customize, 'gold_train_footer_image', array(
      'label' => 'Logo w stopce',
      'section' => 'gold_train_footer-options', // Add a default or your own section
      'width' => 60,
      'height' => 60,
      'mime_type' => 'image',
  )	)	);
  
  function gold_train_validate_image( $validity, $value ) {
  
    // Get the url of the image
    $image = wp_get_attachment_image_src( $value )[0];
  
    /*
    * Array of valid image file types.
    *
    * The array includes image mime types that are included in wp_get_mime_types()
    */
    $mimes = array(
        'jpg|jpeg|jpe' => 'image/jpeg',
        'gif'          => 'image/gif',
        'png'          => 'image/png',
        'bmp'          => 'image/bmp',
        'tif|tiff'     => 'image/tiff',
        'ico'          => 'image/x-icon'
    );
    // Return an array with file extension and mime_type.
    $file = wp_check_filetype( $image, $mimes );
    
    if( !$value ) {
      // If no image has been chosen, instruct user to choose an image
      $validity->add( 'required', __( 'Please choose an image' ) );
    } elseif ( !$file['ext'] ) {
      // If a valid image file extension is not found, instruct user to choose appropriate image
      $validity->add( 'not_valid', __( 'Please choose a valid image type' ) );
    }
    return $validity;
  }

}