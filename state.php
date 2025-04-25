<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>States of India</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/states-theme.css">
    <style>

      /* Add some CSS for the search bar and no results message */
.search-bar {
    margin: 20px auto;
    text-align: center;
}

.search-bar input {
    padding: 12px 20px; /* More padding for a better touch target */
    width: 100%; /* Full width on smaller screens */
    max-width: 400px; /* Maximum width for larger screens */
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 25px; /* Rounded corners */
    outline: none; /* Removes the default outline */
    transition: border-color 0.3s, box-shadow 0.3s; /* Smooth transition for focus effect */
}

.search-bar input:focus {
    border-color: #007bff; /* Change border color on focus */
    box-shadow: 0 0 10px rgba(0, 123, 255, 0.5); /* Subtle shadow on focus */
}

.no-results {
    text-align: center;
    font-size: 18px; /* Slightly smaller but bold */
    color: #e74c3c; /* Red color for no results */
    margin: 20px 0;
    font-weight: bold; /* Make the text bold */
}

.hidden {
    display: none; /* Hides the message */
}
    </style>
</head>
<body>

  <!-- Navbar -->
  <?php include "./header.php"?>

  <!-- Title Section -->
  <section class="title-section">
      <h1>Explore the Beautiful States of India</h1>
      <p>Click on any state card to learn more about its unique features and culture.</p>
  </section>

  <!-- Search Bar Section -->
  <div class="search-bar">
      <input type="text" id="searchInput" placeholder="Search for a state..." onkeyup="filterStates()">
  </div>

  <!-- No Results Section -->
