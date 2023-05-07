<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "schoolmanagement";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $first_name = $_POST["firstName"];
  $last_name = $_POST["lastName"];
  $birthday = $_POST["birthdayDate"];
  $gender = $_POST["inlineRadioOptions"];
  $email = $_POST["emailAddress"];
  $phone_number = $_POST["phoneNumber"];


  $sql = "INSERT INTO enquiry (first_name, last_name, birthday, gender, email, phone_number)
  VALUES ('$first_name', '$last_name', '$birthday', '$gender', '$email', '$phone_number')";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>