<?php
include 'db.php';

$Title = $_POST["VarTitle"];
$Year = $_POST["VarYear"];
$Image = $_POST["VarImage"];
$Text = $_POST["VarText"];

//Testing variables to see what they post
/*echo "Title: ". $Title. "<br />";
echo "Year: ". $Year. "<br />";
echo "Image: ". $Image. "<br />";
echo "Text: ". $Text. "<br />";*/

$sql = "INSERT INTO datas (title, image, year, text)
VALUES ('$Title', '$Image', '$Year', '$Text')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    echo "<script type='text/javascript'>  window.location='../EventPage.php'; </script>";
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);
?>
