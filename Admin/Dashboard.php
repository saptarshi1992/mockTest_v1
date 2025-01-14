<?php 
$request = $_SERVER['REQUEST_URI'];
$baseDir = '/mockTest_v1/Admin';
$request = parse_url($request, PHP_URL_PATH);
$request = str_replace($baseDir, '', $request);
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body {
                background-color: #f8f9fa;
                margin: 0;
            }

            .sidebar {
                height: 100vh;
                background-color: #343a40;
                color: white;
                padding: 20px;
                position: fixed;
                width: 250px;
                /* Fixed width for sidebar */
                top: 0;
                left: 0;
            }

            .sidebar h3 {
                font-size: 1.5rem;
                margin-bottom: 20px;
                border-bottom: 2px solid #495057;
                padding-bottom: 10px;
            }

            .sidebar a {
                color: #adb5bd;
                text-decoration: none;
                display: block;
                padding: 12px 15px;
                margin: 10px 0;
                border-radius: 5px;
                transition: all 0.3s ease;
                font-weight: 500;
            }

            .sidebar a:hover {
                background-color: #495057;
                color: #fff;
            }

            .main-content {
                margin-left: 250px;
                /* Space for the sidebar */
                padding: 20px;
            }

            .container {
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            }

            h2 {
                font-size: 2rem;
                font-weight: 600;
                color: #343a40;
            }

            p {
                font-size: 1.2rem;
                color: #6c757d;
            }
        </style>
    </head>

    <body>
        <?php
        $baseURL = "";
        ?>
        <div class="sidebar">
            <h3>Admin Dashboard</h3>
            <a href="<?php echo $baseURL; ?>/">Manage Users</a>
            <?php echo $baseURL; ?>
            <a href="<?php echo $baseURL.$request; ?>/manage-questions">Manage Questions</a>
            <a href="<?php echo $baseURL; ?>/add-questions">Add Questions</a>
            <a href="<?php echo $baseURL; ?>/view-results">View Test Results</a>
            <a href="<?php echo $baseURL; ?>/reports">Reports</a>
            <a href="<?php echo $baseURL; ?>/logout">Logout</a>
        </div>
        <div class="main-content">
            <div class="container mt-4">
                <?php
                // if (isset($mainContentFile) && file_exists($mainContentFile)) {
                //     include $mainContentFile;
                // } else {
                //     echo "<h2>Error</h2><p>Content not found.</p>";
                // }
                echo "Welcome Admin - " . date("Y/m/d");
                ?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>

</html>