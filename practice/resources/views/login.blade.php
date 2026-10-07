<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Registration Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f7f6;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
    }

    .form-container {
      background: #ffffff;
      padding: 24px;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
    }

    .form-container h2 {
      margin-top: 0;
      margin-bottom: 20px;
      color: #333333;
      text-align: center;
    }

    .form-group {
      margin-bottom: 16px;
    }

    .form-group label {
      display: block;
      margin-bottom: 6px;
      font-weight: bold;
      color: #555555;
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #cccccc;
      border-radius: 4px;
      box-sizing: border-box;
      font-size: 14px;
    }

    .form-group input:focus {
      outline: none;
      border-color: #0066cc;
      box-shadow: 0 0 4px rgba(0, 102, 204, 0.3);
    }

    button {
      width: 100%;
      padding: 12px;
      background-color: #0066cc;
      color: #ffffff;
      border: none;
      border-radius: 4px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
    }

    button:hover {
      background-color: #0052a3;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Sign Up</h2>
    <form action={{ route('logincheck') }} method="POST">
      @csrf

      <div class="form-group">
        <label for="email">Email Address</label>
        <input
          type="email" 
          id="email" 
          name="email" 
          placeholder="john@example.com" 
          required
        >
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input
          type="password" 
          id="password" 
          name="password" 
          placeholder="••••••••" 
          required
        >
      </div>


      <button type="submit">Submit</button>
    </form>
  </div>

</body>
</html>