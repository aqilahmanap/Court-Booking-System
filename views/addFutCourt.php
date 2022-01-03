<?php include('./reusable/begin.php') ?>
<link rel="stylesheet" href="../styles/enquiryStyle/enquiry.css">
<link rel="stylesheet" href="../styles/headerStyle/headerStyle.css">
<title>Futsal Court Details Page</title>
</head>

<body>
    <?php
    include('./reusable/header.php');
    ?>
	
<?php
session_start();
error_reporting(0); 
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" align="center">
<title>Add Futsal Court Page</title>

<link rel="stylesheet" href="../styles/courtStyle/addCourtFormStyle.css">
</head>
<body>

<form action="">
  <div class="container">
    <h1>Add Futsal Court</h1>
    <hr>

    <label for="futcourtID"><b>Futsal Court ID</b></label>
    <input type="text" placeholder="Enter Futsal Court ID" name="futcourtID" id="futcourtID" required>

    <label for="futcourtName"><b>Futsal Court Name</b></label>
    <input type="text" placeholder="Enter Futsal Court Name" name="futcourtName" id="futcourtName" required>

    <label for="futcourtNum"><b>Futsal Court Number</b></label>
    <input type="text" placeholder="Enter Futsal Court Number" name="futcourtNum" id="futcourtNum" required>
	
    <button type="submit" class="addbtn">Add</button>
	<button type="submit" class="backbtn" onclick="location.href='viewFutsal.php'">Back</button>
  </div>
  
</form>
</body>
</html>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "courtbookingsystem");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$futcourtID = mysqli_real_escape_string($link, $_REQUEST['futcourtID']);
$futcourtName = mysqli_real_escape_string($link, $_REQUEST['futcourtName']);
$futcourtNum = mysqli_real_escape_string($link, $_REQUEST['futcourtNum']);

// Attempt insert query execution
$sql = "INSERT INTO futsalcourt (futcourtID, futcourtName, futcourtNum) VALUES ('$futcourtID', '$futcourtName', '$futcourtNum')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>