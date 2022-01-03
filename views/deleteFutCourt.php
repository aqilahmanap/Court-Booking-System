<!-- adminDelete.php -->
<!-- Admin can delete one particular data. -->

<?php

include ("mydb.php");

$futcourtID = $_GET['futcourtID'];
$query = "DELETE FROM futsalcourt WHERE futcourtID = '$futcourtID'";
$result = mysqli_query($conn,$query) or die ("Could not execute query in delete.php");

if($result){
echo "<script type= 'text/javascript'> window.location='viewFutsal.php'</script>";
}
?>