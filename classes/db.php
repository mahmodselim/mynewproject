 <?php
class db {

    public $servername;
    public $username;
    public $password;
    public $dbname;

    protected function connect()
    {


        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "company";
try{
        $dsn = "mysql:host=".$this->servername.";dbname=".$this->dbname;
        $pdo = new PDO($dsn, $this->username, $this->password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//        echo "connected";
        return $pdo;
    } catch (PDOException $e) {
    echo "connection faild: ".$e->getMessage();
    }

    }
}

