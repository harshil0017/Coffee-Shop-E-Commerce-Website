<?php

//create php script to create database
class createDb
{
    public $servername;
    public $username;
    public $password;
    public $dbname;
    public $tablename;
    public $con;

    public function __construct($dbname="Newdb", $tablename="Productdb", $servername="localhost", $username="root", $password="")
    {
        $this->dbname = $dbname;
        $this->tablename = $tablename;
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;

        //create connection
        $this->con = mysqli_connect($servername, $username, $password);

        //check connection
        if(!$this->con){
            die("Connection failed: ".mysqli_connect_error());
        }

        //query
        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

        //execute query
        if(mysqli_query($this->con, $sql))
        {
            $this->con=mysqli_connect($servername, $username, $password, $dbname);

            //sql to create new table
            $sql = "CREATE TABLE IF NOT EXISTS $tablename
            (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
             product_name VARCHAR(25) NOT NULL,
             product_size VARCHAR(10),
             product_price FLOAT(10),
             product_image VARCHAR(100)
             );";

             if(!mysqli_query($this->con, $sql))
             {
                 echo "Error while creating table: ".mysqli_error($this->con);
             }

        }
        else
        {
            return false;
        }
    }

    //Get product from the database
    public function getData()
    {
        $sql = "SELECT * FROM $this->tablename";

        //execute sql command using mysqli_query()
        $result = mysqli_query($this->con, $sql);

        if(mysqli_num_rows($result)>0){
            return $result;
        }
    }

}
?>