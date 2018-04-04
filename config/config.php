<?php

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Debug
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

	define ('__DEBUG', false);
	//define ('__DEBUG', true);

	if('__DEBUG') {
		error_reporting(E_ALL);
		ini_set("display_errors", E_ALL);
	} else {
		error_reporting(0);
		ini_set("display_errors", 0);
	}

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// DB
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

	if($_SERVER['DOCUMENT_ROOT']=='C:/UwAmp/www/') {
		define('_MYSQL_HOST','localhost');
		define('_MYSQL_PORT',8080);
		define('_MYSQL_DBNAME','bdd_covoit2.0');
		define('_MYSQL_USER','root');
		define('_MYSQL_PASSWORD','root');
	} else {

		define('_MYSQL_HOST','localhost');
		define('_MYSQL_PORT',443);
		define('_MYSQL_DBNAME','maxime_servillat');
		define('_MYSQL_USER','maxime.servillat');
		define('_MYSQL_PASSWORD','svmFnqYK');
	}
?>
