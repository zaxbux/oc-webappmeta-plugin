<?php return [
    'plugin' => [
        'name' => 'Web App Metadata',
        'description' => 'Add web application metadata to your site.',
		],
		'settings' => [
			'label' => 'Web App Metadata',
			'description' => 'Configure the site\'s web application metadata.',
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
			'msappconfig' => [
				'name' => 'Microsoft App Config XML',
				'description' => 'Output a link to the MS Edge browserconfig.xml',
			]
		],
		'rule' => [
			'json' => 'The :attribute must be a valid JSON string.'
		],
];