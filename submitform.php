<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registerationform";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$branch = $_POST['branch'];
$specialization = $_POST['specialization'];
$graduation_year = $_POST['graduation_year'];
$preferred_location = $_POST['preferred_location'];
$key_skills = $_POST['key_skills'];
$languages_known = $_POST['languages_known'];
$projects = $_POST['projects'];
$resume_path = $_FILES['resume']['name']; 

// SQL insert statement
$sql = "INSERT INTO formdata (name, branch, specialization, graduation_year, preferred_location, key_skills, languages_known, projects, resume_path)
        VALUES ('$name', '$branch', '$specialization', '$graduation_year', '$preferred_location', '$key_skills', '$languages_known', '$projects', '$resume_path')";

if ($conn->query($sql) === TRUE) {
    echo "Saved successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn->close();
?>
