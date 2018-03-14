<?php
/**
 * Created by PhpStorm.
 * User: João
 * Date: 14/03/2018
 * Time: 12:19
 */
spl_autoload_register( function( $class_name) {
    $filename = 'class'.DIRECTORY_SEPARATOR.$class_name.".php";
    if ( file_exists($filename)) {
        require_once($filename);
    }
});