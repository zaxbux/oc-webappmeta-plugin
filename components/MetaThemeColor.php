<?php

namespace Zaxbux\WebAppMeta\Components;

use Cms\Classes\ComponentBase;
use Zaxbux\WebAppMeta\Models\Settings;

class MetaThemeColor extends ComponentBase {
	public function componentDetails() {
		return [
			'name'        => 'zaxbux.webappmeta::lang.component.metathemecolor.name',
			'description' => 'zaxbux.webappmeta::lang.component.metathemecolor.description'
		];
	}

	public function themeColor() {
		return Settings::get('theme_color', null);
	}
}