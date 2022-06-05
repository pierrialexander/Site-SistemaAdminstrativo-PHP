<?php
namespace Sts\Controllers;
if(!defined('URL')) {
    header("Location: /");
    exit();
}
/**
 * Classe CONTROLADORA da página HOME.
 * @author Pierri Alexander Vidmar
 * @since 03/06/2022
 */
class Home {
   public function index() {
       // INSTANCIA DO MODEL DA VIEW
       $home = new \Sts\Models\StsHome();
       $home->index();
       
       // INSTANCIA DA VIEW HOME - instancia um objeto do core da view, 
       //                          que busca o arquivo da view responsável.
       $carregarView = new \Core\ConfigView("sts/Views/home/home");
       $carregarView->renderizar();
    }
}
