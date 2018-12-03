<?php namespace Zaxbux\WebAppMeta;

use System\Classes\PluginBase;

class Plugin extends PluginBase {

	public function pluginDetails() {
		return [
			'name'        => 'zaxbux.webappmeta::lang.plugin.name',
			'description' => 'zaxbux.webappmeta::lang.plugin.description',
			'author:'     => 'Zachary Schneider',
			'icon'        => 'icon-tags',
			'homepage'    => 'https://www.zacharyschneider.ca/'
		];
	}

	public function registerComponents() {
		return [
			'Zaxbux\WebAppMeta\Components\ManifestLink'   => 'webAppManifest',
			'Zaxbux\WebAppMeta\Components\MSAppConfig'    => 'MSAppConfig',
			'Zaxbux\WebAppMeta\Components\MetaThemeColor' => 'metaThemeColor',
		];
	}

	public function registerPermissions() {
		return [
			'zaxbux.webappmeta.access_settings' => [
				'tab'   => 'Web App Meta Plugin',
				'label' => 'Settings access',
			]
		];
	}

	public function registerSettings() {
		return [
			'config' => [
				'label'       => 'Web App Metadata',
				'icon'        => 'icon-tags',
				'description' => 'Configure the site\'s web application metadata.',
				'class'       => 'Zaxbux\WebAppMeta\Models\Settings',
				'order'       => '600',
				'permissions' => ['zaxbux.webappmeta.access_settings'],
			]
		];
	}

	public function boot() {

	}
}
