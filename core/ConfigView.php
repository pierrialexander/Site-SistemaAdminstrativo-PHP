<?php
namespace Core;

/**
 * Classe do Core da View.
 * @author pierr
 */
class ConfigView {
    
    private $Nome;
    private $Dados;
    
    public function __construct($Nome, array $Dados = null) {
        $this->Nome = (string) $Nome;
        $this->Dados = $Dados;
    }
    
    /**
     * Método responsável por buscar a página.
     */
    public function renderizar() {
        if(file_exists('app/' . $this->Nome . '.php')){
            include 'app/sts/Views/include/header.php';
            include 'app/' . $this->Nome . '.php';
            include 'app/sts/Views/include/footer.php';
        }
        else {
            echo 'Erro ao caregar a página ' . $this->Nome;
        }
        
    }
}
