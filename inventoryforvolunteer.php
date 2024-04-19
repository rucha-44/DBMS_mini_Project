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
    .card {
      width: 110%; /* Make the card width 100% */
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
              <h5 class="card-title">Inventory for Volunteers</h5>

              <!-- General Form Elements -->
              <form method="post">
                <div class="row mb-3">
                  <label for="inventoryName" class="col-sm-2 col-form-label">Inventory Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inventoryName" name="inventoryName">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inventoryQuantity" class="col-sm-2 col-form-label">Inventory Quantity</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="inventoryQuantity" name="inventoryQuantity">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inventoryCost" class="col-sm-2 col-form-label">Inventory Cost</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="inventoryCost" name="inventoryCost">
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
// Assuming your database connection details
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "bhumi_";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and sanitize them
    $name = mysqli_real_escape_string($conn, $_POST['inventoryName']);
    $quantity = mysqli_real_escape_string($conn, $_POST['inventoryQuantity']);
    $cost = mysqli_real_escape_string($conn, $_POST['inventoryCost']);

    // Prepare SQL statement using prepared statement
    $sql = "INSERT INTO inventoryforvolunteer (inventory_name, inventory_quantity, inventory_cost) VALUES (?, ?, ?)";
    
    // Create a prepared statement
    $stmt = $conn->prepare($sql);

    // Bind parameters to the prepared statement
    $stmt->bind_param("sii", $name, $quantity, $cost);

    // Execute the prepared statement
    if ($stmt->execute()) {
        echo "<script>alert('Inventory submitted successfully');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
