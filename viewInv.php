<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
      
        <title>Volunteers</title>
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
      
        <!-- =======================================================
        * Template Name: NiceAdmin
        * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
        * Updated: Apr 7 2024 with Bootstrap v5.3.3
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->
      
      </head>
<body>

<header id="header" class="header fixed-top d-flex align-items-center justify-content-center">
    <div>
        <a href="index.html" class="logo d-flex align-items-center">
            <img src="assets/img/logo.png" alt="">
            <span class="d-none d-lg-block">Bhumi - Catalyse</span>
        </a>
    </div><!-- End Logo -->
</header><!-- End Header -->

<main id="main" class="main">

<div class="pagetitle">
    <h1 class="pagetitle-title text-center">Inventory Items</h1>
</div><!-- End Page Title -->

<div class="container">
  <input type="text" id="search-input" placeholder="Search inventory...">
  <ul id="inventory-list" class="list"></ul>
  <div id="pagination-buttons" class="pagination">
    <button id="prev-btn" class="btn" disabled>&lt; Prev</button>
    <button id="next-btn" class="btn">Next &gt;</button>
  </div>
</div>

</main><!-- End Main -->

<!-- Footer -->
<footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Bhumi</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  }
  
  .container {
    max-width: 800px;
    margin: 20px auto;
    padding: 0 20px;
  }
  
  /* Adjust the position of the search bar */
  #search-input {
    margin-left: auto; /* Move the search bar to the right */
    padding: 8px 10px; /* Adjust padding */
    border: 1px solid #ccc; /* Add border for better visibility */
    border-radius: 4px; /* Add border-radius for rounded corners */
    background-image: url('search-icon.png'); /* Add search icon */
    background-size: 20px; /* Set the size of the search icon */
    background-repeat: no-repeat; /* Prevent the search icon from repeating */
    background-position: 95% center; /* Position the search icon to the right */
  }
  
  /* Set the width of the search bar */
  #search-input {
    width: 200px; /* Adjust the width as needed */
  }
  
  /* Style the search icon */
  #search-input::placeholder {
    color: #aaa; /* Set placeholder color */
  }
  
  
  h1 {
    text-align: center;
  }
  
  .list {
    list-style-type: none;
    padding: 0;
  }
  
  .list li {
    border-bottom: 1px solid #ccc;
    padding: 10px 0;
  }
  
  .pagination {
    display: flex;
    justify-content: center;
    margin-top: 20px;
  }
  
  .btn {
    margin: 0 5px;
    padding: 8px 16px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  .btn:disabled {
    background-color: #ccc;
    cursor: not-allowed;
  }
  
  </style>

<!-- Vendor JS Files -->
<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/chart.js/chart.umd.js"></script>
<script src="assets/vendor/echarts/echarts.min.js"></script>
<script src="assets/vendor/quill/quill.min.js"></script>
<script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="assets/vendor/tinymce/tinymce.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Main JS File -->
<script src="script.js"></script>

<script>
// Sample inventory data (replace with actual data fetched from backend)
let inventoryItems = [
  { name: "Item 1", quantity: 10, price: 50 },
  { name: "Item 2", quantity: 20, price: 100 },
  { name: "Item 3", quantity: 15, price: 75 },
  { name: "Item 4", quantity: 8, price: 120 },
  { name: "Item 5", quantity: 12, price: 90 },
  // Add more sample items here...
];

// Function to display inventory items based on current page and search query
function displayInventory(page = 1, searchQuery = '') {
  const inventoryList = document.getElementById('inventory-list');
  const perPage = 3;
  const startIndex = (page - 1) * perPage;
  const endIndex = startIndex + perPage;

  // Filter inventory items based on search query
  const filteredItems = inventoryItems.filter(item => 
    item.name.toLowerCase().includes(searchQuery.toLowerCase())
  );

  // Clear previous content
  inventoryList.innerHTML = '';

  // Loop through filtered items and create list items
  filteredItems.slice(startIndex, endIndex).forEach(item => {
    const listItem = document.createElement('li');
    listItem.innerHTML = `
      <div class="item-details">
        <div>
          <p class="item-name">${item.name}</p>
          <p class="item-quantity">Quantity: ${item.quantity}</p>
          <p class="item-price">Price: $${item.price}</p>
        </div>
      </div>
    `;
    inventoryList.appendChild(listItem);
  });

  const prevBtn = document.getElementById('prev-btn');
      const nextBtn = document.getElementById('next-btn');
      prevBtn.disabled = page === 1;
      nextBtn.disabled = endIndex >= filteredItems.length;
    }

    // Function to handle pagination
    function handlePagination() {
      let currentPage = 1;
      const searchInput = document.getElementById('search-input');
      const prevBtn = document.getElementById('prev-btn');
      const nextBtn = document.getElementById('next-btn');

      // Display initial inventory
      displayInventory(currentPage);

      // Event listener for search input
      searchInput.addEventListener('input', () => {
        const searchQuery = searchInput.value.trim();
        displayInventory(1, searchQuery);
        currentPage = 1; // Reset to the first page
      });

      // Event listener for next button
      nextBtn.addEventListener('click', () => {
        const searchQuery = searchInput.value.trim();
        currentPage++;
        displayInventory(currentPage, searchQuery);
      });

      // Event listener for prev button
      prevBtn.addEventListener('click', () => {
        const searchQuery = searchInput.value.trim();
        currentPage--;
        displayInventory(currentPage, searchQuery);
      });
    }

    // Call the function to handle pagination when the page loads
    window.onload = handlePagination;
  </script>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
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
include "connection.php";

$sql = "SELECT inventory_name, quantity FROM inventory";
$result = $conn->query($sql);

$inventoryItems = [];
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $inventoryItems[] = $row;
  }
  echo json_encode($inventoryItems);
} else {
  echo "0 results";
}
$conn->close();
?>

<script>
document.addEventListener("DOMContentLoaded", function() {
  fetch('fetch_inventory.php')
  .then(response => response.json())
  .then(data => {
    inventoryItems = data; // Setting the global inventoryItems variable
    handlePagination(); // Initialize pagination and display
  })
  .catch(error => console.error('Error fetching data:', error));
});
</script>
