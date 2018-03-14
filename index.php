<?php
/**
 * Created by PhpStorm.
 * User: João
 * Date: 14/03/2018
 * Time: 12:22
 */
require_once "config.php";
$sql = new Sql();

$usuarios = $sql->select("SELECT *  FROM nferesumo");

echo json_encode( $usuarios );