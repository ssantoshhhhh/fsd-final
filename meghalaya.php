<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Explore Meghalaya</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <style>
    /* General Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: #faf9f9;
      color: #222;
      line-height: 1.6;
      padding-top: 80px; /* Adjusted for fixed navbar */
    }

    /* Root Variables */
    :root {
      --saffron: #FF9933;
      --white: #FFFFFF;
      --green: #138808;
      --navy-blue: #000080;
    }

    /* Navbar */
    .navbar {
      background: linear-gradient(to right, var(--saffron), var(--white), var(--green));
      padding: 1rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1000;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    /* Logo Animation */
    .logo {
      font-size: 1.6rem;
      font-weight: 600;
      color: var(--navy-blue);
      transition: transform 0.4s ease, box-shadow 0.4s ease;
    }

    .logo:hover {
      transform: scale(1.08);
      box-shadow: 0 0 15px rgba(19, 136, 8, 0.3);
    }

    /* Nav Links */
    .nav-links {
      list-style: none;
      display: flex;
      gap: 1.5rem;
    }

    .nav-links a {
      text-decoration: none;
      font-weight: 500;
      color: var(--navy-blue);
      padding-bottom: 4px;
      transition: color 0.4s ease;
    }

    .nav-links a:hover {
      color: var(--green);
    }

    /* Title Section */
    .title-section {
      background: url('./states-cover/assam-cover.webp') center center no-repeat; /* Center the image */
      background-size: cover; /* Ensure the image is fully visible */
      padding: 4rem 2rem;
      text-align: center;
      color: #fff;
      min-height: 400px; /* Set a minimum height for the section */
    }

    /* Title Styles */
    .title-section h1 {
      font-size: 2.5rem;
      margin-bottom: 1rem;
    }

    .title-section p {
      font-size: 1.2rem;
      text-shadow: 1px 1px 4px #000;
    }

    /* Destinations Grid Section */
    .destinations-grid {
      padding: 6rem 2rem; /* Increased padding for larger gaps around cards */
      display: flex; /* Use flexbox to align cards */
      flex-direction: column; /* Arrange cards vertically */
      align-items: center; /* Center cards horizontally */
      gap: 1.5rem; /* Adding gap between cards */
    }

    /* Destination Card */
    .destination-card {
      display: block; /* Make it a block-level element */
      background: #fff;
      border: 1px solid #ddd;
      border-left: 5px solid var(--green);
      border-radius: 10px;
      width: 950px; /* Adjusted width of the card  */
      padding: 1rem; /* Adjusted padding for aesthetics */
      text-decoration: none;
      color: inherit;
      transition: transform 0.4s ease, box-shadow 0.4s ease;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Added subtle shadow for depth */
      position: relative; /* Relative positioning for z-index manipulation */
    }

    .destination-card:hover {
      transform: translateY(-10px); /* Move card up slightly on hover */
      box-shadow: 0 12px 20px rgba(0, 0, 0, 0.2); /* Deeper shadow on hover */
      border-left-color: var(--saffron);
    }

    .destination-card h3 {
      margin: 0.5rem 0; /* Spacing adjustments */
      color: var(--navy-blue);
    }

    .destination-card p {
      font-size: 0.95rem;
      margin: 0.5rem 0;
    }

    /* Details Section */
    .details {
      margin-top: 1rem; /* Space above details */
      font-size: 0.9rem; /* Slightly smaller font for descriptions */
      color: #555; /* Dark gray for contrast against the white background */
    }

    /* Image Styling for Cards */
    .destination-card img {
      width: 100%; /* Use full width of the card */
      max-width: 250px; /* Ensure the image doesn't exceed this width */
      height: auto; /* Maintain aspect ratio */
      object-fit: cover; /* Adjust the content elegantly */
      border-radius: 6px;
      margin: 0 auto; /* Center the image horizontally */
      display: block; /* Ensure it behaves as a block element for centering */
    }

    /* Map iframe Styling */
    .details iframe {
      width: 100%; /* Make the map responsive */
      height: 250px; /* Kept height for a smaller map */
      border: none; /* Remove border */
      border-radius: 8px; /* Slight rounding */
      margin-top: 1rem; /* Spacing above map */
    }

    /* Footer */
    footer {
      background-color: var(--navy-blue);
      color: #fff;
      text-align: center;
      padding: 1.5rem;
    }

    footer a {
      color: #ffcc00;
      text-decoration: none;
      transition: color 0.3s ease;
    }

    footer a:hover {
      text-decoration: underline;
      color: #fff;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
<?php include "./header.php"?>

  <!-- Hero Section -->
  <section class="title-section">
    <h1>WELCOME TO MEGHALAYA</h1>
    <p>Explore the land of clouds, living root bridges, and breathtaking waterfalls in India's northeastern paradise</p>
  </section>

  <!-- Destinations Grid Section -->
  <section class="destinations-grid">
    <!-- Shillong Card -->
    <a href="#" class="destination-card">
      <img src="./state-images/shillonmg.jpg" alt="Shillong - Scotland of the East">
      <h3>Shillong</h3>
      <p>The Scotland of the East</p>
      <div class="highlights">
        <ul>
          <li>Ward's Lake - A picturesque artificial lake surrounded by gardens</li>
          <li>Elephant Falls - Multi-tiered waterfall named for an elephant-shaped rock</li>
          <li>Shillong Peak - Highest point offering panoramic views of the city</li>
        </ul>
      </div>
      <div class="details">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57344.39647315776!2d91.8335244241211!3d25.578536899999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37507e8f34c93d59%3A0x86f0432c575fb060!2sShillong%2C%20Meghalaya!5e0!3m2!1sen!2sin!4v1681897451262!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </a>

    <!-- Cherrapunji Card -->
    <a href="#" class="destination-card">
      <img src="./state-images/chirapunji.jpg" alt="Cherrapunji - Land of Living Root Bridges">
      <h3>Cherrapunji</h3>
      <p>The Land of Living Root Bridges</p>
      <div class="highlights">
        <ul>
          <li>Double Decker Root Bridge - Natural living bridge formed from the roots of rubber trees</li>
          <li>Seven Sisters Waterfall - Seven streams cascading down the cliff face</li>
          <li>Mawsmai Cave - Limestone cave with fascinating formations</li>
        </ul>
      </div>
      <div class="details">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14485.979282583097!2d91.6954462697754!3d25.27959899999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37507e03f83aaf93%3A0xa07deffb8348841!2sCherrapunji%2C%20Meghalaya!5e0!3m2!1sen!2sin!4v1681897513262!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </a>

    <!-- Mawlynnong Card -->
    <a href="#" class="destination-card">
      <img src="./state-images/mawlynnog.jpg" alt="Mawlynnong - Asia's Cleanest Village">
      <h3>Mawlynnong</h3>
      <p>Asia's Cleanest Village</p>
      <div class="highlights">
        <ul>
          <li>Sky View - Bamboo viewpoint structure offering panoramic views</li>
          <li>Living Root Bridge - Single-decker root bridge near the village</li>
          <li>Balancing Rock - Natural rock formation balanced precariously</li>
        </ul>
      </div>
      <div class="details">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14502.083352172128!2d91.645628!3d25.20229505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750428457d0a129%3A0xafc091d8260d2162!2sMawlynnong%2C%20Meghalaya!5e0!3m2!1sen!2sin!4v1681897572262!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </a>

    <!-- Nohkalikai Falls Card -->
    <a href="#" class="destination-card">
      <img src="./state-images/nohkallai waterfall.jpg" alt="Nohkalikai Falls - Tallest Waterfall in India">
      <h3>Nohkalikai Falls</h3>
      <p>India's Tallest Plunge Waterfall</p>
      <div class="highlights">
        <ul>
          <li>1,115 feet tall waterfall with a crystal blue plunge pool</li>
          <li>Stunning viewpoints accessible by short walking paths</li>
          <li>Local legends and folklore surrounding the waterfall's name</li>
        </ul>
      </div>
      <div class="details">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3622.213923084655!2d91.68039591498159!3d25.272402883857928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37507f267a07d407%3A0xb9e9459fecaaa511!2sNohkalikai%20Falls!5e0!3m2!1sen!2sin!4v1681897622262!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </a>
  </section>

  <!-- Footer -->
  ./<?php include './footer.php' ?>
</body>
</html>