<?php

Route::get('manifest.json', [
	'as'   => 'webappmeta',
	'uses' => 'Zaxbux\WebAppMeta\Classes\ManifestController@getManifest'
]);

Route::get('browserconfig.xml', [
	'as'   => 'webappmeta',
	'uses' => 'Zaxbux\WebAppMeta\Classes\ManifestController@getMSAppConfig'
]);