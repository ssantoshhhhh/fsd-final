<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Explore Maharashtra</title>
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
      background: url('./states-cover/maharsatra-cover.jpg') center center no-repeat; /* Center the image */
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

    /* States Grid - Vertical Stack */
    .states-grid {
      padding: 6rem 2rem; /* Increased padding for larger gaps around cards */
      display: flex; /* Use flexbox to align cards */
      flex-direction: column; /* Arrange cards vertically */
      align-items: center; /* Center cards horizontally */
    }

    /* State Card */
    .state-card {
      display: block; /* Make it a block-level element */
      background: #fff;
      border: 1px solid #ddd;
      border-left: 5px solid var(--green);
      border-radius: 10px;
      width: 950px; /* Adjusted width of the card  */
      margin: 15px 0; /* Vertical margin for spacing between layers */
      padding: 1rem; /* Adjusted padding for aesthetics */
      text-decoration: none;
      color: inherit;
      transition: transform 0.4s ease, box-shadow 0.4s ease;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Added subtle shadow for depth */
      position: relative; /* Relative positioning for z-index manipulation */
    }

    .state-card:hover {
      transform: translateY(-10px); /* Move card up slightly on hover */
      box-shadow: 0 12px 20px rgba(0, 0, 0, 0.2); /* Deeper shadow on hover */
      border-left-color: var(--saffron);
    }

    .state-card h3 {
      margin: 0.5rem 0; /* Spacing adjustments */
      color: var(--navy-blue);
    }

    .state-card p {
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
    .state-card img {
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
    <h1>WELCOME TO MAHARASHTRA</h1>
    <p>Explore the vibrant culture, stunning landscapes, and rich heritage of India's most dynamic state</p>
  </section>

  <!-- Destinations Grid Section -->
  <section class="states-grid">
    <!-- Mumbai Card -->
    <a href="#" class="state-card">
      <img src="./state-images/mumbai.jpg" alt="Mumbai - Gateway of India">
      <h3>Mumbai</h3>
      <p>The City of Dreams</p>
      <div class="details">
        <ul>
          <li>Gateway of India - The iconic monument overlooking the Arabian Sea</li>
          <li>Marine Drive - The spectacular sea-facing boulevard</li>
          <li>Elephanta Caves - Ancient cave temples on Elephanta Island</li>
        </ul>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241317.11609823277!2d72.74109995646213!3d19.08219783958221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1744939019926!5m2!1sen!2sin" loading="lazy"></iframe>
      </div>
    </a>

    <!-- Aurangabad Card -->
    <a href="#" class="state-card">
      <img src="./state-images/aurangabad.jpg" alt="Aurangabad - Ajanta and Ellora Caves">
      <h3>Aurangabad</h3>
      <p>The City of Gates</p>
      <div class="details">
        <ul>
          <li>Ajanta Caves - UNESCO World Heritage site with Buddhist rock-cut cave monuments</li>
          <li>Ellora Caves - Archaeological wonder with Hindu, Buddhist and Jain sculptures</li>
          <li>Bibi Ka Maqbara - The Taj of the Deccan</li>
        </ul>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60274.89146940201!2d75.29116223349503!3d19.876698946040426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdb9815a369bc63%3A0x712d538b29a3d178!2sAurangabad%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1744939090177!5m2!1sen!2sin" loading="lazy"></iframe>
      </div>
    </a>

    <!-- Pune Card -->
    <a href="#" class="state-card">
      <img src="./state-images/pune.jpg" alt="Pune - Cultural Capital">
      <h3>Pune</h3>
      <p>The Cultural Capital</p>
      <div class="details">
        <ul>
          <li>Aga Khan Palace - Historical monument and freedom movement landmark</li>
          <li>Shaniwar Wada - Ancient fortification and historical landmark</li>
          <li>Sinhagad Fort - Mountain fortress offering panoramic views</li>
        </ul>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d242118.14200802294!2d73.7228487678322!3d18.52459859957403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf2e67461101%3A0x828d43bf9d9ee343!2sPune%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1744939165082!5m2!1sen!2sin" loading="lazy"></iframe>
      </div>
    </a>

    <!-- Lonavala Card -->
    <a href="#" class="state-card">
      <img src="./state-images/lovala.jpg" alt="Lonavala - Hill Station">
      <h3>Lonavala</h3>
      <p>Jewel of the Sahyadris</p>
      <div class="details">
        <ul>
          <li>Bhushi Dam - Popular tourist spot during monsoons</li>
          <li>Tiger's Leap - Cliff-top with panoramic valley views</li>
          <li>Karla and Bhaja Caves - Ancient Buddhist rock-cut caves</li>
        </ul>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30262.97888807793!2d73.38772988659668!3d18.75638089787356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be801098bdf8145%3A0x696b4a60a5e28658!2sLonavla%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1744939245441!5m2!1sen!2sin" loading="lazy"></iframe>
      </div>
    </a>
  </section>

  <!-- Footer -->
  ./<?php include './footer.php' ?>
</body>
</html>