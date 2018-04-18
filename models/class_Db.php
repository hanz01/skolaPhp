<?php

class Db{

    protected $dbserver;
    protected $dbuser;
    protected $dbpasswd;
    protected $dbname;

    protected $connection;

    public function __construct($dbserver, $dbuser, $dbpasswd, $dbname){
        $this->dbserver=$dbserver;
        $this->dbuser=$dbuser;
        $this->dbpasswd=$dbpasswd;
        $this->dbname=$dbname;
    }
    /**
     *  Metoda connect vytvari spojeni s DB
     *  @return bool false - nepripojeno, True - pripojeno
    */
    public function connect(){
       if(!isset($this->connection)){
            $this->connection=new mysqli($this->dbserver, $this->dbuser, $this->dbpasswd, $this->dbname);
       }

       if($this->connection->connect_errno){
            echo "ERROR MYSQL: (".$this->connection->connect_errno.")".$this->connection->connect_error;
       }

       $this->connection->set_charset("utf8");
       return $this->connection;
    }
    /**
     * Metoda query vykonava mysql dotazy
     * @param $query string obsahuje dotaz mysql
     * @return $result mixed 
     */
    function query($query){
        $connection=$this->connect();
        $result=$connection->query($query);
        return $result;
    }
    /**
     * Metoda pro select
     * @param dotaz
     */
    public function select($query) {
      $rows = array();
      $result = $this->query($query);
      if(!$result)
        return false;
      while($row=$result->fetch_assoc()) {
        $rows[] = $row;
      }
      return $rows;
    }
}

?>