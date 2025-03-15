<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file if needed -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        .form-group input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }

        .form-group input[type="submit"]:hover {
            background-color: #45a049;
        }

        .form-group .error {
            color: red;
            font-size: 12px;
        }

        .form-group .success {
            color: green;
            font-size: 12px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>User Registration</h2>

        <!-- Registration Form -->
        <form action="{{ route("post.signup") }}" method="POST">
            <!-- CSRF token for security if using Laravel -->
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required placeholder="Enter your full name">
                <!-- Error message if needed -->
                <!-- <p class="error">Error message here</p> -->
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required placeholder="Enter your email">
                <!-- Error message if needed -->
                <!-- <p class="error">Error message here</p> -->
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required placeholder="Enter your password">
                <!-- Error message if needed -->
                <!-- <p class="error">Error message here</p> -->
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required
                    placeholder="Confirm your password">
                <!-- Error message if needed -->
                <!-- <p class="error">Error message here</p> -->
            </div>

            <div class="form-group">
                <input type="submit" value="Register">
            </div>

            <div class="form-group">
                <p>Already have an account? <a href="{{ route("login") }}">Login here</a></p>
            </div>
        </form>
    </div>

</body>

</html>