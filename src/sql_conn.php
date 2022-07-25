<?php
    $servername = "mysql-server";
    $username = "root";
    $password = "secret";
    $conn = new PDO("mysql:host=$servername;dbname=Products", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 ?>