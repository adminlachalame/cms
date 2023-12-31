<?php
Redux::set_section( Minimog_Redux::OPTION_NAME, array(
	'title'      => __( 'Mobile Menu', 'minimog' ),
	'id'         => 'mobile_menu',
	'subsection' => true,
	'fields'     => array(
		array(
			'id'      => 'mobile_menu_login_enable',
			'type'    => 'button_set',
			'title'   => __( 'Login', 'minimog' ),
			'options' => array(
				'0' => __( 'Hide', 'minimog' ),
				'1' => __( 'Show', 'minimog' ),
			),
			'default' => Minimog_Redux::get_default_setting( 'mobile_menu_login_enable' ),
		),
		array(
			'id'      => 'mobile_menu_wishlist_enable',
			'type'    => 'button_set',
			'title'   => __( 'Wishlist', 'minimog' ),
			'options' => array(
				'0' => __( 'Hide', 'minimog' ),
				'1' => __( 'Show', 'minimog' ),
			),
			'default' => Minimog_Redux::get_default_setting( 'mobile_menu_wishlist_enable' ),
		),
		array(
			'id'      => 'mobile_menu_info_list_enable',
			'type'    => 'button_set',
			'title'   => __( 'Info List', 'minimog' ),
			'options' => array(
				'0' => __( 'Hide', 'minimog' ),
				'1' => __( 'Show', 'minimog' ),
			),
			'default' => Minimog_Redux::get_default_setting( 'mobile_menu_info_list_enable' ),
		),
		array(
			'id'      => 'mobile_menu_social_networks_enable',
			'type'    => 'button_set',
			'title'   => __( 'Social Networks', 'minimog' ),
			'options' => array(
				'0' => __( 'Hide', 'minimog' ),
				'1' => __( 'Show', 'minimog' ),
			),
			'default' => Minimog_Redux::get_default_setting( 'mobile_menu_social_networks_enable' ),
		),
		array(
			'id'      => 'mobile_menu_language_switcher_enable',
			'type'    => 'button_set',
			'title'   => __( 'Language Switcher', 'minimog' ),
			'options' => array(
				'0' => __( 'Hide', 'minimog' ),
				'1' => __( 'Show', 'minimog' ),
			),
			'default' => Minimog_Redux::get_default_setting( 'mobile_menu_language_switcher_enable' ),
		),
		array(
			'id'            => 'mobile_menu_breakpoint',
			'title'         => __( 'Breakpoint', 'minimog' ),
			'description'   => __( 'Controls the breakpoint of the mobile menu.', 'minimog' ),
			'type'          => 'slider',
			'default'       => Minimog_Redux::get_default_setting( 'mobile_menu_breakpoint' ),
			'min'           => 500,
			'max'           => 1300,
			'step'          => 1,
			'display_value' => 'text',
		),
		array(
			'id'      => 'mobile_menu_open_animation',
			'type'    => 'select',
			'title'   => __( 'Open Animation', 'minimog' ),
			'options' => [
				'slide' => __( 'Slide', 'minimog' ),
				'push'  => __( 'Push', 'minimog' ),
			],
			'default' => Minimog_Redux::get_default_setting( 'mobile_menu_open_animation' ),
		),
		array(
			'id'      => 'mobile_menu_background',
			'title'   => __( 'Background', 'minimog' ),
			'type'    => 'background',
			'default' => Minimog_Redux::get_default_setting( 'mobile_menu_background' ),
		),
		array(
			'id'          => 'mobile_menu_overlay_color',
			'type'        => 'color',
			'title'       => __( 'Background Overlay', 'minimog' ),
			'color_alpha' => true,
		),
		array(
			'id'       => 'section_start_mobile_menu_nav_level_1',
			'type'     => 'tm_heading',
			'collapse' => 'show',
			'title'    => __( 'Level 1', 'minimog' ),
			'indent'   => true,
		),
		array(
			'id'             => 'mobile_menu_nav_level_1_padding',
			'type'           => 'spacing',
			'mode'           => 'padding',
			'all'            => false,
			'units'          => array( 'em', 'px', '%' ),
			'units_extended' => true,
			'title'          => __( 'Item Padding', 'minimog' ),
			'default'        => Minimog_Redux::get_default_setting( 'mobile_menu_nav_level_1_padding' ),
		),
	),
) );
