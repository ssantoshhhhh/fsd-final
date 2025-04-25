<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Arunachal Pradesh</title>
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
  background: url('./states-cover/arunachal-cover.jpg') center center no-repeat; /* Center the image */
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
        <h1>Welcome to Arunachal Pradesh</h1>
        <p>Discover the Land of the Rising Sun - Where Nature Meets Culture</p>
    </section>

    <!-- States Grid -->
    <section class="states-grid">
        <a href="#" class="state-card">
            <img src="./state-images/tawang.jpeg" alt="Tawang">
            <h3>Tawang</h3>
            <p>Tawang Monastery, Sela Pass, Nuranang Falls</p>
            <div class="details">
                <p>Tawang, home to the largest Buddhist monastery in India, is a spiritual and cultural hub. The 400-year-old Tawang Monastery houses ancient Buddhist artifacts and manuscripts. The Sela Pass, at an altitude of 13,700 feet, offers breathtaking views of snow-capped mountains. The Nuranang Falls, also known as Bong Bong Falls, creates a spectacular sight as it cascades down from a height of 100 meters. The region's rich Tibetan Buddhist culture and stunning landscapes make it a must-visit destination.</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1809503.1739389088!2d90.3721787711721!3d27.12550973509745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375cf4f8474f47b7%3A0x6448080fa5e6771c!2sTawang%20790104!5e0!3m2!1sen!2sin!4v1744877006937!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
        </a>
        <a href="#" class="state-card">
            <img src="./state-images/ziro.jpeg" alt="Ziro">
            <h3>Ziro</h3>
            <p>Ziro Valley, Apatani Tribe, Pine Forests</p>
            <div class="details">
                <p>Ziro Valley, a UNESCO World Heritage site, is known for its unique agricultural practices and the Apatani tribe's sustainable way of life. The valley's picturesque landscape features terraced rice fields and pine forests. The Apatani people are known for their distinctive facial tattoos and nose plugs. The annual Ziro Festival of Music brings together artists from across the country. The valley's rich biodiversity and cultural heritage make it a fascinating destination for nature and culture enthusiasts.</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28300.112702383507!2d93.79755432683707!3d27.546551381573583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3741612864517cd3%3A0xb9e78639773cc4ea!2sZiro%20791120!5e0!3m2!1sen!2sin!4v1744877141836!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
        </a>
        <a href="#" class="state-card">
            <img src="./state-images/bomdila.jpeg" alt="Bomdila">
            <h3>Bomdila</h3>
            <p>Bomdila Monastery, Apple Orchards, Craft Center</p>
            <div class="details">
                <p>Bomdila, a picturesque hill station, is known for its Buddhist monasteries and apple orchards. The Bomdila Monastery, built in the 1960s, showcases beautiful Tibetan architecture and houses ancient Buddhist artifacts. The Craft Center displays traditional handloom and handicrafts of the local tribes. The town's apple orchards and scenic viewpoints offer stunning panoramas of the Eastern Himalayas. Bomdila's pleasant climate and rich cultural heritage make it an ideal destination for nature lovers and cultural enthusiasts.</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23840.29624350039!2d92.39547515779006!3d27.262728615385228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375cac629073c86d%3A0x43cb4639e0d118bd!2sBomdila%20790001!5e0!3m2!1sen!2sin!4v1744877202034!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               </div>
        </a>
        <a href="#" class="state-card">
            <img src="./state-images/itanagar.jpeg" alt="Itanagar">
            <h3>Itanagar</h3>
            <p>Ita Fort, Ganga Lake, State Museum</p>
            <div class="details">
                <p>Itanagar, the capital city of Arunachal Pradesh, is a blend of modern development and ancient history. The Ita Fort, built in the 14th-15th century, is a historical monument with unique architecture. The Ganga Lake, also known as Gyakar Sinyi, is a beautiful natural lake surrounded by forests. The State Museum showcases the rich cultural heritage of various tribes. The city's vibrant markets offer traditional handicrafts and local cuisine, making it a perfect introduction to Arunachal Pradesh's diverse culture.</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28418.214790530044!2d93.59328002575262!3d27.084565298856656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3744009342853ecd%3A0xdeec075656369e83!2sItanagar!5e0!3m2!1sen!2sin!4v1744877240024!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
        </a>
    </section>

  <!-- Footer -->
./<?php include './footer.php' ?>

</body>
</html> 