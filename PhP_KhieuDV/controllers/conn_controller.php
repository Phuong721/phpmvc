<?php
require_once('controllers/base_controller.php');


class ConnController extends BaseController
{
    function __construct()
    {
        $this->folder = 'conn';
    }

    public function create(){
        if(isset($_POST['insert_conn'])){
            $host = $_POST['host'];
            $username = $_POST['username'];
            $database = $_POST['database'];
            $password = $_POST['password'];
            $connection = new mysqli("$host", "$username", "$password");
            if($connection ->connect_error){
                    die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
            }
            $sql = "create database $database;
            ";
            if($connection->query($sql) === true){
                echo "Database created successfully";
            }
            else{
                echo "Error creating database";
            }
            $connection = new mysqli("$host","$username","$password","$database");
            if($connection->connect_error){
                die("Connection failed: ");
            }
            $sql = "create table posts(
            id int(10) not null primary key auto_increment,
            title varchar(50) not null,
            description varchar(255) not null,
            image varchar(50) not null,
            status int(10) not null,
            date varchar(50) 
)";
            if($connection->query($sql) === true){
                echo "Table post created successfully";

                $conn = "mysql:host=" .$host.";dbname=".$database. "', '" .$username."','" .$password;
                $instance = "instance";
                $ex = "ex";
                $conn_str = "
<?php
class DB
{
    private static $" .$instance. " = NULl;
    public static function getInstance() {
        if (!isset(self::$" .$instance. ")) {
            try {
                self::$" .$instance." = new PDO('" .$conn."');
                self::$". $instance. "->exec(\"SET NAMES 'utf8'\");
            } catch (PDOException $" .$ex. ") {
                die($" .$ex. "->getMessage());
            }
        }
        return self::$" .$instance.";
    }
}


            ";
                $myfile = fopen("controllers/connection.php", "w");
                fwrite($myfile, $conn_str);
                fclose($myfile);

                require 'views/posts/header.php';

            }
            else{
                echo "Error creating table";
            }
            require 'index.php';
            exit();
        }
        require 'views/conn/conn.php';
    }


}
