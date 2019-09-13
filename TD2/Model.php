<?php


class Model
{
    public static $pdo;

    public static function  Init(){
        require_once 'Conf.php';
        new PDO(mysql( Conf::getHostname(),Conf::getDatabase(), Conf::getLogin(), Conf::getPassword()));
        self::$pdo;
    }

}