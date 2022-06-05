<?php
namespace Sts\Controllers;
if(!defined('URL')) {
    header("Location: /");
    exit();
}
/**
 * Classe controladora da página Contato.
 * @author Pierri Alexander Vidmar
 * @since 03/06/2022
 */
class Contato {
    public function index() {
        echo '<br>Página Contato<br>';
    }
}
