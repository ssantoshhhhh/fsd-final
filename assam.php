<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Assam</title>
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
        <h1>Welcome to Assam</h1>
        <p>Land of the Red River and Blue Hills - Where Nature's Bounty Meets Rich Culture</p>
    </section>

    <!-- States Grid -->
    <section class="states-grid">
        <a href="#" class="state-card">
            <img src="./state-images/kaziranga.jpeg" alt="Kaziranga">
            <h3>Kaziranga National Park</h3>
            <p>One-horned Rhinoceros, Elephant Safari, Wildlife Viewing</p>
            <div class="details">
                <p>Kaziranga National Park, a UNESCO World Heritage site, is home to two-thirds of the world's one-horned rhinoceros population. The park's diverse ecosystem includes grasslands, wetlands, and forests, supporting a rich variety of wildlife including tigers, elephants, and numerous bird species. Visitors can enjoy elephant safaris, jeep rides, and boat trips to observe wildlife in their natural habitat. The park's conservation success story and breathtaking landscapes make it a must-visit destination for nature enthusiasts.</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14279.455927808389!2d92.97466099584146!3d26.524498676261956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3744fbb424af3d57%3A0x4d16514f2d701362!2sKaziranga%20National%20Park%2C%20Assam!5e0!3m2!1sen!2sin!4v1744878269590!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               </div>
        </a>
        <a href="#" class="state-card">
            <img src="./state-images/guwahati.jpeg" alt="Guwahati">
            <h3>Guwahati</h3>
            <p>Kamakhya Temple, Umananda Temple, River Cruise</p>
            <div class="details">
                <p>Guwahati, the gateway to Northeast India, is a vibrant city on the banks of the Brahmaputra River. The Kamakhya Temple, a significant Shakti Peeth, attracts devotees from across the country. The Umananda Temple, located on the Peacock Island, is known for its unique architecture and golden langurs. A cruise on the Brahmaputra offers stunning views of the city and surrounding hills. The city's rich cultural heritage, modern amenities, and warm hospitality make it an ideal base for exploring Assam.</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4084.996024361557!2d91.70308674943344!3d26.166372824292505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375a5b04b0f06ef1%3A0xaaad40304c7d3d1d!2sMaa%20Kamakhya%20Temple!5e0!3m2!1sen!2sin!4v1744878514829!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
        </a>
        <a href="#" class="state-card">
            <img src="./state-images/majuli.jpeg" alt="Majuli">
            <h3>Majuli</h3>
            <p>River Island, Satras, Cultural Heritage</p>
            <div class="details">
                <p>Majuli, the world's largest river island, is a unique cultural landscape and a UNESCO World Heritage site. The island is home to several Satras (monasteries) that preserve the rich cultural heritage of Assam. Visitors can experience traditional dance forms, music, and crafts. The island's serene environment, with its wetlands and birdlife, offers a perfect escape from urban life. Majuli's unique blend of culture and nature makes it a fascinating destination for those interested in exploring Assam's heritage.</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5106234.437968785!2d89.93995448901391!3d26.888148167736055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3746cf17b7a0f589%3A0x56dcc7fc7971a37f!2sUttar%20Kamalabari%20Satra!5e0!3m2!1sen!2sin!4v1744878660703!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               </div>
        </a>
        <a href="#" class="state-card">
            <img src="./state-images/sivasagar.jpeg" alt="Sivasagar">
            <h3>Sivasagar</h3>
            <p>Ahom Architecture, Temples, Historical Monuments</p>
            <div class="details">
                <p>Sivasagar, the ancient capital of the Ahom Kingdom, showcases the architectural brilliance of the Ahom dynasty. The city is dotted with magnificent temples, palaces, and tanks built during the Ahom rule. The Sivasagar Tank, Rang Ghar, and Talatal Ghar are remarkable examples of Ahom architecture. The city's rich history, reflected in its monuments and museums, offers insights into Assam's glorious past. Sivasagar's historical significance and architectural beauty make it a must-visit destination for history enthusiasts.</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28442.74089841094!2d94.6216542769952!3d26.987709802529924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37473146da8148f7%3A0xa898d580278cdfe6!2sSivasagar%2C%20Assam!5e0!3m2!1sen!2sin!4v1744878924238!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
        </a>
    </section>

  <!-- Footer -->
./<?php include './footer.php' ?>

</body>
</html>
