<?php
 
 class CourtDisplay
 {
	function saveBadmintonCourt()
	 
	{
		$badcourtID = mysqli_real_escape_string($link, $_REQUEST['badcourtID']);
		$badcourtName = mysqli_real_escape_string($link, $_REQUEST['badcourtName']);
		$badcourtNum = mysqli_real_escape_string($link, $_REQUEST['badcourtNum']);

        echo "<table style='margin-top:5%;'>";
        echo "<tbody>";
		echo "<th>Court ID</th>";
		echo "<th>Court Name</th>";
		echo "<th>Court Number</th>";

        echo "</tr>";
		echo "<td><?=$row["badcourtID"]?></td>";
		echo "<td><?=$row["badcourtName"]?></td>";
		echo "<td><?=$row["badcourtNum"]?></td>";
		
	}
	
	function saveFutsalCourt()
	 
	{
		$futcourtID = mysqli_real_escape_string($link, $_REQUEST['futcourtID']);
		$futcourtName = mysqli_real_escape_string($link, $_REQUEST['futcourtName']);
		$futcourtNum = mysqli_real_escape_string($link, $_REQUEST['futcourtNum']);

        echo "<table style='margin-top:5%;'>";
        echo "<tbody>";
		echo "<th>Court ID</th>";
		echo "<th>Court Name</th>";
		echo "<th>Court Number</th>";

        echo "</tr>";
		echo "<td><?=$row["futcourtID"]?></td>";
		echo "<td><?=$row["futcourtName"]?></td>";
		echo "<td><?=$row["futcourtNum"]?></td>";
		
	}
	
 }
 ?>
				


