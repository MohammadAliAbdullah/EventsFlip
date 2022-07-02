<?php
require_once '../Database.php';

class Customer extends Database
{
    public $conn;
    public $customerTable = "customers";
    public function __construct()
    {
        try {
            $this->conn = $this->connected();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    // Insert customer data into customer table
    public function insertRecond($name, $email, $username, $dob)
    {
        $sql = "INSERT INTO $this->customerTable (name, email, username, dob) VALUES('$name','$email','$username','$dob')";
        $query = $this->conn->query($sql);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
    // Fetch customer records for show listing
    public function displayRecord()
    {
        $sql = "SELECT * FROM $this->customerTable";
        $query = $this->conn->query($sql);
        $data = array();
        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        } else {
            return false;
        }
    }
    // Fetch single data for edit from customer table
    public function getRecordById($id)
    {
        $query = "SELECT * FROM $this->customerTable WHERE id = '$id'";
        $result = $this->conn->query($query);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row;
        } else {
            return false;
        }
    }
    public function totalRowCount()
    {
        $sql = "SELECT * FROM $this->customerTable";
        $query = $this->conn->query($sql);
        $rowCount = $query->num_rows;
        return $rowCount;
    }
}
