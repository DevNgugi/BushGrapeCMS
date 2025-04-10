<!-- resources/views/error.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error__BushGrapeCMS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: red;
            font-size: 2em;
        }
        .error-details {
            margin-top: 20px;
            padding: 15px;
            background-color: #f5c6cb;
            border: 1px solid #f5c6cb;
            border-radius: 4px;
        }
        .error-details pre {
            white-space: pre-wrap;
            word-wrap: break-word;
        }
        .error-info {
            margin-top: 15px;
            padding: 10px;
            background-color: #e9ecef;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Error Occurred</h1>
        <p>Something went wrong while processing your request. Below are the details:</p>

        <div class="error-details">
            <h3>Error Details</h3>
            <p><strong>Message:</strong> <?= htmlspecialchars($exceptionMessage) ?></p>
            <p><strong>File:</strong> <?= htmlspecialchars($exceptionFile) ?> (Line <?= htmlspecialchars($exceptionLine) ?>)</p>
            <pre><strong>Stack Trace:</strong></pre>
            <pre><?= htmlspecialchars($stackTrace) ?></pre>
        </div>

        <div class="error-info">
            <h4>Additional Information</h4>
            <p><strong>Request URI:</strong> <?= htmlspecialchars($requestUri) ?></p>
            <p><strong>Request Method:</strong> <?= htmlspecialchars($requestMethod) ?></p>

            <h5>Request Headers:</h5>
            <pre><?= htmlspecialchars(print_r($requestHeaders, true)) ?></pre>

            <h5>Request Cookies:</h5>
            <pre><?= htmlspecialchars(print_r($requestCookies, true)) ?></pre>

            <h5>Request Query Parameters:</h5>
            <pre><?= htmlspecialchars(print_r($requestQueryParams, true)) ?></pre>

            <h5>Request Body (if POST request):</h5>
            <pre><?= htmlspecialchars($requestBody) ?></pre>

            <h5>Server Variables:</h5>
            <pre><?= htmlspecialchars(print_r($serverVariables, true)) ?></pre>
        </div>
    </div>
</body>

</html>
