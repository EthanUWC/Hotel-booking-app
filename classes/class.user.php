<?php
require_once 'config/DbConfig.php';

class User
{
    public $db;

    public function __construct()
    {
        $this->db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);

        if ($this->db->connect_error) {
            die("Failed to connect to MySQL: " . $this->db->connect_error);
        }
    }

    public function reg_user($name, $surname, $username, $email, $password)
    {
        echo $name . ' ' . $surname;
        $sql = "INSERT INTO users(name, surname, username, email, password) VALUES ('$name','$surname','$username','$email','$password')";
        $this->db->query($sql);
        return 'Registration successful';
    }
}
