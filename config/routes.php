<?php

return array(
	'news/([0-9]+)' => 'news/view/$1/',
	'news' => 'news/index',
	'products' => 'product/list',
	'catalog/category/([0-9]+)' => 'catalog/category/$1',
	'catalog' => 'catalog/index',
	'product/([0-9]+)' => 'product/view/$1',
	'' => 'site/index'
);