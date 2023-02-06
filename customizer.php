<?php
 
add_filter( 'customize_register', 'theme_customizer_register' );

// Sanitize button icon list
function playne_sanitize_buttoneffect( $input ) {
    $valid = array(
        	'value0' => 'Standard',
        	'value1' => 'To bottom',
        	'value2' => 'To right',
        	'value3' => 'To left',
        	'value4' => 'Fade',
        	'value5' => 'Bounce to bottom',
        	'value6' => 'Bounce to top',
        	'value7' => 'Bounce to left',
        	'value8' => 'Bounce to right',
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

// Sanitize button icon list
function playne_sanitize_buttoniconlist( $input ) {
    $valid = array(
        	'value0' => 'None',
        	'value1' => 'Apple logo',
        	'value2' => 'Android logo',
        	'value3' => 'Heart',
        	'value4' => 'Bolt',
        	'value5' => 'Check',
        	'value6' => 'Cloud',
        	'value7' => 'Credit card',
        	'value8' => 'Comment',
        	'value9' => 'Camera',
        	'value10' => 'Gamepad',
        	'value11' => 'Inbox',
        	'value12' => 'Music note',
        	'value13' => 'Mobile phone',
        	'value14' => 'Thumbs up',
        	'value15' => 'User group',
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

// Sanitize button corners
function playne_sanitize_buttoncorners( $input ) {
    $valid = array(
			'value0' => 'Default',
        	'value2' => 'Semi rounded',
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

// Sanitize animation list
function playne_sanitize_animationlist( $input ) {
    $valid = array(
        	'value1' => 'Fade in',
        	'value2' => 'Pulse',
        	'value3' => 'Tada',
        	'value4' => 'Bounce',
        	'value5' => 'Horizontal flip',
        	'value6' => 'Vertical flip',
        	'value7' => 'Fade in left',
        	'value8' => 'Fade in right',
        	'value9' => 'Fade in up',
        	'value10' => 'Fade in down',
        	'value11' => 'Bounce in left',
        	'value12' => 'Bounce in right',
        	'value13' => 'Bounce in up',
        	'value14' => 'Bounce in down',
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

// Sanitize checkboxes
function playne_sanitize_checkbox( $input ) {
    if ( $input == 1 ) {
        return 1;
    } else {
        return '';
    }
}

// Sanitize text fields
function playne_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

//Add two custom controls to the panel
function theme_customizer_register($wp_customize) {

	class Customize_Textarea_Control extends WP_Customize_Control {
    public $type = 'textarea';
 
    public function render_content() {
        ?>
        <label>
        <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
        <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
        </label>
        <?php
    								}
	}	

		class WP_Customize_Textarea_Control extends WP_Customize_Control {
    public $type = 'textarea';
 
    public function render_content() {
        ?>
        <label>
        <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
        <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
        </label>
        <?php
    }
}

	//Remove certain useless functions for this theme
	$wp_customize->remove_control( 'display_header_text');
	$wp_customize->remove_control( 'header_textcolor');
    $wp_customize->remove_section('static_front_page');
    $wp_customize->remove_section('background_image');
    $wp_customize->remove_control('background_color');

	//Section Style Options
	$wp_customize->add_section( 'theme_customizer_basic', array(
		'title' => __( 'Logo image', 'section' ),
		'priority' => 80
	) );
	
	//Logo Image
	$wp_customize->add_setting( 'theme_customizer_logo', array(
		'sanitize_callback' => 'esc_url_raw'		
	) );
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'theme_customizer_logo', array(
		'label' => __( 'Logo Upload', 'section' ),
		'section' => 'theme_customizer_basic',
		'settings' => 'theme_customizer_logo'
	) ) );

	//Video background
	$wp_customize->add_section( 'theme_customizer_headervideo', array(
		'title' => __( 'Header video background', 'section' ),
		'priority' => 103
	) );

	$wp_customize->add_setting( 'theme_customizer_headervideourl', array(
		'sanitize_callback' => 'esc_url_raw'		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_headervideourl', array(
		'label' => __( 'URL .mp4 file', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_headervideo',
		'settings' => 'theme_customizer_headervideourl'
	) ) );

	$wp_customize->add_setting( 'theme_customizer_headervideourl2', array(
		'sanitize_callback' => 'esc_url_raw'		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_headervideourl2', array(
		'label' => __( 'URL .ogg file', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_headervideo',
		'settings' => 'theme_customizer_headervideourl2'
	) ) );

	$wp_customize->add_setting( 'theme_customizer_headervideourl3', array(
		'sanitize_callback' => 'esc_url_raw'		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_headervideourl3', array(
		'label' => __( 'URL .webm file', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_headervideo',
		'settings' => 'theme_customizer_headervideourl3'
	) ) );

	//Animation options
	$wp_customize->add_section( 'theme_customizer_animations', array(
		'title' => __( 'Header animation options', 'section' ),
		'priority' => 102
	) );

	$wp_customize->add_setting( 'theme_customizer_animationlist', array(
		'sanitize_callback' => 'playne_sanitize_animationlist'		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_animationlist', array(
		'label' => __( 'Main header animations', 'section' ),
		'type'    => 'select',
		'section' => 'theme_customizer_animations',
		'settings' => 'theme_customizer_animationlist',
		'priority' => 1,
		'default' => 'value1',
		'choices'    => array(
        	'value1' => 'Fade in',
        	'value2' => 'Pulse',
        	'value3' => 'Tada',
        	'value4' => 'Bounce',
        	'value5' => 'Horizontal flip',
        	'value6' => 'Vertical flip',
        	'value7' => 'Fade in left',
        	'value8' => 'Fade in right',
        	'value9' => 'Fade in up',
        	'value10' => 'Fade in down',
        	'value11' => 'Bounce in left',
        	'value12' => 'Bounce in right',
        	'value13' => 'Bounce in up',
        	'value14' => 'Bounce in down',
        	),
	) ) );

	//General options
	$wp_customize->add_section( 'theme_customizer_general', array(
		'title' => __( 'General Options', 'section' ),
		'priority' => 101
	) );

	$wp_customize->add_setting( 'theme_customizer_general1', array(
		'sanitize_callback' => 'playne_sanitize_checkbox'		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_general1', array(
		'label' => __( 'Disable Preloader', 'section' ),
		'type'    => 'checkbox',
		'section' => 'theme_customizer_general',
		'settings' => 'theme_customizer_general1',
		'priority' => 1
	) ) );

	$wp_customize->add_setting( 'theme_customizer_general4', array(
		'sanitize_callback' => 'playne_sanitize_checkbox'		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_general4', array(
		'label' => __( 'Disable scrolling menu', 'section' ),
		'type'    => 'checkbox',
		'section' => 'theme_customizer_general',
		'settings' => 'theme_customizer_general4',
		'priority' => 3
	) ) );
	
	$wp_customize->add_setting( 'theme_customizer_general3', array(
		'sanitize_callback' => 'playne_sanitize_checkbox'		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_general3', array(
		'label' => __( 'Disable homepage items animations', 'section' ),
		'type'    => 'checkbox',
		'section' => 'theme_customizer_general',
		'settings' => 'theme_customizer_general3',
		'priority' => 4
	) ) );

	$wp_customize->add_setting( 'theme_customizer_general5', array(
		'sanitize_callback' => 'playne_sanitize_checkbox'		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_general5', array(
		'label' => __( 'Disable showcase image animation', 'section' ),
		'type'    => 'checkbox',
		'section' => 'theme_customizer_general',
		'settings' => 'theme_customizer_general5'
	) ) );

	$wp_customize->add_setting( 'theme_customizer_general6', array(
		'sanitize_callback' => 'playne_sanitize_checkbox'		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_general6', array(
		'label' => __( 'Disable header text scroll animation', 'section' ),
		'type'    => 'checkbox',
		'section' => 'theme_customizer_general',
		'settings' => 'theme_customizer_general6'
	) ) );

	$wp_customize->add_setting( 'theme_customizer_general7', array(
		'sanitize_callback' => 'playne_sanitize_checkbox'		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_general7', array(
		'label' => __( 'Show footer widget on inner pages', 'section' ),
		'type'    => 'checkbox',
		'section' => 'theme_customizer_general',
		'settings' => 'theme_customizer_general7'
	) ) );

	$wp_customize->add_setting( 'theme_customizer_general8', array(
		'sanitize_callback' => 'playne_sanitize_checkbox'		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_general8', array(
		'label' => __( 'Enable header left version', 'section' ),
		'type'    => 'checkbox',
		'section' => 'theme_customizer_general',
		'settings' => 'theme_customizer_general8'
	) ) );

	//Favicon Image
	$wp_customize->add_section( 'theme_customizer_favicon', array(
		'title' => __( 'Favicon image', 'section' ),
		'priority' => 101
	) );
	
	$wp_customize->add_setting( 'theme_customizer_favicon', array(
		'sanitize_callback' => 'esc_url_raw'		
	) );
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'theme_customizer_favicon', array(
		'label' => __( 'Favicon Upload', 'section' ),
		'section' => 'theme_customizer_favicon',
		'settings' => 'theme_customizer_favicon'
	) ) );

	//Header Phone Image
	$wp_customize->add_section( 'theme_customizer_showcaseimage', array(
		'title' => __( 'Header showcase image', 'section' ),
		'priority' => 106
	) );
	
	$wp_customize->add_setting( 'theme_customizer_showcaseimage', array(
		'sanitize_callback' => 'esc_url_raw'		
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'theme_customizer_showcaseimage', array(
		'label' => __( 'Showcase image Upload', 'section' ),
		'section' => 'theme_customizer_showcaseimage',
		'settings' => 'theme_customizer_showcaseimage'
	) ) );

	//Footer background image
	$wp_customize->add_section( 'theme_customizer_footerbgimage', array(
		'title' => __( 'Footer background image', 'section' ),
		'priority' => 107
	) );
	
	$wp_customize->add_setting( 'theme_customizer_footerbgimage', array(
		'sanitize_callback' => 'esc_url_raw'		
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'theme_customizer_footerbgimage', array(
		'label' => __( 'Footer background image Upload', 'section' ),
		'section' => 'theme_customizer_footerbgimage',
		'settings' => 'theme_customizer_footerbgimage'
	) ) );

	//Favicon Image
	$wp_customize->add_section( 'theme_customizer_footersocials', array(
		'title' => __( 'Social icons', 'section' ),
		'priority' => 101
	) );

	$wp_customize->add_setting( 'theme_customizer_footerfacebook', array(
		'sanitize_callback' => 'esc_url_raw'		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_footerfacebook', array(
		'label' => __( 'Facebook link', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_footersocials',
		'settings' => 'theme_customizer_footerfacebook'
	) ) );

	$wp_customize->add_setting( 'theme_customizer_footeryoutube', array(
		'sanitize_callback' => 'esc_url_raw'		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_footeryoutube', array(
		'label' => __( 'Youtube link', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_footersocials',
		'settings' => 'theme_customizer_footeryoutube'
	) ) );

	$wp_customize->add_setting( 'theme_customizer_footertwitter', array(
		'sanitize_callback' => 'esc_url_raw'		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_footertwitter', array(
		'label' => __( 'Twitter link', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_footersocials',
		'settings' => 'theme_customizer_footertwitter'
	) ) );


	$wp_customize->add_setting( 'theme_customizer_footervimeo', array(
		'sanitize_callback' => 'esc_url_raw'
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_footervimeo', array(
		'label' => __( 'Vimeo link', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_footersocials',
		'settings' => 'theme_customizer_footervimeo'
	) ) );

	$wp_customize->add_setting( 'theme_customizer_footermail', array(
		'sanitize_callback' => 'esc_url_raw'	
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_footermail', array(
		'label' => __( 'Email link (mailto:youremail@email.com)', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_footersocials',
		'settings' => 'theme_customizer_footermail'
	) ) );

	$wp_customize->add_setting( 'theme_customizer_footerrss', array(
		'sanitize_callback' => 'esc_url_raw'		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_footerrss', array(
		'label' => __( 'Rss link', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_footersocials',
		'settings' => 'theme_customizer_footerrss'
	) ) );

	$wp_customize->add_setting( 'theme_customizer_footerpinterest', array(
		'sanitize_callback' => 'esc_url_raw'		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_footerpinterest', array(
		'label' => __( 'Pinterest link', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_footersocials',
		'settings' => 'theme_customizer_footerpinterest'
	) ) );

	$wp_customize->add_setting( 'theme_customizer_footerlinkedin', array(
		'sanitize_callback' => 'esc_url_raw'		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_footerlinkedin', array(
		'label' => __( 'Linkedin link', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_footersocials',
		'settings' => 'theme_customizer_footerlinkedin'
	) ) );

	$wp_customize->add_setting( 'theme_customizer_footerdribbble', array(
		'sanitize_callback' => 'esc_url_raw'		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_footerdribbble', array(
		'label' => __( 'Dribbble link', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_footersocials',
		'settings' => 'theme_customizer_footerdribbble'
	) ) );

	$wp_customize->add_setting( 'theme_customizer_footergoogle', array(
		'sanitize_callback' => 'esc_url_raw'	
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_footergoogle', array(
		'label' => __( 'Google plus link', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_footersocials',
		'settings' => 'theme_customizer_footergoogle'
	) ) );

	$wp_customize->add_setting( 'theme_customizer_footerflickr', array(
		'sanitize_callback' => 'esc_url_raw'		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_footerflickr', array(
		'label' => __( 'Flickr link', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_footersocials',
		'settings' => 'theme_customizer_footerflickr'
	) ) );

	//Intro header text
	$wp_customize->add_section( 'theme_customizer_headertextblog', array(
		'title' => __( 'Blog intro text', 'section' ),
		'priority' => 101
	) );

	$wp_customize->add_setting( 'theme_customizer_headertextlinetwoblog', array(
		'sanitize_callback' => 'sanitize_text_field'	
	) );
 
	$wp_customize->add_control( new WP_Customize_Textarea_Control( $wp_customize, 'theme_customizer_headertextlinetwoblog', array(
	    'label'   => __( 'Blog subtext', 'section' ),
	    'section' => 'theme_customizer_headertextblog',
	    'settings'   => 'theme_customizer_headertextlinetwoblog',
	    'priority' => 1
	) ) );

	$wp_customize->add_setting( 'theme_customizer_headertextlineoneblog', array(
		'sanitize_callback' => 'sanitize_text_field'		
	) );

	$wp_customize->add_control( new WP_Customize_Textarea_Control( $wp_customize, 'theme_customizer_headertextlineoneblog', array(
		'label' => __( 'Blog header', 'section' ),
		'section' => 'theme_customizer_headertextblog',
		'settings' => 'theme_customizer_headertextlineoneblog',
		'priority' => 2
	) ) );

	//Intro header text
	$wp_customize->add_section( 'theme_customizer_headertext', array(
		'title' => __( 'Header intro text & buttons', 'section' ),
		'priority' => 102
	) );

	$wp_customize->add_setting( 'theme_customizer_headertextlinetwo', array(
		'sanitize_callback' => 'sanitize_text_field'	
	) );
 
	$wp_customize->add_control( new WP_Customize_Textarea_Control( $wp_customize, 'theme_customizer_headertextlinetwo', array(
	    'label'   => __( 'Intro header subtext', 'section' ),
	    'section' => 'theme_customizer_headertext',
	    'settings'   => 'theme_customizer_headertextlinetwo',
	    'priority' => 1
	) ) );

	$wp_customize->add_setting( 'theme_customizer_headertextlineone', array(
		'sanitize_callback' => 'sanitize_text_field'		
	) );

	$wp_customize->add_control( new WP_Customize_Textarea_Control( $wp_customize, 'theme_customizer_headertextlineone', array(
		'label' => __( 'Intro header', 'section' ),
		'section' => 'theme_customizer_headertext',
		'settings' => 'theme_customizer_headertextlineone',
		'priority' => 2
	) ) );

	// Accent color
  	$colors = array();
  	$colors[] = array( 'slug'=>'buttonbg_color', 'default' => '#81b3ab', 'label' => __( 'First button background', 'section' ) );

  	foreach($colors as $color)
  	{
   	 // SETTINGS
    	$wp_customize->add_setting( $color['slug'], array( 'default' => $color['default'], 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_hex_color' ));
	// CONTROLS
    	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $color['slug'], array( 'label' => $color['label'], 'section' => 'theme_customizer_headertext', 'priority' => 3, 'settings' => $color['slug'], 'capability' => 'edit_theme_options' )));
  	}

	// Accent color
  	$colors = array();
  	$colors[] = array( 'slug'=>'buttonbgtext_color', 'default' => '#FFF', 'label' => __( 'First button color', 'section' ) );

  	foreach($colors as $color)
  	{
   	 // SETTINGS
    	$wp_customize->add_setting( $color['slug'], array( 'default' => $color['default'], 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_hex_color' ));
	// CONTROLS
    	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $color['slug'], array( 'label' => $color['label'], 'section' => 'theme_customizer_headertext', 'priority' => 3, 'settings' => $color['slug'], 'capability' => 'edit_theme_options' )));
  	}

	$wp_customize->add_setting( 'theme_customizer_headerbutton', array(	
		'sanitize_callback' => 'sanitize_text_field'
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_headerbutton', array(
	    'label'   => __( 'First button text', 'section' ),
	    'section' => 'theme_customizer_headertext',
	    'settings'   => 'theme_customizer_headerbutton',
	    'priority' => 3
	) ) );

	$wp_customize->add_setting( 'theme_customizer_headerbuttonlink', array(	
		'sanitize_callback' => 'esc_url_raw'
	) );
 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_headerbuttonlink', array(
	    'label'   => __( 'First button link', 'section' ),
	    'section' => 'theme_customizer_headertext',
	    'settings'   => 'theme_customizer_headerbuttonlink',
	    'priority' => 4
	) ) );

	$wp_customize->add_setting( 'theme_customizer_headerbuttoniconlist', array(
		'sanitize_callback' => 'playne_sanitize_buttoniconlist'		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_headerbuttoniconlist', array(
		'label' => __( 'First button icon', 'section' ),
		'type'    => 'select',
		'section' => 'theme_customizer_headertext',
		'settings' => 'theme_customizer_headerbuttoniconlist',
		'priority' => 5,
		'default' => 'value1',
		'choices'    => array(
			'value0' => 'None',
        	'value1' => 'Apple logo',
        	'value2' => 'Android logo',
        	'value3' => 'Heart',
        	'value4' => 'Bolt',
        	'value5' => 'Check',
        	'value6' => 'Cloud',
        	'value7' => 'Credit card',
        	'value8' => 'Comment',
        	'value9' => 'Camera',
        	'value10' => 'Gamepad',
        	'value11' => 'Inbox',
        	'value12' => 'Music note',
        	'value13' => 'Mobile phone',
        	'value14' => 'Thumbs up',
        	'value15' => 'User group',
        	),
	) ) );

	$wp_customize->add_setting( 'theme_customizer_headerbuttoniconcustom', array(	
		'sanitize_callback' => 'sanitize_text_field'
	) );
 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_headerbuttoniconcustom', array(
	    'label'   => __( 'First button custom icon (fa-iconname)', 'section' ),
	    'section' => 'theme_customizer_headertext',
	    'settings'   => 'theme_customizer_headerbuttoniconcustom',
	    'priority' => 6
	) ) );

	$wp_customize->add_setting( 'theme_customizer_headerbuttoneffect', array(
		'sanitize_callback' => 'playne_sanitize_buttoneffect'		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_headerbuttoneffect', array(
		'label' => __( 'First button hover effect', 'section' ),
		'type'    => 'select',
		'section' => 'theme_customizer_headertext',
		'settings' => 'theme_customizer_headerbuttoneffect',
		'priority' => 7,
		'default' => 'value1',
		'choices'    => array(
        	'value0' => 'Standard',
        	'value1' => 'To bottom',
        	'value2' => 'To right',
        	'value3' => 'To left',
        	'value4' => 'Fade',
        	'value5' => 'Bounce to bottom',
        	'value6' => 'Bounce to top',
        	'value7' => 'Bounce to left',
        	'value8' => 'Bounce to right',
        	),
	) ) );

	// Accent color
  	$colors = array();
  	$colors[] = array( 'slug'=>'buttonbgsecond_color', 'default' => '#81b3ab', 'label' => __( 'Second button background', 'section' ) );

  	foreach($colors as $color)
  	{
   	 // SETTINGS
    	$wp_customize->add_setting( $color['slug'], array( 'default' => $color['default'], 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_hex_color' ));
	// CONTROLS
    	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $color['slug'], array( 'label' => $color['label'], 'section' => 'theme_customizer_headertext', 'priority' => 8, 'settings' => $color['slug'], 'capability' => 'edit_theme_options' )));
  	}

	// Accent color
  	$colors = array();
  	$colors[] = array( 'slug'=>'buttonbgsecondtext_color', 'default' => '#FFF', 'label' => __( 'Second button color', 'section' ) );

  	foreach($colors as $color)
  	{
   	 // SETTINGS
    	$wp_customize->add_setting( $color['slug'], array( 'default' => $color['default'], 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_hex_color' ));
	// CONTROLS
    	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $color['slug'], array( 'label' => $color['label'], 'section' => 'theme_customizer_headertext', 'priority' => 9, 'settings' => $color['slug'], 'capability' => 'edit_theme_options' )));
  	}

	$wp_customize->add_setting( 'theme_customizer_headerbutton2', array(
		'sanitize_callback' => 'sanitize_text_field'	
	) );
 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_headerbutton2', array(
	    'label'   => __( 'Second button text', 'section' ),
	    'section' => 'theme_customizer_headertext',
	    'settings'   => 'theme_customizer_headerbutton2',
	    'priority' => 10
	) ) );

	$wp_customize->add_setting( 'theme_customizer_headerbuttonlink2', array(
		'sanitize_callback' => 'esc_url_raw'	
	) );
 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_headerbuttonlink2', array(
	    'label'   => __( 'Second button link', 'section' ),
	    'section' => 'theme_customizer_headertext',
	    'settings'   => 'theme_customizer_headerbuttonlink2',
	    'priority' => 11
	) ) );

	$wp_customize->add_setting( 'theme_customizer_headerbuttoniconlist2', array(
		'sanitize_callback' => 'playne_sanitize_buttoniconlist'		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_headerbuttoniconlist2', array(
		'label' => __( 'Second button icon', 'section' ),
		'type'    => 'select',
		'section' => 'theme_customizer_headertext',
		'settings' => 'theme_customizer_headerbuttoniconlist2',
		'priority' => 12,
		'default' => 'value2',
		'choices'    => array(
			'value0' => 'None',
        	'value1' => 'Apple logo',
        	'value2' => 'Android logo',
        	'value3' => 'Heart',
        	'value4' => 'Bolt',
        	'value5' => 'Check',
        	'value6' => 'Cloud',
        	'value7' => 'Credit card',
        	'value8' => 'Comment',
        	'value9' => 'Camera',
        	'value10' => 'Gamepad',
        	'value11' => 'Inbox',
        	'value12' => 'Music note',
        	'value13' => 'Mobile phone',
        	'value14' => 'Thumbs up',
        	'value15' => 'User group',
        	),
	) ) );

	$wp_customize->add_setting( 'theme_customizer_headerbuttoniconcustom2', array(	
		'sanitize_callback' => 'sanitize_text_field'
	) );
 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_headerbuttoniconcustom2', array(
	    'label'   => __( 'Second button custom icon (fa-iconname)', 'section' ),
	    'section' => 'theme_customizer_headertext',
	    'settings'   => 'theme_customizer_headerbuttoniconcustom2',
	    'priority' => 13
	) ) );

	$wp_customize->add_setting( 'theme_customizer_headerbuttoneffect2', array(
		'sanitize_callback' => 'playne_sanitize_buttoneffect'		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_headerbuttoneffect2', array(
		'label' => __( 'Second button hover effect', 'section' ),
		'type'    => 'select',
		'section' => 'theme_customizer_headertext',
		'settings' => 'theme_customizer_headerbuttoneffect2',
		'priority' => 14,
		'default' => 'value1',
		'choices'    => array(
        	'value0' => 'Standard',
        	'value1' => 'To bottom',
        	'value2' => 'To right',
        	'value3' => 'To left',
        	'value4' => 'Fade',
        	'value5' => 'Bounce to bottom',
        	'value6' => 'Bounce to top',
        	'value7' => 'Bounce to left',
        	'value8' => 'Bounce to right',
        	),
	) ) );

	$wp_customize->add_setting( 'theme_customizer_headerbuttoncorners', array(
		'sanitize_callback' => 'playne_sanitize_buttoncorners'		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_headerbuttoncorners', array(
		'label' => __( 'Button corners', 'section' ),
		'type'    => 'select',
		'section' => 'theme_customizer_headertext',
		'settings' => 'theme_customizer_headerbuttoncorners',
		'priority' => 15,
		'default' => 'value0',
		'choices'    => array(
			'value0' => 'Default',
        	'value2' => 'Semi rounded',
        	),
	) ) );

	//Footer header text
	$wp_customize->add_section( 'theme_customizer_footertext', array(
		'title' => __( 'Footer outro text & buttons', 'section' ),
		'priority' => 107
	) );

	$wp_customize->add_setting( 'theme_customizer_footertextlinetwo', array(	
		'sanitize_callback' => 'sanitize_text_field'
	) );
 
	$wp_customize->add_control( new WP_Customize_Textarea_Control( $wp_customize, 'theme_customizer_footertextlinetwo', array(
	    'label'   => 'Outro text',
	    'section' => 'theme_customizer_footertext',
	    'settings'   => 'theme_customizer_footertextlinetwo',
	    'priority' => 1
	) ) );

	$wp_customize->add_setting( 'theme_customizer_footertextlineone', array(
		'sanitize_callback' => 'sanitize_text_field'		
	) );

	$wp_customize->add_control( new WP_Customize_Textarea_Control( $wp_customize, 'theme_customizer_footertextlineone', array(
		'label' => __( 'Outro Text Header', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_footertext',
		'settings' => 'theme_customizer_footertextlineone',
		'priority' => 2
	) ) );

	$wp_customize->add_setting( 'theme_customizer_footertextbutton1', array(	
		'sanitize_callback' => 'sanitize_text_field'
	) );
 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_footertextbutton1', array(
	    'label'   => 'First button',
	    'type' => 'text',
	    'section' => 'theme_customizer_footertext',
	    'settings'   => 'theme_customizer_footertextbutton1',
	    'priority' => 3
	) ) );

	$wp_customize->add_setting( 'theme_customizer_footertextbutton1url', array(	
		'sanitize_callback' => 'esc_url_raw'
	) );
 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_footertextbutton1url', array(
	    'label'   => 'First button link',
	    'type' => 'text',
	    'section' => 'theme_customizer_footertext',
	    'settings'   => 'theme_customizer_footertextbutton1url',
	    'priority' => 4
	) ) );

	$wp_customize->add_setting( 'theme_customizer_footerbuttoniconlist', array(
		'sanitize_callback' => 'playne_sanitize_buttoniconlist'		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_footerbuttoniconlist', array(
		'label' => __( 'First button icon', 'section' ),
		'type'    => 'select',
		'section' => 'theme_customizer_footertext',
		'settings' => 'theme_customizer_footerbuttoniconlist',
		'priority' => 5,
		'default' => 'value1',
		'choices'    => array(
			'value0' => 'None',
        	'value1' => 'Apple logo',
        	'value2' => 'Android logo',
        	'value3' => 'Heart',
        	'value4' => 'Bolt',
        	'value5' => 'Check',
        	'value6' => 'Cloud',
        	'value7' => 'Credit card',
        	'value8' => 'Comment',
        	'value9' => 'Camera',
        	'value10' => 'Gamepad',
        	'value11' => 'Inbox',
        	'value12' => 'Music note',
        	'value13' => 'Mobile phone',
        	'value14' => 'Thumbs up',
        	'value15' => 'User group',
        	),
	) ) );

	$wp_customize->add_setting( 'theme_customizer_footerbuttoniconcustom', array(	
		'sanitize_callback' => 'sanitize_text_field'
	) );
 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_footerbuttoniconcustom', array(
	    'label'   => __( 'First button custom icon (fa-iconname)', 'section' ),
	    'section' => 'theme_customizer_footertext',
	    'settings'   => 'theme_customizer_footerbuttoniconcustom',
	    'priority' => 6
	) ) );

	$wp_customize->add_setting( 'theme_customizer_footerbuttoneffect', array(
		'sanitize_callback' => 'playne_sanitize_buttoneffect'		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_footerbuttoneffect', array(
		'label' => __( 'First button hover effect', 'section' ),
		'type'    => 'select',
		'section' => 'theme_customizer_footertext',
		'settings' => 'theme_customizer_footerbuttoneffect',
		'priority' => 7,
		'default' => 'value1',
		'choices'    => array(
        	'value0' => 'Standard',
        	'value1' => 'To bottom',
        	'value2' => 'To right',
        	'value3' => 'To left',
        	'value4' => 'Fade',
        	'value5' => 'Bounce to bottom',
        	'value6' => 'Bounce to top',
        	'value7' => 'Bounce to left',
        	'value8' => 'Bounce to right',
        	),
	) ) );

	// Accent color
  	$colors = array();
  	$colors[] = array( 'slug'=>'buttonfooterbg_color', 'default' => '#81b3ab', 'label' => __( 'First button background', 'section' ) );

  	foreach($colors as $color)
  	{
   	 // SETTINGS
    	$wp_customize->add_setting( $color['slug'], array( 'default' => $color['default'], 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_hex_color' ));
	// CONTROLS
    	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $color['slug'], array( 'label' => $color['label'], 'section' => 'theme_customizer_footertext', 'priority' => 8, 'settings' => $color['slug'], 'capability' => 'edit_theme_options' )));
  	}

	// Accent color
  	$colors = array();
  	$colors[] = array( 'slug'=>'buttonfooterbgtext_color', 'default' => '#FFF', 'label' => __( 'First button color', 'section' ) );

  	foreach($colors as $color)
  	{
   	 // SETTINGS
    	$wp_customize->add_setting( $color['slug'], array( 'default' => $color['default'], 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_hex_color' ));
	// CONTROLS
    	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $color['slug'], array( 'label' => $color['label'], 'section' => 'theme_customizer_footertext', 'priority' => 9, 'settings' => $color['slug'], 'capability' => 'edit_theme_options' )));
  	}

	$wp_customize->add_setting( 'theme_customizer_footertextbutton2', array(	
		'sanitize_callback' => 'sanitize_text_field'
	) );
 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_footertextbutton2', array(
	    'label'   => 'Second button',
	    'type' => 'text',
	    'section' => 'theme_customizer_footertext',
	    'settings'   => 'theme_customizer_footertextbutton2',
	    'priority' => 10
	) ) );

	$wp_customize->add_setting( 'theme_customizer_footertextbutton2url', array(	
		'sanitize_callback' => 'esc_url_raw'
	) );
 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_footertextbutton2url', array(
	    'label'   => 'Second button link',
	    'type' => 'text',
	    'section' => 'theme_customizer_footertext',
	    'settings'   => 'theme_customizer_footertextbutton2url',
	    'priority' => 11
	) ) );

	$wp_customize->add_setting( 'theme_customizer_footerbuttoniconlist2', array(
		'sanitize_callback' => 'playne_sanitize_buttoniconlist'		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_footerbuttoniconlist2', array(
		'label' => __( 'Second button icon', 'section' ),
		'type'    => 'select',
		'section' => 'theme_customizer_footertext',
		'settings' => 'theme_customizer_footerbuttoniconlist2',
		'priority' => 12,
		'default' => 'value1',
		'choices'    => array(
			'value0' => 'None',
        	'value1' => 'Apple logo',
        	'value2' => 'Android logo',
        	'value3' => 'Heart',
        	'value4' => 'Bolt',
        	'value5' => 'Check',
        	'value6' => 'Cloud',
        	'value7' => 'Credit card',
        	'value8' => 'Comment',
        	'value9' => 'Camera',
        	'value10' => 'Gamepad',
        	'value11' => 'Inbox',
        	'value12' => 'Music note',
        	'value13' => 'Mobile phone',
        	'value14' => 'Thumbs up',
        	'value15' => 'User group',
        	),
	) ) );

	$wp_customize->add_setting( 'theme_customizer_footerbuttoniconcustom2', array(	
		'sanitize_callback' => 'sanitize_text_field'
	) );
 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_footerbuttoniconcustom2', array(
	    'label'   => __( 'Second button custom icon (fa-iconname)', 'section' ),
	    'section' => 'theme_customizer_footertext',
	    'settings'   => 'theme_customizer_footerbuttoniconcustom2',
	    'priority' => 13
	) ) );

	$wp_customize->add_setting( 'theme_customizer_footerbuttoncorners', array(
		'sanitize_callback' => 'playne_sanitize_buttoncorners'		
	) );

	$wp_customize->add_setting( 'theme_customizer_footerbuttoneffect2', array(
		'sanitize_callback' => 'playne_sanitize_buttoneffect'		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_footerbuttoneffect2', array(
		'label' => __( 'Second button hover effect', 'section' ),
		'type'    => 'select',
		'section' => 'theme_customizer_footertext',
		'settings' => 'theme_customizer_footerbuttoneffect2',
		'priority' => 14,
		'default' => 'value1',
		'choices'    => array(
        	'value0' => 'Standard',
        	'value1' => 'To bottom',
        	'value2' => 'To right',
        	'value3' => 'To left',
        	'value4' => 'Fade',
        	'value5' => 'Bounce to bottom',
        	'value6' => 'Bounce to top',
        	'value7' => 'Bounce to left',
        	'value8' => 'Bounce to right',
        	),
	) ) );

	// Accent color
  	$colors = array();
  	$colors[] = array( 'slug'=>'buttonfooterbgsecond_color', 'default' => '#81b3ab', 'label' => __( 'Second button background', 'section' ) );

  	foreach($colors as $color)
  	{
   	 // SETTINGS
    	$wp_customize->add_setting( $color['slug'], array( 'default' => $color['default'], 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_hex_color' ));
	// CONTROLS
    	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $color['slug'], array( 'label' => $color['label'], 'section' => 'theme_customizer_footertext', 'priority' => 15, 'settings' => $color['slug'], 'capability' => 'edit_theme_options' )));
  	}

	// Accent color
  	$colors = array();
  	$colors[] = array( 'slug'=>'buttonfooterbgsecondtext_color', 'default' => '#FFF', 'label' => __( 'Second button color', 'section' ) );

  	foreach($colors as $color)
  	{
   	 // SETTINGS
    	$wp_customize->add_setting( $color['slug'], array( 'default' => $color['default'], 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_hex_color' ));
	// CONTROLS
    	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $color['slug'], array( 'label' => $color['label'], 'section' => 'theme_customizer_footertext', 'priority' => 16, 'settings' => $color['slug'], 'capability' => 'edit_theme_options' )));
  	}

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_footerbuttoncorners', array(
		'label' => __( 'Button corners', 'section' ),
		'type'    => 'select',
		'section' => 'theme_customizer_footertext',
		'settings' => 'theme_customizer_footerbuttoncorners',
		'priority' => 17,
		'default' => 'value0',
		'choices'    => array(
			'value0' => 'Default',
        	'value2' => 'Semi rounded',
        	),
	) ) );

	// Accent color
  	$colors = array();
  	$colors[] = array( 'slug'=>'accent_color', 'default' => '#35aca8', 'label' => __( 'Accent', 'section' ) );

  	foreach($colors as $color)
  	{
   	 // SETTINGS
    	$wp_customize->add_setting( $color['slug'], array( 'default' => $color['default'], 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_hex_color' ));
	// CONTROLS
    	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $color['slug'], array( 'label' => $color['label'], 'section' => 'colors', 'priority' => 1, 'settings' => $color['slug'], 'capability' => 'edit_theme_options' )));
  	}

 	// Header logo
  	$colors = array();
  	$colors[] = array( 'slug'=>'headerlogo_color', 'default' => '#FFF', 'label' => __( 'Header accent', 'section' ) );

  	foreach($colors as $color)
  	{
   	 // SETTINGS
    	$wp_customize->add_setting( $color['slug'], array( 'default' => $color['default'], 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_hex_color' ));
	// CONTROLS
    	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $color['slug'], array( 'label' => $color['label'], 'section' => 'colors', 'priority' => 2, 'settings' => $color['slug'], 'capability' => 'edit_theme_options' )));
  	}

 	// Header intro
  	$colors = array();
  	$colors[] = array( 'slug'=>'headerintro_color', 'default' => '#FFFFFF', 'label' => __( 'Header intro text', 'section' ) );

  	foreach($colors as $color)
  	{
   	 // SETTINGS
    	$wp_customize->add_setting( $color['slug'], array( 'default' => $color['default'], 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_hex_color' ));
	// CONTROLS
    	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $color['slug'], array( 'label' => $color['label'], 'section' => 'colors', 'priority' => 3, 'settings' => $color['slug'], 'capability' => 'edit_theme_options' )));
  	}

 	// Header text
  	$colors = array();
  	$colors[] = array( 'slug'=>'headertext_color', 'default' => '#9c9999', 'label' => __( 'Header sub text', 'section' ) );

  	foreach($colors as $color)
  	{
   	 // SETTINGS
    	$wp_customize->add_setting( $color['slug'], array( 'default' => $color['default'], 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_hex_color' ));
	// CONTROLS
    	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $color['slug'], array( 'label' => $color['label'], 'section' => 'colors', 'priority' => 4, 'settings' => $color['slug'], 'capability' => 'edit_theme_options' )));
  	}

  	// Header background
  	$colors = array();
  	$colors[] = array( 'slug'=>'footerheader_color', 'default' => '#000000', 'label' => __( 'Header Background', 'section' ) );

  	foreach($colors as $color)
  	{
   	 // SETTINGS
    	$wp_customize->add_setting( $color['slug'], array( 'default' => $color['default'], 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_hex_color' ));
	// CONTROLS
    	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $color['slug'], array( 'label' => $color['label'], 'section' => 'colors', 'priority' => 7, 'settings' => $color['slug'], 'capability' => 'edit_theme_options' )));
  	}

  	// Footer background
  	$colors = array();
  	$colors[] = array( 'slug'=>'footer_color', 'default' => '#34495e', 'label' => __( 'Footer Background', 'section' ) );

  	foreach($colors as $color)
  	{
   	 // SETTINGS
    	$wp_customize->add_setting( $color['slug'], array( 'default' => $color['default'], 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_hex_color' ));
	// CONTROLS
    	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $color['slug'], array( 'label' => $color['label'], 'section' => 'colors', 'priority' => 8, 'settings' => $color['slug'], 'capability' => 'edit_theme_options' )));
  	}

  	// Footer bottom background
  	$colors = array();
  	$colors[] = array( 'slug'=>'footerbottom_color', 'default' => '#191d20', 'label' => __( 'Footer Bottom Background', 'section' ) );

  	foreach($colors as $color)
  	{
   	 // SETTINGS
    	$wp_customize->add_setting( $color['slug'], array( 'default' => $color['default'], 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_hex_color' ));
	// CONTROLS
    	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $color['slug'], array( 'label' => $color['label'], 'section' => 'colors', 'priority' => 8, 'settings' => $color['slug'], 'capability' => 'edit_theme_options' )));
  	}

  	// Footer bottom accent
  	$colors = array();
  	$colors[] = array( 'slug'=>'footerbottomaccent_color', 'default' => '#FFF', 'label' => __( 'Footer Bottom Accent', 'section' ) );

  	foreach($colors as $color)
  	{
   	 // SETTINGS
    	$wp_customize->add_setting( $color['slug'], array( 'default' => $color['default'], 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_hex_color' ));
	// CONTROLS
    	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $color['slug'], array( 'label' => $color['label'], 'section' => 'colors', 'priority' => 8, 'settings' => $color['slug'], 'capability' => 'edit_theme_options' )));
  	}

  	// Footer bottom text
  	$colors = array();
  	$colors[] = array( 'slug'=>'footerbottomtext_color', 'default' => '#9c9999', 'label' => __( 'Footer Bottom Text', 'section' ) );

  	foreach($colors as $color)
  	{
   	 // SETTINGS
    	$wp_customize->add_setting( $color['slug'], array( 'default' => $color['default'], 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_hex_color' ));
	// CONTROLS
    	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $color['slug'], array( 'label' => $color['label'], 'section' => 'colors', 'priority' => 8, 'settings' => $color['slug'], 'capability' => 'edit_theme_options' )));
  	}

  	// Navigation background
  	$colors = array();
  	$colors[] = array( 'slug'=>'navbg_color', 'default' => '#13191f', 'label' => __( 'Navigation Background', 'section' ) );

  	foreach($colors as $color)
  	{
   	 // SETTINGS
    	$wp_customize->add_setting( $color['slug'], array( 'default' => $color['default'], 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_hex_color' ));
	// CONTROLS
    	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $color['slug'], array( 'label' => $color['label'], 'section' => 'colors', 'priority' => 9, 'settings' => $color['slug'], 'capability' => 'edit_theme_options' )));
  	}

  	// Navigation text 
  	$colors = array();
  	$colors[] = array( 'slug'=>'navtext_color', 'default' => '#8e8e8e', 'label' => __( 'Navigation Link', 'section' ) );

  	foreach($colors as $color)
  	{
   	 // SETTINGS
    	$wp_customize->add_setting( $color['slug'], array( 'default' => $color['default'], 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_hex_color' ));
	// CONTROLS
    	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $color['slug'], array( 'label' => $color['label'], 'section' => 'colors', 'priority' => 10, 'settings' => $color['slug'], 'capability' => 'edit_theme_options' )));
  	}

  	// Navigation accent 
  	$colors = array();
  	$colors[] = array( 'slug'=>'navaccent_color', 'default' => '#FFFFFF', 'label' => __( 'Navigation Accent', 'section' ) );

  	foreach($colors as $color)
  	{
   	 // SETTINGS
    	$wp_customize->add_setting( $color['slug'], array( 'default' => $color['default'], 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_hex_color' ));
	// CONTROLS
    	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $color['slug'], array( 'label' => $color['label'], 'section' => 'colors', 'priority' => 11, 'settings' => $color['slug'], 'capability' => 'edit_theme_options' )));
  	}

  	// Preloader background
  	$colors = array();
  	$colors[] = array( 'slug'=>'preloader_color', 'default' => '#13191f', 'label' => __( 'Preloader Background', 'section' ) );

  	foreach($colors as $color)
  	{
   	 // SETTINGS
    	$wp_customize->add_setting( $color['slug'], array( 'default' => $color['default'], 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_hex_color' ));
	// CONTROLS
    	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $color['slug'], array( 'label' => $color['label'], 'section' => 'colors', 'priority' => 12, 'settings' => $color['slug'], 'capability' => 'edit_theme_options' )));
  	}

  	// Preloader accent
  	$colors = array();
  	$colors[] = array( 'slug'=>'preloaderaccent_color', 'default' => '#17bcb8', 'label' => __( 'Preloader Accent', 'section' ) );

  	foreach($colors as $color)
  	{
   	 // SETTINGS
    	$wp_customize->add_setting( $color['slug'], array( 'default' => $color['default'], 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_hex_color' ));
	// CONTROLS
    	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $color['slug'], array( 'label' => $color['label'], 'section' => 'colors', 'priority' => 13, 'settings' => $color['slug'], 'capability' => 'edit_theme_options' )));
  	}

 	// Footer intro
  	$colors = array();
  	$colors[] = array( 'slug'=>'footerintro_color', 'default' => '#FFFFFF', 'label' => __( 'Footer intro text', 'section' ) );

  	foreach($colors as $color)
  	{
   	 // SETTINGS
    	$wp_customize->add_setting( $color['slug'], array( 'default' => $color['default'], 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_hex_color' ));
	// CONTROLS
    	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $color['slug'], array( 'label' => $color['label'], 'section' => 'colors', 'priority' => 14, 'settings' => $color['slug'], 'capability' => 'edit_theme_options' )));
  	}

 	// Footer text
  	$colors = array();
  	$colors[] = array( 'slug'=>'footertext_color', 'default' => '#9c9999', 'label' => __( 'Footer sub text', 'section' ) );

  	foreach($colors as $color)
  	{
   	 // SETTINGS
    	$wp_customize->add_setting( $color['slug'], array( 'default' => $color['default'], 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_hex_color' ));
	// CONTROLS
    	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $color['slug'], array( 'label' => $color['label'], 'section' => 'colors', 'priority' => 15, 'settings' => $color['slug'], 'capability' => 'edit_theme_options' )));
  	}

	//Real Time Settings Preview
	
	$wp_customize->get_setting('blogname')->transport='postMessage';
	
	if ( $wp_customize->is_preview() && ! is_admin() )
	add_filter( 'wp_footer', 'customizer_preview', 21);
	
	function customizer_preview() {
		?>
		<script type="text/javascript">
		( function( $ ){
		
		wp.customize('blogname',function( value ) {
			value.bind(function(to) {
				$('#logo h1 a, #logo h2 a').html(to);
			});
		});
		
		} )( jQuery )
		</script>
		<?php 
	}
	
}