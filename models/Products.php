<?php 
require_once ROOT . '/components/DB.php';

class Products
{
	const SHOW_BY_DEFAULT = 9;

	public static function getProductsList($count = self::SHOW_BY_DEFAULT)
	{
		$count = intval($count);

		$db = DB::getConnection();

		$sql = 'SELECT id, name, price, image, is_new FROM product WHERE status = "1" ORDER BY id DESC LIMIT ' . $count;
		$res = $db->query($sql);
		return $res->fetchAll();
	}

	public static function getProductsByCategory($categoryId)
	{
		$db = DB::getConnection();

		$sql = 'SELECT id, name, price, image, is_new FROM product WHERE status = "1" AND category_id = "' . $categoryId . '" ORDER BY id DESC';
		$res = $db->query($sql);
		return $res->fetchAll();
	}

	public static function getProductItem($id)
	{
		$db = DB::getConnection();
		$sql = 'SELECT * FROM product WHERE id = ' . $id;
		$res = $db->query($sql);
		return $res->fetch();
	}

}