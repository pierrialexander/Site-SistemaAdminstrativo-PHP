<?php
namespace Sts\Models\helper;
use PDO;
if(!defined('URL')) {
    header("Location: /");
    exit();
}
/**
 * Classe de conexão com o Banco de Dados
 * @author Pierri Alexander Vidmar
 * @since 05/06/2022
 */
class StsConn {
    public static $host = HOST;
    public static $user = USER;
    public static $pass = PASS;
    public static $dbname = DBNAME;
    
    // Quando não tiver conexão, inicia como nulo.
    private static $connect = null;
    
    /**
     * Método responsável por efetuar a conexão com o banco de dados.
     * @return bool;
     */
    private static function conectar() {
        try {
            if(self::$connect == null) {
               self::$connect = new PDO('mysql:host=' . self::$host . ';dbname=' . self::$dbname, self::$user, self::$pass); 
            }                        
        } catch (Exception $ex) {
            echo 'Mensagem: ' . $ex->getMessage;
            die;
        }
        return self::$connect;
    }
    
    /**
     * Método público que retorna o resultado da conexão.
     */
    public function getConn() {
        return self::conectar();
    }
    
}
