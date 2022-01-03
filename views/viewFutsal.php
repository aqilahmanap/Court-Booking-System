<?php include('./reusable/begin.php') ?>
<link rel="stylesheet" href="../styles/enquiryStyle/enquiry.css">
<link rel="stylesheet" href="../styles/headerStyle/headerStyle.css">
<title>Futsal Court Details Page</title>
</head>




<body>
    <?php
    include('./reusable/header.php');
    ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../styles/courtStyle/viewCourtStyle.css">
</head>
<body>

<center><h1>Futsal Court Details</h1>

<table>
  <tr>
    <th>#</th>
	<th>Court ID</th>
    <th>Court Name</th>
    <th>Court Number</th>
	<th>Action</th>
  </tr>
  
<?php
// Create connection
$conn = new mysqli("localhost", "root", "", "courtbookingsystem");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT futcourtID, futcourtName, futcourtNum FROM futsalcourt";
$result = $conn->query($sql);

$count=1;
if (mysqli_num_rows($result) > 0){
	foreach($result as $row){
	?>
<tr>
        <?php   foreach($result as $row){  
        ?>
				<td><?php echo $count;?></td> 
				<td><?=$row["futcourtID"]?></td>
				<td><?=$row["futcourtName"]?></td>
				<td><?=$row["futcourtNum"]?></td>
				
				<td><input type="hidden" name="futcourtID" value="<?=$row['futcourtID']?>">  
       			<a href="deleteFutCourt.php?futcourtID=<?=$row['futcourtID']?>">Delete</a></form></td>

</tr>

			
			<?php $count=$count+1;
        	echo "</tr>";
        	}
   			 ?>
	
	</tbody>
    </table>

	<?php
    } }
else {
    echo "0 results";
}
?>
<button onclick="location.href='addFutCourt.php'" type="submit" class="addbtn">Add New Court</button>
<button onclick="location.href='displayCourtList.php'" class="backbtn">Back</button>
    <?php include('./reusable/end.php') ?>
	