<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');


include 'db.php';


$data = json_decode(file_get_contents("php://input"));

$firstname = htmlspecialchars($data->firstname);
$lastname = htmlspecialchars($data->lastname);
$email = htmlspecialchars($data->email);
$password = password_hash($data->password, PASSWORD_DEFAULT); 
$role = htmlspecialchars($data->role);
$token = bin2hex(random_bytes(16)); 

try {
    
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->execute(['email' => $email]);
    
    if ($stmt->rowCount() > 0) {
        echo json_encode(['success' => false, 'message' => 'Email already registered']);
        exit;
    }

    
    $sql = "INSERT INTO users (firstname, lastname, email, password, role, token) VALUES (:firstname, :lastname, :email, :password, :role, :token)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'firstname' => $firstname,
        'lastname' => $lastname,
        'email' => $email,
        'password' => $password,
        'role' => $role,
        'token' => $token
    ]);

    
    echo json_encode(['success' => true, 'message' => 'User registered successfully, please verify your email.']);
    
    // Optionally, send a verification email here using the token
    // Example: sendVerificationEmail($email, $token);

} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Registration failed.']);
}

