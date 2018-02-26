<?php

spl_autoload_register(function($class) {
	$paths = ['controllers', 'models'];
	foreach ($paths as $path) {
		if (file_exists("{$path}/{$class}.php")) {
			include("{$path}/{$class}.php");
			return true;
		}
	}
});
