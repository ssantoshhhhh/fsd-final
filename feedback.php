<!DOCTYPE html>
<html>
<head>
  <style>
    button {
  background-color: #138808;
  color: #fff;
  padding: 0.7rem 1.5rem;
  border: none;
  text-decoration: none;
  font-weight: 600;
  border-radius: 5px;
  transition: background 0.3s ease;
  margin-left: 130px;
}

button:hover {
  background-color: #0c5c05;
}
  </style>
  <link rel="stylesheet" href="./css/feedback.css">
    <title>Website Feedback Form</title>
</head>
<body>

  <!-- Navbar -->
  <?php include "./header.php"?>

<h2 style="text-align:center;">Website Feedback Form</h2>

<form action="./submit_feedback.php" method="POST">
    <label>1. How did you find our website?</label>
    <input type="text" name="find_website" required>

    <label>2. Do you find our website helpful?</label>
    <select name="helpful" required>
        <option value="">Select</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
    </select>

    <label>3. How do you rate your experience? (1-10)</label>
    <select name="experience_rating" required>
        <option value="">Select</option>
        <?php for ($i=1; $i<=10; $i++) echo "<option value='$i'>$i</option>"; ?>
    </select>

    <label>4. Do you recommend our site to other travelers?</label>
    <select name="recommend" required>
        <option value="">Select</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
    </select>

    <label>5. Do you want to suggest any improvements?</label>
    <textarea name="suggestions" rows="4"></textarea>

    <button type="submit">Submit Feedback</button>
</form>



  <!-- Footer -->
  <?php include './footer.php' ?>

</body>
</html>
