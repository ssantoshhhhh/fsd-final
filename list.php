<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Travel Suggestion List</title>
  <link rel="stylesheet" href="./css/list.css" />
</head>
<body>

<header>
    <nav class="navbar">
      <div class="logo">🇮🇳-Incredible India</div>
      <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="state.php">States</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="./bucket-list.php">List</a></li>
        <li><a href="./reach.php">Contact</a></li>
      </ul>
    </nav>
  </header>

  

  <div class="container" style="margin-top: 50px;">
    <h1>🌍 Suggest a Travel Destination</h1>

    <div class="input-section">
      <input type="text" id="nameInput" placeholder="Your Name..." />
      <input type="text" id="countryInput" placeholder="Your Country..." />
      <input type="text" id="placeInput" placeholder="Suggest a place..." />
      <button onclick="addSuggestion()">Suggest</button>
    </div>

    <ul id="suggestionList"></ul>
  </div>
  

  <script src="./js/list.js"></script>
  <!-- <script src="./js/removable-list.js"></script> -->

  <!-- Footer -->
  <?php include './footer.php' ?>
</body>
</html>