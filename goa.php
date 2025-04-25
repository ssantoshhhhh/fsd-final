<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Goa</title>
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
  background: url('./states-cover/goa-cover.png') center center no-repeat; /* Center the image */
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
        <h1>Welcome to Goa</h1>
        <p>Experience the Beaches, Sunsets, and Vibrant Culture of India's Coastal Paradise</p>
    </section>

    <!-- States Grid -->
    <section class="states-grid">
        <a href="#" class="state-card">
            <img src="./state-images/northgoa.jpeg" alt="North Goa">
            <h3>North Goa</h3>
            <p>Baga Beach, Fort Aguada, Anjuna Flea Market</p>
            <div class="details">
                <p>North Goa is known for its lively beaches and vibrant nightlife. Baga Beach is one of the most popular beaches, offering water sports, beach shacks, and a buzzing atmosphere. Fort Aguada, a 17th-century Portuguese fort, provides panoramic views of the Arabian Sea. Don't miss the famous Anjuna Flea Market where you can shop for souvenirs, clothes, and handicrafts while enjoying live music and delicious food.</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d490662.916114661!2d73.65081287173017!3d15.534119139669583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbfc0ed52faa031%3A0x1bcd0a8c7ed54dd0!2sNorth%20Goa%2C%20Goa!5e0!3m2!1sen!2sin!4v1744879605596!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
        </a>
        <a href="#" class="state-card">
            <img src="./state-images/southgoa.jpeg" alt="South Goa">
            <h3>South Goa</h3>
            <p>Palolem Beach, Colva Beach, Basilica of Bom Jesus</p>
            <div class="details">
                <p>South Goa offers a more relaxed experience with its pristine beaches and tranquil atmosphere. Palolem Beach is a crescent-shaped paradise with calm waters perfect for swimming. Colva Beach stretches for miles with white sand and coconut palms. The Basilica of Bom Jesus, a UNESCO World Heritage Site, houses the mortal remains of St. Francis Xavier and is a magnificent example of Baroque architecture.</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d492843.9528018717!2d73.7301334149544!3d15.194363418693317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbfb3ee3ae4128b%3A0xfce3f40a90626180!2sSouth%20Goa%2C%20Goa!5e0!3m2!1sen!2sin!4v1744879656555!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
        </a>
        <a href="#" class="state-card">
            <img src="./state-images/panaji.jpeg" alt="Panaji">
            <h3>Panaji</h3>
            <p>Fontainhas, Dona Paula, Miramar Beach</p>
            <div class="details">
                <p>Panaji, Goa's capital, is a charming blend of Portuguese heritage and modern India. Fontainhas, the Latin Quarter, is a picturesque neighborhood with colorful Portuguese-style houses. Dona Paula offers stunning sunset views from its famous viewpoint. Miramar Beach, located at the mouth of the Mandovi River, is perfect for a leisurely stroll. The city's relaxed pace and delicious cuisine make it a must-visit destination.</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30760.830365541333!2d73.79721260582076!3d15.478848097550287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbfc0a93361ccd9%3A0xdd98120b24e5be61!2sPanaji%2C%20Goa!5e0!3m2!1sen!2sin!4v1744879688449!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
        </a>
        <a href="#" class="state-card">
            <img src="./state-images/old goa.jpeg goa.jpeg" alt="Old Goa">
            <h3>Old Goa</h3>
            <p>Se Cathedral, Church of St. Francis of Assisi</p>
            <div class="details">
                <p>Old Goa, a UNESCO World Heritage Site, was once the capital of Portuguese India and is known for its magnificent churches. The Se Cathedral, one of the largest churches in Asia, took nearly 80 years to build. The Church of St. Francis of Assisi features beautiful frescoes and Baroque architecture. These historical monuments offer a glimpse into Goa's rich colonial past and are architectural marvels that shouldn't be missed.</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30757.293892066504!2d73.9020633058531!3d15.502616746233242!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbfbe8cf00e90a1%3A0x9c3d04969bd13976!2sOld%20Goa%2C%20Goa!5e0!3m2!1sen!2sin!4v1744879715630!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
        </a>
    </section>

  <!-- Footer -->
./<?php include './footer.php' ?>

</body>
</html>