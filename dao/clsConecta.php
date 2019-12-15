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

        if ( $link ){
            return $link;
        }else {
            return NULL;
        }

    }

    public function executa( $sql ){
        $link = self::abre();
        mysqli_query($link, $sql );
        self::fecha($link);
    }
    
    public function fecha($link){
        //fecha a conexão
        mysqli_close( $link );
    }

    public static function consulta( $sql ){
        $link = self::abre();
        if( $link ){
            $result = mysqli_query($link, $sql);
            self::fecha ($link );
            return $result;
        } else {
            return NULL;
        }
    }

}
?>
