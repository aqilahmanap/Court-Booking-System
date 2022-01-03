<?php

//Connect to the database server.
$link = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());

//Select the database.
mysqli_select_db($link, "CBS") or die(mysqli_error());

//SQL query
$strSQL = "SELECT * FROM maintenance ";

//Execute the query (the recordset $rs contains the result)
$rs = mysqli_query($link, $strSQL);

//Loop the recordset $rs 

echo "<table align=center border=1px solid red  >";

echo "<tr >";
echo "<th > Court ID</th>";
echo "<th> Duration </th>";
echo "<th> Date </th>";
echo "<th> Details </th>";
echo "</tr>";


while ($row=mysqli_fetch_array($rs)){



echo "<tr>";
echo "<td>".$row['courtID']."</td>";
echo "<td>".$row['MDuration']."</td>";
echo "<td>".$row['MDate']."</td>";
echo "<td>".$row['Details']."</td>";
echo "</tr>";
}
?>
