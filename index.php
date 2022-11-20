<?php 
    include "login.php";
    require_once "classes/class.user.php";

    $user = new User();

    $user->db->query('CREATE TABLE IF NOT EXISTS users(
        userID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(128) NOT NULL,
        surname VARCHAR(128) NOT NULL,
        username VARCHAR(128) NOT NULL,
        email VARCHAR(128) NOT NULL,
        password VARCHAR(128) NOT NULL
    )');
?>

<!-- Customers who do not exist as entities  -->
<!-- inside the system must first register as a new User  -->
<!-- and have their data stored inside the database. -->
<!-- Once they have registered they can either be  -->
<!-- redirected to the page they requested or be notified that -->
<!-- they have been added to the system, and they now need  -->
<!-- to log in to be redirected to the page they requested. -->
<!-- Both login and registration forms must have required  -->
<!-- fields where necessary, and must have at least  -->
<!-- a basic level of input validation and input sanitization  -->
<!-- to prevent malicious code from being sent to the database/system. -->