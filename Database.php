<?php

//created by sai Kumar Nandi

class DatabaseClass
{
    protected static $connection;

    //connect function
    public function connect()
    {
        //if connection is successfull
        if (!isset(self::$connection)) {
            include("connection.php");
            self::$connection = new mysqli($host, $username, $password, $database);
        }

        //if connection is not successfull
        if (self::$connection === false) {
            //handle the error here
            return false;
        }
        return self::$connection;
    } //end function connect()

    //function for executing the query
    public function ExecuteQuery($query)
    {
        //connect to the DB
        $connection = $this->connect();

        //query the database
        $result = $connection->query($query);

        if (!$result) {
            return $connection->error;
        } else {
            return $result;
        }

        //close the connection
        $this->CloseConnection();
    } //end function ExecuteQuery()

    public function error()
    {
        //gets the last error from the database
        $connection = $this->connect();
        return $connection->error;
    } //end function error()

    public function CloseConnection()
    {
        self::$connection->close();
    }
}//end class DatabaseClass
