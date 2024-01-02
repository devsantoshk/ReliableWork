<?php
// print_r($_REQUEST);

$conn = DbConfig();

// Function to sanitize and validate data
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["signup"])) {

    // Validate and sanitize each field
    $OrgName = sanitizeInput($_POST['OrgName']);
    $OrgType = sanitizeInput($_POST['OrgType']);
    $EstYearOrg = sanitizeInput($_POST['EstYearOrg']);
    $UserName = sanitizeInput($_POST['UserName']);
    $phone = sanitizeInput($_POST['phone']);
    $email = sanitizeInput($_POST['email']);
    $password = sanitizeInput($_POST['password']);
    $cpassword = sanitizeInput($_POST['cpassword']);
    $Policy = sanitizeInput($_POST['cookies-consent']);

    // Check if any required field is empty
    if (empty($OrgName) || empty($OrgType) || empty($EstYearOrg) || empty($UserName) || empty($phone) || empty($email) || empty($password) || empty($cpassword) || empty($Policy)) {
        die("Error: All fields are required.");
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Error: Invalid email format.");
    }

    // Prepare and execute the SQL query
    $sql = "INSERT INTO `signup_user` (OrgName, OrgType, EstYearOrg, UserName, phone, email, password, cpassword, cookies_consent) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssss", $OrgName, $OrgType, $EstYearOrg, $UserName, $phone, $email, $password, $cpassword, $Policy);

    if ($stmt->execute()) {
       // echo "Success";
         header("Location: ../Login?Success=SignUp Successfully!");
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
