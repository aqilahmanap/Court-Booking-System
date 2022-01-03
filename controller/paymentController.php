<?php

class Payment
{
	function savePayment()

	{
        $paymentID = $_POST['paymentID'];
	$paymentDetails = $_POST['paymentDetails'];
	$paymentAmount = $_POST['paymentAmount'];
        echo "<table style='margin-top:5%;'>";
        echo "<tbody>";
        echo "<th> paymentID </th>";
        echo "<th> paymentDetails </th>";
        echo "<th> paymentAmount </th>";
        
       
        echo "</tr>";
        echo "<td>" . $paymentID . "</td>";
        echo "<td>" . $paymentDetails . "</td>";
        echo "<td>" . $paymentAmount . "</td>";
        
	}
}
 ?>