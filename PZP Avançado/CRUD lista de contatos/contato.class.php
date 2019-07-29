<?php
	class Contato {

		private $pdo;

		public function __construct() {
			$this->pdo = new PDO("mysql:dbname=crudoo;host=127.0.0.1", "root", "");
		}

		public function adicionar($email, $nome = '') {
			echo "CHEGOU";
			if ($this->existeEmail($email) == false) {
				$sql = "INSERT INTO contatos (nome, email) VALUES (:nome, :email)";
				$sql = $this->pdo->prepare($sql);
				$sql->bindValue(':nome', $nome);
				$sql->bindValue(':email', $email);
				$sql->execute();
				echo "FOI";
				return true;
				
			} else {
				return false;
			}
		}

		public function getInfo($id) {
			$sql = "SELECT * FROM contatos WHERE id = :id";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(":id", $id);
			$sql->execute();

			if ($sql->rowCount() > 0) {
				return $sql->fetch();
			} else {
				return array();
			}
		}

		public function getNome($email) {
			$sql = "SELECT * FROM contatos WHERE email = :email";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(":email", $email);
			$sql->execute();

			if ($sql->rowCount() > 0) {
				return $sql->fetch();
			} else {
				return '';
			}
		}
		public function getAll() {
			$sql = "SELECT * FROM contatos";
			$sql = $this->pdo->query($sql);

			if ($sql->rowCount() > 0) {
				return $sql->fetchAll();
			} else {
				return array();
			}
		}

		public function editar($nome, $email) {
			if ($this->existeEmail($email)) {
				$sql = "UPDATE contatos SET nome = :nome WHERE email = :email";
				$sql = $this->pdo->prepare($sql);
				$sql->bindValue(':nome', $nome);
				$sql->bindValue(':email', $email);
				$sql->execute();
				return true;
			} else {
				return false;
			}
		}

		public function excluir($email) {
			if ($this->existeEmail($email)) {
				$sql = "DELETE FROM contatos WHERE email = :email";
				$sql = $this->pdo->prepare($sql);
				$sql->bindValue(':email', $email);
				$sql->execute();
				return true;
			} else {
				return false;
			}
		}

		private function existeEmail($email) {
			$sql = "SELECT * FROM contatos WHERE email = :email";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(':email', $email);
			$sql->execute();

			if ($sql->rowCount() > 0) {
				return true;
			} else {
				return false;
			}
		}

	}

