<?php
//connection to DB
class Connection
{    //varibles use by the functions
    private static $servername = "localhost:3306";
    private static $username = "root";
    private static $password = "";
    private static $dbname = "user";
    private static $conn;

    private static function connexion()
    {  //preparing DB connection
        self::$conn = new PDO("mysql:host=" . self::$servername . ";dbname=" . self::$dbname, self::$username, self::$password, array(PDO::ATTR_PERSISTENT => true));
        // set the PDO error mode to exception
        self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    //establish the connection to the DB using the connexion function
    public static function getConnection()
    {//if not connected create connection
        if (!isset(self::$conn)) {
            self::connexion();
        }
        return self::$conn;        
    }
}
?>