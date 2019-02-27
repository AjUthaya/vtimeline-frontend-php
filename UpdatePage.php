<?php
include 'php/db.php';
$RowId = $_GET['RowId'];
//Get based on ID
$sql = "SELECT * FROM datas WHERE id=$RowId";
$result = $conn->query($sql);
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update data</title>
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="icon" href="http://via.placeholder.com/50x50">
  <link rel="stylesheet" href="css/AddEvent.css">
</head>

<body>

  <div class="grid-x section">
    <div class="Left columns small-6 medium-6">
      <a href="index.php" class="button">Back to timeline</a>
    </div>

    <div class="Right-Button columns small-6 medium-6">
      <a href="EditTimeline.php" class="button">Edit timeline data</a>
    </div>
  </div>


  <section class="contact-us-section">

    <div class="row medium-unstack">
      <div class="columns contact-us-section-right">
        <h1 class="contact-us-header">Update data</h1>
        <form class="contact-us-form" action="php/UpdateData.php?<?php echo 'RowId='. $RowId; ?>" method="post">
          <?php
            if ($result == true) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
           ?>
          <input type="text" name="VarTitle" placeholder="Title" value="<?php echo $row["title"]; ?>" required>
          <input type="text" name="VarYear" placeholder="Year" value="<?php echo $row["year"]; ?>" required>
          <input type="text" name="VarImage" placeholder="URL to image" value="<?php echo $row["image"]; ?>" required>
          <textarea rows="12" placeholder="Type your text here" name="VarText" required><?php echo $row["text"]; ?></textarea>
          <div class="contact-us-form-actions">
            <button type="submit" class="button">Submit</button>
          </div>
          <?php
            }
               } else {
               echo "0 results";
           }
           $conn->close();
           ?>
        </form>
      </div>
    </div>


  </section>


  <script src="js/vendor/jquery.js"></script>
  <script src="js/vendor/what-input.js"></script>
  <script src="js/vendor/foundation.js"></script>
  <script src="js/app.js"></script>
</body>

</html>
