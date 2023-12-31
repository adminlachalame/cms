<?php
Redux::set_section( Minimog_Redux::OPTION_NAME, array(
	'title'      => __( 'API Integrations', 'minimog' ),
	'id'         => 'api-integrations',
	'subsection' => true,
	'fields'     => array(
		array(
			'id'          => 'google_api_key',
			'type'        => 'text',
			'title'       => __( 'Google Map Api Key', 'minimog' ),
			'description' => sprintf( wp_kses( __( 'Follow <a href="%s" target="_blank">this link</a> and click <strong>GET A KEY</strong> button.', 'minimog' ), array(
				'a'      => array(
					'href'   => array(),
					'target' => array(),
				),
				'strong' => array(),
			) ), esc_url( 'https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key' ) ),
		),

		array(
			'id'          => 'instagram_access_token',
			'type'        => 'text',
			'title'       => __( 'Instagram Access Token', 'minimog' ),
			'description' => __( 'This Access Token is required to display your Instagram photos on this website.', 'minimog' ) . ' <a href="' . Minimog_Instagram::ACCESS_TOKEN_URL . '" target="_blank">' . __( 'Get my Access Token', 'minimog' ) . '</a>',
		),
	),
) );
