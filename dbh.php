<?php
class database{

    private $dsn="mysql:host=localhost;dbname=project";
    private $dbuser="root";
    private $dbpass="";

    public $dbconn;

    public function __construct(){
            try{
                $this->dbconn= new PDO ($this->dsn, $this->dbuser, $this->dbpass);
                $this->dbconn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }catch(PDOException $e){
                echo 'Error:'.$e->getMessage();
            }
        return $this->dbconn;
    }
    //check validation
    public function check_validation($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }
}

?>
