<?php
$request = $_SERVER['REQUEST_URI'];
$baseDir = '/mockTest_v1';
$request = parse_url($request, PHP_URL_PATH);
$request = str_replace($baseDir, '', $request);
//print_r($request);

switch ($request) {
    case '':
    case '/':
        require __DIR__ . '/Dashboard.php';
        break;

    case '/admin':
        require $baseDir. '/Admin/Dashboard.php';
        break;

    case '/user':
        require __DIR__ . '/User/dashboard.php';
        break;

    default:
        http_response_code(404);
        require __DIR__ . '/404.php';
}
