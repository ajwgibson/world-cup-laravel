<?php

if (!function_exists('parse_postgres_url')) 
{
	function parse_postgres_url($url)
	{
		$config = parse_url($url);
		return [
			'username' => $config['user'],
			'password' => $config['pass'],
			'host'     => $config['host'],
			'port'     => $config['port'],
			'database' => starts_with($config['path'], '/') ? substr($config['path'], 1) : $config['path'],
		];
	}
}

return array(

	/*
	|--------------------------------------------------------------------------
	| Default Database Connection Name
	|--------------------------------------------------------------------------
	|
	| Here you may specify which of the database connections below you wish
	| to use as your default connection for all database work. Of course
	| you may use many connections at once using the Database library.
	|
	*/

	'default' => 'pgsql',

	/*
	|--------------------------------------------------------------------------
	| Database Connections
	|--------------------------------------------------------------------------
	|
	| Here are each of the database connections setup for your application.
	| Of course, examples of configuring each database platform that is
	| supported by Laravel is shown below to make development simple.
	|
	|
	| All database work in Laravel is done through the PHP PDO facilities
	| so make sure you have the driver for your particular database of
	| choice installed on your machine before you begin development.
	|
	*/

	'connections' => array(

		'pgsql' => array_merge(
			array(
				'driver'   => 'pgsql',
				'charset'  => 'utf8',
				'prefix'   => '',
				'schema'   => 'public',
			),
			parse_postgres_url($_SERVER['DATABASE_URL'])
		),

	),
);
