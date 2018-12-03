<?php

namespace Zaxbux\WebAppMeta\Classes;

use Response;
use Illuminate\View\View;
use Cms\Classes\CmsController;
use System\Classes\MediaLibrary;
use Zaxbux\WebAppMeta\Models\Settings;

class ManifestController extends CmsController {
	public function getManifest() {
		$manifestJson = [
			'manifest_version' => 2,
			'display_mode'     => 'browser'
		];

		// Basic fields
		$manifestFields = [
			'name',
			'short_name',
			'description',
			'author',
			'display_mode',
			'theme_color',
			'background_color',
			'start_url',
			'version',
			'version_name',
			'lang'
		];

		foreach ($manifestFields as $name) {
			$value = Settings::get($name, null);
			if (!empty($value)) {
				$manifestJson[$name] = $value;
			}
		}

		// Icons
		$manifestIcons = [];
		$iconSizes     = [
			'192',
			'512'
		];

		foreach ($iconSizes as $size) {
			$icon = Settings::get('app_icon_' . $size, null);

			if (!empty($icon)) {
				$manifestIcons[] = [
					'src'   => MediaLibrary::url($icon),
					'sizes' => sprintf('%sx%s', $size, $size),
					'type'  => 'image/png'
				];
			}
		}

		if (count($manifestIcons) > 0) {
			$manifestJson['icons'] = $manifestIcons;
		}

		// Custom json
		$customManifest = Settings::get('custom_manifest', null);
		if (!empty($customManifest)) {
			$manifestJson = array_merge($manifestJson, json_decode($customManifest, true));
		}

		return Response::json($manifestJson)
			->header('Content-Type', 'application/manifest+json');
	}

	public function getMSAppConfig() {
		$xmlDoc = new \DOMDocument('1.0', 'utf-8');

		$bconf = $xmlDoc->appendChild($xmlDoc->createElement('browserconfig'));
		$msapp = $bconf->appendChild($xmlDoc->createElement('msapplication'));
		$tile  = $msapp->appendChild($xmlDoc->createElement('tile'));

		$tileColor = Settings::get('theme_color', null);
		if (!empty($tileColor)) {
			$tile->appendChild($xmlDoc->createElement('TileColor', $tileColor));
		}

		$availableTileSizes = [
			'square70x70logo',
			'square150x150logo',
			'wide310x150logo',
			'square310x310logo'
		];

		foreach ($availableTileSizes as $tileElementName) {
			$tileMedia = Settings::get('msapp_' . $tileElementName, null);

			if (!empty($tileMedia)) {
				$tileElement = $xmlDoc->createElement($tileElementName);
				$tileElement->setAttribute('src', MediaLibrary::url($tileMedia));
				$tile->appendChild($tileElement);
			}
		}

		return Response::make($xmlDoc->saveXML())
			->header('Content-Type', 'text/html');
	}
}
