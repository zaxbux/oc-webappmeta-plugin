<?php

Route::get('manifest.webmanifest', [
	'as'   => 'webappmeta',
	'uses' => 'Zaxbux\WebAppMeta\Classes\ManifestController@getManifest'
]);
