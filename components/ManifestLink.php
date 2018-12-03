<?php

namespace Zaxbux\WebAppMeta\Components;

use Cms\Classes\ComponentBase;
use Zaxbux\WebAppMeta\Models\Settings;

class ManifestLink extends ComponentBase {
	public function componentDetails() {
		return [
			'name'        => 'Web App Manifest',
			'description' => 'Output a link to the web app manifest.'
		];
	}
}