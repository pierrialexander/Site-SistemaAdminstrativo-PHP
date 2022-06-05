<?php
namespace Sts\Controllers;
if(!defined('URL')) {
    header("Location: /");
    exit();
}
/**
 * Classe controladora da página Sobre Empresa.
 * @author Pierri Alexander Vidmar
 * @since 03/06/2022
 */
class SobreEmpresa {
    public function index() {
        echo '<br>Página Sobre Empresa<br>';
    }
}
