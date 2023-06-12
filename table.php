<?php
// Database connection details
$host = 'localhost';      // Database host
$db   = 'your_database';  // Database name
$user = 'your_username';  // Database username
$pass = 'your_password';  // Database password

// Establishing the database connection
$conn = new mysqli($host, $user, $pass, $db);

// Check if the connection was successful
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// SQL statement to create a table
$sql = "CREATE TABLE your_table (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
)";

// Execute the CREATE TABLE query
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully. ";

    // SQL statement to insert data into the table
    $insertSql = "INSERT INTO your_table (name, email)
                  VALUES ('John Doe', 'johndoe@example.com'),
                         ('Jane Smith', 'janesmith@example.com')";

    // Execute the INSERT query
    if ($conn->query($insertSql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error inserting data: " . $conn->error;
    }
} else {
    echo "Error creating table: " . $conn->error;
}

// Close the database connection
$conn->close();
?>
