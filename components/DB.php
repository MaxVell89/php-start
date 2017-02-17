<?php

class DB 
{

	public static function getConnection() {
		$params = include(ROOT . '/components/config.php');

		$dsn = "mysql:dbname={$params['dbname']};host={$params['host']}";
		return new PDO($dsn, $params['user'], $params['password']);
	}
	
}