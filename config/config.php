<?php

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Debug
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

	//define ('__DEBUG', false);
	//define ('__DEBUG', true);

	if('__DEBUG') {
		error_reporting(E_ALL);
		ini_set("display_errors", E_ALL);
	} else {
		error_reporting(0);
		ini_set("display_errors", 0);
	}

// IL MANQUE LA DATABASE
?>
