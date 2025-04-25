<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Bihar</title>
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
  background: url('./states-cover/bihar-cover.jpg') center center no-repeat; /* Center the image */
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
  <header>
  <?php include "./header.php"?>

    <!-- Title Section -->
    <section class="title-section">
        <h1>Welcome to Bihar</h1>
        <p>Land of Enlightenment - Where History, Culture, and Spirituality Converge</p>
    </section>

    <!-- States Grid -->
    <section class="states-grid">
        <a href="#" class="state-card">
            <img src="./state-images/bodh gaya.jpeg" alt="Bodh Gaya">
            <h3>Bodh Gaya</h3>
            <p>Mahabodhi Temple, Bodhi Tree, Great Buddha Statue</p>
            <div class="details">
                <p>Bodh Gaya, a UNESCO World Heritage site, is the most sacred Buddhist pilgrimage site in the world. It was here that Lord Buddha attained enlightenment under the Bodhi Tree. The magnificent Mahabodhi Temple, dating back to the 3rd century BCE, houses the sacred Bodhi Tree. The 80-foot tall Great Buddha Statue is one of the largest Buddha statues in India. The site attracts pilgrims and tourists from across the globe, offering a serene atmosphere for meditation and spiritual exploration.</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28998.456990852672!2d84.96459642192035!3d24.699156194204402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f32c5fbc12ed3d%3A0x9bbc5dccc57d96e!2sBodh%20Gaya%2C%20Bihar!5e0!3m2!1sen!2sin!4v1744879009449!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               </div>
        </a>
        <a href="#" class="state-card">
            <img src="./state-images/nalanda.jpeg" alt="Nalanda">
            <h3>Nalanda</h3>
            <p>Nalanda University Ruins, Nalanda Archaeological Museum, Hiuen Tsang Memorial Hall</p>
            <div class="details">
                <p>Nalanda, an ancient center of learning, was home to one of the world's first residential universities. The ruins of Nalanda University, a UNESCO World Heritage site, showcase the architectural brilliance of the Gupta and Pala periods. The Nalanda Archaeological Museum houses artifacts dating back to the 5th-12th centuries. The Hiuen Tsang Memorial Hall commemorates the famous Chinese traveler who studied at Nalanda. The site stands as a testament to India's rich educational heritage and intellectual legacy.</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7224.794634097144!2d85.45420824233007!3d25.122254911036624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f2f22035c54b97%3A0x46687132915778f3!2sNalanda%2C%20Bihar%20803111!5e0!3m2!1sen!2sin!4v1744879044916!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
        </a>
        <a href="#" class="state-card">
            <img src="./state-images/patna.jpeg" alt="Patna">
            <h3>Patna</h3>
            <p>Golghar, Patna Museum, Mahavir Mandir</p>
            <div class="details">
                <p>Patna, the capital city of Bihar, is a perfect blend of ancient history and modern development. The iconic Golghar, a massive granary built in 1786, offers panoramic views of the city. The Patna Museum houses an extensive collection of artifacts, including the famous Didarganj Yakshi. Mahavir Mandir is one of the most revered temples in North India. The city's rich cultural heritage, vibrant markets, and delicious local cuisine make it a fascinating destination for history buffs and food enthusiasts alike.</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115133.01634126065!2d85.06064130530103!3d25.60801435526854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f29937c52d4f05%3A0x831a0e05f607b270!2sPatna%2C%20Bihar!5e0!3m2!1sen!2sin!4v1744879076291!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               </div>
        </a>
        <a href="#" class="state-card">
            <img src="./state-images/vaishali.jpeg" alt="Vaishali">
            <h3>Vaishali</h3>
            <p>Ashokan Pillar, Buddha Stupa, Relic Stupa</p>
            <div class="details">
                <p>Vaishali, an ancient city mentioned in Buddhist and Jain texts, holds immense historical and religious significance. The Ashokan Pillar, erected by Emperor Ashoka, stands as a symbol of peace and non-violence. The Buddha Stupa is believed to contain one-eighth of the Buddha's ashes. The Relic Stupa commemorates the site where Buddha delivered his last sermon. Vaishali's archaeological remains and spiritual atmosphere make it a significant destination for those interested in ancient Indian history and Buddhism.</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d459987.5905481535!2d85.02652993529594!3d25.748984709727704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed5ea75b91d0f1%3A0x9f7b3d2988e373b5!2sVaishali%2C%20Bihar!5e0!3m2!1sen!2sin!4v1744879118971!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
        </a>
    </section>

  <!-- Footer -->
./<?php include './footer.php' ?>

</body>
</html>
