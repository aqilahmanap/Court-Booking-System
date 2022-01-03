<?php include('./reusable/begin.php') ?>
<link rel="stylesheet" href="../styles/enquiryStyle/enquiry.css">
<link rel="stylesheet" href="../styles/headerStyle/headerStyle.css">
<title>Court Details Page</title>
</head>




<body>
    <?php
    include('./reusable/header.php');
    ?>

<!DOCTYPE html>
<html>
<head>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

table {
  border-collapse: collapse;
  border: 2px solid #ddd;
  width: 100%;
}

th, td {
  text-align: center;
   border: 2px solid #ddd;
  padding: 8px;
}


th {
  background-color: maroon;
  color: white;
}
</style>
</head>
<body>

<center><h1>List of Court</h1>

<table>
  <tr>
    <th>#</th>
    <th>Court Type</th>
    <th>Action</th>
  </tr>
  <tr>
    <td>1</td>
    <td>Badminton Court</td>
    <td><form method="post" action="viewBadminton.php"><input type="submit" name="View" value="View"></td>
  </tr>
  
  <tr>
    <td>2</td>
    <td>Futsal Court</td>
    <td><input type="submit" name="View" value="View" formaction="viewFutsal.php"></td>
  </tr>

</table>

</body>
</html>


    <?php include('./reusable/end.php') ?>
	