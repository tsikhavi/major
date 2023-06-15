<?php
function dd($value){
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

// Define routes
$routes = array(
    '/' => 'index.php',
    '/about' => 'about.php',
    '/contact' => 'contact.php',
    '/cases' => 'cases.php',
    '/services' => 'services.php',
    '/portfolio' => 'portfolio.php',
    '/seo' => 'seo.php'
);

// Get requested URI
$request_uri = $_SERVER['REQUEST_URI'];

// Extract only the path part of the URI (ignore query string)
$path = parse_url($request_uri, PHP_URL_PATH);

// Check if requested path exists in routes array
if (array_key_exists($path, $routes)) {
    // If yes, include corresponding file
    include $routes[$path];
    
    // Generate dynamic heading based on route value
    $heading = ucfirst(str_replace('.php', '', $routes[$path]));
} else {
    // If no, show 404 error
    include 'views/partials/404.php';
    
    // Set default heading
    $heading = '404 Error';
}

echo $heading;