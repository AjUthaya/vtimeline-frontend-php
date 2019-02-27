<?php
include 'php/db.php';
?>
 <!DOCTYPE html>
 <html>
 <head>
   <meta charset="UTF-8">
   <title>timeline</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
   <link rel="stylesheet" href="css/Main.css">
 </head>

 <body>

   <div class="timeline-container" id="timeline-1">
     <div class="timeline-header">

        <div class="Button-Main">
           <a href="EditTimeline.php" class="myButton">EDIT TIMELINE</a>
        </div>

        <?php
        $Head = "SELECT id, title, subtitle FROM head";
        $HeadResult = $conn->query($Head);

          if ($HeadResult->num_rows > 0) {
              // output data of each row
              while($row = $HeadResult->fetch_assoc()) {

                 echo "<h2 class=\"timeline-header__title\">". $row["title"]. "</h2>";
                 echo "<h3 class=\"timeline-header__subtitle\">". $row["subtitle"]. "</h3>";

              }
          } else {

          }
       ?>

     </div>
     <div class="timeline">
        <?php
        $sql = "SELECT id, title, image, year, text FROM datas ORDER BY convert(year, decimal)";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            echo "<div class=\"timeline-item\" data-text=\"". $row["title"]. "\">
            ";
            echo "<div class=\"timeline__content\"><img class=\"timeline__img\" src=\"". $row["image"]. "\" />
            ";
            echo "<h2 class=\"timeline__content-title\">". $row["year"]. "</h2>
            ";
            echo "<p class=\"timeline__content-desc\">". $row["text"];
            echo "
            </p></div></div>
            ";
         }
            } else {
            echo "0 results";
        }
         ?>
     </div>
   </div>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>

   <script src="js/index.js"></script>

 </body>
 </html>
<?php $conn->close();?>
