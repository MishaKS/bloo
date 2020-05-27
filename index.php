<?php

$servername = "localhost";
$password = "";
$dbname = "myDB";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("?????? ???????????: " . $conn->connect_error);
}



$sql = "CREATE TABLE MyGus (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
ALTER TABLE `id` ADD `3` VARCHAR(40) NOT NULLALTER TABLE `d` ADD `pole_name` VARCHAR(40) NOT NULL
ALTER TABLE `price` ADD `name` VARCHAR(40) NOT NULL




id int(11),
 data_add text,
  price text,
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "";

} else {
    echo " " . $conn->error;
}


$conn->close();
?>



