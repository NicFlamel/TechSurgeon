<?php
/**
 * Database class
 */
class Database
{
    private $db_host = "localhost";
    private $db_user = "root";
    private $db_password = "";
    private $db_database = "techsurgeon";
       
    private $con;
    
    
    /**
     *	Initialize database connection as soon as it gets called.
     */
    function __construct()
    {
        $this->openConnection();
    }
    
    
    /**
     *	This to prepare and execute mysql query, using PDO prepare.
     *	Usage: selectPrepare((string) query, (array) values)
     */
    public function selectPrepare($query, $values)
    {
        $prepare = $this->con->prepare($query);
        $values  = ($values != "") ? $values : null;
        $prepare->execute($values);
        return $prepare;
    }
    
    public function fetch($statement)
    {
        return $statement->fetch();
    }
    
    public function fetchObject($statement)
    {
        return $statement->fetchObject();
    }
    
    public function fetchAll($statement)
    {
        return $statement->fetchAll();
    }
    
    public function countRow($statement)
    {
        return $statement->rowCount();
    }
    
    public function lastID()
    {
        return $this->con->lastInsertId();
    }
    
    /**
     * 	Direct access to the PDO connection.
     */
    public function getConnection()
    {
        return $this->con;
    }
    
    public function openConnection()
    {
        try {
            $this->con = new PDO("mysql:dbname=$this->db_database;host=$this->db_host", $this->db_user, $this->db_password);
        }
        catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
    
    
    /**
     *	Close the PDO connection
     */
    public function closeConnection()
    {
        $this->con = null;
    }
    
}

$Database = new Database();

?>