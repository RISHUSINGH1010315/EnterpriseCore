<?php
// api/index.php - Vercel Entrypoint Router

$request = $_SERVER['REQUEST_URI'];
// Remove query parameters
$request = explode('?', $request)[0];
// Remove leading and trailing slashes
$request = trim($request, '/');

// Route requests to root-level PHP files
switch ($request) {
    case '':
    case 'index':
    case 'index.php':
    case 'index.html':
        require __DIR__ . '/../index.php';
        break;
    case 'services':
    case 'services.php':
        require __DIR__ . '/../services.php';
        break;
    case 'industries':
    case 'industries.php':
        require __DIR__ . '/../industries.php';
        break;
    case 'case-studies':
    case 'case-studies.php':
        require __DIR__ . '/../case-studies.php';
        break;
    case 'blog':
    case 'blog.php':
        require __DIR__ . '/../blog.php';
        break;
    case 'careers':
    case 'careers.php':
        require __DIR__ . '/../careers.php';
        break;
    case 'request-quote':
    case 'request-quote.php':
        require __DIR__ . '/../request-quote.php';
        break;
    case 'setup_db':
    case 'setup_db.php':
        require __DIR__ . '/../setup_db.php';
        break;
    default:
        // Try direct file mapping for api endpoints if requested
        if (strpos($request, 'api/') === 0) {
            $apiFile = __DIR__ . '/../' . $request . '.php';
            if (file_exists($apiFile)) {
                require $apiFile;
                break;
            }
        }
        
        // Static file serving fallback for HTML files if accessed directly
        $staticHtml = __DIR__ . '/../' . $request . '.html';
        if (file_exists($staticHtml)) {
            readfile($staticHtml);
            break;
        }
        
        http_response_code(404);
        echo "404 Not Found";
        break;
}
