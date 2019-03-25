<?php namespace Zaxbux\WebAppMeta;

use Validator;
use System\Classes\PluginBase;

class Plugin extends PluginBase {

	public function pluginDetails() {
		return [
			'name'        => 'zaxbux.webappmeta::lang.plugin.name',
			'description' => 'zaxbux.webappmeta::lang.plugin.description',
			'author'      => 'Zachary Schneider',
			'icon'        => 'icon-tags',
			'homepage'    => 'https://www.zacharyschneider.ca/'
		];
	}

	public function registerComponents() {
		return [
			'Zaxbux\WebAppMeta\Components\ManifestLink'   => 'webAppManifest',
			'Zaxbux\WebAppMeta\Components\BrowserConfig'  => 'browserConfig',
			'Zaxbux\WebAppMeta\Components\MetaThemeColor' => 'metaThemeColor',
		];
	}

	public function registerPermissions() {
		return [
			'zaxbux.webappmeta.access_settings' => [
				'tab'   => 'zaxbux.webappmeta::lang.permission.access_settings.tab',
				'label' => 'zaxbux.webappmeta::lang.permission.access_settings.label',
			]
		];
	}

	public function registerSettings() {
		return [
			'config' => [
				'label'       => 'zaxbux.webappmeta::lang.plugin.name',
				'icon'        => 'icon-tags',
				'description' => 'zaxbux.webappmeta::lang.plugin.description',
				'class'       => 'Zaxbux\WebAppMeta\Models\Settings',
				'order'       => '600',
				'permissions' => ['zaxbux.webappmeta.access_settings'],
			]
		];
	}

	public function boot() {
		Validator::extend('json', Zaxbux\WebAppMeta\Rules\Json::class);
	}
}
