<?php
namespace Sts\Models;
if(!defined('URL')) {
    header("Location: /");
    exit();
}
/**
 * Classe de Model para página Home;
 * @author Pierri Alexander Vidmar;
 * @since 04/06/2022;
 */
class StsHome {
    public function index() {
        echo "Listar dados - MODEL HOME<br>";
        $oConexao = new \Sts\Models\helper\StsConn();
        $oConexao->getConn();
    }
}
