<?php
// Create a connection

$conn = DbConfig();

// Function to sanitize and validate data
function sanitizeInput($data) {
    if (is_array($data)) {
        $sanitizedData = array();
        foreach ($data as $key => $value) {
            $sanitizedData[$key] = trim(stripslashes(htmlspecialchars($value)));
        }
        return $sanitizedData;
    } else {
        return null;
    }
}

// Function to validate a URL
function isValidURL($url) {
    // Use filter_var with FILTER_VALIDATE_URL filter
    return filter_var($url, FILTER_VALIDATE_URL) !== false;
}

// Check if form is submitted
// if (($_SERVER["REQUEST_METHOD"] == "POST") && isset($_POST['Update_Top_Header'])) {
    
//     // Validate and sanitize each field
//     // Email Contact Location
//     $sanitizedData = sanitizeInput($_POST);

//     // Check if any required field is empty
//     if (empty($sanitizedData['Contact']) || empty($sanitizedData['Email']) || empty($sanitizedData['Location'])) {
//         die("Error: All required fields must be filled.");
//     }

//     // Validate email format
//     $Email = filter_var($sanitizedData['Email'], FILTER_VALIDATE_EMAIL) ? $conn->real_escape_string($sanitizedData['Email']) : '';

//     // Prepare and execute the SQL query
//     $sql = "INSERT INTO `top-header` (Email, Contact, Location) VALUES (?, ?, ?)";
//     $stmt = $conn->prepare($sql);

//     // Assign the result of real_escape_string to variables
//     $emailParam = $Email;
//     $contactParam = $conn->real_escape_string($sanitizedData['Contact']);
//     $locationParam = $conn->real_escape_string($sanitizedData['Location']);

//     // Pass the variables to bind_param
//     $stmt->bind_param("sss", $emailParam, $contactParam, $locationParam);

//     if ($stmt->execute()) {
//         header("Location: ../ftp?success=Top Header Update Successfully!");
//     } else {
//         echo "Error: " . $stmt->error;
//     }

//     // Close statement and connection
//     $stmt->close();
//     $conn->close();
// }


// Check if form is submitted
if (($_SERVER["REQUEST_METHOD"] == "POST") && isset($_POST['Update_Top_Header'])) {
    
    $sanitizedData = sanitizeInput($_POST);

    // Check if any required field is empty
    if (empty($sanitizedData['Contact']) || empty($sanitizedData['Email']) || empty($sanitizedData['Location'])) {
        die("Error: All required fields must be filled.");
    }

    // Validate email format
    $Email = filter_var($sanitizedData['Email'], FILTER_VALIDATE_EMAIL) ? $conn->real_escape_string($sanitizedData['Email']) : '';

    // Prepare and execute the SQL query for update
    $sql = "UPDATE `top-header` SET Email = ?, Contact = ?, Location = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);

    // Assign the result of real_escape_string to variables
    $emailParam = $Email;
    $contactParam = $conn->real_escape_string($sanitizedData['Contact']);
    $locationParam = $conn->real_escape_string($sanitizedData['Location']);
    $id = $conn->real_escape_string($sanitizedData['id']);

    // Pass the variables to bind_param
    $stmt->bind_param("ssss", $emailParam, $contactParam, $locationParam,$id);

    if ($stmt->execute()) {
        header("Location: ../../admin/Top_Header_Update?success=Top Header Update has been Successfully");
    } else {
        header("Location: ../../admin/Top_Header_Update?error=Top Header Update has been Faild".$stmt->error);
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}

// Check if form is submitted
if (($_SERVER["REQUEST_METHOD"] == "POST") && isset($_POST['update-socialmedia'])) {
    
    $sanitizedData = sanitizeInput($_POST);
    // Check if any required field is empty
    if (empty($sanitizedData['Facebook']) || empty($sanitizedData['Twitter']) || empty($sanitizedData['LinkedIn'])) {
        header("Location: ../../admin/Top_Header_Update?error=All required fields must be filled.");
        die("Error: All required fields must be filled.");
    }
    
      // Validate URLs
      if (!isValidURL($sanitizedData['Facebook']) || !isValidURL($sanitizedData['Twitter']) || !isValidURL($sanitizedData['LinkedIn'])) {
        header("Location: ../../admin/Top_Header_Update?error=Invalid URL format.");
        die("Error: Invalid URL format.");
    }

    $sql = "UPDATE social_media SET Facebook = ?, Twitter = ?, LinkedIn = ? WHERE id = ?";

    // Assuming your fields are of type VARCHAR and id is an integer. Adjust the data types accordingly.
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $sanitizedData['Facebook'], $sanitizedData['Twitter'], $sanitizedData['LinkedIn'], $sanitizedData['id']);
    $stmt->execute();

    if ($stmt->execute()) {
        header("Location: ../../admin/Top_Header_Update?success=Social Media Update has been Successfully");
    } else {
        header("Location: ../../admin/Top_Header_Update?error=Social Media Update has been Faild".$stmt->error);
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
