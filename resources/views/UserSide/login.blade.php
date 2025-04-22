<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Student Login</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #11314d;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    header {
      background-color: #324961;
      padding: 1.5em 0;
      text-align: center;
    }

    .logo img {
      width: 80px;
      height: auto;
      border-radius: 50%;
    }

    .login-container {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 1em;
    }

    .login-box {
      background-color: #21517a;
      width: 100%;
      max-width: 500px;
      padding: 2em;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    h1, h2, h3 {
      text-align: center;
      margin-bottom: 0.75em;
    }

    h1 {
      color: #f7f732;
      font-size: 1.6em;
    }

    h2 {
      font-size: 1em;
      color:white;
      margin-bottom: 1.5em;
    }

    h3 {
      color: white;
      font-size: 1.2em;
    }

    .input-container {
      color:white;
      margin: 1.5em 0;
    }

    label {
      font-size: 0.9em;
      display: block;
      margin-bottom: 0.5em;
      color: #555;
    }

    input[type="text"] {
      width: 100%;
      padding: 0.75em;
      font-size: 1em;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .button {
      width: 100%;
      padding: 1em;
      background-color: #3498db;
      color: white;
      font-size: 1em;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .button:hover {
      background-color: #2980b9;
    }

    /* Responsive Typography & Layout */
    @media (max-width: 768px) {
      h1 {
        font-size: 1.4em;
      }

      h2 {
        font-size: 0.95em;
      }

      h3 {
        font-size: 1.1em;
      }

      .login-box {
        padding: 1.5em;
      }
    }

    @media (max-width: 480px) {
      .login-box {
        padding: 1em;
      }

      .logo img {
        width: 60px;
      }

      .button {
        padding: 0.8em;
        font-size: 0.95em;
      }
    }
    
  </style>
</head>
<body>

  <header>
    <div class="logo">
      <img src="your-logo.png" alt="Logo" />
    </div>
  </header>

  <div class="login-container">
    <div class="login-box">
      <h1>Welcome to Job Assessment</h1>
      <h2>Answer the quiz to discover a career path that fits you best.</h2>
      <h3>Student Login</h3>

      <form id="loginForm" onsubmit="return handleLogin(event)">
        <div class="input-container">
          <label for="student-id", style="color:white">Student ID:</label>
          <input type="text" id="student-id" name="student-id" required />
        </div>
        <button class="button" type="submit">Login</button>
      </form>
    </div>
  </div>

  <script>
    function handleLogin(event) {
      event.preventDefault();
      const studentId = document.getElementById("student-id").value;
      if (studentId.trim()) {
        window.location.href = "home-page.html";
      } else {
        alert("Please enter your Student ID.");
      }
    }
  </script>

</body>
</html>
