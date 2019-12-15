<?php
/**
 * Esses includes eu coloquei aqui para poder testar a conexão pelo xampp rapidinho.
 */

/*
require_once ('dao/clsConecta.php');
require_once ('dao/clsCategoriaDAO.php');
require_once ('model/clsCategoria.php');
*/


// ABSPATH
define('ABSPATH', __DIR__);

// classes
require_once(ABSPATH . '/dao/clsConecta.php');
require_once(ABSPATH . '/dao/clsCategoriaDAO.php');
require_once(ABSPATH . '/controller/salvaCategorias.php');