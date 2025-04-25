<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Explore Odisha</title>
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
          background: url('./states-cover/odisha-cover.jpg') center center no-repeat; /* Ensure this URL is correct */
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
    <h1>WELCOME TO ODISHA</h1>
    <p>Experience the land of ancient temples, pristine beaches, and vibrant cultural heritage in India's eastern treasure</p>
  </section>

  <!-- Destinations Grid Section -->
  <section class="states-grid">
    <!-- Puri Card -->
    <a href="#" class="state-card">
      <img src="./state-images/puri.jpg" alt="Puri - Temple City and Beach">
      <h3>Puri</h3>
      <p>Temple City and Beach Paradise</p>
      <div class="details">
        <ul>
          <li>Jagannath Temple - One of the Char Dham pilgrimage sites</li>
          <li>Puri Beach - Golden sands and vibrant coastal culture</li>
          <li>Rath Yatra - World-famous annual chariot festival</li>
        </ul>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59923.7696391622!2d85.79733582644662!3d19.80559504360846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a19c53a22be9dfd%3A0x8b094a7cb0d85397!2sPuri%2C%20Odisha!5e0!3m2!1sen!2sin!4v1681881234567!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </a>

    <!-- Konark Card -->
    <a href="#" class="state-card">
      <img src="./state-images/konarl.jpg" alt="Konark - Sun Temple">
      <h3>Konark</h3>
      <p>Home of the Magnificent Sun Temple</p>
      <div class="details">
        <ul>
          <li>Sun Temple - UNESCO World Heritage site designed as a giant chariot</li>
          <li>Konark Dance Festival - Annual classical dance celebration</li>
          <li>Chandrabhaga Beach - Pristine shores with spiritual significance</li>
        </ul>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14979.003607923854!2d86.0857308774872!3d19.887721142653846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a19f7f7cb7f2afd%3A0x97fe993f73694dab!2sKonark%2C%20Odisha!5e0!3m2!1sen!2sin!4v1681881345678!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </a>

    <!-- Bhubaneswar Card -->
    <a href="#" class="state-card">
      <img src="./state-images/bhubaneswar.jpg" alt="Bhubaneswar - Temple City">
      <h3>Bhubaneswar</h3>
      <p>The Temple City of India</p>
      <div class="details">
        <ul>
          <li>Lingaraj Temple - Ancient temple dedicated to Lord Shiva</li>
          <li>Udayagiri and Khandagiri Caves - Historic Jain rock-cut shelters</li>
          <li>Nandankanan Zoological Park - Home to white tigers and exotic species</li>
        </ul>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119679.37056337978!2d85.74145702553556!3d20.300829935636177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a1909d2d5170aa5%3A0xfc580e2b68b33fa8!2sBhubaneswar%2C%20Odisha!5e0!3m2!1sen!2sin!4v1681881456789!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </a>

    <!-- Chilika Lake Card -->
    <a href="#" class="state-card">
      <img src="./state-images/chilaksa.jpg" alt="Chilika Lake - Asia's Largest Brackish Water Lagoon">
      <h3>Chilika Lake</h3>
      <p>Asia's Largest Coastal Lagoon</p>
      <div class="details">
        <ul>
          <li>Migratory Birds - Winter home to millions of birds from across continents</li>
          <li>Irrawaddy Dolphins - Rare aquatic mammals in their natural habitat</li>
          <li>Nalabana Bird Sanctuary - Protected wetland area for diverse bird species</li>
        </ul>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120125.6397563402!2d85.31216082332422!3d19.684457742583385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a1bd19f2501f373%3A0xa34e2fb3e1c65409!2sChilika%20Lake!5e0!3m2!1sen!2sin!4v1681881567890!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </a>
  </section>

  <!-- Footer -->
  ./<?php include './footer.php' ?>
</body>
</html>