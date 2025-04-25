<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Explore Mizoram</title>
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
      background: url('./states-cover/mizoram-cover.jpg') center center no-repeat; /* Corrected background image */
      background-size: cover; 
      padding: 4rem 2rem;
      text-align: center;
      color: #fff;
      min-height: 400px; 
    }

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
      padding: 6rem 2rem; 
      display: flex; 
      flex-direction: column; 
      align-items: center; 
    }

    /* State Card */
    .state-card {
      display: block; 
      background: #fff;
      border: 1px solid #ddd;
      border-left: 5px solid var(--green);
      border-radius: 10px;
      width: 950px; 
      margin: 15px 0; 
      padding: 1rem; 
      text-decoration: none;
      color: inherit;
      transition: transform 0.4s ease, box-shadow 0.4s ease;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .state-card:hover {
      transform: translateY(-10px); 
      box-shadow: 0 12px 20px rgba(0, 0, 0, 0.2); 
      border-left-color: var(--saffron);
    }

    .state-card h3 {
      margin: 0.5rem 0; 
      color: var(--navy-blue);
    }

    .state-card p {
      font-size: 0.95rem;
      margin: 0.5rem 0;
    }

    /* Details Section */
    .details {
      margin-top: 1rem; 
      font-size: 0.9rem; 
      color: #555; 
    }

    /* Image Styling for Cards */
    .state-card img {
      width: 100%; 
      max-width: 250px; 
      height: auto; 
      object-fit: cover; 
      border-radius: 6px;
      margin: 0 auto; 
      display: block; 
    }

    /* Map iframe Styling */
    .details iframe {
      width: 100%; 
      height: 250px; 
      border: none; 
      border-radius: 8px; 
      margin-top: 1rem; 
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
    <h1>WELCOME TO MIZORAM</h1>
    <p>Explore the scenic hills, vibrant culture, and lush landscapes of India's serene northeastern paradise</p>
  </section>

  <!-- Destinations Grid Section -->
  <section class="states-grid">
    <!-- Aizawl Card -->
    <a href="#" class="state-card">
      <img src="./state-images/aizwal.jpg" alt="Aizawl - Capital of Mizoram">
      <h3>Aizawl</h3>
      <p>The Capital City</p>
      <div class="details">
        <ul>
          <li>Mizoram State Museum - Showcasing rich tribal heritage</li>
          <li>Solomon's Temple - Impressive architecture with panoramic views</li>
          <li>Durtlang Hills - Perfect for trekking and sunset views</li>
        </ul>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57782.742281075565!2d92.67916857724904!3d23.736087730861147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x374dff79a72b9807%3A0x80bf7dc91411b5e1!2sAizawl%2C%20Mizoram!5e0!3m2!1sen!2sin!4v1718641234567!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </a>

    <!-- Vantawng Falls Card -->
    <a href="#" class="state-card">
      <img src="./state-images/vatwang.jpg" alt="Vantawng Falls - Tallest Waterfall">
      <h3>Vantawng Falls</h3>
      <p>The Tallest Waterfall</p>
      <div class="details">
        <ul>
          <li>Tallest and most magnificent waterfall in Mizoram</li>
          <li>Named after Vantawnga, who was an excellent swimmer</li>
          <li>Surrounded by lush green forests and exotic flora</li>
        </ul>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14462.775840186234!2d92.91068237935713!3d23.440699042638485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x374df9375f4e3c1b%3A0x3b013bc3a6ee7!2sVantawng%20Falls!5e0!3m2!1sen!2sin!4v1718641345678!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </a>

    <!-- Reiek Card -->
    <a href="#" class="state-card">
      <img src="./state-images/reiek.jpg" alt="Reiek - Hill Station">
      <h3>Reiek</h3>
      <p>Scenic Hill Station</p>
      <div class="details">
        <ul>
          <li>Spectacular cliff offering panoramic views of surrounding valleys</li>
          <li>Home to the traditional Mizo village replica</li>
          <li>Perfect for hiking, bird watching, and nature photography</li>
        </ul>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14511.083754224454!2d92.47500847918458!3d23.687716493258037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x374deda1d175fb39%3A0x42812fde1c995372!2sReiek%2C%20Mizoram%20796501!5e0!3m2!1sen!2sin!4v1718641456789!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </a>

    <!-- Lengteng Wildlife Sanctuary Card -->
    <a href="#" class="state-card">
      <img src="./state-images/lrenteng.jpg" alt="Lengteng Wildlife Sanctuary - Natural Paradise">
      <h3>Lengteng Wildlife Sanctuary</h3>
      <p>Rich Biodiversity Haven</p>
      <div class="details">
        <ul>
          <li>Home to diverse flora and fauna including rare species</li>
          <li>Perfect for nature lovers and wildlife photographers</li>
          <li>Features diverse tropical forests and unique ecosystem</li>
        </ul>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14607.847295134407!2d93.24584847899358!3d23.837466142580325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x374ebbcca4add88d%3A0x8abf6d47d1f5b7ed!2sLengteng%20Wildlife%20Sanctuary!5e0!3m2!1sen!2sin!4v1718641567890!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </a>
  </section>

  <!-- Footer -->
  ./<?php include './footer.php' ?>
</body>
</html>