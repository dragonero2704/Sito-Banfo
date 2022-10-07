<?php
$dbname = "banfo";
$dbusername = "studente";
$dbpassword = "pass_studente_banfi";
$dbhost = "localhost";
// $conn = new mysqli($dbhost,$dbusername,$dbpassword,$dbname);

?>

<?php
class Database
{
    private $database = "banfo";
    private $username = "studente";
    private $password = "pass_studente_banfi";
    private $host = "localhost";
    private $connection;
    public $error = array();
    public $connerror = array();

    function __construct($host, $username, $password, $database)
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

    function getAllFrom($table, $conditionsString, $additionalOptions)
    {

        $sql = "SELECT * FROM $table";

        if (!empty($conditionsString)) {
            $conditionsString = stripos($conditionsString, "WHERE") ? $conditionsString : "WHERE " . $conditionsString;
            $sql = $sql . $conditionsString;
        }

        if (!empty($additionalOptions)) {
            $sql = $sql . $additionalOptions;
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
}

?>