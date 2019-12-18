<?php
Class Core {

	public function run() {

		/*
		1 = controller
		2 = action 
		3,4,5 = parâmetros */

		$url = '/';
		if (isset($_GET['url'])) {
			$url .= $_GET['url'];
		}

		$params = array();

		if (!empty($url) && $url != '/') {
			$url = explode('/', $url);
			array_shift($url);
			// removendo primeira chave do araay.

			$currentController = $url[0].'Controller';
			array_shift($url);

			if (isset($url[0]) && !empty($url[0])) {
				$currentAction = $url[0];
			} else {
				$currentAction = 'index';
			}

			if (count($url) > 0) {
				$params = $url;
			}

		} else {
			$currentController = 'homeController';
			$currentAction = 'index';
		}

		$c = new $currentController();
		// função para passar parametros sem conhecer o nome da classe

		call_user_func_array(array($c, $currentAction), $params);

	}

}