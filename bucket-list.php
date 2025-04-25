<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Travel Bucket List</title>
  <link rel="stylesheet" href="./css/bucket.css" />
</head>
<body>

  <!-- Navbar -->
  <?php include "./header.php"?>

<div class="container">
  <h1>🌍 My Travel Bucket List</h1>

  <div class="input-section">
    <input type="text" id="placeInput" placeholder="Enter place name..." />
    <button onclick="addPlace()">Add</button>
  </div>

  <div class="filters">
    <button onclick="filterList('all')">All</button>
    <button onclick="filterList('to-visit')">To Visit</button>
    <button onclick="filterList('visited')">Visited</button>
    <button onclick="clearAll()">Clear All</button>
  </div>

  <ul id="bucketList"></ul>
</div>
<br><br><br><br><br>
<br><br>

<script src="./js/bucket.js"></script>

  <!-- Footer -->
  <?php include './footer.php' ?>

</body>
</html>