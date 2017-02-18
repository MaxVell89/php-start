<?php
require_once ROOT . '/models/Category.php';
require_once ROOT . '/models/Products.php';

class SiteController
{
	public function actionIndex() 
	{
		$categories = Category::getCategoryList();
		$products = Products::getProductsList();
		require_once ROOT . '/views/index.php';
		return true;
	}
}