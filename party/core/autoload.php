<?php

/*
spl_autoload_register(function($class) {
	$file = "core/models/{$class}.php";
	if (file_exists($file)) {
		include($file);
	}
});

spl_autoload_register(function($class) {
	$file = "core/{$class}.php";
	if (file_exists($file)) {
		include($file);
	}
});
*/

// samma som ovan men lite effektivare 
// och mindre upprepning av kod
spl_autoload_register(function($class) {
	$paths = ['core', 'core/models'];
	foreach ($paths as $path) {
		$file = "{$path}/{$class}.php";
		if (file_exists($file)) {
			include($file);
			return true;
		}
	}
});
