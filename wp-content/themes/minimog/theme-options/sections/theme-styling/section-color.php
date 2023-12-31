<?php
Redux::set_section( Minimog_Redux::OPTION_NAME, array(
	'title'      => __( 'Colors', 'minimog' ),
	'id'         => 'color',
	'subsection' => true,
	'fields'     => array(
		array(
			'id'       => 'general_colors',
			'type'     => 'tm_heading',
			'title'    => __( 'General Colors', 'minimog' ),
			'indent'   => true,
			'collapse' => 'show',
		),
		array(
			'id'          => 'primary_color',
			'type'        => 'color',
			'title'       => __( 'Primary Color', 'minimog' ),
			'default'     => Minimog_Redux::get_default_setting( 'primary_color' ),
			'color_alpha' => true,
		),
		array(
			'id'          => 'secondary_color',
			'type'        => 'color',
			'title'       => __( 'Secondary Color', 'minimog' ),
			'default'     => Minimog_Redux::get_default_setting( 'secondary_color' ),
			'color_alpha' => true,
		),
		array(
			'id'          => 'link_color',
			'type'        => 'color',
			'title'       => __( 'Link Color', 'minimog' ),
			'color_alpha' => true,
			'default'     => Minimog_Redux::get_default_setting( 'link_color' ),
		),
		array(
			'id'          => 'link_hover_color',
			'type'        => 'color',
			'title'       => __( 'Link Hover Color', 'minimog' ),
			'color_alpha' => true,
			'default'     => Minimog_Redux::get_default_setting( 'link_hover_color' ),
		),
		array(
			'id'          => 'body_color',
			'type'        => 'color',
			'title'       => __( 'Text Color', 'minimog' ),
			'color_alpha' => true,
			'default'     => Minimog_Redux::get_default_setting( 'body_color' ),
		),
		array(
			'id'          => 'body_lighten_color',
			'type'        => 'color',
			'title'       => __( 'Text Lighten Color', 'minimog' ),
			'default'     => Minimog_Redux::get_default_setting( 'body_lighten_color' ),
			'color_alpha' => true,
		),
		array(
			'id'          => 'heading_color',
			'type'        => 'color',
			'title'       => __( 'Heading Color', 'minimog' ),
			'default'     => Minimog_Redux::get_default_setting( 'heading_color' ),
			'color_alpha' => true,
		),
		array(
			'id'     => 'button_colors_hr',
			'type'   => 'tm_heading',
			'title'  => __( 'Button Normal Colors', 'minimog' ),
			'indent' => true,
		),
		array(
			'id'          => 'button_text_color',
			'type'        => 'color',
			'title'       => __( 'Text Color', 'minimog' ),
			'default'     => Minimog_Redux::get_default_setting( 'button_text_color' ),
			'color_alpha' => true,
		),
		array(
			'id'          => 'button_background_color',
			'type'        => 'color',
			'title'       => __( 'Background Color', 'minimog' ),
			'default'     => Minimog_Redux::get_default_setting( 'button_background_color' ),
			'color_alpha' => true,
		),
		array(
			'id'          => 'button_border_color',
			'type'        => 'color',
			'title'       => __( 'Border Color', 'minimog' ),
			'default'     => Minimog_Redux::get_default_setting( 'button_border_color' ),
			'color_alpha' => true,
		),
		array(
			'id'     => 'button_hover_colors_hr',
			'type'   => 'tm_heading',
			'title'  => __( 'Button Hover Colors', 'minimog' ),
			'indent' => true,
		),
		array(
			'id'          => 'button_hover_text_color',
			'type'        => 'color',
			'title'       => __( 'Text Color', 'minimog' ),
			'default'     => Minimog_Redux::get_default_setting( 'button_hover_text_color' ),
			'color_alpha' => true,
		),
		array(
			'id'          => 'button_hover_background_color',
			'type'        => 'color',
			'title'       => __( 'Background Color', 'minimog' ),
			'default'     => Minimog_Redux::get_default_setting( 'button_hover_background_color' ),
			'color_alpha' => true,
		),
		array(
			'id'          => 'button_hover_border_color',
			'type'        => 'color',
			'title'       => __( 'Border Color', 'minimog' ),
			'default'     => Minimog_Redux::get_default_setting( 'button_hover_border_color' ),
			'color_alpha' => true,
		),
		array(
			'id'     => 'button2_colors_hr',
			'type'   => 'tm_heading',
			'title'  => __( 'Button Alt Normal Colors', 'minimog' ),
			'indent' => true,
		),
		array(
			'id'          => 'button2_text_color',
			'type'        => 'color',
			'title'       => __( 'Text Color', 'minimog' ),
			'default'     => Minimog_Redux::get_default_setting( 'button2_text_color' ),
			'color_alpha' => true,
		),
		array(
			'id'          => 'button2_background_color',
			'type'        => 'color',
			'title'       => __( 'Background Color', 'minimog' ),
			'default'     => Minimog_Redux::get_default_setting( 'button2_background_color' ),
			'color_alpha' => true,
		),
		array(
			'id'          => 'button2_border_color',
			'type'        => 'color',
			'title'       => __( 'Border Color', 'minimog' ),
			'default'     => Minimog_Redux::get_default_setting( 'button2_border_color' ),
			'color_alpha' => true,
		),
		array(
			'id'     => 'button2_hover_colors_hr',
			'type'   => 'tm_heading',
			'title'  => __( 'Button Alt Hover Colors', 'minimog' ),
			'indent' => true,
		),
		array(
			'id'          => 'button2_hover_text_color',
			'type'        => 'color',
			'title'       => __( 'Text Color', 'minimog' ),
			'default'     => Minimog_Redux::get_default_setting( 'button2_hover_text_color' ),
			'color_alpha' => true,
		),
		array(
			'id'          => 'button2_hover_background_color',
			'type'        => 'color',
			'title'       => __( 'Background Color', 'minimog' ),
			'default'     => Minimog_Redux::get_default_setting( 'button2_hover_background_color' ),
			'color_alpha' => true,
		),
		array(
			'id'          => 'button2_hover_border_color',
			'type'        => 'color',
			'title'       => __( 'Border Color', 'minimog' ),
			'default'     => Minimog_Redux::get_default_setting( 'button2_hover_border_color' ),
			'color_alpha' => true,
		),
		array(
			'id'     => 'form_colors_hr',
			'type'   => 'tm_heading',
			'title'  => __( 'Form Normal Colors', 'minimog' ),
			'indent' => true,
		),
		array(
			'id'          => 'form_text_color',
			'type'        => 'color',
			'title'       => __( 'Text Color', 'minimog' ),
			'default'     => Minimog_Redux::get_default_setting( 'form_text_color' ),
			'color_alpha' => true,
		),
		array(
			'id'          => 'form_background_color',
			'type'        => 'color',
			'title'       => __( 'Background Color', 'minimog' ),
			'default'     => Minimog_Redux::get_default_setting( 'form_background_color' ),
			'color_alpha' => true,
		),
		array(
			'id'          => 'form_border_color',
			'type'        => 'color',
			'title'       => __( 'Border Color', 'minimog' ),
			'default'     => Minimog_Redux::get_default_setting( 'form_border_color' ),
			'color_alpha' => true,
		),
		array(
			'id'          => 'form_box_shadow',
			'type'        => 'textarea',
			'title'       => __( 'Box Shadow', 'minimog' ),
			'description' => __( 'Input valid box shadow. For e.g: 0 0 5px #ccc', 'minimog' ),
			'default'     => Minimog_Redux::get_default_setting( 'form_box_shadow' ),
		),
		array(
			'id'     => 'form_focus_colors_hr',
			'type'   => 'tm_heading',
			'title'  => __( 'Form Focus Colors', 'minimog' ),
			'indent' => true,
		),
		array(
			'id'          => 'form_focus_text_color',
			'type'        => 'color',
			'title'       => __( 'Text Color', 'minimog' ),
			'default'     => Minimog_Redux::get_default_setting( 'form_focus_text_color' ),
			'color_alpha' => true,
		),
		array(
			'id'          => 'form_focus_background_color',
			'type'        => 'color',
			'title'       => __( 'Background Color', 'minimog' ),
			'default'     => Minimog_Redux::get_default_setting( 'form_focus_background_color' ),
			'color_alpha' => true,
		),
		array(
			'id'          => 'form_focus_border_color',
			'type'        => 'color',
			'title'       => __( 'Border Color', 'minimog' ),
			'default'     => Minimog_Redux::get_default_setting( 'form_focus_border_color' ),
			'color_alpha' => true,
		),
		array(
			'id'          => 'form_focus_box_shadow',
			'type'        => 'textarea',
			'title'       => __( 'Box Shadow', 'minimog' ),
			'description' => __( 'Input valid box shadow. For e.g: 0 0 5px #ccc', 'minimog' ),
			'default'     => Minimog_Redux::get_default_setting( 'form_focus_box_shadow' ),
		),
	),
) );
