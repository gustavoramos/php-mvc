<?php

	// Classe Pessoa 
	class Pessoa {

		// Método contrutor do objeto $db do banco de daods PDO
		function __construct($db) {
			try {
				$this->db = $db;	
			}

			catch (PDOException $e) {
				exit('Não foi possível estabelecer conexão com o banco de dados!')
			}
		}

		// Método que busca todas as pessoas no banco de dados
		public function listarTodasPessoas() {
			$sql = "SELECT * FROM pessoa";
			$query = $this->db->prepare($sql);
			$query->execute();
			return $query->fetchAll();
		}

	}