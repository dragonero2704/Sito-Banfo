<?php
$dbhost = "31.11.39.34";
$dbusername = "Sql1660750";
$dbpassword = "Fizz001[c@t]";
$dbname = "Sql1660750_1";

define("DEVELOPMENT", 

/*
* true se si vuole sviluppare in locale
* false se si vuole effettuare il deploy o caricarlo sul server
*/

false
// true
);
//
class Database
{
    private $database = DEVELOPMENT ? "banfo" : "Sql1660750_1";
    private $username = DEVELOPMENT ? "root" : "Sql1660750";
    private $password = DEVELOPMENT ? "" : "Fizz001[c@t]";
    private $host = DEVELOPMENT ? "localhost" : "31.11.39.34"; //in caso cambi l'host del db in futuro
    private $connection;
    public $error = array();
    public $connerror = array();

    function __construct($host = "", $username = "", $password = "", $database = "")
    {
        $this->host = !empty($host) ? $host : $this->host;
        $this->username = !empty($username) ? $username : $this->username;
        $this->password = !empty($password) ? $password : $this->password;
        $this->database = !empty($database) ? $database : $this->database;

        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
        if (!empty($this->connection->connect_errno)) {
            $this->connerror['code'] = $this->connection->connect_errno;
            $this->connerror['message'] = $this->connection->connect_error;
            return false;
        }
        $this->query('SET NAMES utf8');
    }

    function getConnection()
    {
        return new mysqli($this->host, $this->username, $this->password, $this->database);
    }

    function getAllFrom($table, $conditionsString = "", $additionalOptions = "")
    {

        $sql = "SELECT * FROM $table";

        if (!empty($conditionsString)) {
            $conditionsString = stripos($conditionsString, "WHERE") ? $conditionsString : "WHERE " . $conditionsString;
            $sql = $sql .' '. $conditionsString;
        }

        if (!empty($additionalOptions)) {
            $sql = $sql .' '. $additionalOptions;
        }
        try{
            $ris = $this->connection->query($sql);
        }catch(Exception $e){
            $this->error['code'] = 404;

            $this->error['message'] = $e->getMessage();
            return false;
        }
        

        if (!empty($this->connection->errno)) {
            $this->error['code'] = $this->connection->errno;
            $this->error['message'] = $this->connection->error;
            return false;
        }
        //array di risultati
        $results = array();

        while ($row = $ris->fetch_assoc()) {
            array_push($results, $row);
        }

        return $results;
    }

    function query($sql)
    {
        $this->error = array();
        // $sql = $this->connection->escape_string($sql);

        try{
            $ris = $this->connection->query($sql);
        }catch(Exception $e){
            $this->error['code'] = $e->getCode();
            $this->error['message'] = $e->getMessage();
            return false;
        }

        if (!empty($this->connection->errno)) {
            $this->error['code'] = $this->connection->errno;
            $this->error['message'] = $this->connection->error;
            return false;
        }

        return $ris;
    }

    function escape_string($string){
        return $this->connection->escape_string($string);
    }

    function close()
    {
        $this->error = array();
        $this->connerror = array();
    
        $this->connection->close();
    }
}
