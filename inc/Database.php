<?php
//defined class called Database
class Database{
    //Database information
    private $host = "172.31.22.43";
    private $db_name = "Oluwafunmibi200631960";
    private $db_user = "Oluwafunmibi200631960";
    private $password =  "-Sq98vo2cv";
    private $conn;

    //Database connection
    public function getConnection(){
         $this->conn = null;
        try{
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->db_user,
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $exception){
            //show error if database fails
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>