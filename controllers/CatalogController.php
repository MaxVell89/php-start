<?php
require_once ROOT . '/models/Category.php';
require_once ROOT . '/models/Products.php';

class CatalogController
{
	public function actionIndex() 
	{
		$categories = Category::getCategoryList();
		$products = Products::getProductsList();
		require_once ROOT . '/views/catalog/index.php';
		return true;
	}

	public function actionCategory($categoryId)
	{
		$categories = Category::getCategoryList();
		$categoryProducts = Products::getProductsByCategory($categoryId);
		require_once ROOT . '/views/catalog/category.php';
		return true;
	}
}