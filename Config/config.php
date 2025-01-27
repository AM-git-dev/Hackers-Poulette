<?php require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();


define('DB_HOST', $_ENV['DB_HOST']);
define('DB_NAME', $_ENV['DB_NAME']);
define('DB_USER', $_ENV['DB_USER']);
define('DB_PASSWORD', $_ENV['DB_PASSWORD']);


class dbConnection {

    private static $bdd = NULL;

    public static function getBdd() {

        if(self::$bdd == NULL) {
            try {
                self::$bdd = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                echo "ok";
            }
            catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        return self::$bdd;
    }

}
?>