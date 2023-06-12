<?php
// Database connection details
$host = 'localhost';      // Database host
$user = 'your_username';  // Database username
$pass = 'your_password';  // Database password

// Connect to the MySQL server
$conn = new mysqli($host, $user, $pass);

// Check if the connection was successful
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// SQL statement to create a database
$createDbSql = 'CREATE DATABASE your_database';

// Execute the CREATE DATABASE query
if ($conn->query($createDbSql) === TRUE) {
    echo 'Database created successfully.';

    // SQL statement to drop a database
    $dropDbSql = 'DROP DATABASE your_database';

    // Execute the DROP DATABASE query
    if ($conn->query($dropDbSql) === TRUE) {
        echo 'Database dropped successfully.';
    } else {
        echo 'Error dropping database: ' . $conn->error;
    }
} else {
    echo 'Error creating database: ' . $conn->error;
}

// Close the database connection
$conn->close();
?>
