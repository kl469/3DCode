<?php
namespace core\db;

use PDO;
use PDOException;

class Db
{
    private static $pdo = null;

    public static function pdo()
    {
        if (self::$pdo !== null) {
            return self::$pdo;
        }

        try {
            self::$pdo = new PDO('sqlite:' . dirname(__FILE__) . DB_NAME);
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return self::$pdo;
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }
}