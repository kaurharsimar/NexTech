<?php
// register.php
header('Content-Type: application/json');
require_once 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Basic sanitization
    function sanitize_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = sanitize_input($_POST["name"] ?? '');
    $email = sanitize_input($_POST["email"] ?? '');
    $phone = sanitize_input($_POST["phone"] ?? '');
    $department = sanitize_input($_POST["department"] ?? '');
    $year = sanitize_input($_POST["year"] ?? '');
    $skills = sanitize_input($_POST["skills"] ?? '');

    // Basic validation
    $errors = [];
    if (empty($name)) $errors[] = "Name is required";
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Valid email is required";
    if (empty($phone)) $errors[] = "Phone number is required";
    if (empty($department)) $errors[] = "Department is required";
    if (empty($year)) $errors[] = "Year of study is required";

    if (!empty($errors)) {
        echo json_encode(['success' => false, 'errors' => $errors]);
        exit;
    }

    try {
        // Prepare SQL and bind parameters
        $stmt = $pdo->prepare("INSERT INTO registrations (name, email, phone, department, year_of_study, skills) VALUES (:name, :email, :phone, :department, :year, :skills)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':department', $department);
        $stmt->bindParam(':year', $year);
        $stmt->bindParam(':skills', $skills);

        $stmt->execute();
        
        echo json_encode(['success' => true, 'message' => 'Registration successful! Welcome to the club.']);
    } catch(PDOException $e) {
        // Log the actual error internally, show generic error to user
        error_log("Database error: " . $e->getMessage());
        echo json_encode(['success' => false, 'message' => 'A server error occurred during registration. Please try again later.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
}
?>
