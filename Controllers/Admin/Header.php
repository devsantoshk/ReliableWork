<?php
// Create a connection

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
    $phone = sanitizeInput($_POST['Phone']);
    $email = sanitizeInput($_POST['Email']);
    $Location = sanitizeInput($_POST['Location']);

    // Check if any required field is empty
    if (empty($phone) || empty($email) || empty($Location)) {
        die("Error: All required fields must be filled.");
    }

    // Validate email format
    $email = filter_var($email, FILTER_VALIDATE_EMAIL) ? $conn->real_escape_string($email) : '';

    // Prepare and execute the SQL query
    $sql = "INSERT INTO your_table_name (phone, email, location) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $conn->real_escape_string($phone), $email, $conn->real_escape_string($Location), $conn->real_escape_string($Location));

    if ($stmt->execute()) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}