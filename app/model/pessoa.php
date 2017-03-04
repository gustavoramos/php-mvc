<?php

	// Classe Pessoa 
	class Pessoa {

		// Método contrutor do objeto $db do banco de daods PDO
		function __construct($db) {
			try {
				$this->db = $db;	
			}

			catch (PDOException $e) {
				exit('Não foi possível estabelecer conexão com o banco de dados!');
			}
		}

		// Método que busca todas as pessoas no banco de dados
		public function listarTodasPessoas() {
			$sql = "SELECT * FROM pessoa";
			$query = $this->db->prepare($sql);
			$query->execute();
			return $query->fetchAll();
		}

		// Método que adiciona uma nova pessoa ao banco de dados 
		public function adicionarPessoa($nome, $email) {
			$sql = "INSERT INTO pessoa (nome, email) VALUES (:nome, :email)";
			$query = $this->db->prepare($sql);
			$parameters = array(':nome' => $nome, ':email' => $email);
			$query->execute($parameters);
		}

		// Método que exclui uma pessoa do banco de dados 
		public function excluirPessoa($pessoa_id) {
			$sql = "DELETE FROM pessoa WHERE id = :pessoa_id";
			$query = $this->db->prepare($sql);
			$parameters = array(':pessoa_id' => $pessoa_id);
			$query->execute($parameters);
		}

	}