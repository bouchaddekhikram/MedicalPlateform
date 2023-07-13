<?php

class Appoitement
{
    private $db ;


    function __construct()
    {
        try {
            $dbname = "webprojet";
            $username = "root";
            $password = "";
            $this->db = new PDO("mysql:host=localhost;dbname=$dbname", $username, $password);
        } catch (Exception $e) {
            die ("Could not connect to the database $dbname :" . $e->getMessage());

        }
    }

}