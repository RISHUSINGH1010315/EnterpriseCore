<?php
// api/submit-application.php
header('Content-Type: application/json; charset=utf-8');
require_once '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
    exit;
}

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$portfolio_url = trim($_POST['portfolio_url'] ?? '');
$job_title = trim($_POST['job_role'] ?? '');
$experience_years = intval($_POST['experience_years'] ?? 0);
$cover_letter = trim($_POST['cover_letter'] ?? '');

// Simple validations
if (empty($name) || empty($email) || empty($phone) || empty($job_title)) {
    echo json_encode(['success' => false, 'message' => 'Please fill in all required fields.']);
    exit;
}

// Find job ID from careers by job_title
$job_id = null;
try {
    $stmt = $pdo->prepare("SELECT id FROM careers WHERE job_title = :title LIMIT 1");
    $stmt->execute([':title' => $job_title]);
    $job = $stmt->fetch();
    if ($job) {
        $job_id = $job['id'];
    } else {
        // Fallback or create dummy job if title is not matched
        // Better: select first job or set null
        $stmt2 = $pdo->query("SELECT id FROM careers LIMIT 1");
        $fallback_job = $stmt2->fetch();
        $job_id = $fallback_job ? $fallback_job['id'] : null;
    }
} catch (PDOException $e) {
    // Ignore and proceed
}

$resumePath = null;

// Handle file upload (resume)
if (isset($_FILES['resume']) && $_FILES['resume']['error'] === UPLOAD_ERR_OK) {
    $fileTmpPath = $_FILES['resume']['tmp_name'];
    $fileName = $_FILES['resume']['name'];
    $fileSize = $_FILES['resume']['size'];
    $fileType = $_FILES['resume']['type'];
    
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));
    
    // Sanitize file name
    $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
    
    $allowedExtensions = ['pdf', 'docx', 'doc'];
    if (in_array($fileExtension, $allowedExtensions)) {
        // Directory path
        $uploadFileDir = '../uploads/resumes/';
        if (!file_exists($uploadFileDir)) {
            mkdir($uploadFileDir, 0777, true);
        }
        $dest_path = $uploadFileDir . $newFileName;
        
        if (move_uploaded_file($fileTmpPath, $dest_path)) {
            $resumePath = 'uploads/resumes/' . $newFileName;
        } else {
            echo json_encode(['success' => false, 'message' => 'There was an error moving the uploaded resume file.']);
            exit;
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Upload failed. Allowed file types: ' . implode(',', $allowedExtensions)]);
        exit;
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Please upload your Resume/CV.']);
    exit;
}

try {
    $sql = "INSERT INTO applicants (job_id, name, email, phone, portfolio_url, experience_years, resume_path, cover_letter) 
            VALUES (:job_id, :name, :email, :phone, :portfolio_url, :experience_years, :resume_path, :cover_letter)";
            
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':job_id' => $job_id,
        ':name' => $name,
        ':email' => $email,
        ':phone' => $phone,
        ':portfolio_url' => $portfolio_url,
        ':experience_years' => $experience_years,
        ':resume_path' => $resumePath,
        ':cover_letter' => $cover_letter
    ]);
    
    echo json_encode(['success' => true, 'message' => 'Application submitted successfully.']);
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
}
