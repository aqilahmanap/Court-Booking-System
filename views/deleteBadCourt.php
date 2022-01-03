<!-- adminDelete.php -->
<!-- Admin can delete one particular data. -->

<?php

include ("mydb.php");

$badcourtID = $_GET['badcourtID'];

$query = "DELETE FROM badmintoncourt WHERE badcourtID = '$badcourtID'";
$result = mysqli_query($conn,$query) or die ("Could not execute query in delete.php");

if($result){
echo "<script type= 'text/javascript'> window.location='viewBadminton.php'</script>";
}
?>