<?php
  include 'connect.php';
  
  $name= $_POST['name'];
  $email= $_POST['email'];
  $age= $_POST['age'];
  $gender= $_POST['gender'];
  $sql = "INSERT INTO guests (name, email, age, gender) VALUES ('$name', '$email', '$age', '$gender');";
  if ($conn->query($sql) === true) {
    header("Location: view.php");
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
?>