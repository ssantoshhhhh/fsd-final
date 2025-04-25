<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Andhra Pradesh</title>
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
  background: url('./states-cover/andhra-cover.jpg') center center no-repeat; /* Center the image */
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
        <h1>Welcome to Andhra Pradesh</h1>
        <p>Explore the Rich Heritage, Temples, and Scenic Beauty of India's Kohinoor</p>
    </section>

    <!-- States Grid -->
    <section class="states-grid">
        <a href="#" class="state-card">
            <img src="./state-images/tirupati.jpeg" alt="Tirupati">
            <h3>Tirupati</h3>
            <p>Sri Venkateswara Temple, Silathoranam, Sri Vari Museum</p>
            <div class="details">
                <p>Tirupati, the spiritual capital of Andhra Pradesh, is home to the famous Sri Venkateswara Temple, one of the richest and most visited religious sites in the world. The temple sits atop the Tirumala hills and attracts millions of devotees annually. Silathoranam, a natural rock formation resembling a hooded serpent, is another significant attraction. The Sri Vari Museum showcases the temple's history and artifacts, offering insights into the region's rich cultural heritage.</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124079.83328504801!2d79.34410111567799!3d13.627638881942115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a4d4b0f88620427%3A0xcf4152d1daca0cac!2sTirupati%2C%20Andhra%20Pradesh!5e0!3m2!1sen!2sin!4v1744870861836!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </a>
        <a href="#" class="state-card">
            <img src="./state-images/amaravati.jpeg" alt="Amaravati">
            <h3>Amaravati</h3>
            <p>Amaravati Stupa, Undavalli Caves, Krishna River</p>
            <div class="details">
                <p>Amaravati, the capital city of Andhra Pradesh, is steeped in Buddhist history. The Amaravati Stupa is an ancient Buddhist monument dating back to 200 BCE. The nearby Undavalli Caves feature impressive rock-cut architecture and a giant statue of Lord Vishnu. The Krishna River flows through the city, offering scenic boat rides. As the new planned capital, Amaravati blends ancient heritage with modern development, making it a fascinating destination.</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122420.79480392004!2d80.42280692932447!3d16.493259019612495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a35ed0b183aea1b%3A0x11d318810e9c92c2!2sAmaravati%2C%20Andhra%20Pradesh!5e0!3m2!1sen!2sin!4v1744870932081!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               </div>
        </a>
        <a href="#" class="state-card">
            <img src="./state-images/viskhapatnam.jpeg" alt="Visakhapatnam">
            <h3>Visakhapatnam</h3>
            <p>RK Beach, Kailasagiri, Borra Caves</p>
            <div class="details">
                <p>Visakhapatnam, often called Vizag, is Andhra Pradesh's largest city and a major port. The RK Beach (Ramakrishna Beach) is a popular attraction with its scenic shoreline and submarine museum. Kailasagiri hill park offers panoramic views of the city and Bay of Bengal. The Borra Caves, located in the Ananthagiri hills, feature stunning stalactite and stalagmite formations. Vizag is also known for its delicious seafood and vibrant cultural scene.</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243208.96917090248!2d83.09777813039061!3d17.738034663709527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a39431389e6973f%3A0x92d9c20395498468!2sVisakhapatnam%2C%20Andhra%20Pradesh!5e0!3m2!1sen!2sin!4v1744870993719!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
        </a>
        <a href="#" class="state-card">
            <img src="./state-images/kurnool.jpeg" alt="Kurnool">
            <h3>Kurnool</h3>
            <p>Belum Caves, Oravakallu Rock Garden, Rollapadu Wildlife Sanctuary</p>
            <div class="details">
                <p>Kurnool, the gateway to Andhra Pradesh's Rayalaseema region, boasts fascinating geological formations. The Belum Caves are India's second largest cave system, known for their spectacular stalactite formations. Oravakallu Rock Garden features unique granite formations and a natural museum. The Rollapadu Wildlife Sanctuary is home to the endangered Great Indian Bustard. Kurnool's historical significance dates back to the Paleolithic age, with several archaeological sites in the region.</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61421.60640139618!2d77.99860217836951!3d15.811840316525803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bb5ddf506b7c6c9%3A0x19a7ac74f858d6f2!2sKurnool%2C%20Andhra%20Pradesh!5e0!3m2!1sen!2sin!4v1744871030012!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               </div>
        </a>
    </section>

  <!-- Footer -->
  <?php include './footer.php' ?>

</body>
</html>