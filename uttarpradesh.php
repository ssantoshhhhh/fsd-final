<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./states-css/uttarpradesh.css"> <!-- Link to your existing CSS file -->
    <title>Uttar Pradesh</title>
</head>
<body>

  <!-- Navbar -->
<?php include "./header.php"?>

    <!-- Title Section -->
    <section class="title-section">
        <br><br><br>
        <h1>Welcome to Uttar Pradesh</h1>
        <p>Explore the Heart of India</p>
    </section>

    <!-- States Grid -->
    <section class="states-grid">
        <a href="#" class="state-card">
            <h3>Agra</h3>
            <p>The Taj Mahal, Agra Fort</p>
            <img src="./state-images/agra.avif" alt="Agra">
            <div class="details">
                <p>Agra is world-renowned for the iconic Taj Mahal, a UNESCO World Heritage Site, and the historical Agra Fort. This city offers a stunning blend of Mughal architecture and rich history.</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31233.67843022409!2d78.04217514676751!3d27.175015153860333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390c4cf6d18e0c11%3A0x741b3950b34e17e7!2sTaj%20Mahal!5e0!3m2!1sen!2sin!4v1744867572212!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </a>
        <a href="#" class="state-card">
            <h3>Varanasi</h3>
            <p>The Ghats of Ganges, Kashi Vishwanath Temple</p>
            <img src="./state-images/varanasi.avif" alt="Varanasi">
            <div class="details">
                <p>Varanasi, one of the oldest living cities in the world, is famous for its spiritual significance, the Ghats along the Ganges River, and the revered Kashi Vishwanath Temple.</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d187724.2099675399!2d82.96289727663034!3d25.317645300336984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398e37210cb9c767%3A0x205415e5e51d4872!2sKashi%20Vishwanath%20Temple!5e0!3m2!1sen!2sin!4v1744867616540!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </a>
        <a href="#" class="state-card">
            <h3>Lucknow</h3>
            <p>Bara Imambara, Chota Imambara</p>
            <img src="./state-images/lucknow.avif" alt="Lucknow">
            <div class="details">
                <p>Lucknow is renowned for its rich culture, and traditional Mughal architecture, including the famous Bara Imambara and Chota Imambara, which showcase the grandeur of Awadhi style.</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d327540.1049094983!2d80.9494225111632!3d26.850026838072032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399b0da8d576e3e1%3A0x5e7d1f7f1727591d!2sBara%20Imambara!5e0!3m2!1sen!2sin!4v1744867659753!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </a>
        <a href="#" class="state-card">
            <h3>Mathura</h3>
            <p>The birthplace of Lord Krishna</p>
            <img src="./state-images/mathura.jpeg" alt="Mathura">
            <div class="details">
                <p>Mathura is celebrated as the birthplace of Lord Krishna and is an important pilgrimage site for Hindus. The city's temples and local culture reflect the rich traditions surrounding this revered deity.</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d148923.32168269896!2d77.67900083103482!3d27.491168495544963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39062c9148ae76ef%3A0x1e9fcb9b9fcf0dab!2sMathura%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1744867702073!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </a>
    </section>

  <!-- Footer -->
  ./<?php include './footer.php' ?>

</body>
</html>