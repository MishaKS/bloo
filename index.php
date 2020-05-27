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
id int(11),
 data_add text,
  price text,
reg_date TIMESTAMP
)";
if ($conn->query($sql) === TRUE) {
    echo "??????? MyGuests ??????? ???????";
} else {
    echo "?????? ???????? ???????: " . $conn->error;
}


$conn->close();
?>



