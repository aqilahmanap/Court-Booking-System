<?php include('./reusable/begin.php') ?>
<link rel="stylesheet" href="../styles/enquiryStyle/enquiry.css">
<link rel="stylesheet" href="../styles/headerStyle/headerStyle.css">
<title>Badminton Court Details Page</title>
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
<title>Add Badminton Court Page</title>
<link rel="stylesheet" href="../styles/courtStyle/addCourtFormStyle.css">
</head>
<body>


	
<form action="">
  <div class="container">
    <h1>Add Badminton Court</h1>
    <hr>

    <label for="badcourtID"><b>Badminton Court ID</b></label>
    <input type="text" placeholder="Enter Badminton Court ID" name="badcourtID" id="badcourtID" required>

    <label for="badcourtName"><b>Badminton Court Name</b></label>
    <input type="text" placeholder="Enter Badminton Court Name" name="badcourtName" id="badcourtName" required>

    <label for="badcourtNum"><b>Badminton Court Number</b></label>
    <input type="text" placeholder="Enter Badminton Court Number" name="badcourtNum" id="badcourtNum" required>
	
    <button type="submit" class="addbtn">Add</button>
	<button type="submit" class="backbtn" onclick="location.href='viewBadminton.php'">Back</button>
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
$badcourtID = mysqli_real_escape_string($link, $_REQUEST['badcourtID']);
$badcourtName = mysqli_real_escape_string($link, $_REQUEST['badcourtName']);
$badcourtNum = mysqli_real_escape_string($link, $_REQUEST['badcourtNum']);

// Attempt insert query execution
$sql = "INSERT INTO badmintoncourt (badcourtID, badcourtName, badcourtNum) VALUES ('$badcourtID', '$badcourtName', '$badcourtNum')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>