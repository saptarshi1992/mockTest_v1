<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <?php
        $baseURL = "";
        ?>
        <div class="sidebar">
            <h3>Admin Dashboard</h3>
            <a href="<?php echo $baseURL; ?>/">Manage Users</a>
            <?php echo $baseURL;?>
            <a href="<?php echo $baseURL; ?>/manage-questions">Manage Questions</a>
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
                echo "Welcome Admin - ".date("Y/m/d");   
                ?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>

</html>