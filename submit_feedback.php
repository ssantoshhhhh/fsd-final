<?php
$host = "127.0.0.1:4306";
$user = "root";        // your MySQL username
$password = "password";        // your MySQL password
$database = "fd_db";

// Create connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$find_website = $_POST['find_website'];
$helpful = $_POST['helpful'];
$experience_rating = $_POST['experience_rating'];
$recommend = $_POST['recommend'];
$suggestions = $_POST['suggestions'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO fd (find_website, helpful, experience_rating, recommend, suggestions) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("ssiss", $find_website, $helpful, $experience_rating, $recommend, $suggestions);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h2 {
            color: #4CAF50; /* Change this color to match your theme */
            margin-bottom: 20px;
        }
        button {
            background-color: #4CAF50; /* Change button color to match your theme */
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #45a049; /* Darker shade on hover */
        }
        a {
            text-decoration: none; /* Remove underline from link */
        }
    </style>
</head>
<body>

<div class="container">
<?php
if ($stmt->execute()) {
    // Display thank you message with a button to redirect to index page
    echo "<h2>Thank you for your feedback!</h2>";
    echo '<a href="index.php"><button>Go to Home</button></a>'; // Change 'index.php' to your actual index page if it\'s different
} else {
    echo "<h2>Error: " . $stmt->error . "</h2>";
}
?>
</div>

</body>
</html>

<?php
$stmt->close();
$conn->close();
?>