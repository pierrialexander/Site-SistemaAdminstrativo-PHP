<?php
// Sessões e constantes

session_start();                                // inicia a sessão.
session_regenerate_id(true);                    // gera novamente a hash da sessão.
ob_start();                                     // limpa o buffer de redirecionamento.
define('URL', 'http://localhost/celke/');       // URL do site.
define('URLADM', 'http://localhost/celke/adm'); // URL da área administrativo.
define('CONTROLLER', 'Home');                   // Constante do controller da página principal.
define('METODO', 'index');                      // Constante do método index.

// Credenciais de acesso ao banco de dados

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'celke');
