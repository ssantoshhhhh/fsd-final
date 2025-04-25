<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./states-css/telangana.css"> <!-- Link to your existing CSS file -->
    <title>Telangana</title>
</head>
<body>

  <!-- Navbar -->
<?php include "./header.php"?>

    <!-- Title Section -->
    <section class="title-section">
        <br><br><br>
        <h1>Welcome to Telangana</h1>
        <p>Discover the Rich Heritage and Culture</p>
    </section>

    <!-- States Grid -->
    <section class="states-grid">
        <a href="#" class="state-card">
            <h3>Hyderabad</h3>
            <p>Charminar, Golkonda Fort, Ramoji Film City</p>
            <img src="./state-images/hyderabad.avif" alt="Hyderabad">
            <div class="details">
                <p>Hyderabad, the capital of Telangana, is known for its iconic Charminar and historical Golkonda Fort. Additionally, Ramoji Film City is a popular tourist destination offering movie sets and entertainment activities.</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d198885.41783356465!2d78.47483122327455!3d17.385044691647282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb92effb6b69f7%3A0x20b9bfcf4379ebf7!2sCharminar!5e0!3m2!1sen!2sin!4v1744865863212!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </a>
        <a href="#" class="state-card">
            <h3>Warangal</h3>
            <p>Historical forts and temples</p>
            <img src="./state-images/warangal.jpeg" alt="Warangal">
            <div class="details">
                <p>Warangal is rich in history, famous for its impressive forts and temples. The Warangal Fort and the Thousand Pillar Temple are prime attractions that showcase the region’s architectural prowess and cultural heritage.</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d142367.67777057657!2d79.59613335403696!3d17.978121441710915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb945951f640b5%3A0x8b5daaa55cbb5922!2sWarangal!5e0!3m2!1sen!2sin!4v1744865892179!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </a>
        <a href="#" class="state-card">
            <h3>Khammam</h3>
            <p>Scenic beauty and historical temples</p>
            <img src="./state-images/khammam.jpeg" alt="Khammam">
            <div class="details">
                <p>Khammam is known for its picturesque landscapes and ancient temples. It offers various attractions including scenic hills, temples, and a unique cultural experience that showcases the history of the region.</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d133361.87167660176!2d80.14724137051794!3d17.247057726568936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb8927de8ca849%3A0xbee3f3f8c3f98145!2sKhammam!5e0!3m2!1sen!2sin!4v1744865928294!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </a>
        <a href="#" class="state-card">
            <h3>Nalgonda</h3>
            <p>Ancient forts and temples</p>
            <img src="./state-images/nalgonda.jpeg" alt="Nalgonda">
            <div class="details">
                <p>Nalgonda is known for its historical significance with ancient forts and temples dotting the landscape. The region offers a glimpse into the rich culture and history of Telangana.</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d200166.01623331022!2d79.12084762610193!3d17.052951790658504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb846fa7c58cbd%3A0x29041072f531b51c!2sNalgonda!5e0!3m2!1sen!2sin!4v1744865928294!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </a>
    </section>

  <!-- Footer -->
  ./<?php include './footer.php' ?>

</body>
</html>