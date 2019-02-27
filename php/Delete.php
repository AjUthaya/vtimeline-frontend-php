<?php
include 'db.php';
$RowId = $_GET['RowId'];
$Delete = "DELETE FROM datas WHERE id='$RowId'";

if ($conn->query($Delete) === TRUE) {
    echo "Record deleted successfully";
    echo "<script type='text/javascript'>  window.location='../EditTimeline.php'; </script>";
    exit;
} else {
    echo "Error deleting record: " . $conn->error;
}
?>
