<?php
namespace Sts\Controllers;
if(!defined('URL')) {
    header("Location: /");
    exit();
}
/**
 * Classe controladora da página Blog.
 * @author Pierri Alexander Vidmar
 * @since 03/06/2022
 */
class Blog {
    public function index() {
        echo '<br>Página Blog<br>';
    }
}
