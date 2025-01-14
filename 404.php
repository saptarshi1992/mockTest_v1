<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>404 Not Found</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
                background-color: #f8f9fa;
                font-family: Arial, sans-serif;
            }

            .error-container {
                text-align: center;
                max-width: 600px;
            }

            .error-code {
                font-size: 6rem;
                font-weight: bold;
                color: #dc3545;
            }

            .error-message {
                font-size: 1.5rem;
                margin-bottom: 1rem;
                color: #6c757d;
            }

            a {
                text-decoration: none;
                color: #ffffff;
            }
        </style>
    </head>

    <body>
        <div class="error-container">
            <div class="error-code">404</div>
            <div class="error-message">Oops! The page you’re looking for doesn’t exist.</div>
            <a href="/mockTest_v1" class="btn btn-primary">Go to Homepage</a>
        </div>
    </body>

</html>