<?php 
require_once ROOT . '/models/Products.php';
require_once ROOT . '/models/Category.php';

class ProductController 
{
	public function actionList() 
	{
		$categories = Category::getCategoryList();
		$products = Products::getProductsList();
		include ROOT . '/views/index.php';
		return true;
	}

	public function actionView($id)
	{
		$categories = Category::getCategoryList();
		$product = Products::getProductItem($id);
		require_once ROOT . '/views/product-details.php';
		return true;
	} 

}