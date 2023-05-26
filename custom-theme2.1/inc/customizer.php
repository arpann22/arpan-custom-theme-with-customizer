<?php

function theme_customizer_function($wp_customize)
{
  // For the navigation Start---------------------------------------------------
  $wp_customize->add_panel(
    'landing_panel',
    array(
      'title' => 'Header',
      'priority' => 10,
      'capability' => 'edit_theme_options',
    )
  );
  $wp_customize->add_section(
    'landing_panel_home',
    array(
      'title' => 'Left Main heading ',
      'desciption' => __('Main heading Customizer'),
      'panel' => 'landing_panel'
    )
  );

  $wp_customize->add_setting(
    'landing_panel_title',
    array(
      'default' => __('Landing Panel heading')
    )
  );
  $wp_customize->add_control(
    'landing_panel_title',
    array(
      'label' => 'Left Main heading ',
      'section' => 'landing_panel_home',
      'priority' => 1,
    )
  );

  $wp_customize->add_setting('right_button', array());
  $wp_customize->add_control(
    'right_button',
    array(
      'label' => 'Button',
      'section' => 'landing_panel_home',
      'priority' => 2,

    )
  );
  //Navigation End----------------------------------------------------------------------

  //Footer panel-------------------------------------------------------------------------
  $wp_customize->add_panel(
    'footer_panel',
    array(
      'title' => 'Footer',
      'priority' => 100,
      'capability' => 'edit_theme_options',
    )
  );
  $wp_customize->add_section(
    'footer_panel_home',
    array(
      'title' => 'Footer content ',
      'desciption' => __('Footer Customizer'),
      'panel' => 'footer_panel'
    )
  );
  $wp_customize->add_setting(
    'footer_panel_title',
    array(
      'default' => __('Footer pannel')
    )
  );
  $wp_customize->add_control(
    'footer_panel_title',
    array(
      'label' => 'Footer content ',
      'section' => 'footer_panel_home',
      'priority' => 3,
    )
  );
  //Footer Panel End-------------------------------------------------------------------

  //First section start ------------------------------------------------------------
  $wp_customize->add_panel(
    'Site-Text-Setting',
    array(
      'title' => 'Site Text Setting',
      'priority' => 100,
      'capability' => 'edit_theme_options',
    )
  );
  $wp_customize->add_section(
    'upper-section-title',
    array(
      'title' => 'Title ',
      'desciption' => __('Title customizer'),
      'panel' => 'Site-Text-Setting'
    )
  );
  $wp_customize->add_setting(
    'upper-section-title',
    array(
      'default' => __('Hello World')
    )
  );
  $wp_customize->add_control(
    'upper-section-title',
    array(
      'label' => 'Title ',
      'section' => 'upper-section-title',
      'priority' => 3,
    )
  ); //Title end-------------------------------------------------------
  //Content start--------------------------------------------------

  $wp_customize->add_section(
    'upper-section-content',
    array(
      'title' => 'Content',
      'desciption' => __('Content customizer'),
      'panel' => 'Site-Text-Setting'
    )
  );

  $wp_customize->add_setting(
    'upper-section-content',
    array(
      'default' => __('Hello World')
    )
  );
  $wp_customize->add_control(
    'upper-section-content',
    array(
      'label' => 'Content ',
      'section' => 'upper-section-content',
      'priority' => 3,
    )
  );
  $wp_customize->add_setting(
    'row-items-radio',
    array(
      'default' =>'',
      'type'=>'theme_mod',
    )
  );
  $wp_customize->add_control(
    'row-items-radio',
    array(
      'label' => 'Show content:',
      'type' => 'radio',
      'section' => 'upper-section-content',
      'priority' => 1,
      'choices' => array(
        'right' => 'right',
        'left' => 'left'
      )
    )
  );
  //Video and Image section for mobile phone:
    

  
  //First section end=----------------------------------------------------------------------------


  //Badge section start----------------------------------------------------------------------------
  $wp_customize->add_section(
    'badges',
    array(
      'title' => 'Badges ',
      'desciption' => __('Badges custom'),
      'panel' => 'Site-Text-Setting'
    )
  );
  $wp_customize->add_setting(
    'badge1',
    array(
      'default' => __('')
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'badge1',
      array(
        'label' => __('badge1'),
        'section' => 'badges',
      )
    ));
  $wp_customize->add_setting(
    'badge2',
    array(
      'default' => __('')
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'badge2',
      array(
        'label' => __('badge2'),
        'section' => 'badges',
      )
    ));

  //Badge section End----------------------------------------------------------------------------

  //QUOTE section start---------------------------------------------------------------------------
  $wp_customize->add_section(
    'Quote1',
    array(
      'title' => 'Quote ',
      'desciption' => __('Quote Customizer'),
      'panel' => 'Site-Text-Setting'
    )
  );
  $wp_customize->add_setting(
    'Quote1',
    array(
      'default' => __('Quote')
    )
  );
  $wp_customize->add_control(
    'Quote1',
    array(
      'label' => 'Quote ',
      'section' => 'Quote1',
      'priority' => 3,
    )
  );
  $wp_customize->add_setting(
    'Quote-logo',
    array(
      'default' => __('Quote-logo')
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'Quote-logo',
      array(
        'label' => 'Quote-logo ',
        'section' => 'Quote1',
        'priority' => 3,
      )
    ));

  //Quote Section End---------------------------------------------------------------------------------

  //Featured Section start -----------------------------------------------------------------------------

  $wp_customize->add_setting(
    'Featured-title-first',
    array(
      'default' => __('first')
    )
  );
  $wp_customize->add_control(
    'Featured-title-first',
    array(
      'label' => 'Featured title first ',
      'section' => 'upper-section-title',
      'priority' => 3,
    )
  );
  $wp_customize->add_setting(
    'Featured-title-second',
    array(
      'default' => __('second')
    )
  );
  $wp_customize->add_control(
    'Featured-title-second',
    array(
      'label' => 'Featured title second ',
      'section' => 'upper-section-title',
      'priority' => 4,
    )
  );
  $wp_customize->add_setting(
    'Featured-title-third',
    array(
      'default' => __('third')
    )
  );
  $wp_customize->add_control(
    'Featured-title-third',
    array(
      'label' => 'Featured title third ',
      'section' => 'upper-section-title',
      'priority' => 5,
    )
  );
  $wp_customize->add_setting(
    'Featured-title-forth',
    array(
      'default' => __('forth')
    )
  );
  $wp_customize->add_control(
    'Featured-title-forth',
    array(
      'label' => 'Featured title forth ',
      'section' => 'upper-section-title',
      'priority' => 6,
    )
  );
  //Featured section title end-----------------------------------------------------------
  
  //Featured section paragraph start-----------------------------------------------------
  $wp_customize->add_setting(
    'Featured-content-first',
    array(
      'default' => __('first content')
    )
  );
  $wp_customize->add_control(
    'Featured-content-first',
    array(
      'label' => 'Featured Content First',
      'section' => 'upper-section-content',
      'priority' => 3,
    )
  );
  $wp_customize->add_setting(
    'Featured-content-second',
    array(
      'default' => __('second content')
    )
  );
  $wp_customize->add_control(
    'Featured-content-second',
    array(
      'label' => 'Featured Content second',
      'section' => 'upper-section-content',
      'priority' => 4,
    )
  );
  $wp_customize->add_setting(
    'Featured-content-third',
    array(
      'default' => __('Third content')
    )
  );
  $wp_customize->add_control(
    'Featured-content-third',
    array(
      'label' => 'Featured Content Third',
      'section' => 'upper-section-content',
      'priority' => 5,
    )
  );
  $wp_customize->add_setting(
    'Featured-content-forth',
    array(
      'default' => __('forth content')
    )
  );
  $wp_customize->add_control(
    'Featured-content-forth',
    array(
      'label' => 'Featured Content Forth',
      'section' => 'upper-section-content',
      'priority' => 6,
    )
  );
  //Featured section paragraph end-----------------------------------------------------------------

  //Basic Featured Section Start-------------------------------------------------------------------

  $wp_customize->add_section(
    'Images',
    array(
      'title' => 'Images',
      'desciption' => __('Image Customizer'),
      'panel' => 'Site-Text-Setting'
    )
  );
  $wp_customize->add_setting(
    'basic-featured-image',
    array(
      'default' => '',
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Image_Control($wp_customize, 'basic-featured-image', array(
      'label' => 'Basic Featured Image',
      'section' => 'Images',

      'priority' => 3,
    )
    )
  );
  $wp_customize->add_setting(
    'basic-featured-title',
    array(
      'default' => __('basic-featured-title')
    )
  );
  $wp_customize->add_control(
    'basic-featured-title',
    array(
      'label' => 'Basic Featured Title ',
      'section' => 'upper-section-title',
      'priority' => 7,
    )
  );
  $wp_customize->add_setting(
    'basic-featured-content',
    array(
      'default' => __('basic-featured-content')
    )
  );
  $wp_customize->add_control(
    'basic-featured-content',
    array(
      'label' => 'Basic Featured Content ',
      'section' => 'upper-section-content',
      'priority' => 7,
    )
  );
  //Basic featured section end ------------------------------------------------------

  //Call to action----------------------------------------------------------------
  $wp_customize->add_setting(
    'CTA-1',
    array(
      'default' => __('Stop waiting')
    )
  );
  $wp_customize->add_control(
    'CTA-1',
    array(
      'label' => 'Call-to-action ',
      'section' => 'Quote1',
      'priority' => 5,
    )
  );
  $wp_customize->add_setting(
    'CTA-2',
    array(
      'default' => __('Start building')
    )
  );
  $wp_customize->add_control(
    'CTA-2',
    array(
      'label' => 'call-to-action ',
      'section' => 'Quote1',
      'priority' => 6,
    )
  );
  $wp_customize->add_setting(
    'CTA-3',
    array(
      'default' => __('Download for free')
    )
  );
  $wp_customize->add_control(
    'CTA-3',
    array(
      'label' => 'Download option ',
      'section' => 'Quote1',
      'priority' => 8,
    )
  );
  //End of Call to action-------------------------------------------------------------------

  //Radio button for on/off quote section

  $wp_customize->add_setting(
    'Quote_section_radio',
    array(
      'type' => 'theme_mod',
      'default' => __('yes')
    )
  );
  $wp_customize->add_control(
    'Quote_section',
    array(
      'label' => 'Show/Hide quote section ',
      'type' => 'radio',
      'section' => 'Quote1',
      'priority' => 1,
      'choices' => array(
        'yes' => 'Yes',
        'no' => 'No'
      )
    )
  );

  //GET APP NOW Start===============================================================================

  //Get app show/hide---------------------------------------------------------------------------------
  $wp_customize->add_setting(
    'get_app_now_radio',
    array(
      'type' => 'theme_mod',
      'default' => 'yes',
    )
  );
  $wp_customize->add_control(
    'get_app_now_radio',
    array(
      'label' => __('Show/Hide get-app-section'),
      'type' => 'radio',
      'section' => 'badges',
      'priority' => 10,
      'choices' => array(
        'yes' => 'Yes',
        'no' => 'No',
      )
    )
  );
  //get app section===================================================================
  $wp_customize->add_setting(
    'get-app-now',
    array(

      'default' => ('Get the app now')
    )
  );
  $wp_customize->add_control(
    'get-app-now',
    array(
      'label' => __(' get-app-section'),
      'section' => 'badges',
      'priority' => 10,
    )
  );

  //Checkbox===============================================================

  //add setting
  $wp_customize->add_setting('first-checkbox', array(
    'default' => '',
  )
  );

  //add control
  $wp_customize->add_control('first-checkbox', array(
    'label' => 'Display basic featured content ',
    'type' => 'checkbox',
    // this indicates the type of control
    'section' => 'upper-section-content',
    'priority' => 6,

  )
  );

}

//COLOR================================================================================================
//=====================================================================================================

//=========================================================
// Add New Colors Section :  Colors
//=========================================================

function diwp_customizer_add_colorPicker($wp_customize)
{

  // Add New Section: Colors

  $wp_customize->add_section('diwp_color_section', array(
    'title' => ' Colors',
    'description' => 'Set Colors For Background & Links',
    'priority' => '40'
  )
  );

  // Add Settings 
  $wp_customize->add_setting('diwp_theme_color', array(
    'default' => '#ffffff',
  )
  );


  $wp_customize->add_setting('diwp_header_bgcolor', array(
    'default' => '#FFFFFF',
  )
  );
  $wp_customize->add_setting('upper_section_bgcolor', array(
    'default' => '#FFFFFF',
  )
  );
  
  $wp_customize->add_setting('quote_color', array(
    'default' => '#140804'
    //'#212529',

  )
  );


  // Add Controls
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'diwp_theme_color', array(
    'label' => 'App feature Color',
    'section' => 'diwp_color_section',
    'settings' => 'diwp_theme_color'

  )
  ));


  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'diwp_header_bgcolor', array(
    'label' => 'Header Background',
    'section' => 'diwp_color_section',
    'settings' => 'diwp_header_bgcolor'
  )
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'upper_section_bgcolor', array(
    'label' => 'Upper section background',
    'section' => 'diwp_color_section',
    'settings' => 'upper_section_bgcolor'
  )
  ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'quote_color', array(
      'label' => 'Quote color',
      'section' => 'Quote1',
      'settings' => 'quote_color',
      'priority' => 3,
    )
    ));



}

add_action('customize_register', 'diwp_customizer_add_colorPicker');

function diwp_generate_theme_option_css()
{



  $themeColor = get_theme_mod('diwp_theme_color');
  $header_bgcolor = get_theme_mod('diwp_header_bgcolor');
  $mastHead_bgcolor = get_theme_mod('upper_section_bgcolor');
  $quote1_color = get_theme_mod('quote_color');
  if (!empty($themeColor)):

    ?>
    <!-- style for particular colors -->

    <style type="text/css" id="diwp-theme-option-css">
      #mainNav {
        background:
          <?php echo $header_bgcolor; ?>
        ;
      }

      body {
        background:
          <?php echo $themeColor; ?>
        ;
      }

      .masthead {
        background:
          <?php echo $mastHead_bgcolor; ?>
        ;
      }

      .quotation_first {
        color:
          <?php echo $quote1_color; ?>
          !important;
      }
    </style>

    <?php

  endif;
}

add_action('wp_head', 'diwp_generate_theme_option_css');


add_action('customize_register', 'theme_customizer_function');