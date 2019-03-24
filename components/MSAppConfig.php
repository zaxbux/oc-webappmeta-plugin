<?php

namespace Zaxbux\WebAppMeta\Components;

use Cms\Classes\ComponentBase;
use Zaxbux\WebAppMeta\Models\Settings;

class MSAppConfig extends ComponentBase {
	public function componentDetails() {
		return [
			'name'        => 'Microsoft App Config XML',
			'description' => 'Output a link to the MS Edge browserconfig.xml'
		];
	}

	public function appName() {
		return Settings::get('name', null);
	}

	public function themeColor() {
		return Settings::get('theme_color', null);
	}
}