<?php
include 'config.php';

// Get data from the form
$title = $_POST['title'];
$author = $_POST['author'];
$genre = $_POST['genre'];
$rating = floatval($_POST['rating']);

// Insert new book into the database
$query = "INSERT INTO books (title, author, genre, rating) VALUES ('$title', '$author', '$genre', $rating)";

if ($conn->query($query) === TRUE) {
    $msg = "New book added successfully!";
} else {
    $msg = "Error: " . $query . "<br>" . $conn->error;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>MyBookshelf - Add Book</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>My Bookshelf</h1>
        <p class="success-msg"><?php echo $msg; ?></p>
        <a href="index.php">Back to Bookshelf</a>
    </div>
</body>
</html>
