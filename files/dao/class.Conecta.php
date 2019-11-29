<?php
    class Conexao extends PDO
    {
        private static $instancia;
        private static $dbType   = 'mysql';
        private static $dbServer = 'localhost';
        private static $dbName   = 'mural';
        private static $dbUser   = 'root';
        private static $dbPw     = '';
    
        public function __construct()
        {
            try
            {
                $options = [
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET utf8",
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                ];
    
                parent::__construct(
                    self::$dbType . ':host=' . self::$dbServer . ';dbname=' . self::$dbName,
                    self::$dbUser,
                    self::$dbPw,
                    $options
                );
            }
            catch(PDOException $Exception)
            {
                echo $Exception->getMessage();
                exit;
            }
        }
    
        public static function getInstance()
        {
            // Se o a instancia nao existe eu faço uma
            if(!isset( self::$instancia ))
            {
                try
                {
                    self::$instancia = new Conexao();
                }
                catch ( Exception $e )
                {
                    // mail($email, "PDOException em $sistema", $e->getMessage());
                    // die("Erro ao conectar: " . $e->getMessage());
                    // todo: gerenciar esse erro de conexao do banco
                    // header("Location: https://www.fmp.edu.br/erros/database.html");
                    exit ();
                }
            }
            // Se já existe instancia na memória eu retorno ela
            return self::$instancia;
        }
    }
    