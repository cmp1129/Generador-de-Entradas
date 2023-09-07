<?php
spl_autoload_register ( function ($class) {
	$folders = array (
			'core',
			'controllers',
			'model'
	);
	foreach ( $folders as $folder ) {
		$path = __DIR__ . "/../$folder/$class.class.php";
		if (file_exists ( $path )) {
			require_once ($path);
			return;
		}
		$path = __DIR__ . "/../$folder/$class.php";
		if (file_exists ( $path )) {
			require_once ($path);
			return;
		}
	}
} );