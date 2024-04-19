<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Event / Details - NiceAdmin Bootstrap Template</title>
  <meta content="Add a meaningful description here" name="description">
  <meta content="keywords, separated, by, commas" name="keywords">

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
      margin: 20px; /* Reduced margin */
      background-color: #b6f3b6; /* Changed to hexadecimal color */
    }

    /* Custom styles for the button */
    .custom-button {
      background-color: green; /* Change button background color to green */
      width: 100%; /* Make the button width 100% of its container */
    }

    /* Custom styles for the card containing the form */
    .card {
      width: 100%; /* Adjusted card width */
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
              <h5 class="card-title">Inventory Details</h5>

              <!-- General Form Elements -->
              <form method="post">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Inventory Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="inventory_name">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Quantity Used</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="quantity_used"> <!-- Changed type to number -->
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Inventory given to whom?(mention the name) </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="recipient_name">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Inventory was used in which event?</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="event_name"> <!-- Changed type to text -->
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <!-- Apply custom button class -->
                    <button type="submit" class="btn btn-primary custom-button">Submit Form</button>
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
         <img src="assets/img/logo.png" alt=""> <!-- Uncommented the logo -->
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
// Assuming you have established a connection to your MySQL database
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inventoryName = $_POST['inventory_name'];
    $quantityUsed = $_POST['quantity_used'];
    $eventName = $_POST['event_name'];
    $recipientName = $_POST['recipient_name'];

    // Query to retrieve eventID corresponding to eventName
    $eventIDQuery = "SELECT eventID FROM event WHERE eName = '$eventName'";
    $eventResult = mysqli_query($conn, $eventIDQuery);

    // Check if event exists
    if ($eventResult && mysqli_num_rows($eventResult) > 0) {
        $eventRow = mysqli_fetch_assoc($eventResult);
        $eventID = $eventRow['eventID'];

        // Query to retrieve volID corresponding to recipientName
        $volunteerIDQuery = "SELECT volID FROM volunteer WHERE name = '$recipientName'";
        $volunteerResult = mysqli_query($conn, $volunteerIDQuery);

        // Check if volunteer exists
        if ($volunteerResult && mysqli_num_rows($volunteerResult) > 0) {
            $volunteerRow = mysqli_fetch_assoc($volunteerResult);
            $volunteerID = $volunteerRow['volID'];

            // Insert into inventory table using retrieved eventID and volunteerID
            $sql = "INSERT INTO inventory (inventory_name, quantity, useEvent, givento_Vol) 
                    VALUES ('$inventoryName', '$quantityUsed', '$eventID', '$volunteerID')";

            if (mysqli_query($conn, $sql)) {
                echo "New record inserted successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        } else {
            echo "Error: Recipient '$recipientName' not found.";
        }
    } else {
        echo "Error: Event '$eventName' not found.";
    }
}
?>


