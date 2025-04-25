<!DOCTYPE html>
<html lang="en">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Playwrite+AU+SA:wght@100..400&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<head>
  <meta charset="UTF-8">
  <style>
    /* Navbar */

.navbar {
  background: linear-gradient(to right, #ff9933, #ffffff, #138808);
  padding: 1rem 2rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.logo {
  font-size: 1.6rem;
  font-weight: 600;
  color: #000080;
}

.nav-links {
  list-style: none;
  display: flex;
  gap: 1.5rem;
}

.nav-links a {
  text-decoration: none;
  font-weight: 500;
  color: #000;
  transition: color 0.3s;
}

.nav-links a:hover {
  color: #ff9933;
}

/* Nav Logo */
.logo {
  font-size: 1.5rem;
  font-weight: bold;
  color: var(--navy-blue);
}

/* Nav Links */
.nav-links {
  display: flex;
  gap: 25px;
}

.nav-links a {
  color: var(--navy-blue);
  text-decoration: none;
  font-weight: 500;
  transition: color 0.3s ease;
}

.nav-links a:hover {
  text-decoration: underline;
  color: #222;
}

/* Fixed Navbar Styling */
.navbar {
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 1000;
  background: linear-gradient(to right, var(--saffron), var(--white), var(--green));
  color: var(--navy-blue);
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 15px 30px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

/* Add top padding to body so content doesn't hide under fixed navbar */
body {
  padding-top: 80px; /* Adjust this based on navbar height */
}

/* Nav Logo */
.logo {
  font-size: 1.5rem;
  font-weight: bold;
  color: var(--navy-blue);
}

/* Nav Links */
.nav-links {
  display: flex;
  gap: 25px;
}

.nav-links a {
  color: var(--navy-blue);
  text-decoration: none;
  font-weight: 500;
  transition: color 0.3s ease;
}

.nav-links a:hover {
  text-decoration: underline;
  color: #222;
}

/* Keyframes */
@keyframes floatUp {
  0% {
    transform: translateY(0) scale(1);
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  }
  50% {
    transform: translateY(-10px) scale(1.03);
    box-shadow: 0 12px 24px rgba(0,0,0,0.15);
  }
  100% {
    transform: translateY(0) scale(1);
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  }
}

@keyframes expandLine {
  0% {
    width: 0;
    opacity: 0;
  }
  100% {
    width: 100%;
    opacity: 1;
  }
}

@keyframes pulseRing {
  0% {
    box-shadow: 0 0 0 0 rgba(19, 136, 8, 0.4);
  }
  70% {
    box-shadow: 0 0 0 10px rgba(19, 136, 8, 0);
  }
  100% {
    box-shadow: 0 0 0 0 rgba(19, 136, 8, 0);
  }
}

/* Logo Animation */
.logo {
  position: relative;
  transition: transform 0.3s ease;
}
.logo:hover {
  transform: scale(1.08);
  animation: pulseRing 1s infinite;
}

/* Nav Links Animation */
.nav-links a {
  position: relative;
  padding-bottom: 5px;
  transition: color 0.3s ease;
}

.nav-links a::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  height: 3px;
  width: 0%;
  background-color: var(--green);
  transition: width 0.3s ease;
  animation: none;
}

.nav-links a:hover::after {
  width: 100%;
  animation: expandLine 0.3s ease-out forwards;
}

.nav-links a:hover {
  color: var(--green);
}


  </style>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <!-- Navbar -->
  <header>
    <nav class="navbar">
      <div class="logo">🇮🇳-Incredible India</div>
      <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="state.php">States</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="./bucket-list.php">List</a></li>
        <li><a href="./feedback.php">Feedback</a></li>
        <li><a href="./reach.php">Contact</a></li>
      </ul>
    </nav>
  </header>

</body>
</html>
