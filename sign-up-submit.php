<?php
global $conn;
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = htmlspecialchars(trim($_POST['first_name']));
    $last_name = htmlspecialchars(trim($_POST['last_name']));
    $mother_name = htmlspecialchars(trim($_POST['mother_name']));
    $father_name = htmlspecialchars(trim($_POST['father_name']));
    $address = htmlspecialchars(trim($_POST['address']));
    $gender = htmlspecialchars(trim($_POST['gender']));
    $state = htmlspecialchars(trim($_POST['state']));
    $city = htmlspecialchars(trim($_POST['city']));
    $dob = htmlspecialchars(trim($_POST['dob']));
    $pincode = htmlspecialchars(trim($_POST['pincode']));
    $course = htmlspecialchars(trim($_POST['course']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = password_hash(htmlspecialchars(trim($_POST['password'])), PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (first_name, last_name, mother_name, father_name, address, gender, state, city, dob, pincode, course, email, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssssssss", $first_name, $last_name, $mother_name, $father_name, $address, $gender, $state, $city, $dob, $pincode, $course, $email, $password);

    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();

    // return to the login page
    header("Location: login.php");
}
?>