<?php
include 'db.php';
$RowId = $_GET['RowId'];

$Title = $_POST['VarTitle'];
$Year = $_POST['VarYear'];
$Image = $_POST['VarImage'];
$Text = $_POST['VarText'];

$Update = "UPDATE datas SET title='$Title', year='$Year', image='$Image', text='$Text' WHERE id=$RowId";

if ($conn->query($Update) === TRUE) {
    echo "Record updated successfully";
    echo "<script type='text/javascript'>  window.location='../EditTimeline.php'; </script>";
} else {
    echo "Error: " . $Update . "<br>" . $conn->error;
}
?>
