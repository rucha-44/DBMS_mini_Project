<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Events</title>
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
            <!-- <i class="bi bi-list toggle-sidebar-btn"></i> -->
        </div><!-- End Logo -->
    </header><!-- End Header -->

  <main id="main" class="main">

    <div class="pagetitle">
        <h1 class="pagetitle-title text-center">Table of Events</h1>
    </div><!-- End Page Title -->

    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Events</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="events-container">
    <input type="text" id="search-input" placeholder="Search events...">
    <ul id="events-list"></ul>
    <div id="pagination-buttons">
      <button id="prev-btn" disabled>&lt; Prev</button>
      <button id="next-btn">Next &gt;</button>
    </div>
  </div>
  <script src="script.js"></script>
</body>
</html>


<style>
  body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

.events-container {
  max-width: 800px;
  margin: 20px auto;
  padding: 0 20px;
}

h1 {
  text-align: center;
}

ul {
  list-style-type: none;
  padding: 0;
}

li {
  border-bottom: 1px solid #ccc;
  padding: 10px 0;
}

.event-details {
  display: flex;
  justify-content: space-between;
}

.event-name {
  font-weight: bold;
}

.event-date {
  color: #666;
}

.event-venue {
  color: #666;
}

</style>

<script>
  // Sample event data (replace with actual data fetched from backend)
let events = [
  { ename: "Tree Plantation", edate: "2024-04-24", evenue: "Sarasbaug, Pune, Maharashtra", edetails: "Seeds will be provided" },
  { ename: "Bottle Painting", edate: "2024-04-27", evenue: "Pune, Maharashtra, India", edetails: "Bring plastic bottles" },
  { ename: "Event 3", edate: "2024-04-30", evenue: "Venue 3", edetails: "Details for Event 3" },
  { ename: "Event 4", edate: "2024-05-5", evenue: "Venue 4", edetails: "Details for Event 4" },
  { ename: "Event 5", edate: "2024-05-12", evenue: "Venue 5", edetails: "Details for Event 5" },
  { ename: "Event 6", edate: "2024-05-19", evenue: "Venue 6", edetails: "Details for Event 6" },
  // Add more sample events here...
];

// Function to display events based on current page and search query
function displayEvents(page = 1, searchQuery = '') {
  const eventsList = document.getElementById('events-list');
  const perPage = 3;
  const startIndex = (page - 1) * perPage;
  const endIndex = startIndex + perPage;

  // Filter events based on search query
  const filteredEvents = events.filter(event => 
    event.ename.toLowerCase().includes(searchQuery.toLowerCase()) ||
    event.edate.includes(searchQuery.toLowerCase()) ||
    event.evenue.toLowerCase().includes(searchQuery.toLowerCase()) ||
    event.edetails.toLowerCase().includes(searchQuery.toLowerCase())
  );

  // Clear previous content
  eventsList.innerHTML = '';

  // Loop through filtered events and create list items
  filteredEvents.slice(startIndex, endIndex).forEach(event => {
    const listItem = document.createElement('li');
    listItem.innerHTML = `
      <div class="event-details">
        <div>
          <p class="event-name">${event.ename}</p>
          <p class="event-date">${event.edate}</p>
          <p class="event-venue">${event.evenue}</p>
        </div>
        <p>${event.edetails}</p>
      </div>
    `;
    eventsList.appendChild(listItem);
  });

  // Enable or disable pagination buttons based on current page
  const prevBtn = document.getElementById('prev-btn');
  const nextBtn = document.getElementById('next-btn');
  prevBtn.disabled = page === 1;
  nextBtn.disabled = endIndex >= filteredEvents.length;
}

// Function to handle pagination
function handlePagination() {
  let currentPage = 1;
  const searchInput = document.getElementById('search-input');
  const prevBtn = document.getElementById('prev-btn');
  const nextBtn = document.getElementById('next-btn');

  // Display initial events
  displayEvents(currentPage);

  // Event listener for search input
  searchInput.addEventListener('input', () => {
    const searchQuery = searchInput.value.trim();
    displayEvents(currentPage, searchQuery);
  });

  // Event listener for next button
  nextBtn.addEventListener('click', () => {
    const searchQuery = searchInput.value.trim();
    currentPage++;
    displayEvents(currentPage, searchQuery);
  });

  // Event listener for prev button
  prevBtn.addEventListener('click', () => {
    const searchQuery = searchInput.value.trim();
    currentPage--;
    displayEvents(currentPage, searchQuery);
  });
}

// Call the function to handle pagination when the page loads
window.onload = handlePagination;


</script>

  <!-- ======= Footer ======= -->
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
include "connection.php";

// SQL query to fetch events
$sql = "SELECT * FROM event";
$result = $conn->query($sql);

// Fetch data and encode it as JSON
$events = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $events[] = $row;
    }
}

// Close connection
$conn->close();

// Send JSON response
//header('Content-Type: application/json');
echo json_encode($events);
?>

<script>
function fetchEvents() {
  fetch('fetch_event.php')
    .then(response => response.json())
    .then(data => {
      // Process the retrieved data (e.g., display events)
      console.log(data);
    })
    .catch(error => console.error('Error fetching events:', error));
}

fetchEvents();
</script>