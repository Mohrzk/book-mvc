<?php

namespace M2i\Tpcrudbook;

class Database
{
    private static $instance;

    public static function get()
    {
        if (null === self::$instance) {
            self::$instance = new \PDO('mysql:host=127.0.0.1;dbname=Livres', 'root', 'root');
        }

        return self::$instance;
    }
}
