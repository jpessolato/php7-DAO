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

$usuario = new Usuario();
$usuario->loadById(1000);
echo $usuario;