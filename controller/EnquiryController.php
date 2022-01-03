<?php

class Enquiry
{
    function saveEnquiry()
    {
        $enquiryTitle = $_POST['enquiryTitle'];
        $enquiryDetails = $_POST['enquiryDetails'];
        $enquiryEmail = $_POST['enquiryEmail'];
        echo "<table style='margin-top:5%;'>";
        echo "<tbody>";
        echo "<th> Enquiry title </th>";
        echo "<th> Enquiry details </th>";
        echo "<th> Enquiry email </th>";
        echo "<th> Enquiry date </th>";
        echo "</tr>";
        echo "<td>" . $enquiryTitle . "</td>";
        echo "<td>" . $enquiryDetails . "</td>";
        echo "<td>" . $enquiryEmail . "</td>";
        echo "<td id='date'></td>";
        echo "<script>document.getElementById('date').innerHTML=new Date().toUTCString();</script>";
    }
}
