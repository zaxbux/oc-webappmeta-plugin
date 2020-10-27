<?php return [
    'plugin' => [
        'name' => 'Web App Metadata',
        'description' => 'Add web application metadata to your site.',
		],
		'settings' => [
			'label' => 'Web App Metadata',
			'description' => 'Configure the site\'s web application metadata.',
			'field' => [
				'app_name' => [
					'label' => 'App Name',
					'comment' => 'The name (max 45 characters) is the primary identifier of the app.'
				],
				'theme_color' => [
					'label' => 'Theme Color',
					'comment' => ''
				],
				'short_name' => [
					'label' => 'Short Name',
					'comment' => 'Short version (max 12 characters) of the app\'s name'
				],
				'author' => [
					'label' => 'Author',
					'comment' => 'The author of the app'
				],
				'description' => [
					'label' => 'Description',
					'comment' => 'A plain text string (max 132 characters) that describes the extension.'
				],
				'lang' => [
					'label' => 'Language',
					'comment' => 'The language of the manifest attributes'
				],
				'version' => [
					'label' => 'Version',
					'comment' => ''
				],
				'version_name' => [
					'label' => 'Version Name',
					'comment' => ''
				],
				'display_mode' => [
					'label' => 'The preferred display mode for the web application.',
					'comment' => '<a href="https://developer.mozilla.org/en-US/docs/Web/Manifest#display" target="_blank" rel="noopener noreferrer">More details.</a>',
					'options' => [
						'browser' => 'Browser (Default)',
						'minimal-ui' => 'Minimal UI',
						'standalone' => 'Standalone',
						'fullscreen' => 'Fullscreen',
					]
				],
				'start_url' => [
					'label' => 'Start URL',
					'comment' => 'The start_url tells the browser where your application should start when it is launched, and prevents the app from starting on whatever page the user was on when they added your app to their home screen.'
				],
				'background_color' => [
					'label' => 'Background Color',
					'comment' => 'The expected background color for the web application. Often loads before the stylesheet, ensuring a smooth transition.'
				],
				'app_icon_192' => [
					'label' => '192x192 App Icon'
				],
				'app_icon_512' => [
					'label' => '512x512 App Icon'
				],
				'custom_manifest' => [
					'label' => 'Custom Manifest JSON',
					'comment' => 'This JSON will be appended to the web app manifest and override any exsiting properties.'
				],
			],
			'tab' => [
				'manifest_json' => 'manifest.json',
			],
			'section' => [
				'app_icons' => [
					'label' => 'App Icons',
					'comment' => ''
				],
				'advanced' => [
					'label' => 'Advanced',
					'comment' => ''
				],
			],
		],
    'permission' => [
        'access_settings' => [
            'tab' => 'Web App Meta Plugin',
            'label' => 'Settings access',
        ],
		],
		'component' => [
			'manifestlink' => [
				'name' => 'Web App Manifest',
				'description' => 'Output a link to the web app manifest.json',
			],
			'metathemecolor' => [
				'name' => 'Meta Tag Theme Color',
				'description' => 'Outputs the meta tag for the configured theme color',
			],
		],
		'rule' => [
			'json' => 'The :attribute must be a valid JSON string.'
		],
];