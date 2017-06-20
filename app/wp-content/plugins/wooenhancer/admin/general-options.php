<?php 
$mainadv = '
	<div class="alborotado-advertiser clearfix">
	<h2 class="alborotado-title">Pro Team</h2>
	<a target="_blank" href="https://wordpress.org/plugins/pro-team/">
		<img class="alborotado-image" src="//ps.w.org/pro-team/assets/banner-772x250.jpg">
	</a>
	<p class="alborotado-description">
	ProTeam is a free but powerful plugin. In fact, I can proudly say that is the most complete team manager that you will find at WordPress.org It is pretty new but try it and compare. You can adjust almost everything to your info and design requirements.
	<p>
	<div class="alborotado-buttons-container">
		<a target="_blank" class="alborotado-button" href="http://proteam.alborotado.com/">Plugin Demo</a>
		<a target="_blank" class="alborotado-button" href="https://wordpress.org/plugins/pro-team/">Plugin Details</a>
	</div>	

</div>
';

 Redux::setSection( $opt_name, array(
        'title'            => __( 'General Options', 'redux-framework-demo' ),
        'desc'             => __( '', 'redux-framework-demo' ),
        'id'               => 'general-options-fields',
        'subsection'       => false,
        'customizer_width' => '700px',
        'fields'           => array(
			array(
				'id'    => 'wooenhancer-pro-alert',
				'type'  => 'info',
				'style' => 'info',
				'title' => __( 'WooEnhancer', 'redux-framework-demo' ),
				'desc'  => __( $isProNotice, 'redux-framework-demo' )
            ),
			array(
                'id'          => 'password-strength',
                'type'        => 'select',
                'title'       => __( 'Deactivate Password Strength Meter', 'redux-framework-demo' ),
                'subtitle'    => __( '', 'redux-framework-demo' ),
                'desc'        => __( '', 'redux-framework-demo' ),
                'options'	  => array(
					'enabled'	=> __('no', 'migwoo_enhancer'),
					'disabled'	=> __('Yes', 'migwoo_enhancer'),
				),
				'default' => 'enabled',
				'placeholder' => '',
            ),
			array( 
				'id'       => 'featured-alborotado',
				'type'     => 'raw',
				'title'    => __('FEATURED ITEM', 'redux-framework-demo'),
				'subtitle' => __('By Miguras', 'redux-framework-demo'),
				'desc'     => __('', 'redux-framework-demo'),
				'content'  => $mainadv,
			),
			/*
			array(
                'id'          => 'migwoo_enhancer_main_typography',
                'type'        => 'typography',
                'title'       => __( 'Typography h2.site-description', 'redux-framework-demo' ),
                'compiler'      => false,  // Use if you want to hook in your own CSS compiler
                'google'      => true,
                // Disable google fonts. Won't work if you haven't defined your google api key
                'font-backup' => true,
                // Select a backup non-google font in addition to a google font
                'font-style'    => true, // Includes font-style and weight. Can use font-style or font-weight to declare
                //'subsets'       => false, // Only appears if google is true and subsets not set to false
                'font-size'     => true,
                'line-height'   => true,
                //'word-spacing'  => true,  // Defaults to false
                //'letter-spacing'=> true,  // Defaults to false
                'color'         => true,
                'preview'       => true, // Disable the previewer
                'all_styles'  => true,
                // Enable all Google Font style/weight variations to be added to the page
                //'output'      => array( 'body' ),
                // An array of CSS selectors to apply this font style to dynamically
                //'compiler'    => array( 'h2.site-description-compiler' ),
                // An array of CSS selectors to apply this font style to dynamically
                'units'       => 'px',
                // Defaults to px
                'subtitle'    => __( '', 'redux-framework-demo' ),
                'default'     => array(
                    'color'       => '',
                    'font-style'  => '',
                    'font-family' => '',
                    'google'      => true,
                    'font-size'   => '',
                    'line-height' => ''
                ),
            ),
			*/
        )
    ) );
?>