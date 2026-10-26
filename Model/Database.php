<?php
class Database{
    private $host = "localhost";
    private $port = "3306";
    private $dbname = "mvc_menu";
    private $username = "root";
    private $password = "";

    public PDO $pdo;

    public function __construct(){
        $options = [              
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,              
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
        $dsn = "mysql:host=$this->host;port=$this->port;dbname=$this->dbname;charset=utf8mb4";
        try{
            $this->pdo = new PDO($dsn,$this->username, $this->password, $options);
            // echo "Kết nối CSDL thành công";
        }catch(PDOException $e){
            echo "Kết nối CSDL không thành công ".$e->getMessage();
        }
    }
}

?>