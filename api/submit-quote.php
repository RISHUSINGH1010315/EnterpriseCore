<?php
// api/submit-quote.php
header('Content-Type: application/json; charset=utf-8');
require_once '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
    exit;
}

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$company = trim($_POST['company'] ?? '');
$project_type = trim($_POST['project_type'] ?? '');
$budget = trim($_POST['budget'] ?? '');
$details = trim($_POST['details'] ?? '');

// Simple validations
if (empty($name) || empty($email) || empty($phone) || empty($company)) {
    echo json_encode(['success' => false, 'message' => 'Please fill in all required fields.']);
    exit;
}

$attachmentPath = null;

// Handle file upload
if (isset($_FILES['attachment']) && $_FILES['attachment']['error'] === UPLOAD_ERR_OK) {
    $fileTmpPath = $_FILES['attachment']['tmp_name'];
    $fileName = $_FILES['attachment']['name'];
    $fileSize = $_FILES['attachment']['size'];
    $fileType = $_FILES['attachment']['type'];
    
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));
    
    // Sanitize file name
    $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
    
    $allowedExtensions = ['pdf', 'docx', 'zip', 'doc', 'txt'];
    if (in_array($fileExtension, $allowedExtensions)) {
        // Directory path
        $uploadFileDir = '../uploads/quotes/';
        if (!file_exists($uploadFileDir)) {
            mkdir($uploadFileDir, 0777, true);
        }
        $dest_path = $uploadFileDir . $newFileName;
        
        if (move_uploaded_file($fileTmpPath, $dest_path)) {
            $attachmentPath = 'uploads/quotes/' . $newFileName;
        } else {
            echo json_encode(['success' => false, 'message' => 'There was an error moving the uploaded file.']);
            exit;
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Upload failed. Allowed file types: ' . implode(',', $allowedExtensions)]);
        exit;
    }
}

try {
    $sql = "INSERT INTO quotes (name, email, phone, company, budget, project_type, details, attachment, status) 
            VALUES (:name, :email, :phone, :company, :budget, :project_type, :details, :attachment, 'new')";
            
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':name' => $name,
        ':email' => $email,
        ':phone' => $phone,
        ':company' => $company,
        ':budget' => $budget,
        ':project_type' => $project_type,
        ':details' => $details,
        ':attachment' => $attachmentPath
    ]);
    
    echo json_encode(['success' => true, 'message' => 'Quote request submitted successfully.']);
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
}
