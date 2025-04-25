<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <style>
    /* Modern Footer Styles */
.modern-footer {
  background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
  color: #fff;
  padding: 1.5rem 0 0 0;
  margin-top: 3rem;
  position: relative;
  overflow: hidden;
}

.modern-footer::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 2px;
  background: linear-gradient(to right, #ff9933, #ffffff, #138808);
}

.footer-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 1.5rem;
}

.footer-main {
  display: grid;
  grid-template-columns: 250px 1fr;
  gap: 3rem;
  padding-bottom: 1.5rem;
}

.footer-brand {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}

.footer-brand .logo {
  font-size: 1.3rem;
  font-weight: 600;
  margin-bottom: 1rem;
  background: linear-gradient(45deg, #ff9933, #ffffff);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.footer-brand p {
  font-size: 0.9rem;
  line-height: 1.4;
  margin-bottom: 1.2rem;
  opacity: 0.9;
}

.social-icons {
  display: flex;
  gap: 0.6rem;
  margin-top: 0.3rem;
}

.social-icons a {
  color: #fff;
  background: rgba(255, 255, 255, 0.1);
  width: 28px;
  height: 28px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s ease;
  font-size: 0.8rem;
  position: relative;
  overflow: hidden;
}

.social-icons a::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(45deg, #ff9933, #ff8800);
  opacity: 0;
  transition: opacity 0.3s ease;
}

.social-icons a:hover::before {
  opacity: 1;
}

.social-icons a i {
  position: relative;
  z-index: 1;
}

.social-icons a:hover {
  transform: translateY(-2px);
  box-shadow: 0 3px 10px rgba(255, 153, 51, 0.3);
}

.footer-links {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 2rem;
  justify-content: space-between;
}

.link-group {
  display: flex;
  flex-direction: column;
  gap: 0.4rem;
}

.link-group h4 {
  color: #ff9933;
  font-size: 0.9rem;
  margin-bottom: 0.3rem;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

.link-group a {
  color: #fff;
  text-decoration: none;
  font-size: 0.85rem;
  opacity: 0.8;
  transition: all 0.3s ease;
  white-space: nowrap;
}

.link-group a:hover {
  color: #ff9933;
  opacity: 1;
  transform: translateX(3px);
}

.footer-bottom {
  padding: 0.8rem 0;
  border-top: 1px solid rgba(255, 255, 255, 0.1);
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.footer-bottom p {
  font-size: 0.75rem;
  opacity: 0.7;
}

.legal-links {
  display: flex;
  gap: 1.2rem;
}

.legal-links a {
  color: #fff;
  text-decoration: none;
  font-size: 0.75rem;
  opacity: 0.7;
  transition: all 0.3s ease;
}

.legal-links a:hover {
  color: #ff9933;
  opacity: 1;
}

@media (max-width: 768px) {
  .footer-main {
    grid-template-columns: 1fr;
    gap: 1.5rem;
  }

  .footer-brand {
    align-items: center;
  }

  .social-icons {
    justify-content: center;
  }

  .footer-links {
    grid-template-columns: repeat(2, 1fr);
    gap: 1.5rem;
  }

  .footer-bottom {
    flex-direction: column;
    gap: 0.8rem;
    text-align: center;
  }

  .legal-links {
    justify-content: center;
  }
}

@media (max-width: 480px) {
  .footer-links {
    grid-template-columns: 1fr;
    text-align: center;
  }
  
  .link-group {
    align-items: center;
  }
} 
  </style>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
   <!-- Footer -->
   <footer class="modern-footer">
    <div class="footer-container">
      <div class="footer-main">
        <div class="footer-brand">
          <div class="logo">🇮🇳 Incredible India</div>
          <div class="social-icons">
            <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
            <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
        
        <div class="footer-links">
          <div class="link-group">
            <h4>Explore</h4>
            <a href="./state.php">States</a>
            <a href="./bucket-list.php">Bucket List</a>
            <a href="./about.php">About</a>
          </div>
          <div class="link-group">
            <h4>Destinations</h4>
            <a href="./uttarpradesh.php">Taj Mahal</a>
            <a href="./goa.php">Goa</a>
            <a href="./kerala.php">Kerala</a>
          </div>
          <div class="link-group">
            <h4>Connect</h4>
            <a href="./reach.php">Contact</a>
            <a href="./about.php">Support</a>
            <a href="./feedback.php">Feedback</a>
          </div>
        </div>
      </div>
      
      <div class="footer-bottom">
        <p>&copy; 2025 Incredible India</p>
        <div class="legal-links">
          <a href="./privacy.php">Privacy</a>
          <a href="./terms.php">Terms</a>
          <a href="./cookies.php">Cookies</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Font Awesome for social icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</body>
</html>