<!DOCTYPE html>
<html>
<head>
    <title>Password Reset Request Successful</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #222;
            color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            max-width: 400px;
            padding: 20px;
            background-color: #333;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            border-radius: 5px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #ff5c5c;
        }

        p {
            line-height: 1.6;
            margin-bottom: 15px;
        }

        a {
            display: block;
            text-align: center;
            color: #fff;
            text-decoration: none;
            background-color: #ff5c5c;
            padding: 10px 20px;
            border-radius: 25px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #ff3d3d;
        }

        /* Movie theater background image */
        .container {
            background-image: url("https://example.com/path/to/movie_theater.jpg");
            background-size: cover;
            background-position: center;
            color: #fff;
        }

        /* Overlay to make the text more readable */
        .overlay {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 5px;
        }

        /* Center the container vertically */
        .d-flex {
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="d-flex justify-content-center">
        <div class="container overlay">
            <h2>Password Reset Request Successful</h2>
            <p>We have sent an email to your registered email address with instructions to reset your password. Please check your inbox (and spam folder) and follow the provided link to reset your password.</p>
            <p>If you don't receive the email within a few minutes, please contact our support team for further assistance.</p>
            <a href="signin.php">Back to Signin</a>
        </div>
    </div>

    <!-- Add Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
