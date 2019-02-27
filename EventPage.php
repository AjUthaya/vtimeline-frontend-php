<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Event</title>
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="icon" href="http://via.placeholder.com/50x50">
  <link rel="stylesheet" href="css/AddEvent.css">
</head>

<body>
  <div class="grid-x section">
    <div class="Left columns medium-6">
      <a href="index.php" class="button">Back to timeline</a>
    </div>
    <div class="Right-Button columns medium-6">
      <a href="EditTimeline.php" class="button">Edit timeline data</a>
    </div>
  </div>
  <section class="contact-us-section">
    <div class="row medium-unstack">
      <div class="columns contact-us-section-right">
        <h1 class="contact-us-header">Add new event to timeline</h1>
        <form class="contact-us-form" action="php/AddEvent.php" method="post">
          <input type="text" name="VarTitle" placeholder="Title" autocomplete="off" required>
          <input type="text" name="VarYear" placeholder="Year" autocomplete="off" required>
          <input type="text" name="VarImage" placeholder="URL to image" required>
          <textarea rows="12" placeholder="Type your text here" name="VarText" required></textarea>
          <div class="contact-us-form-actions">
            <button type="submit" class="button">Submit</button>
          </div>
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
