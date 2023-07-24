<?php
include 'config.php';

// Display all books in the collection
$query = "SELECT * FROM books";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>MyBookshelf</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>My Bookshelf</h1>

        <?php if ($result->num_rows > 0) : ?>
            <div class="book-container">
                <ul>
                    <?php while ($row = $result->fetch_assoc()) : ?>
                        <li><?php echo "{$row['title']} by {$row['author']} (Genre: {$row['genre']}, Rating: {$row['rating']})"; ?></li>
                    <?php endwhile; ?>
                </ul>
            </div>
        <?php else : ?>
            <p>No books in the collection.</p>
        <?php endif; ?>

        <h2>Add a New Book</h2>
        <form action="add_book.php" method="post">
            <label>Title:</label>
            <input type="text" name="title" required><br>
            <label>Author:</label>
            <input type="text" name="author" required><br>
            <label>Genre:</label>
            <input type="text" name="genre" required><br>
            <label>Rating:</label>
            <input type="number" step="0.1" min="0" max="10" name="rating" required><br>
            <input type="submit" value="Add Book">
        </form>

        <div class="search-form">
            <h2>Search Books</h2>
            <form action="search_books.php" method="get">
                <label>Search by Title:</label>
                <input type="text" name="title"><br>
                <label>Search by Author:</label>
                <input type="text" name="author"><br>
                <input type="submit" value="Search">
            </form>
        </div>
    </div>
</body>
</html>
