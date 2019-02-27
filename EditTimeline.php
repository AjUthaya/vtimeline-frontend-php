<?php
include 'php/db.php';
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Event</title>
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="http://via.placeholder.com/50x50">
  <link rel="stylesheet" href="css/AddEvent.css">
  <link rel="stylesheet" href="css/Cards.css">
</head>

<body>

  <div class="grid-x section">
    <div class="Left columns small-6 medium-6">
      <a href="index.php" class="button">Back to timeline</a>
    </div>
    <div class="Right-Button columns small-6 medium-6">
      <a href="EventPage.php" class="button">Add new event</a>
    </div>
  </div>

  <section>

    <div class="grid-x small-up-1 medium-up-3 large-up-6">

      <?php
        $sql = "SELECT * FROM datas ORDER BY convert(year, decimal) ASC";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {


       ?>
      <div class="card card-select cell" id="DataTest" data-row-id="<?php echo $row['id']; ?>">
        <div class="card-divider grid-x">
          <h6 class="cell medium-11"><b><?php echo $row["title"]; ?></b></h6>
          <div class="Close-Button cell medium-1">
            <a><span class="fa fa-trash Close-Button-Main" data-row-id="<?php echo $row['id']; ?>" onclick="navigate('php/Delete' ,this.getAttribute('data-row-id'))"></span></a>
          </div>
        </div>

        <img src="<?php echo $row['image']; ?>">
        <div class="card-section">
          <h6><?php echo $row["year"]; ?></h6>
        </div>
        <a class="button" data-row-id="<?php echo $row['id']; ?>" onclick="navigate('UpdatePage' ,this.getAttribute('data-row-id'))">Edit</a>
      </div>

      <?php
        }
           } else {
           echo "0 results";
        }
       ?>

    </div>



  </section>

  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="js/vendor/jquery.js"></script>
  <script src="js/vendor/what-input.js"></script>
  <script src="js/vendor/foundation.js"></script>
  <script src="js/app.js"></script>
</body>

</html>
