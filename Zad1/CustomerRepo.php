<?php

require_once 'Customer.php';
require_once 'Massage.php';
require_once 'Db.php';


class CustomerRepo {

    public static function getAllMassages(mysqli $connection, $userId) {
        $conn = DB::connect();
        $result = $conn->query("SELECT * FROM Users u LEFT JOIN Massages m ON u.id = "
                . " m.user_id WHERE u.id = '" . $connection->real_escape_string($userId) . "'");
        $listOfMassages = [];
        if ($result && $result->num_rows > 0) {
            foreach ($result as $row) {
                $massage = new Massage();
                $massage->setMassage($row['massage']);
                $massage->setUser_id($row['user_id']);
                $listOfMassages[] = $massage;
            }
        }
        return $listOfMassages;
    }
}
