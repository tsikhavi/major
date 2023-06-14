<?php
require_once 'functions.php';
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
} else {
    // If no, show 404 error
    include 'views/partials/404.php';
}
