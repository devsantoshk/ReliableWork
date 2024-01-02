<?php

// Include the database connection file
include('db_connection.php');

// Function to sanitize and validate data
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate and sanitize each field
    $profileCode = sanitizeInput($_POST['ProfileCode']);
    $tAndCStatus = sanitizeInput($_POST['TAndCStatus']);
    // Continue for other fields...

    // Check if any required field is empty
    if (empty($profileCode) || empty($tAndCStatus) /* Add other required fields here */) {
        die("Error: All required fields must be filled.");
    }

    // Prepare and execute the SQL query
    $sql = "INSERT INTO fsat_status (ProfileCode, TAndCStatus /* Add other field names here */) 
            VALUES (?, ? /* Add corresponding placeholders here */)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss" /* Adjust the data types based on your fields */, $profileCode, $tAndCStatus /* Add corresponding variables here */);

    if ($stmt->execute()) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();

?>
