<?php

namespace Zaxbux\WebAppMeta\Components;

use Cms\Classes\ComponentBase;
use Zaxbux\WebAppMeta\Models\Settings;

class MSAppConfig extends ComponentBase {
	public function componentDetails() {
		return [
			'name'        => 'zaxbux.webappmeta::lang.component.msappconfig.name',
			'description' => 'zaxbux.webappmeta::lang.component.msappconfig.description'
		];
	}

	public function appName() {
		return Settings::get('name', null);
	}

	public function themeColor() {
		return Settings::get('theme_color', null);
	}
}