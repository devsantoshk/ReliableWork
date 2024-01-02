<?php

// Include the database connection file
include('db_connection.php');

// Assuming $_POST is used for simplicity, you may need to adjust based on your form data submission method

// Validate and sanitize each field
$vacancyCode = sanitizeInput($_POST['VacancyCode']);
$organisationDetails = sanitizeInput($_POST['OrganisationDetails']);
$location = sanitizeInput($_POST['Location']);
$vacancyDetails = sanitizeInput($_POST['VacancyDetails']);
$dateOfVacancyInformed = sanitizeInput($_POST['DateOfVacancyInformed']);
$currentStatusOfVacancy = sanitizeInput($_POST['CurrentStatusOfVacancy']);
$processAndOtherDetailsComments = sanitizeInput($_POST['ProcessAndOtherDetailsComments']);
$suitableProfiles = sanitizeInput($_POST['SuitableProfiles']);
$suitableProfilesRajni = sanitizeInput($_POST['SuitableProfilesRajni']);
$interestedProfilesFresh2 = sanitizeInput($_POST['InterestedProfilesFresh2']);
$suitableAndInterested = sanitizeInput($_POST['SuitableAndInterested']);
$profilesForwarded = sanitizeInput($_POST['ProfilesForwarded']);
$onlineFacultyInteractionResult = sanitizeInput($_POST['OnlineFacultyInteractionResult']);
$testResult = sanitizeInput($_POST['TestResult']);
$demoResult = sanitizeInput($_POST['DemoResult']);
$interviewResult = sanitizeInput($_POST['InterviewResult']);
$joiningStatus = sanitizeInput($_POST['JoiningStatus']);
$reliableRemarks = sanitizeInput($_POST['ReliableRemarks']);
$subject = sanitizeInput($_POST['Subject']);
$importantInstructions = sanitizeInput($_POST['ImportantInstructions']);
$newColorCodeAndInterestedProfiles = sanitizeInput($_POST['NewColorCodeAndInterestedProfiles']);
$interestedProfiles2 = sanitizeInput($_POST['InterestedProfiles2']);
$interestedProfilesFresh = sanitizeInput($_POST['InterestedProfilesFresh']);
$sir = sanitizeInput($_POST['Sir']);
$maam = sanitizeInput($_POST['Maam']);

// Prepare and execute the SQL query
$sql = "INSERT INTO vacancy_table (VacancyCode, OrganisationDetails, Location, VacancyDetails, DateOfVacancyInformed, CurrentStatusOfVacancy, ProcessAndOtherDetailsComments, SuitableProfiles, SuitableProfilesRajni, InterestedProfilesFresh2, SuitableAndInterested, ProfilesForwarded, OnlineFacultyInteractionResult, TestResult, DemoResult, InterviewResult, JoiningStatus, ReliableRemarks, Subject, ImportantInstructions, NewColorCodeAndInterestedProfiles, InterestedProfiles2, InterestedProfilesFresh, Sir, Maam) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssssssssssssssssssssss", $vacancyCode, $organisationDetails, $location, $vacancyDetails, $dateOfVacancyInformed, $currentStatusOfVacancy, $processAndOtherDetailsComments, $suitableProfiles, $suitableProfilesRajni, $interestedProfilesFresh2, $suitableAndInterested, $profilesForwarded, $onlineFacultyInteractionResult, $testResult, $demoResult, $interviewResult, $joiningStatus, $reliableRemarks, $subject, $importantInstructions, $newColorCodeAndInterestedProfiles, $interestedProfiles2, $interestedProfilesFresh, $sir, $maam);

if ($stmt->execute()) {
    echo "Data inserted successfully!";
} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();

?>
