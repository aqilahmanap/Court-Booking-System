<?php include('./reusable/begin.php') ?>
<link rel="stylesheet" href="../styles/paymentStyle/payment.css">
<link rel="stylesheet" href="../styles/headerStyle/headerStyle.css">
<title>Payment page</title>
</head>



<body>
    <?php
    include('./reusable/header.php');
    require_once $_SERVER["DOCUMENT_ROOT"] . '/CBS project/controller/paymentController.php';
    ?>

    <form action="" method="POST" class="form-container">

        <div class="form-control">
            <label for="Payment ID">Payment ID</label>
            <input name="paymentID" type="text" class="input" />
        </div>

        <div class="form-control">
            <label for="Payment Details">Payment Details</label>
            <textarea name="paymentDetails" id="" cols="50" rows=10></textarea>
        </div>

        <div class="form-control">
            <label for="Payment amount">Payment Amount</label>
            <input name="paymentAmount" type="int" class="input" />
        </div>

        <div class="form-control">
            <p>Payment date will be generated automatically</p>
        </div>

        <hr />

        <div class="btn-container">
            <button class='btn-view-payment' type="submit" name="submit">Submit Payment</button>
        </div>

    </form>

    <?php
    $postPayment = require('../controller/paymentController.php');
    if (isset($_POST['submit'])) {
        $paymentID = $_POST['paymentID'];
        $paymentDetails = $_POST['paymentDetails'];
        $paymentAmount = $_POST['paymentAmount'];
        if ($paymentID === '' || $paymentDetails === '' || $paymentAmount === '') {
            echo "<script>alert('Fill all the form fields')</script>";
        } else {
            $payment = new Payment();
            $payment->savePayment();
        }
    }
    ?>




    <?php include('./reusable/end.php') ?>