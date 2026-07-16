<?php
// setup_db.php
header('Content-Type: text/html; charset=utf-8');
require_once 'config/db.php';

$success = false;
$message = '';

if (isset($_POST['install'])) {
    try {
        // Read setup_sqlite.sql
        $sqlPath = __DIR__ . '/database/setup_sqlite.sql';
        if (!file_exists($sqlPath)) {
            throw new Exception("setup_sqlite.sql file not found at " . $sqlPath);
        }
        
        $sql = file_get_contents($sqlPath);
        
        // Execute SQL script (split by semicolon)
        $queries = explode(';', $sql);
        
        foreach ($queries as $query) {
            $query = trim($query);
            if (!empty($query)) {
                $pdo->exec($query);
            }
        }
        
        // Create upload directories
        $dirs = [
            __DIR__ . '/uploads',
            __DIR__ . '/uploads/quotes',
            __DIR__ . '/uploads/resumes'
        ];
        
        foreach ($dirs as $dir) {
            if (!file_exists($dir)) {
                mkdir($dir, 0777, true);
            }
        }
        
        $success = true;
        $message = "SQLite database initialized and seed data populated successfully!";
    } catch (Exception $e) {
        $success = false;
        $message = "Error occurred during installation: " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EnterpriseCore Database Installer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
    </style>
</head>
<body class="bg-[#f9f9ff] text-[#141b2b] min-h-screen flex items-center justify-center p-6">
    <div class="bg-white p-10 rounded-2xl shadow-xl max-w-lg w-full border border-gray-100">
        <h1 class="text-3xl font-bold text-[#004ac6] mb-4">EnterpriseCore Setup</h1>
        <p class="text-gray-600 mb-8">This installer will set up your local SQLite database, configure all tables, import seed data, and prepare directories for uploads.</p>
        
        <?php if (!empty($message)): ?>
            <div class="p-4 mb-6 rounded-lg text-sm <?php echo $success ? 'bg-green-50 text-green-800 border border-green-200' : 'bg-red-50 text-red-800 border border-red-200'; ?>">
                <?php echo htmlspecialchars($message); ?>
            </div>
            <?php if ($success): ?>
                <div class="space-y-4">
                    <p class="text-sm text-gray-500">The SQLite database has been created in your project database folder. You can now use the website.</p>
                    <a href="index.php" class="block text-center bg-[#004ac6] text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors">Go to Home Page</a>
                </div>
            <?php endif; ?>
        <?php endif; ?>
        
        <?php if (!$success): ?>
            <form method="POST">
                <div class="space-y-4 mb-8">
                    <div class="bg-blue-50 p-4 rounded-lg text-xs text-blue-800 border border-blue-100">
                        <h4 class="font-bold mb-1">Local Configuration:</h4>
                        <p><strong>Database Type:</strong> SQLite</p>
                        <p><strong>DB File Path:</strong> <code class="bg-blue-100 px-1 py-0.5 rounded">database/enterprise.db</code></p>
                    </div>
                </div>
                <button type="submit" name="install" class="w-full bg-[#004ac6] text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors">Start Database Setup</button>
            </form>
        <?php endif; ?>
    </div>
</body>
</html>
