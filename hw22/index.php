<?php

include 'dbConnect.php';

class Index extends DBConnect
{
    protected $name;
    protected $email;
    protected $pass;

    public function setUser($name, $email, $pass)
    {
        $sql = "INSERT INTO users (" . "name, email, password, created_at, email_verified_at" . ") VALUES (?, ?, ?, '" . date('Y.m.d h:i:s') . "', '" . date('Y.m.d h:i:s', strtotime("+2 hours")) . "');";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $email);
        $stmt->bindParam(3, $pass);
        $stmt->execute();
    }
}

$addUser = new Index();

try {
    $addUser->setUser('kole', 'kole@kole.com', 'kole123');
    $addUser->setUser('steva', 'steva@steva.com', 'steva123');
    $addUser->setUser('djoka', 'djoka@djoka.com', 'djoka123');
    $addUser->setUser('laza', 'laza@laza.com', 'laza123');
    $addUser->setUser('jova', 'jova@jova.com', 'jova123');
    $addUser->setUser('zika', 'zika@zika.com', 'zika123');
    $addUser->setUser('mika', $this->email, 'mika123');
    $addUser->setUser('djura', "djura@djura.com", 'djura123');
    $addUser->setUser('mile', 'mile@mile.com', 'mile123', 23);
    $addUser->setUser('pera', 'pera@pera.com', 'pera123');
} catch (\Throwable $th) {
    echo $th->getMessage() . "<br>";
    echo "Error in line: " . $th->getLine();
}
