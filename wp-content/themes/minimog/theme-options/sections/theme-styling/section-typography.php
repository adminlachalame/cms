<?php
Redux::set_section( Minimog_Redux::OPTION_NAME, array(
	'title'      => __( 'Typography', 'minimog' ),
	'id'         => 'typography',
	'subsection' => true,
	'fields'     => array(
		array(
			'id'    => 'typography_instruction',
			'type'  => 'info',
			'style' => 'info',
			'title' => __( 'IMPORTANT NOTE: ', 'minimog' ),
			'desc'  => __( 'This section contains general typography options. Additional typography options for specific areas can be found within other sections. Example: For breadcrumb typography options go to the breadcrumb section.', 'minimog' ),
		),
		array(
			'id'       => 'section_typography_body_heading',
			'type'     => 'tm_heading',
			'collapse' => 'show',
			'title'    => __( 'Body & Heading Typography', 'minimog' ),
			'subtitle' => __( 'These settings control the typography for headings and text.', 'minimog' ),
			'indent'   => true,
		),
		array(
			'id'                => 'typography_body',
			'type'              => 'typography',
			// Enable all Google Font style/weight variations to be added to the page.
			'all-styles'        => true,
			'all-subsets'       => true,
			'title'             => __( 'Body Typography', 'minimog' ),
			'subtitle'          => __( 'These settings control the typography for all body text.', 'minimog' ),
			'google'            => true,
			'font_family_clear' => true,
			'default'           => Minimog_Redux::get_default_setting( 'typography_body' ),
			'color'             => false,
			'text-align'        => false,
			'weights'           => Minimog_Redux::get_all_font_variants(),
		),
		array(
			'id'                => 'typography_heading',
			'type'              => 'typography',
			'title'             => __( 'Heading', 'minimog' ),
			'subtitle'          => __( 'These settings control the typography for all heading text.', 'minimog' ),
			'google'            => true,
			'font_family_clear' => false,
			'default'           => Minimog_Redux::get_default_setting( 'typography_heading' ),
			'color'             => false,
			'text-align'        => false,
			'font-size'         => false,
			'line-height'       => false,
			'letter-spacing'    => true,
			'weights'           => Minimog_Redux::get_all_font_variants(),
		),
		array(
			'id'          => 'typography_heading_weight_2',
			'type'        => 'select',
			'title'       => __( 'Heading Weight 2', 'minimog' ),
			'description' => __( 'Select other weight of heading typography', 'minimog' ),
			'options'     => [
				'400' => 'Regular 400',
				'500' => 'Medium 500',
				'600' => 'Semi-Bold 600',
				'700' => 'Bold 700',
				'800' => 'Extra Bold 800',
				'900' => 'Black 900',
			],
			'default'     => Minimog_Redux::get_default_setting( 'typography_heading_weight_2' ),
		),
		array(
			'id'                => 'typography_heading2',
			'type'              => 'typography',
			'title'             => __( 'Heading 2', 'minimog' ),
			'subtitle'          => __( 'These settings control the typography for all heading 2 text.', 'minimog' ),
			'google'            => true,
			'font_family_clear' => false,
			'color'             => false,
			'text-align'        => false,
			'font-size'         => false,
			'line-height'       => false,
			'letter-spacing'    => false,
			'weights'           => Minimog_Redux::get_all_font_variants(),
		),

		/**
		 * Button Typography
		 */

		array(
			'id'       => 'section_button_typography',
			'type'     => 'tm_heading',
			'collapse' => 'show',
			'title'    => __( 'Button Typography', 'minimog' ),
			'subtitle' => __( 'These settings control the typography for all buttons.', 'minimog' ),
			'indent'   => true,
		),
		array(
			'id'          => 'button_typography_inherit',
			'type'        => 'button_set',
			'title'       => __( 'Font Family', 'minimog' ),
			'description' => __( 'Select inherit to use same font family as Body.', 'minimog' ),
			'options'     => [
				'0' => __( 'Custom', 'minimog' ),
				'1' => __( 'Inherit', 'minimog' ),
			],
			'default'     => '1',
			'class'       => 'row-no-border',
		),
		array(
			'id'                => 'button_typography',
			'type'              => 'typography',
			'title'             => __( 'Typography', 'minimog' ),
			'google'            => true,
			'font_family_clear' => false,
			'default'           => Minimog_Redux::get_default_setting( 'button_typography' ),
			'letter-spacing'    => true,
			'text-transform'    => true,
			'color'             => false,
			'text-align'        => false,
			'line-height'       => false,
			'weights'           => Minimog_Redux::get_all_font_variants(),
			'required'          => array(
				[ 'button_typography_inherit', '=', '0' ],
			),
		),
		array(
			'id'       => 'button_typography_custom_weight',
			'type'     => 'select',
			'title'    => __( 'Font Weight', 'minimog' ),
			'class'    => 'row-no-border',
			'options'  => Minimog_Redux::get_all_font_variations(),
			'default'  => Minimog_Redux::get_default_setting( 'button_typography_custom_weight' ),
			'required' => array(
				[ 'button_typography_inherit', '=', '1' ],
			),
		),
		array(
			'id'                => 'button_typography_custom',
			'type'              => 'typography',
			'title'             => __( 'Other', 'minimog' ),
			'google'            => false,
			'font_family_clear' => false,
			'default'           => Minimog_Redux::get_default_setting( 'button_typography_custom' ),
			'font-family'       => false,
			'font-weight'       => false,
			'font-variant'      => false,
			'font-style'        => false,
			'subsets'           => false,
			'preview'           => false,
			'color'             => false,
			'text-align'        => false,
			'line-height'       => false,
			'letter-spacing'    => true,
			'text-transform'    => true,
			'required'          => array(
				[ 'button_typography_inherit', '=', '1' ],
			),
		),

		/**
		 * Form Typography
		 */

		array(
			'id'       => 'section_form_typography',
			'type'     => 'tm_heading',
			'collapse' => 'show',
			'title'    => __( 'Form Typography', 'minimog' ),
			'subtitle' => __( 'These settings control the typography for form inputs.', 'minimog' ),
			'indent'   => true,
		),
		array(
			'id'          => 'form_typography_inherit',
			'type'        => 'button_set',
			'title'       => __( 'Font Family', 'minimog' ),
			'description' => __( 'Select inherit to use same font family as Body.', 'minimog' ),
			'options'     => [
				'0' => __( 'Custom', 'minimog' ),
				'1' => __( 'Inherit', 'minimog' ),
			],
			'default'     => '1',
			'class'       => 'row-no-border',
		),
		array(
			'id'                => 'form_typography',
			'type'              => 'typography',
			'title'             => __( 'Typography', 'minimog' ),
			'google'            => true,
			'font_family_clear' => false,
			'default'           => Minimog_Redux::get_default_setting( 'form_typography' ),
			'color'             => false,
			'text-align'        => false,
			'letter-spacing'    => false,
			'text-transform'    => false,
			'line-height'       => false,
			'weights'           => Minimog_Redux::get_all_font_variants(),
			'required'          => array(
				[ 'form_typography_inherit', '=', '0' ],
			),
		),
		array(
			'id'       => 'form_typography_custom_weight',
			'type'     => 'select',
			'title'    => __( 'Font Weight', 'minimog' ),
			'class'    => 'row-no-border',
			'options'  => Minimog_Redux::get_all_font_variations(),
			'default'  => Minimog_Redux::get_default_setting( 'form_typography_custom_weight' ),
			'required' => array(
				[ 'form_typography_inherit', '=', '1' ],
			),
		),
		array(
			'id'                => 'form_typography_custom',
			'type'              => 'typography',
			'title'             => __( 'Other', 'minimog' ),
			'google'            => false,
			'font_family_clear' => false,
			'default'           => Minimog_Redux::get_default_setting( 'form_typography_custom' ),
			'font-family'       => false,
			'font-weight'       => false,
			'font-variant'      => false,
			'font-style'        => false,
			'subsets'           => false,
			'preview'           => false,
			'color'             => false,
			'text-align'        => false,
			'letter-spacing'    => false,
			'text-transform'    => false,
			'line-height'       => false,
			'required'          => array(
				[ 'form_typography_inherit', '=', '1' ],
			),
		),
	),
) );