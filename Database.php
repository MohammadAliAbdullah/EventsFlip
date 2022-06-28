<?php

class Database
{
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'eventsflip';

    public function connected()
    {
        return $this->connection();
    }

    protected function connection()
    {
        $connected = new mysqli($this->host, $this->username, $this->password, $this->database);
        $connStatus = $this->checkConnect($connected);
        if ($connStatus) {
            $db = $connected;
        } else {
            $db = 'Database Connection Failed. Please Check Your Server ' . $connected->connect_error;
        }
        return $db;
    }

    private function checkConnect($data)
    {
        if ($data->connect_error) {
            $success = FALSE;
        } else {
            $success = TRUE;
        }
        return $success;
    }

    public function getProduct()
    {
        $query = "select * from categories";
        $result = $this->connected()->query($query);
        $array = array();

        while ($rows = mysqli_fetch_assoc($result)) {
            $array[] = $rows;
        }
        return $array;
    }
}
