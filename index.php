<?php
/**
 * Created by PhpStorm.
 * User: João
 * Date: 14/03/2018
 * Time: 12:22
 */
require_once "config.php";
ini_set('display_errors', 'On');
error_reporting(E_ERROR);
/*
$sql = new Sql();

$usuarios = $sql->select("SELECT *  FROM phpgen_users");

echo json_encode( $usuarios );

*/
/**** carrega 1 usuário  **
$usuario = new Usuario();
$usuario->loadById(1000);
echo $usuario;*/

/*** carrega uma lista de usuarios  ***
$lista = Usuario::getList();
echo json_encode( $lista );*/
echo '<br>';
/**  busca usuario pelo login
$search = Usuario::search('elite');
echo json_encode( $search );
 * */

$usuario = new Usuario();
$usuario->login("cjpnet",'tecn0l0gia');
echo $usuario;