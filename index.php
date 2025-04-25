<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Incredible India - Discover the Magic</title>
  <link rel="stylesheet" href="./css/main.css">
  <link rel="stylesheet" href="./css/india-theme.css"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
<?php include "./header.php" ?>
  <!-- Navbar -->
  <!-- <header>
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
  </header> -->


<!-- Hero Section with Video -->
<section class="hero">
  <video autoplay muted loop playsinline class="hero-video">
    <source src="./vid/videoplayback.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
  <div class="hero-text">
    <h1>Explore India’s Top Tourist Places</h1>
    <p>From the Himalayas to Kanyakumari, discover every magical corner of India.</p>
    <!-- <a href="state.html" class="cta-button">Explore States</a> -->
  </div>
</section>



  <!-- Highlights -->
  <section class="section highlights">
    <h2>Why Visit India?</h2>
    <div class="cards">
      <div class="card">
        <img src="./assets/culture.jpg" alt="Culture">
        <h3>Vibrant Culture</h3>
        <p>Dance, music, festivals, and local customs that reflect centuries of tradition.</p>
      </div>
      <div class="card">
        <img src="./assets/landscape.webp" alt="Nature">
        <h3>Diverse Landscapes</h3>
        <p>Snow-capped mountains, deserts, tropical beaches, lush forests, and more.</p>
      </div>
      <div class="card">
        <img src="./assets/history.jpg" alt="History">
        <h3>Timeless Heritage</h3>
        <p>Witness monuments, temples, and forts that echo ancient India’s glory.</p>
      </div>
    </div>
  </section>

  <!-- Popular Destinations -->
  <section class="section destinations">
    <h2>Popular Destinations</h2>
    <div class="cards">
      <div class="card">
        <img src="./assets/goa.jpg" alt="Goa">
        <h3>Goa</h3>
        <p>Famous for beaches, nightlife, and Portuguese heritage.</p>
      </div>
      <div class="card">
        <img src="assets/rajasthan.jpg" alt="Rajasthan">
        <h3>Rajasthan</h3>
        <p>Known for palaces, forts, and desert adventures.</p>
      </div>
      <div class="card">
        <img src="./assets/kashimir.jpg" alt="Kashmir">
        <h3>Kashmir</h3>
        <p>Heaven on Earth — valleys, snow-capped mountains, and shikaras.</p>
      </div>
      
    </div>
  </section>

  <!-- Travel Tips -->
  <!-- Travel Tips Section -->
<section class="section travel-tips">
    <h2>Top Travel Tips</h2>
    <ul>
      <li>✨ Travel light, carry a reusable water bottle, and wear comfortable shoes.</li>
      <li>🌞 Visit during cooler months (October–March) for the best experience.</li>
      <li>📱 Use travel apps and offline maps when exploring rural areas.</li>
      <li>🙏 Respect local customs and dress modestly in religious places.</li>
    </ul>
</section>

<!-- Testimonials Section -->
<!-- 
<section class="section experiences">
    <h2>What Travelers Say</h2>
    <div class="cards">
        <div class="card">
            <img src="./assets/tajmahal.jpg" alt="Taj Mahal">
            <h3>Alice, USA</h3>
            <p>"I fell in love with India’s colors, chaos, and kindness. Agra’s Taj Mahal left me speechless!"</p>
        </div>
        <div class="card">
            <img src="./assets/kerela.jpg" alt="Kerala">
            <h3>Tom, UK</h3>
            <p>"Cruising through Kerala’s backwaters was peaceful and soul-refreshing. Highly recommend it!"</p>
        </div>
        <div class="card">
            <img src="./assets/varanasi.jpg" alt="Varanasi">
            <h3>Sakura, Japan</h3>
            <p>"Varanasi’s spiritual vibe was unforgettable. The Ganga Aarti felt magical!"</p>
        </div>
    </div>
</section>
-->

<!-- Call to Action Section -->
<section class="section call-to-action">
    <h2>Ready to Start Your Journey?</h2>
    <p>Plan your visit today and uncover the magic that is India!</p><br>
    <a href="state.html" class="cta-button">Get Started</a>
</section>

<!-- About & Contact Section -->
<section class="section about-contact">
    <div class="about">
        <h2>About Incredible India</h2>
        <p>We aim to promote tourism by highlighting India’s beauty, culture, and hidden gems. Whether you're a local traveler or a global tourist, India welcomes you with open arms.</p>
    </div>
    <div class="contact-cta">
        <h2>Need Help Planning?</h2>
        <p>Have questions or need suggestions? Reach out to our travel experts.</p><br>
    </div>
</section>
  <?php include './footer.php' ?>

</body>
</html>
