<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Student</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            max-width: 500px;
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

        .form-group input,
        .form-group select {
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
    </style>
</head>

<body>

    <div class="container">
        <h2>Create Student</h2>

        <!-- Student Creation Form -->
        <form action="{{ route("students.store") }}" method="POST">
            <!-- CSRF token for security if using Laravel -->
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <h3>User Information</h3>
            <div class="form-group">
                <label for="user_name">User Name</label>
                <input type="text" id="user_name" name="user_name" required placeholder="Enter user name">
            </div>

            <div class="form-group">
                <label for="user_email">User Email</label>
                <input type="email" id="user_email" name="user_email" required placeholder="Enter user email">
            </div>

            <div class="form-group">
                <label for="password">User Password</label>
                <input type="password" id="password" name="password" required placeholder="Enter password">
            </div>

            <h3>Student Information</h3>
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" id="first_name" name="first_name" required placeholder="Enter first name">
            </div>

            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" id="last_name" name="last_name" required placeholder="Enter last name">
            </div>

            <div class="form-group">
                <label for="email">Student Email</label>
                <input type="email" id="email" name="email" placeholder="Enter student email (optional)">
            </div>

            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone" placeholder="Enter phone number">
            </div>

            <div class="form-group">
                <label for="gender">Gender</label>
                <select id="gender" name="gender" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" id="dob" name="dob">
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" placeholder="Enter address">
            </div>

            <div class="form-group">
                <label for="admission_number">Admission Number</label>
                <input type="text" id="admission_number" name="admission_number" placeholder="Enter admission number">
            </div>

            <div class="form-group">
                <label for="klass_id">Class</label>
                <select id="klass_id" name="klass_id" required>
                    <option value="">Select Class</option>

                    @foreach ($klasses as $klass)

                        <option value="{{ $klass->id }}">{{ $klass->name }}</option>
                    @endforeach
                    <!-- Populate this dynamically with available classes -->
                </select>
            </div>

            <div class="form-group">
                <input type="submit" value="Create Student">
            </div>
        </form>
    </div>

</body>

</html>