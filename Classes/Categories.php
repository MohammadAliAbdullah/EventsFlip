<?php
// namespace Classes;
require_once './Database.php';

class Categories extends Database
{
    protected $conn = '';
    public function __construct()
    {
        $conn= $this->connected();
        if ($conn) {
           $this->conn = $conn;
        }
    }

    public function category()
    {
        $query = "select * from categories";
        $result = $this->conn->query($query);
        $array = array();
        while ($rows = mysqli_fetch_assoc($result)) {
            $array[] = $rows;
        }
        return $array;
    }
}


?>