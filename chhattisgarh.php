<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Chhattisgarh</title>
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
  background: url('./states-cover/chhattisgarh-cover.webp') center center no-repeat; /* Center the image */
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

    <!-- Title Section -->
    <section class="title-section">
        <h1>Welcome to Chhattisgarh</h1>
        <p>Heart of Incredible India - Where Nature's Splendor Meets Tribal Heritage</p>
    </section>

    <!-- States Grid -->
    <section class="states-grid">
        <a href="#" class="state-card">
            <img src="./state-images/chitrakoti.jpeg" alt="Chitrakote">
            <h3>Chitrakote Falls</h3>
            <p>India's Niagara Falls, Tribal Culture, Scenic Beauty</p>
            <div class="details">
                <p>Chitrakote Falls, known as the "Niagara of India," is a spectacular horseshoe-shaped waterfall on the Indravati River. The falls, with a height of 29 meters and width of 300 meters, create a magnificent curtain of water. The surrounding area is rich in tribal culture, with several tribal villages offering insights into local traditions. The scenic beauty, combined with the cultural experience, makes Chitrakote a must-visit destination in Chhattisgarh.</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.7258399735456!2d81.69748547507974!3d19.207173282024577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a30255b1365a9b5%3A0x793b25c14a696017!2sChitrakote%20Waterfalls!5e0!3m2!1sen!2sin!4v1744879233200!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
        </a>
        <a href="#" class="state-card">
            <img src="./state-images/raipur.jpeg" alt="Raipur">
            <h3>Raipur</h3>
            <p>Purkhouti Muktangan, Mahant Ghasidas Museum, City Life</p>
            <div class="details">
                <p>Raipur, the capital city of Chhattisgarh, is a perfect blend of tradition and modernity. The Purkhouti Muktangan is an open-air museum showcasing the state's cultural heritage. The Mahant Ghasidas Museum houses artifacts from the region's rich history. The city's vibrant markets, traditional crafts, and delicious local cuisine offer a glimpse into Chhattisgarh's culture. Raipur's warm hospitality and modern amenities make it an ideal base for exploring the state.</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118983.74458372068!2d81.53667151106087!3d21.261885525076313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a28dda23be28229%3A0x163ee1204ff9e240!2sRaipur%2C%20Chhattisgarh!5e0!3m2!1sen!2sin!4v1744879268646!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
        </a>
        <a href="#" class="state-card">
            <img src="./state-images/bastar.jpeg" alt="Bastar">
            <h3>Bastar</h3>
            <p>Tribal Culture, Danteshwari Temple, Handicrafts</p>
            <div class="details">
                <p>Bastar, a region rich in tribal culture, is home to 42 different tribes. The Danteshwari Temple, dedicated to Goddess Danteshwari, is a significant religious site. The region is famous for its unique handicrafts, including bell metal craft and terracotta art. The annual Bastar Dussehra festival, lasting 75 days, showcases the rich cultural heritage of the region. Bastar's tribal markets, traditional dance forms, and natural beauty make it a fascinating destination for cultural enthusiasts.</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d965330.7041389153!2d81.1355217582835!3d19.07151547905453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a303a5f7340193b%3A0xaca98cf2d2be9ef0!2sBastar%2C%20Chhattisgarh!5e0!3m2!1sen!2sin!4v1744879294747!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
        </a>
        <a href="#" class="state-card">
            <img src="./state-images/barnawapa.jpeg" alt="Barnawapara">
            <h3>Barnawapara Wildlife Sanctuary</h3>
            <p>Wildlife Safari, Nature Trails, Bird Watching</p>
            <div class="details">
                <p>Barnawapara Wildlife Sanctuary, spread over 245 square kilometers, is a haven for wildlife enthusiasts. The sanctuary is home to diverse flora and fauna, including leopards, sloth bears, and various bird species. Visitors can enjoy wildlife safaris, nature trails, and bird watching. The sanctuary's pristine forests, water bodies, and rich biodiversity make it a perfect destination for nature lovers and wildlife photographers.</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d382795.165565205!2d81.96366780711455!3d21.417044468857593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a263b48ba6ef749%3A0x5cd79af752b58365!2sBarnawapara%20Wildlife%20Sanctuary!5e0!3m2!1sen!2sin!4v1744879526699!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
        </a>
    </section>

  <!-- Footer -->
./<?php include './footer.php' ?>

</body>
</html> 