<?php
// arquivo utilizado para conectar com o banco Mural.
class Conecta {
    public static function abre(){
        //Abre a conexão com o banco
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db   = "mural";
        
        $link = mysqli_connect($host, $user, $pass, $db);
        return $link; 
       /* 
        if ( $link )
            return $link;
        else 
            return NULL;
        */
        }

    public static function executa( $sql ){
        $link = self::abre();
        // O problema da conexão ta aqui, acho que ele não ta funcionando na hora de receber
        // Se eu crio um metodo unico de conexão funciona
        // Naõ sei pq
        $comand = mysqli_fetch_assoc($sql);
        mysqli_query($link, $comand );

    }
    
}
?>
