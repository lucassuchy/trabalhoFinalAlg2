<?
//Funções que alteram o banco

class Conecta {
    public static function abre(){
        //Abre a conexão
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db   = "mural";
        
        $link = mysqli_connect($host, $user, $pass, $db);
        return $link; 

        }
    public static function executa($sql){
        //Executa o comando, recebendo o link da função anterior
        $link = self::abre();
        //$comand = mysqli_fetch_assoc($sql);
        mysqli_query($link, $sql );
    }    
    }
    




