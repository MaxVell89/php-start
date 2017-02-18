<?php
require_once ROOT . '/components/DB.php';

class News
{

	public static function getNewsList() 
	{
		// LIST

		$db = DB::getConnection();

		$sql = 'SELECT id, date, title, text FROM articles ORDER BY date DESC LIMIT 10';
		$res = $db->query($sql);

		return $res->fetchAll();
	}

	public static function getNewsItemById($id) 
	{
		// Одна новость
		$db = DB::getConnection();

		$sql = 'SELECT id, date, title, text FROM articles WHERE id = ' . $id;
		$res = $db->query($sql);

		$res->setFetchMode(PDO::FETCH_ASSOC);
		return $res->fetch();	
	}

}