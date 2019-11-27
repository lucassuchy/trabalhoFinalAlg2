<?php
// arquivo utilizado para conectar com o banco Mural.

class Conecta {
    private static function abre(){
        //Abre a conexão com o banco
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "mural";

        $link = mysqli_connect($host, $user, $pass, $db);
    }

    private static function fecha( $link){
        //Fecha a conexão com o banco
        mysqli_close( $link);
    }

    private static function executa( $sql ){
        //Chama a função que abre a conexão com o banco
        $link = self::abrir();
        if ($link ){
            //Aqui o if verifica se a conexão ta funcionando, acredito eu
            mysqli_query($link, $sql);
            self:: fechar($link);
        }
    } 
    
    private static function consulta( $sql) {
        $link = self::abrir();
        if(link){
            $resultado = mysqli_query($link, $sql);
            self::fecha($link);
            return $result;
        }else{
            return NULL;
        }
    }
}
?>