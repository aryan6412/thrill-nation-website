<?php
// router.php
// Local router script for PHP built-in server to map clean URLs to PHP files

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Clean URL mappings
$routes = [
    '/attractions' => '/attractions.php',
    '/water-park'  => '/water-park.php',
    '/stay'        => '/stay.php',
    '/events'      => '/events.php',
    '/gallery'     => '/gallery.php',
    '/visit'       => '/visit.php',
    '/contact'     => '/contact.php'
];

if (isset($routes[$uri])) {
    $_SERVER['PHP_SELF'] = $routes[$uri]; // Maintain correct PHP_SELF for navigation active state
    include __DIR__ . $routes[$uri];
    exit;
}

if ($uri === '/') {
    $_SERVER['PHP_SELF'] = '/index.php';
    include __DIR__ . '/index.php';
    exit;
}

// Serve static assets directly if they exist
if (file_exists(__DIR__ . $uri) && !is_dir(__DIR__ . $uri)) {
    return false;
}

// Fallback to checking if the URI maps directly to a PHP file
if (file_exists(__DIR__ . $uri . '.php')) {
    $_SERVER['PHP_SELF'] = $uri . '.php';
    include __DIR__ . $uri . '.php';
    exit;
}

return false;
