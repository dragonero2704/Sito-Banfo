<?php
$dbname = "banfo";
$dbusername = "studente";
$dbpassword = "pass_studente_banfi";
$dbhost = "localhost";
// $conn = new mysqli($dbhost,$dbusername,$dbpassword,$dbname);

?>

<?php
define("DEVELOPEMENT", 

/*
* Decommentare true se si vuole sviluppare in locale
* Decommentare false se si vuole effettuare il deploy
*/

//false
true
);
//
class Database
{
    private $database = DEVELOPEMENT ? "banfo" : "Sql1660750_1";
    private $username = DEVELOPEMENT ? "studente" : "Sql1660750";
    private $password = DEVELOPEMENT ? "pass_studente_banfi" : "Fizz001[c@t]";
    private $host = DEVELOPEMENT ? "localhost" : "localhost"; //in caso cambi l'host del db in futuro
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
    }

    function __destruct()
    {
        $this->connection->close();
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

        $ris = $this->connection->query($sql);

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

        $ris = $this->connection->query($sql);

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

        $this->__destruct();
    }
}

?>