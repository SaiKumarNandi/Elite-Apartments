<?php

//include the database.php file
include 'Database.php';

class Intermediary
{
    private $db;

    public function __construct()
    {
        //create the instance of the database class
        $this->db = new DatabaseClass();
    } //end constructor

    //this method is just to check the apartment number exist and return the row that has the apartment
    public function apartmentCheck($aptno)
    {
        $this->db->connect();

        //form the query
        $query = "SELECT is_occupied FROM apartments WHERE apartment_no = $aptno";

        //execute the query by calling the method
        $result = $this->db->ExecuteQuery($query);

        return $result;
    } //end apartmentCheck()

    public function insertMaintenance($aptno, $desc, $userid, $date)
    {
        $this->db->connect();

        // Get the next available req-id
        $query = "SELECT MAX(mreq_id) as max_req_id FROM maintenance_req";
        $result = $this->db->ExecuteQuery($query);

        if ($result->num_rows > 0) {
            // Fetch the result as an associative array
            $row = $result->fetch_assoc();

            // Get the maximum request_id
            $max_request_id = $row["max_req_id"];

            // Store the maximum request_id in a PHP variable
            $req_id = intval($max_request_id + 1);
        } else {
            $req_id = intval('1');
        }

        // Insert data into maintenance table
        $query = "INSERT INTO maintenance_req (mreq_id, user_id, apartment_no, req_date, description, req_status) 
                  VALUES ($req_id, $userid, $aptno, '$date', '$desc', 'pending')";

        //execute the query by calling the method
        $result = $this->db->ExecuteQuery($query);

        return $result;
    }

    public function getUserId($aptno)
    {
        $this->db->connect();

        //form the query
        //$query = "SELECT user_id FROM tenants WHERE apartment_no = '$aptno'";
        $query = "SELECT t.`user_id` FROM `tenants` t INNER JOIN `apartments` a ON t.`apartment_no` = a.`apartment_no` WHERE a.`apartment_no` = '$aptno';";

        //execute the query by calling the method
        $result = $this->db->ExecuteQuery($query);

        return $result;
    }

    public function showMaintenanceRecords($aptno)
    {
        $this->db->connect();

        //form the query
        $query = "SELECT user_id, description, req_status FROM maintenance_req WHERE apartment_no = '$aptno'";

        //execute the query by calling the method
        $result = $this->db->ExecuteQuery($query);

        return $result;
    }

    public function insertRequestRecords($fname, $lname, $email, $mobile_number, $type, $pet, $garage)
    {
        $this->db->connect();

        // Get the next available req-id
        $query = "SELECT MAX(request_id) as max_req_id FROM requests";
        $result = $this->db->ExecuteQuery($query);

        if ($result->num_rows > 0) {
            // Fetch the result as an associative array
            $row = $result->fetch_assoc();

            // Get the maximum request_id
            $max_request_id = $row["max_req_id"];

            // Store the maximum request_id in a PHP variable
            $req_id = intval($max_request_id + 1);
        } else {
            $req_id = intval('1');
        }

        //insert data into requests table 
        $query = "INSERT INTO requests (request_id, f_name, l_name, email, mobile, type, pet, garage) VALUES ($req_id, '$fname', '$lname', '$email', '$mobile_number', '$type', '$pet', '$garage')";

        //execute the query by calling the method
        $result = $this->db->ExecuteQuery($query);

        return $result;
    }
}
