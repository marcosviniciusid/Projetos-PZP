<?php


class Post {
	private $titulo;
	private $data;
	private $corpo;
	private $comentarios;

	public function getTitulo() {
		return $this->titulo;
	}
	public function setTitulo($t) {
		if(is_string($t)) {
			$this->titulo = $t;
		}
	}
}

$post = new Post();
$post->setTitulo("Titulo valido");

echo "Titulo: ".$post->getTitulo();


?>