<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./states-css/westbengal.css"> <!-- Link to your existing CSS file -->
    <title>West Bengal</title>
</head>
<body>

  <!-- Navbar -->
<?php include "./header.php"?>

    <!-- Title Section -->
    <section class="title-section">
        <br><br><br>
        <h1>Welcome to West Bengal</h1>
        <p>The Cultural Heart of India</p>
    </section>

    <!-- States Grid -->
    <section class="states-grid">
        <a href="#" class="state-card">
            <h3>Kolkata</h3>
            <p>Howrah Bridge, Victoria Memorial, Kalighat Temple</p>
            <img src="./state-images/kolkata.avif" alt="Kolkata">
            <div class="details">
                <p>Kolkata, the capital city, is famous for its historical landmarks like the Howrah Bridge, the majestic Victoria Memorial, and the revered Kalighat Temple, embodying India's rich culture and heritage.</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224377.8476387951!2d88.26310866866892!3d22.57264601267460!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a02769a5e8d3df7%3A0xb25a570cc8bfa3a2!2sVictoria%20Memorial!5e0!3m2!1sen!2sin!4v1744870085299!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </a>
        <a href="#" class="state-card">
            <h3>Darjeeling</h3>
            <p>Tea plantations, Tiger Hill, Himalayan Railway</p>
            <img src="./state-images/darjeeling.avif" alt="Darjeeling">
            <div class="details">
                <p>Darjeeling is renowned for its lush tea plantations, the breathtaking view from Tiger Hill, and the iconic Himalayan Railway, making it a must-visit hill station.</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d339386.3433938704!2d88.2622370846118!3d27.03543404509888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e5a8c53a12a12f%3A0xe1bd103c7c165a84!2sDarjeeling!5e0!3m2!1sen!2sin!4v1744870162386!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </a>
        <a href="#" class="state-card">
            <h3>Sundarbans</h3>
            <p>Home to the Royal Bengal Tigers</p>
            <img src="./state-images/sundarbans.jpeg" alt="Sundarbans">
            <div class="details">
                <p>The Sundarbans is a UNESCO World Heritage Site and the largest mangrove forest in the world, famous for being home to the Royal Bengal Tigers and diverse wildlife.</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d146991.81107427222!2d88.7958706817978!3d21.949391042448247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a020e8906447ded%3A0x7c015f083658b000!2sSundarbans%20National%20Park!5e0!3m2!1sen!2sin!4v1744870208265!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </a>
        <a href="#" class="state-card">
            <h3>Shantiniketan</h3>
            <p>Founded by Rabindranath Tagore, known for its cultural legacy</p>
            <img src="./state-images/santiniketan.jpeg" alt="Shantiniketan">
            <div class="details">
                <p>Shantiniketan, founded by Rabindranath Tagore, is renowned for its cultural legacy, educational institutions, and art festivals, emphasizing a blend of culture and nature.</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230636.88221411963!2d88.69072619442129!3d23.67057157393864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a027270a6792801%3A0xe6a142084cc4095e!2sShantiniketan!5e0!3m2!1sen!2sin!4v1744870257110!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </a>
    </section>

  <!-- Footer -->
  ./<?php include './footer.php' ?>

</body>
</html>