<?php

	// Classe de controle do model Pessoa
	class Pessoas extends Controller {

		// Chama o método de listarTodasPessoas e as páginas html
		public function index() {
			// lista todas as pessoas
			$pessoas = $this->pessoa->listarTodasPessoas();

			// Carrega as páginas de visualização de listar pessoa
			require APP . 'views/_templates/header.php';
			require APP . 'views/pessoas/index.php';
			require APP . 'views/_templates/footer.php';
		}

		// Carrega a página de visualização de nova pessoa
		public function novaPessoa() {
			// carrega as páginas de visualização de nova pessoa
			require APP . 'views/_templates/header.php';
			require APP . 'views/pessoas/novo.php';
			require APP . 'views/_templates/footer.php';
		}

		// Chama o método de adicionarPessoa e as páginas html
		public function adicionarPessoa() {
			// Se submeter o formulário adiciona pessoa por $_POST
			if (isset($_POST["submit_adicionar_pessoa"])) {
				$this->pessoa->adicionarPessoa($_POST["nome"], $_POST["email"]);
			}

			// Redireciona para index de pessoa após salvar formulário 
			header('location: ' . URL_WITH_INDEX_FILE . 'pessoas/index');
		}

		// Chama o método que ecluirPessoa
		public function excluirPessoa($pessoa_id) {
			// Se exitir o id a pessoa é excluída 
			if(isset($pessoa_id)) {
				$this->pessoa->excluirPessoa($pessoa_id);
			}

			// Redireciona para index de pessoa após excluir pessoa 
			header('location: ' . URL_WITH_INDEX_FILE . 'pessoas/index');
		}

	}