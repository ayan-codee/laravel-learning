<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        h2 {
            margin-bottom: 20px;
            color: #333333;
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #666666;
            font-weight: bold;
        }
        input[type="text"], select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Registration Form</h2>
    <form action="/add" method="POST">
        @csrf
        <!-- Name Field -->
        <div class="form-group">
            <label desert-label for="fullName">Full Name</label>
            <input type="text" id="fullName" name="fullName" placeholder="Enter your full name" required>
        </div>

        <!-- Batch Field -->
        <div class="form-group">
            <label for="batch">Batch</label>
            <input type="text" id="batch" name="batch" placeholder="AI-2026" required>
        </div>

        <!-- Course Field -->
        <div class="form-group">
            <label for="course">Course</label>
            <select id="course" name="course" required>
                <option value="" disabled selected>Select your course</option>
                <option value="web-development">Web Development</option>
                <option value="data-science">Data Science</option>
                <option value="cyber-security">Cyber Security</option>
                <option value="digital-marketing">Digital Marketing</option>
            </select>
        </div>

        <!-- Submit Button -->
        <button type="submit">Submit</button>
        
    </form>
</div>

</body>
</html>
