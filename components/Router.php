<?php

class Router 
{

	private $routes;

	public function __construct() 
	{

		$routesPath = ROOT . '/config/routes.php';
		$this->routes = include($routesPath);

	}

	private function getURI()
	{
		if(!empty($_SERVER['REQUEST_URI'])) {
			return trim($_SERVER['REQUEST_URI'], '/');
		}
	}

	public function run()
	{
		
		// Получить строку запроса
		$uri = $this->getURI();

		// Проверить наличие запроса в routes.php
		foreach ($this->routes as $uriPattern => $path) {

			// Если есть совпадение определить какой контроллер будет обрабатывать запрос
			if (preg_match('~' . $uriPattern . '~', $uri)) {

				$internalRoute = preg_replace("~$uriPattern~", $path, $uri);

				$segments = explode('/', $internalRoute);

				$controllerName = array_shift($segments) . 'Controller';
				$controllerName = ucfirst($controllerName);
				
				$actionName = 'action' . ucfirst(array_shift($segments));
				
				$parametrs = $segments;

					// Подключить файл класса контроллера
				$controllerFile = ROOT . '/controllers/' . $controllerName . '.php';
				
				if(file_exists($controllerFile)) {
					include_once($controllerFile);
				}

					// Создать объект и вызвать метод
				$ctrlObj = new $controllerName;
				$res = call_user_func_array(array($ctrlObj, $actionName), $parametrs);
				
				if ($res != null) {
					break;
				}
			}
		}

	}

}