<?php
$request = $_SERVER['REQUEST_URI'];
$baseDir = '/mockTest_v1/Admin';
$request = parse_url($request, PHP_URL_PATH);
$request = str_replace($baseDir, '', $request);

switch ($request) {
    case '':
    case '/':
        require __DIR__ . '/Dashboard.php';
        break;

    case '/add-questions':
        require __DIR__ . $baseDir . '/Questionform.php';
        break;

    case '/manage-questions':
        require __DIR__ . $baseDir . '/Managequestions.php';
        break;
    case '/user-data':
        require __DIR__ . $baseDir . '/Userdata.php';
        break;

    default:
        http_response_code(404);
        require __DIR__ . '/404.php';
}