<div class="no-results hidden" id="noResultsMessage">No results found</div>

  <!-- State Cards Section -->
  <div class="states-grid" id="statesGrid">
    <a href="./ap.php" class="state-card">
      <img src="./assets/states/andhra.jpg" alt="Andhra Pradesh" />
      <h3>Andhra Pradesh</h3>
      <p>Known for Tirupati temple, beaches, and rich cultural heritage.</p>
    </a>
    <a href="./arunachal.php" class="state-card">
      <img src="./assets/states/arunachal-pradesh.jpeg" alt="Arunachal Pradesh" />
      <h3>Arunachal Pradesh</h3>
      <p>Land of the Dawn-Lit Mountains, scenic beauty and monasteries.</p>
    </a>
    <a href="./assam.php" class="state-card">
      <img src="./assets/states/assam.jpeg" alt="Assam" />
      <h3>Assam</h3>
      <p>Famous for tea gardens, Kaziranga, and Bihu festivals.</p>
    </a>
    <a href="./bihar.php" class="state-card">
      <img src="./assets/states/bihar.jpg" alt="Bihar" />
      <h3>Bihar</h3>
      <p>Home to Nalanda, Bodh Gaya, and ancient heritage.</p>
    </a>
    <a href="./chhattisgarh.php" class="state-card">
      <img src="./assets/states/chhattisgarh.jpg" alt="Chhattisgarh" />
      <h3>Chhattisgarh</h3>
      <p>Land of waterfalls, tribal culture, and forests.</p>
    </a>
    <a href="./goa.php" class="state-card">
      <img src="./assets/states/goa.jpg" alt="Goa" />
      <h3>Goa</h3>
      <p>Beaches, nightlife, churches, and Portuguese influence.</p>
    </a>
    <a href="./gujarat.php" class="state-card">
      <img src="./assets/states/gujrat.jpg" alt="Gujarat" />
      <h3>Gujarat</h3>
      <p>Gir lions, white desert, temples, and cultural vibrance.</p>
    </a>
    <a href="./haryana.php" class="state-card">
      <img src="./assets/states/haryana.jpg" alt="Haryana" />
      <h3>Haryana</h3>
      <p>Historic battleground of Kurukshetra and rural beauty.</p>
    </a>
    <a href="./himachal.php" class="state-card">
      <img src="./assets/states/himachalpradesh.jpg" alt="Himachal Pradesh" />
      <h3>Himachal Pradesh</h3>
      <p>Himalayan hill stations like Manali, Shimla, and Dalhousie.</p>
    </a>
    <a href="./jharkhand.php" class="state-card">
      <img src="./assets/states/jharkhand.jpeg" alt="Jharkhand" />
      <h3>Jharkhand</h3>
      <p>Forests, waterfalls, and tribal culture.</p>
    </a>
    <a href="./kartanaka.php" class="state-card">
      <img src="./assets/states/karnataka.jpg" alt="Karnataka" />
      <h3>Karnataka</h3>
      <p>Bangalore, Hampi ruins, temples, and hill stations.</p>
    </a>
    <a href="./kerala.php" class="state-card">
      <img src="./assets/states/kerela.jpg" alt="Kerala" />
      <h3>Kerala</h3>
      <p>Backwaters, Ayurveda, and lush green landscapes.</p>
    </a>
    <a href="./madhya_pradesh.php" class="state-card">
      <img src="./assets/states/madhyapradesh.jpeg" alt="Madhya Pradesh" />
      <h3>Madhya Pradesh</h3>
      <p>Khajuraho, wildlife sanctuaries, and historical forts.</p>
    </a>
    <a href="./maharastra.php" class="state-card">
      <img src="./assets/states/maharastra.jpeg" alt="Maharashtra" />
      <h3>Maharashtra</h3>
      <p>Home to Mumbai, Ajanta-Ellora caves, forts, and film industry.</p>
    </a>
    <a href="./manipur.php" class="state-card">
      <img src="./assets/states/maipur.jpg" alt="Manipur" />
      <h3>Manipur</h3>
      <p>Loktak Lake, floating islands, and classical dance.</p>
    </a>
    <a href="./meghalaya.php" class="state-card">
      <img src="./assets/states/meghalaya.jpeg" alt="Meghalaya" />
      <h3>Meghalaya</h3>
      <p>Cherrapunji, living root bridges, and waterfalls.</p>
    </a>
    <a href="./mizoram.php" class="state-card">
      <img src="./assets/states/mizoram.jpg" alt="Mizoram" />
      <h3>Mizoram</h3>
      <p>Hills, tribal festivals, and vibrant nature.</p>
    </a>
    <a href="./nagaland.php" class="state-card">
      <img src="./assets/states/nagaland.jpeg" alt="Nagaland" />
      <h3>Nagaland</h3>
      <p>Hornbill festival and diverse tribal culture.</p>
    </a>
    <a href="./odisha.php" class="state-card">
      <img src="./assets/states/odisha.jpg" alt="Odisha" />
      <h3>Odisha</h3>
      <p>Konark Sun Temple, Jagannath Puri, and beaches.</p>
    </a>
    <a href="./punjab.php" class="state-card">
      <img src="./assets/states/punjab.png" alt="Punjab" />
      <h3>Punjab</h3>
      <p>Golden Temple, Bhangra, and vibrant food culture.</p>
    </a>
    <a href="./rajasthan.php" class="state-card">
      <img src="./assets/states/rajasthan.jpg" alt="Rajasthan" />
      <h3>Rajasthan</h3>
      <p>Palaces, deserts, and rich Rajput heritage.</p>
    </a>
    <a href="./sikkim.php" class="state-card">
      <img src="./assets/states/sikkim.jpeg" alt="Sikkim" />
      <h3>Sikkim</h3>
      <p>Mountains, monasteries, and biodiversity.</p>
    </a>
    <a href="./tamilnadu.php" class="state-card">
      <img src="./assets/states/tamilnadu-adiyogi.jpeg" alt="Tamil Nadu" />
      <h3>Tamil Nadu</h3>
      <p>Temples, Chennai, and classical arts.</p>
    </a>
    <a href="./telangana.php" class="state-card">
      <img src="./assets/states/telengana-charminar.jpeg" alt="Telangana" />
      <h3>Telangana</h3>
      <p>Hyderabad, Charminar, and modern IT hub.</p>
    </a>
    <a href="./tripura.php" class="state-card">
      <img src="./assets/states/tripura.webp" alt="Tripura" />
      <h3>Tripura</h3>
      <p>Ujjayanta Palace, hills, and cultural harmony.</p>
    </a>
    <a href="./uttarpradesh.php" class="state-card">
      <img src="./assets/states/UTTAR-PRADESH.jpg" alt="Uttar Pradesh" />
      <h3>Uttar Pradesh</h3>
      <p>Taj Mahal, Varanasi, temples, and ghats.</p>
    </a>
    <a href="./uttarakhand.php" class="state-card">
      <img src="./assets/states/uttarkhand.webp" alt="Uttarakhand" />
      <h3>Uttarakhand</h3>
      <p>Rishikesh, Himalayas, and spiritual sites.</p>
    </a>
    <a href="./westbengal.php" class="state-card">
      <img src="./assets/states/west-bengal.jpg" alt="West Bengal" />
      <h3>West Bengal</h3>
      <p>Kolkata, Durga Puja, and cultural richness.</p>
    </a>
  </div>

  <?php include './footer.php'; ?>

  <script>
    function filterStates() {
        // Get the search input value and convert it to lowercase
        const input = document.getElementById('searchInput').value.toLowerCase();
        const stateCards = document.querySelectorAll('.state-card');
        const noResultsMessage = document.getElementById('noResultsMessage');
        let resultsFound = false;

        // Iterate through the state cards and filter them based on input
        stateCards.forEach(card => {
            const stateName = card.querySelector('h3').textContent.toLowerCase();
            const stateDescription = card.querySelector('p').textContent.toLowerCase();
            if (stateName.includes(input) || stateDescription.includes(input)) {
                card.style.display = "block"; // Show the state card
                resultsFound = true;
            } else {
                card.style.display = "none"; // Hide the state card
            }
        });

        // Show or hide the no results message
        if (resultsFound) {
            noResultsMessage.style.display = 'none';
        } else {
            noResultsMessage.textContent = `No results found for "${input}"`; // Custom message based on input
            noResultsMessage.style.display = 'block';
        }
    }
</script>
</body>
</html>