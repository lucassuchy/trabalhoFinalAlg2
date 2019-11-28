<?php
// arquivo utilizado para conectar com o banco Mural.
class Conecta {
    public static function executa( $sql ){
        // arquivo utilizado para conectar com o banco Mural.
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "mural";

        $link = mysqli_connect($host, $user, $pass, $db);
        mysqli_query($link, $sql);

    }
}
/*    private static function abre(){
        //Abre a conexão com o banco
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "mural";
        
        $link = mysqli_connect($host, $user, $pass, $db) or die("Erro conectar");
    }

    private static function fecha( $link){
        //Fecha a conexão com o banco
        mysqli_close( $link);
    }

    private static function executa( $sql ){
        //Chama a função que abre a conexão com o banco
        $link = self::abre();
        //if ($link ){
            //Aqui o if verifica se a conexão ta funcionando, acredito eu
            mysqli_query($link, $sql);
       //     self:: fechar($link);
        //}else{
           // echo "<script> alert('".mysqli_connect_error()."');</script>";
        //   echo "aaaa";
        }
    
    private static function consulta( $sql) {
        $link = self::abre();
        if(link){
            $resultado = mysqli_query($link, $sql);
            self::fecha($link);
            return $resultado;
        }else{
            return NULL;
        }
    }
}

*/
?>
