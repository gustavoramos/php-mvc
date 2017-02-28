<?php

/**
 * PHP MVC
 *
 * @package php-mvc
 * @author Gustavo Ramos
 * @link http://www.gustavoramos.blogspot.com.br
 * @link https://github.com/gustavoramos/php-mvc/
 * @license http://opensource.org/licenses/MIT MIT License
 */

// Define uma constante que contém o caminho da pasta do projeto, como "/var/www/".
// DIRECTORY_SEPARATOR adiciona um slash ao final do caminho
define('ROOT', __DIR__ . DIRECTORY_SEPARATOR);

// Define uma constante que contenha a pasta "app" do projeto, como "/var/www/app".
define('APP', ROOT . 'app' . DIRECTORY_SEPARATOR);

// Este é o carregador automático (totalmente opcional) para Composer-dependencies (para carregar ferramentas em seu projeto).
// Se você não tem idéia do que isso significa: Não se preocupe, você não precisa dele, simplesmente deixe como é.
if (file_exists(ROOT . 'vendor/autoload.php')) {
    require ROOT . 'vendor/autoload.php';
}

// Carrega a configuração da aplicação (relatório de erro etc.)
require APP . '/config/config.php';

// PARA DESENVOLVIMENTO: isso carrega o PDO-debug, uma função simples que mostra a consulta SQL (ao usar o PDO).
// Se você quiser carregar pdoDebug via Composer, então dê uma olhada aqui: https://github.com/panique/pdo-debug
require APP . '/libs/pdo-debug.php';

// Carrega as classes
require APP . '/core/application.php';
require APP . '/core/controller.php';

// Inicia a aplicação
$app = new Application();
