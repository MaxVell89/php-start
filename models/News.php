<?php

class News
{

		public static function getNewsList() 
	{
		// LIST
		$host = 'localhost';
		$dbname = 'testblog';
		$user = 'root';
		$password = '';

		$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

		$newsList =[];

		$sql = 'SELECT * FROM articles ORDER BY date DESC LIMIT 10';
		$res = $db->query($sql);

		$result = $res->fetchAll();
		var_dump($result);



	}

	public static function getNewsItemById($id) 
	{
		// Одна новость
	}

}