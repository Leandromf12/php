<?php
$db_name ="bancophp";
$db_host ="localhost:3306";
$db_password ="28047814lw";
$db_user = "root";

$pdo = new PDO("mysql:dbname=".$db_name.";host:".$db_host, $db_user, $db_password);


?>