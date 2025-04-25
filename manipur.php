<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Explore Manipur</title>
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
  background: url('./states-cover/manipur-cover.jpg') center center no-repeat; /* Center the image */
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
    <h1>WELCOME TO MANIPUR</h1>
    <p>Experience the jewel of Northeast India, land of classical dance, floating islands, and pristine natural beauty</p>
  </section>

  <!-- Destinations Grid Section -->
  <section class="states-grid">
    <!-- Imphal Card -->
    <a href="#" class="state-card">
      <img src="./state-images/imphal.jpg" alt="Imphal - The Capital City">
      <h3>Imphal</h3>
      <p>The Cultural Capital</p>
      <div class="details">
        <ul>
          <li>Keibul Lamjao National Park - World's only floating national park</li>
          <li>Ima Keithel - Asia's largest all-women market</li>
          <li>Kangla Fort - Ancient seat of Manipuri kings</li>
        </ul>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57768.053451952606!2d93.9047788!3d24.8170539!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x374c0bd387e1c5c3%3A0x5f8f3bfc5a4971a8!2sImphal%2C%20Manipur!5e0!3m2!1sen!2sin!4v1718641234567!5m2!1sen!2sin" loading="lazy"></iframe>
      </div>
    </a>

    <!-- Loktak Lake Card -->
    <a href="#" class="state-card">
      <img src="./state-images/loktok.jpg" alt="Loktak Lake - Famous for floating phumdis">
      <h3>Loktak Lake</h3>
      <p>The Floating Paradise</p>
      <div class="details">
        <ul>
          <li>Phumdis - Unique floating islands made of vegetation</li>
          <li>Sendra Island - Scenic viewpoint offering panoramic views of the lake</li>
          <li>Karang Island - The only inhabited island in the lake</li>
        </ul>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14455.129083999404!2d93.7955968!3d24.5384144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x374dcca40942ab77%3A0xbe41665b68523c5e!2sLoktak%20Lake!5e0!3m2!1sen!2sin!4v1718641345678!5m2!1sen!2sin" loading="lazy"></iframe>
      </div>
    </a>

    <!-- Kangla Fort Card -->
    <a href="#" class="state-card">
      <img src="./state-images/kangla.jpg" alt="Kangla Fort - Historic site with military significance">
      <h3>Kangla Fort</h3>
      <p>Historical Monument of Manipur</p>
      <div class="details">
        <ul>
          <li>Ancient royal palace with historical significance</li>
          <li>Traditional Kangla-Sa (Dragon) stone gates</li>
          <li>Temples and religious sites within the complex</li>
        </ul>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3623.5558166753193!2d93.9362195!3d24.7453408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x374c0c0a9a3a4753%3A0x45c9d3be72efdcd5!2sKangla%20Fort!5e0!3m2!1sen!2sin!4v1718641456789!5m2!1sen!2sin" loading="lazy"></iframe>
      </div>
    </a>

    <!-- Sangai Festival Card -->
    <a href="#" class="state-card">
      <img src="./state-images/sangai.jpg" alt="Sangai Festival - Cultural celebration of Manipur">
      <h3>Sangai Festival</h3>
      <p>Annual Cultural Extravaganza</p>
      <div class="details">
        <ul>
          <li>Named after the state animal Sangai (brow-antlered deer)</li>
          <li>Showcases Manipuri dance, music, and indigenous games</li>
          <li>Traditional handicrafts, cuisine, and cultural performances</li>
        </ul>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57768.053451952606!2d93.9047788!3d24.8170539!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x374c0bd387e1c5c3%3A0x5f8f3bfc5a4971a8!2sImphal%2C%20Manipur!5e0!3m2!1sen!2sin!4v1718641567890!5m2!1sen!2sin" loading="lazy"></iframe>
      </div>
    </a>
  </section>

  <!-- Footer -->
  ./<?php include './footer.php' ?>
</body>
</html>