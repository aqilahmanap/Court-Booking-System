<?php include('./reusable/begin.php') ?>
<link rel="stylesheet" href="../styles/enquiryStyle/enquiry.css">
<link rel="stylesheet" href="../styles/headerStyle/headerStyle.css">
<title>Enquiry page</title>
</head>



<body>
    <?php
    include('./reusable/header.php');
    require_once $_SERVER["DOCUMENT_ROOT"] . '/CBS project/controller/EnquiryController.php';
    ?>

    <form action="" method="POST" class="form-container">

        <div class="form-control">
            <label for="Enquiry title">Enquiry title</label>
            <input name="enquiryTitle" type="text" class="input" />
        </div>

        <div class="form-control">
            <label for="Enquiry details">Enquiry Details</label>
            <textarea name="enquiryDetails" id="" cols="50" rows=10></textarea>
        </div>

        <div class="form-control">
            <label for="Enquiry details">Enquiry owner email</label>
            <input name="enquiryEmail" type="text" class="input" />
        </div>

        <div class="form-control">
            <p>Enquiry date will be generated automatically</p>
        </div>

        <hr />

        <div class="btn-container">
            <button class='btn-add-enquiry' type="submit" name="submit">Add enquiry</button>
        </div>

    </form>

    <?php
    $postEnquiry = require('../controllers/enquiryController.php');
    if (isset($_POST['submit'])) {
        $enquiryTitle = $_POST['enquiryTitle'];
        $enquiryDetails = $_POST['enquiryDetails'];
        $enquiryEmail = $_POST['enquiryEmail'];
        if ($enquiryTitle === '' || $enquiryDetails === '' || $enquiryEmail === '') {
            echo "<script>alert('Fill all the form fields')</script>";
        } else {
            $enquiry = new Enquiry();
            $enquiry->saveEnquiry();
        }
    }
    ?>




    <?php include('./reusable/end.php') ?>