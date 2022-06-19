<?php

include 'connection.php';

class Colors
{
    private $db;

    public function __construct()
    {
        $this->db = new Connection();
        $this->db = $this->db->dbConnect();
    }

    public function tableColors($sql)
    {
        $stmt = $this->db->query($sql);
        while ($row = $stmt->fetch()) {
            echo $row['id'] . " | " . $row['name'] . " | " . $row['hex_value'] . " | " . $row['status'] . " | " . $row['created_at'] . " | " . $row['updated_at'] . "<br>";
        }
    }
}
