<?php

namespace Zaxbux\WebAppMeta\Components;

use Cms\Classes\ComponentBase;
use Zaxbux\WebAppMeta\Models\Settings;

class ManifestLink extends ComponentBase {
	public function componentDetails() {
		return [
			'name'        => 'zaxbux.webappmeta::lang.component.manifestlink.name',
			'description' => 'zaxbux.webappmeta::lang.component.manifestlink.description'
		];
	}
}