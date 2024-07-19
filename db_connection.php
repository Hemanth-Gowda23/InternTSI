<?php
// Herohosty database connection details
$servername = "localhost"; // This is often correct for most hosting providers
$username = "your_herohosty_db_username";
$password = "your_herohosty_db_password";
$dbname = "your_herohosty_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set charset to ensure proper handling of all characters
$conn->set_charset("utf8mb4");

// Optionally, you can set the timezone if needed
date_default_timezone_set('Your/Timezone'); // e.g., 'Asia/Kolkata' for India

// You might want to add error reporting for development, but remember to turn it off for production
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

// Optionally, you can create a function to handle database errors
function db_error($message) {
    // Log the error or handle it as needed
    error_log("Database Error: " . $message);
    // You might want to redirect to an error page or display a user-friendly message
    die("An error occurred. Please try again later.");
}

// Use the function like this:
// if ($conn->connect_error) {
//     db_error("Connection failed: " . $conn->connect_error);
// }

?>