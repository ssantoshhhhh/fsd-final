<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Explore Nagaland</title>
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
      background: url('./states-cover/nagaland-cover.jpg') center center no-repeat; /* Ensure this URL is correct */
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
    <h1>WELCOME TO NAGALAND</h1>
    <p>Experience the land of festivals, vibrant tribal cultures, and breathtaking landscapes in India's northeastern treasure</p>
  </section>

  <!-- Destinations Grid Section -->
  <section class="states-grid">
    <!-- Kohima Card -->
    <a href="#" class="state-card">
      <img src="./state-images/kohima.jpg" alt="Kohima - Capital of Nagaland">
      <h3>Kohima</h3>
      <p>The Capital City</p>
      <div class="details">
        <ul>
          <li>Hornbill Festival - Annual celebration of Naga tribal cultures</li>
          <li>Kohima War Cemetery - Historic World War II memorial</li>
          <li>Nagaland State Museum - Showcasing rich tribal heritage</li>
        </ul>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57172.74673453063!2d94.07935787919508!3d25.674869142593037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x374862bd83d0361d%3A0x9f13381e061086c2!2sKohima%2C%20Nagaland!5e0!3m2!1sen!2sin!4v1718641234567!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </a>

    <!-- Dzukou Valley Card -->
    <a href="#" class="state-card">
      <img src="./state-images/dzooku valley.jpg" alt="Dzukou Valley - Natural Paradise">
      <h3>Dzukou Valley</h3>
      <p>The Valley of Flowers</p>
      <div class="details">
        <ul>
          <li>Stunning natural landscapes with seasonal flower blooms</li>
          <li>Popular trekking destination with panoramic mountain views</li>
          <li>Home to rare flora including the Dzukou lily</li>
        </ul>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14293.775840186234!2d94.11068237935713!3d25.570699042638485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37464f4cb4bb9f3d%3A0x53e7c7d1d21e8025!2sDzukou%20Valley!5e0!3m2!1sen!2sin!4v1718641345678!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </a>

    <!-- Mokokchung Card -->
    <a href="#" class="state-card">
      <img src="./state-images/mokukchung.jpg" alt="Mokokchung - Cultural Hub">
      <h3>Mokokchung</h3>
      <p>Cultural Capital of the Ao Nagas</p>
      <div class="details">
        <ul>
          <li>Home to the Ao Naga tribe with rich cultural traditions</li>
          <li>Famous for the Moatsu Festival celebrations</li>
          <li>Historic sites including ancient tribal structures</li>
        </ul>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14351.083754224454!2d94.52500847918458!3d26.327716493258037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x374605f47483f467%3A0x71a9132a60aa2cc6!2sMokokchung%2C%20Nagaland!5e0!3m2!1sen!2sin!4v1718641456789!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </a>

    <!-- Jafun Market Card -->
    <a href="#" class="state-card">
      <img src="./state-images/jafun market.jpg" alt="Jafun Market - Vibrant Local Culture">
      <h3>Jafun Market</h3>
      <p>Vibrant Cultural Marketplace</p>
      <div class="details">
        <ul>
          <li>Traditional market showcasing authentic Naga products</li>
          <li>Experience local cuisine and tribal delicacies</li>
          <li>Perfect place to purchase handmade crafts and tribal artifacts</li>
        </ul>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14407.847295134407!2d94.14584847899358!3d25.997466142580325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x374651cfb75f75a7%3A0x71208115864e2651!2sJafun%2C%20Nagaland!5e0!3m2!1sen!2sin!4v1718641567890!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </a>
  </section>

  <!-- Footer -->
./<?php include './footer.php' ?>
</body>
</html>