<?php
class Database
{
    private $host = "localhost";
    private $db_name = "vote3login";
    private $username = "root";
    private $password = "";
    public $conn;

   /* private $host = "localhost";
    private $db_name = "id4002952_vote3login";
    private $username = "id4002952_tukvotes";
    private $password = "itstbag";
    public $conn;*/

    public function dbConnection()
    {

        $this->conn = null;
        try
        {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        }
        catch(PDOException $exception)
        {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
