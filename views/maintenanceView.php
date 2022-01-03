<?php include('./reusable/begin.php') ?>
<link rel="stylesheet" href="../styles/maintenanceStyle/maintenance.css">
<link rel="stylesheet" href="../styles/headerStyle/headerStyle.css">
<title>Maintenance page</title>
</head>

<body>
    <?php

    include('./reusable/header.php');
    require_once '../../CBS project/controller/MaintenanceController.php';
    ?>

    <?php echo "<img src='/CBS project/image/maintenance.jpeg' alt='gambo' width='100%' height='300' align='left'/>";?>
    <form action="" method="POST" class="form-container">

        <div class="form-control">
            <label for="maint Court">Maintenance Court(ID)</label>
            <input name="maintCourt" type="text" class="input" />
        </div>

        <div class="form-control">
            <label for="maint Duration">Maintenance Duration</label>
            <input name="maintDuration" type="text" cols="50" rows=10 />
        </div>

        <div class="form-control">
            <label for="maint Date">Maintenance Date</label>
            <input name="maintDate" type="text" class="input"/>
        </div>

        <div class="form-control">
            <label for="maint Details">Maintenance Details</label>
            <input name="maintDetails" type="details" class="input" />
        </div>

        
        <hr />

        <div class="btn-container">
            <button class='glow-on-hover' type="submit" name="submit">ADD MAINTAINANCE </button>

        </div>

    </form>

    <?php
    $postMaintenance = require_once '../controller/maintenanceController.php';
    if (isset($_POST['submit'])) {
        $maintCourt = $_POST['maintCourt'];
        $maintDuration = $_POST['maintDuration'];
        $maintDate = $_POST['maintDate'];
        $maintDetails = $_POST['maintDetails'];

        if ($maintCourt === '' || $maintDuration === '' || $maintDate === '' || $maintDetails === '' ) {
            echo "<script>alert('Please fill in all the field!')</script>";
        } else {
            $maintenance = new Maintenance();
            $maintenance->saveMaintenance();
        }
    }
  


?>
	"</br> ";
	"</br> ";
	<?php include('../../CBS project/model/MaintenanceModel.php') ?>
    <?php include('./reusable/end.php') ?>