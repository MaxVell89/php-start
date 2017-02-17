<?php 
include_once ROOT . '/models/News.php';

class NewsController 
{

	public function actionIndex() 
	{
		$newsList = News::getNewsList();
		include_once ROOT . '/views/index.php';
		return true;
	}

	public function actionView($id)
	{
		if (isset($id)) {
			$art = News::getNewsItemById($id);
		}
		include_once ROOT . '/views/page.php';
		return true;
	}

}