<?php
include('include/config.php');

if(!empty($_POST["specilizationid"])) {
    $spec = mysqli_real_escape_string($con, $_POST["specilizationid"]);
    $ret = mysqli_query($con, "SELECT id, doctorName FROM doctors WHERE specilization='$spec'");
    echo '<option value="">Select Doctor</option>';
    while($row = mysqli_fetch_array($ret)) {
        echo '<option value="'.htmlentities($row['id']).'">'.htmlentities($row['doctorName']).'</option>';
    }
}

if(!empty($_POST["doctor"])) {
    $doctorId = mysqli_real_escape_string($con, $_POST["doctor"]);
    $ret = mysqli_query($con, "SELECT docFees FROM doctors WHERE id='$doctorId' LIMIT 1");
    echo '<option value="">Select Fee</option>';
    while($row = mysqli_fetch_array($ret)) {
        echo '<option value="'.htmlentities($row['docFees']).'">'.htmlentities($row['docFees']).'</option>';
    }
}
?>
