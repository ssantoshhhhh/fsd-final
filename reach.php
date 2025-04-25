<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./css/reach.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <!-- Navbar -->
  <?php include "./header.php"?>

  <div class="container">
    <h2>Contact</h2>
    <?php if(isset($_GET['variable'])){?>
      <p class="error"> 
        <?=htmlspecialchars($_GET['error'])?>
      
      </p>
     <?php }?>

     <?php if(isset($_GET['variable'])){?>
      <p class="success">
        <?=htmlspecialchars($_GET['success'])?></p>
     <?php }?>
    
    
    <form action="./contact.php" method="POST">
      <input type="text" name="name" placeholder="Name" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="text" name="subject" placeholder="Subject" required>
      <textarea name="message" rows="5" placeholder="Message" required></textarea>
      <button type="submit">Send Message</button>
    </form>
  </div>

  
  <!-- Footer -->
  <?php include './footer.php' ?>
</body>
</html>