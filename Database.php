
<?php 


class Database{

    public $host='localhost';
    public $username='root';
    public $password=123;
    public $dbname="chatbit";


    public function Connect(){
        $dsn= $dsn='mysql:host='.$this->host.';dbname='.$this->dbname;
        $conn=new pdo($dsn, $this->username, $this->password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        return $conn;
    }
}














?>