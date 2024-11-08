<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

// Include the database connection
include 'db.php';

// Get input data
$data = json_decode(file_get_contents("php://input"));

$email = htmlspecialchars($data->email);
$password = htmlspecialchars($data->password);

try {
    // Query to find the user by email or username
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        // Check if the user already has a token
        $token = $user['token'];
        if (empty($token)) {
            // Generate a new token if none exists
            $token = bin2hex(random_bytes(16));

            // Update the token in the database
            $updateTokenStmt = $pdo->prepare("UPDATE users SET token = :token WHERE id = :id");
            $updateTokenStmt->execute(['token' => $token, 'id' => $user['id']]);
        }

        // Determine the redirect URL based on the user's role
        $redirectUrl = $user['role'] === 'student' ? '/StudentHome' : '/Home';

        // Return a successful login response with the token and redirect URL
        echo json_encode(['success' => true, 'message' => 'Login successful', 'token' => $token, 'redirect' => $redirectUrl]);
    } else {
        // Invalid credentials
        echo json_encode(['success' => false, 'message' => 'Invalid email or password']);
    }
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'An error occurred. Please try again.']);
}
