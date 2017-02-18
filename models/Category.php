<?php
require_once ROOT . '/components/DB.php';

class Category 
{
	public static function getCategoryList() 
	{
		$db = DB::getConnection();

		$sql = 'SELECT id, name FROM category ORDER BY sort_order ASC';

		$res = $db->query($sql);

		return $res->fetchAll();
	}
	
}