<?php
include 'config.php';

// Get search query from the form
$title = $_GET['title'];
$author = $_GET['author'];

// Search for books in the database based on title and/or author
$query = "SELECT * FROM books WHERE title LIKE '%$title%' AND author LIKE '%$author%'";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>MyBookshelf - Search Results</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Search Results</h1>

        <?php if ($result->num_rows > 0) : ?>
            <div class="book-container">
                <ul>
                    <?php while ($row = $result->fetch_assoc()) : ?>
                        <li><?php echo "{$row['title']} by {$row['author']} (Genre: {$row['genre']}, Rating: {$row['rating']})"; ?></li>
                    <?php endwhile; ?>
                </ul>
            </div>
        <?php else : ?>
            <p>No matching books found.</p>
        <?php endif; ?>

        <a href="index.php">Back to Bookshelf</a>
    </div>
</body>
</html>
