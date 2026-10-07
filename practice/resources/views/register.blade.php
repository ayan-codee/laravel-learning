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
     .form-group .errormsg{
      border: 3px solid red;
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
    <form action={{ route('registercheck') }} method="POST">
      @csrf
      <div class="form-group">
        <label for="fullName">Full Name</label>
        <input 
          type="text" 
          id="fullName" 
          name="name" 
          class="{{ $errors->first('name')? 'errormsg':'' }}"
          value="{{ old('name') }}"
          placeholder="John Doe" 
         
        >
        <p style='color:red'>
           @error('name')
          {{ $message }}
          @enderror</p>
      </div>

      <!-- Email Input -->
      <div class="form-group">
        <label for="email">Email Address</label>
        <input 
          class="{{ $errors->first('email')? 'errormsg':'' }}"

          type="text" 
          id="email" 
          name="email" 
          value="{{ old('email') }}"
          placeholder="john@example.com" 
          
        >
         <p style='color:red'>
           @error('email')
          {{ $message }}
          @enderror</p>
      </div>

      <!-- Password Input -->
      <div class="form-group">
        <label for="password">Password</label>
        <input 
                  class="{{ $errors->first('password')? 'errormsg':'' }}"

          type="password" 
          id="password" 
          name="password" 
                    value="{{ old('password') }}"

          placeholder="••••••••" 
          
        >
         <p style='color:red'>
           @error('password')
          {{ $message }}
          @enderror</p>
      </div>
      

      <!-- Phone Number Input -->
      <div class="form-group">
        <label for="phone">Phone Number</label>
        <input 
                  class="{{ $errors->first('phone')? 'errormsg':'' }}"

          type="tel" 
          id="phone" 
          name="phone" 
                    value="{{ old('phone') }}"

          placeholder="+1 (555) 000-0000" 
          pattern="[+0-9\s\-\(\)]{7,20}" 
          
        >
         <p style='color:red'>
           @error('phone')
          {{ $message }}
          @enderror</p>
      </div>

      <button type="submit">Submit</button>
    </form>
  </div>

</body>
</html>