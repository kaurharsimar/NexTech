<?php
// submit_event.php - Handles Hackathon Event Registration
header('Content-Type: application/json');

$host    = 'localhost';
$db      = 'nextech';
$user    = 'root';
$pass    = '';
$charset = 'utf8mb4';

$dsn     = "mysql:host=$host;dbname=$db;charset=$charset";
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

function sanitize($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Required fields
    $required = ['name', 'email', 'phone', 'department', 'year', 'skills'];
    foreach ($required as $field) {
        if (empty($_POST[$field])) {
            echo json_encode(['status' => 'error', 'message' => 'Please fill all required fields.']);
            exit;
        }
    }

    $name        = sanitize($_POST['name']);
    $email       = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone       = sanitize($_POST['phone']);
    $department  = sanitize($_POST['department']);
    $year        = sanitize($_POST['year']);
    $skills      = sanitize($_POST['skills']);
    $team_name   = sanitize($_POST['team_name']   ?? '');
    $team_members = sanitize($_POST['team_members'] ?? '');
    $idea        = sanitize($_POST['idea']         ?? '');

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['status' => 'error', 'message' => 'Invalid email format.']);
        exit;
    }

    $sql = "INSERT INTO event_registrations (name, email, phone, department, year, skills, team_name, team_members, idea)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$name, $email, $phone, $department, $year, $skills, $team_name, $team_members, $idea]);
        echo json_encode(['status' => 'success', 'message' => 'Registered successfully!']);
    } catch (Exception $e) {
        echo json_encode(['status' => 'error', 'message' => 'Registration failed. Please try again.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request.']);
}
?>
