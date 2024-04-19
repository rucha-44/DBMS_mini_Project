<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Event / Details - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- Custom CSS -->
  <style>
    body {
      margin: 170px; /* Set margin for the body */
      background-color: rgb(182, 243, 182); /* Change the background color to green */
    }

    /* Custom styles for the button */
    .custom-button {
      background-color: green; /* Change button background color to green */
      width: 100%; /* Make the button width 100% of its container */
    }
  </style>

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 7 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <div class="container">
    <section class="section">
      <div class="row justify-content-center">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Event Details</h5>

              <!-- General Form Elements -->
              <form method="post">
    <div class="row mb-3">
        <label for="inputText" class="col-sm-2 col-form-label">Event Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="event-name">
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputDate" class="col-sm-2 col-form-label">Event Date</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="inputDate" name="event_date">
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputVenue" class="col-sm-2 col-form-label">Venue</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputVenue" name="venue">
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputDetails" class="col-sm-2 col-form-label">Event details</label>
        <div class="col-sm-10">
            <textarea class="form-control" id="inputDetails" rows="3" name="event_details"></textarea>
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
            <!-- Apply custom button class -->
            <button type="submit" class="btn btn-primary custom-button" name="submit">Submit Form</button>
        </div>
    </div>
</form><!-- End General Form Elements -->

            </div>
          </div>

        </div>
      </div>
    </section>
  </div>

  <header id="header" class="header fixed-top d-flex align-items-center justify-content-center">
    <div>
      <a href="index.html" class="logo d-flex align-items-center">
         <!-- <img src="assets/img/logo.png" alt="">-->
          <span class="d-none d-lg-block">Bhumi - Catalyse</span>
      </a>
      <!-- <i class="bi bi-list toggle-sidebar-btn"></i> -->
    </div><!-- End Logo -->
  </header>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  


  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<?php
// Database configuration
include "connection.php";

// Check if form is submitted
if(isset($_POST['submit'])) {
    // Retrieve form data and sanitize them
    $event_name = mysqli_real_escape_string($conn, $_POST['event-name']);
    $event_date = mysqli_real_escape_string($conn, $_POST['event_date']);
    $venue = mysqli_real_escape_string($conn, $_POST['venue']);
    $event_details = mysqli_real_escape_string($conn, $_POST['event_details']);

    // Prepare SQL statement
    $sql = "INSERT INTO `event` (eName, eDate, venue, details) 
            VALUES ('$event_name', '$event_date', '$venue', '$event_details')";

    // Execute SQL statement
    if ($conn->query($sql) === TRUE) {
        echo "Event details saved successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>

