<?php
$servername = "localhost";
$username = "root";  // Change if necessary
$password = "";      // Change if necessary
$database = "youth_camp";

// Connect to database
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data safely
$fullname = isset($_POST['fullname']) ? $_POST['fullname'] : '';
$nickname = isset($_POST['nickname']) ? $_POST['nickname'] : '';
$address = isset($_POST['address']) ? $_POST['address'] : '';
$contact_number = isset($_POST['contact']) ? $_POST['contact'] : '';
$birthdate = isset($_POST['birthdate']) ? $_POST['birthdate'] : '';
$age = isset($_POST['age']) ? $_POST['age'] : '';
$church_name = isset($_POST['church']) ? $_POST['church'] : '';
$church_address = isset($_POST['church_address']) ? $_POST['church_address'] : '';
$head_pastor = isset($_POST['pastor']) ? $_POST['pastor'] : '';
$years_christian = isset($_POST['years_christian']) ? $_POST['years_christian'] : '';
$delegation = isset($_POST['delegation']) ? $_POST['delegation'] : '';
$suggestions = isset($_POST['suggestions']) ? $_POST['suggestions'] : '';

// Use prepared statements to prevent SQL injection
$stmt = $conn->prepare("INSERT INTO registered_campers 
    (fullname, nickname, address, contact_number, birthdate, age, church_name, church_address, head_pastor, years_christian, delegation, suggestions) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param("ssssssssssss", $fullname, $nickname, $address, $contact_number, $birthdate, $age, $church_name, $church_address, $head_pastor, $years_christian, $delegation, $suggestions);

if ($stmt->execute()) {
    echo "<script>window.location.href='congrats.php';</script>";
} else {
    echo "Error: " . $stmt->error;
}

// Close connection
$stmt->close();
$conn->close();
?>
