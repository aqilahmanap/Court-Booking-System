<?php
//First, connect to the MySQL server.


$link = mysqli_connect("localhost", "root", "");
if (!$link) {
    die('Could not connect: ' . mysqli_connect_error());
}

mysqli_select_db($link, "CBS") or die(mysqli_connect_error());

//Then, create a database named “mydatabase”.

$sql = "CREATE TABLE maintenance (courtID INT , MDuration VARCHAR(100), MDate VARCHAR(100), Details VARCHAR(100), PRIMARY KEY(courtID))";


if (mysqli_query($link, $sql)) {
    echo "Table created successfully\n";
} else {
    echo 'Error creating table: ' . mysqli_error($link) . "\n";
}

//And finally we close the connection to the MySQL server
mysqli_close($link);
?>