<?php
declare(strict_types=1);

require __DIR__ . '/../app/core/helpers.php';
require __DIR__ . '/../app/core/view.php';

$uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';

// base path = folder where index.php lives (e.g. /eastpole/public)
$base = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '')), '/');

// remove base from URI
if ($base !== '' && str_starts_with($uri, $base)) {
    $uri = substr($uri, strlen($base));
}

$uri = '/' . trim($uri, '/');
if ($uri === '//')
    $uri = '/';

// route map
$routes = [
    '/' => 'index',
    '/about' => 'about',
    '/contact' => 'contact',
    '/blog' => 'blog',
    '/event' => 'event',
    '/program' => 'program',
    '/service' => 'service',
    '/team' => 'team',
    '/testimonial' => 'testimonial',
];

$page = $routes[$uri] ?? null;

if ($page === null) {
    http_response_code(404);
    $page = '404';
}

$titles = [
    'index' => 'Home',
    'about' => 'About Us',
    'contact' => 'Contact',
    'service' => 'Services',
    'program' => 'Programs',
    'event' => 'Events',
    'blog' => 'Blog',
    'team' => 'Our Team',
    'testimonial' => 'Testimonials',
    '404' => 'Not Found',
];

$title = $titles[$page] ?? 'School Website';

// Pass current path for active nav highlighting
$currentPath = $uri;

view($page, compact('title', 'currentPath'));
