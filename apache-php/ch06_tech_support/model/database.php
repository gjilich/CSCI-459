<?php
    $dsn = 'mysql:host=localhost;dbname=tech_support';
    $username = 'root';
    $password = '';
    global $db;

        if (!isset($db)){
            try {
                $db = new PDO($dsn, $username, $password);
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                include('../errors/database_error.php');
                exit();
            }
        }        
 
//class Database{
//    private static $dsn = 'mysql:host=localhost;dbname=tech_support';
//    private static $username = 'root';
//    private static $password = '';
//    public static $db;
//    
//    public function databaseConnect() {
//        if (!isset(self::$db)){
//            try {
//                $db = new PDO($dsn, $username, $password);
//            } catch (PDOException $e) {
//                $error_message = $e->getMessage();
//                include('../errors/database_error.php');
//                exit();
//            }
//        }        
//        return $db;
//    }
//}
?>



