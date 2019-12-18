<?php
class homeController extends controller {
	
	public function index() {

		$dados = array (
			'quantidade' => 5
		);
		
		
		$this->loadTemplate('home', $dados);

	}

	

}