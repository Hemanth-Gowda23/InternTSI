<?php 
include 'db_connection.php';

// Fetch courses from database
$sql = "SELECT * FROM courses";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Courses</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <!-- Add navigation here (same as index.php) -->
    </header>

    <main>
        <h1>Our Courses</h1>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='course'>";
                echo "<h2>" . htmlspecialchars($row["title"]) . "</h2>";
                echo "<p>" . htmlspecialchars($row["description"]) . "</p>";
                echo "<a href='course.php?id=" . $row["id"] . "'>Learn More</a>";
                echo "</div>";
            }
        } else {
            echo "No courses available at the moment.";
        }
        ?>
    </main>

    <footer>
        <p>&copy; 2024 Online Course Website. All rights reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>