<?php
  $servername = "localhost:3307";
  $username = "camilo";
  $password = "password123";
  $database = "class-db";
  $conn = new mysqli($servername, $username, $password, $database);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

  // Create DB
  $sql = "CREATE TABLE IF NOT EXISTS guests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    age INT(3),
    gender ENUM('M', 'F', 'O')
  );";
  if ($conn->query($sql) === FALSE) {
    echo "Error creating database: " . $conn->error;
  }
?>