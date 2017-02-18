<?php

class DB 
{
	public static function getConnection() {
		$params = include(ROOT . '/config/db.php');

		$dsn = "mysql:dbname={$params['dbname']};host={$params['host']}";
		$opt = [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
		];
		return new PDO($dsn, $params['user'], $params['password'], $opt);
	}
	
}