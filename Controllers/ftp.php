<?php

$conn = DbConfig();
// Function to sanitize and validate data
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Validate and sanitize each field
    $name = sanitizeInput($_POST['Name']);
    $dob = sanitizeInput($_POST['DOB']);
    $gender = sanitizeInput($_POST['Gender']);
    $subjects = sanitizeInput($_POST['Subjects']);
    $phone = sanitizeInput($_POST['Phone']);
    $email = sanitizeInput($_POST['Email']);
    $state = sanitizeInput($_POST['State']);
    $district = sanitizeInput($_POST['District']);
    $Policy = sanitizeInput($_POST['cookies-consent']);

    // Check if any required field is empty
    if (empty($name) || empty($dob) || empty($gender) || empty($subjects) || empty($phone) || empty($email) || empty($state) || empty($district)) {
        die("Error: All fields are required.");
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Error: Invalid email format.");
    }

    // Prepare and execute the SQL query
    $sql = "INSERT INTO ftp (Name, DOB, Gender, Subjects, Phone, Email, State, District, Policy) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssss", $name, $dob, $gender, $subjects, $phone, $email, $state, $district, $Policy);
    
    if ($stmt->execute()) {
        header("Location: ../ftp?success=FTP Registered Successfully!");
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}

?>
