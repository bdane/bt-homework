<?php

include_once './database/DB.php';

class Newsletter //extends DataBase
{
    private $newsletter;

    public function __construct($newsletter)
    {
        $this->newsletter = $newsletter;
    }

    public function setSubscriber()
    {
        $sql = "INSERT INTO newsletter (email, subscription_date, subscription) VALUES (?, '" . date('Y-m-d h:i:s') . "', '1');";
        $stmt = DataBase::connect()->prepare($sql);
        $stmt->execute([$this->newsletter]);
    }

    public function getAllSubscribers()
    {
        $sql = "SELECT * FROM newsletter WHERE subscription = '1';";
        $stmt = DataBase::connect()->query($sql);
        while ($row = $stmt->fetch()) {
            echo $row['email'] . "<br>";
        }
    }

    public function getOneSubscriber()
    {
        $sql = "SELECT * FROM newsletter WHERE email = '" . $this->newsletter . "';";
        $stmt = DataBase::connect()->query($sql);
        while ($row = $stmt->fetch()) {
            return $row['email'];
        }
    }
}
