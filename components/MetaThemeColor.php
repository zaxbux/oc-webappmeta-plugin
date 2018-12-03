<?php

namespace Zaxbux\WebAppMeta\Components;

use Cms\Classes\ComponentBase;
use Zaxbux\WebAppMeta\Models\Settings;

class MetaThemeColor extends ComponentBase {
	public function componentDetails() {
		return [
			'name'        => 'Meta Tag Theme Color',
			'description' => 'Outputs the meta tag for the configured theme color.'
		];
	}

	public function themeColor() {
		return Settings::get('theme_color', null);
	}
}