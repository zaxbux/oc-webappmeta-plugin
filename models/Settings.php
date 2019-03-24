<?php

namespace Zaxbux\WebAppMeta\Models;

use October\Rain\Database\Model;

class Settings extends Model {

	use \October\Rain\Database\Traits\Validation;

	public $implement = ['System.Behaviors.SettingsModel'];
	public $settingsCode = 'zaxbux_webappmeta_settings';
	public $settingsFields = 'fields.yaml';
	public $rules = [
		'custom_manifest' => 'json'
	];

	/**
	 * Initialize default values
	 */
	public function initSettingsData() {
		$this->name        = 'My Application';
		$this->short_name  = 'My App';
		$this->description = 'This is my app!';
		$this->author      = '';
	}
}