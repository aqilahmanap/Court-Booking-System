<?php

class Payment
{
	function savePayment()

	{
        $payID = $_POST['payID'];
	$payDate = $_POST['payDate'];
	$payAmount = $_POST['payAmount'];
        echo "<table style='margin-top:5%;'>";
        echo "<tbody>";
        echo "<th> payID </th>";
        echo "<th> payDate </th>";
        echo "<th> payAmount </th>";
        
       
        echo "</tr>";
        echo "<td>" . $payID . "</td>";
        echo "<td>" . $payDate . "</td>";
        echo "<td>" . $payAmount . "</td>";
        
	}
}
 ?>