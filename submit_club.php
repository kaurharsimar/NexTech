<?php
// submit_club.php - Handles Club Membership Registration
header('Content-Type: application/json');

// Database configuration
$host = 'localhost';
$db   = 'nextech';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    echo json_encode(['status' => 'error', 'message' => 'Database connection failed.']);
    exit;
}

// Function to sanitize inputs
function sanitize($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate required fields
    $required = ['name', 'email', 'phone', 'department', 'year', 'interest', 'skills', 'reason'];
    foreach ($required as $field) {
        if (empty($_POST[$field])) {
            echo json_encode(['status' => 'error', 'message' => 'Please fill all required fields.']);
            exit;
        }
    }

    $name = sanitize($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = sanitize($_POST['phone']);
    $department = sanitize($_POST['department']);
    $year = sanitize($_POST['year']);
    $interest = sanitize($_POST['interest']);
    $skills = sanitize($_POST['skills']);
    $reason = sanitize($_POST['reason']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['status' => 'error', 'message' => 'Invalid email format.']);
        exit;
    }

    // Check if email already registered for club
    $stmt = $pdo->prepare('SELECT id FROM club_members WHERE email = ?');
    $stmt->execute([$email]);
    if ($stmt->fetch()) {
        echo json_encode(['status' => 'error', 'message' => 'Email already registered for the club.']);
        exit;
    }

    // Insert to DB
    $sql = "INSERT INTO club_members (name, email, phone, department, year, interest, skills, reason) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$name, $email, $phone, $department, $year, $interest, $skills, $reason]);
        
        echo json_encode(['status' => 'success', 'message' => 'Successfully joined the club!']);
    } catch (Exception $e) {
        echo json_encode(['status' => 'error', 'message' => 'Failed to register. Please try again later.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}
?>
