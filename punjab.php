<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Explore Punjab</title>
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
      background: url('./states-cover/punjab-cover.jpg') center center no-repeat; /* Ensure this URL is correct */
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
      width: 950px; /* Adjusted width of the card */
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
    <h1>WELCOME TO PUNJAB</h1>
    <p>Experience the land of five rivers, vibrant culture, delicious cuisine, and warm hospitality in India's northern treasure</p>
  </section>

  <!-- Destinations Grid Section -->
  <section class="states-grid">
    <!-- Amritsar Card -->
    <a href="#" class="state-card">
      <img src="./state-images/amrister.jpg" alt="Amritsar - Home to the Golden Temple">
      <h3>Amritsar</h3>
      <p>The Spiritual Capital</p>
      <div class="details">
        <ul>
          <li>Golden Temple (Harmandir Sahib) - The holiest Sikh shrine</li>
          <li>Jallianwala Bagh - Historic memorial site</li>
          <li>Wagah Border - Famous for the flag-lowering ceremony</li>
        </ul>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d109552.14258599367!2d74.80008177021407!3d31.633442586259388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391964aa569e7355%3A0xeea2605bee84ef7d!2sAmritsar%2C%20Punjab!5e0!3m2!1sen!2sin!4v1718641234567!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </a>

    <!-- Jalandhar Card -->
    <a href="#" class="state-card">
      <img src="./state-images/jalandhar.jpg" alt="Jalandhar - Known for historical monuments">
      <h3>Jalandhar</h3>
      <p>City of Historical Monuments</p>
      <div class="details">
        <ul>
          <li>Devi Talab Mandir - Ancient temple with historical significance</li>
          <li>Imam Nasir Mausoleum - Architectural marvel from medieval times</li>
          <li>Pushpa Gujral Science City - Educational tourism destination</li>
        </ul>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d109208.97490210395!2d75.5111488697754!3d31.32120580000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a5a5747a9eb91%3A0xc74b34c05aa5b4b8!2sJalandhar%2C%20Punjab!5e0!3m2!1sen!2sin!4v1718641345678!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </a>

    <!-- Pathankot Card -->
    <a href="#" class="state-card">
      <img src="./state-images/pathankot.jpg" alt="Pathankot - Gateway to Himachal Pradesh">
      <h3>Pathankot</h3>
      <p>Gateway to Himachal Pradesh</p>
      <div class="details">
        <ul>
          <li>Nurpur Fort - Historical fort with panoramic views</li>
          <li>Shahpurkandi Fort - Imposing structure from the ancient era</li>
          <li>Ranjit Sagar Dam - Beautiful lake and hydroelectric project</li>
        </ul>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54016.95462977497!2d75.62180962167969!3d32.2734439!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391c7ffff632069b%3A0xf6c6419c0a7de852!2sPathankot%2C%20Punjab!5e0!3m2!1sen!2sin!4v1718641456789!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </a>

    <!-- Kesar Singh Card -->
    <a href="#" class="state-card">
      <img src="./state-images/kesar.jpg" alt="Kesar Singh - Beautiful gurudwaras and gardens">
      <h3>Kesar Singh</h3>
      <p>Beautiful Gurudwaras and Gardens</p>
      <div class="details">
        <ul>
          <li>Famous gurudwaras with significant religious importance</li>
          <li>Lush gardens showcasing Punjab's natural beauty</li>
          <li>Traditional Punjabi cultural experiences and local cuisine</li>
        </ul>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d109739.01964963881!2d75.7002231!3d30.9100201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a837462345a7d%3A0x681102348ec60610!2sLudhiana%2C%20Punjab!5e0!3m2!1sen!2sin!4v1718641567890!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </a>
  </section>

  <!-- Footer -->
  ./<?php include './footer.php' ?>
</body>
</html>