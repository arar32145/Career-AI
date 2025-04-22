<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Career Assessment Result</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #11314d;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
      min-height: 100vh;
    }

    header {
      background-color: #324961;
      padding: 20px 0;
      width: 100%;
      position: sticky;
      top: 0;
      z-index: 10;
    }

    .header-content {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 1em;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    header img {
      width: 120px;
      height: auto;
    }

    .logout-btn {
      background-color: #e74c3c;
      color: white;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 5px;
      font-size: 14px;
      transition: background-color 0.3s;
    }

    .logout-btn:hover {
      background-color: #c0392b;
    }

    .container {
      max-width: 600px;
      width: 100%;
      padding: 30px 20px;
      margin-top: 20px;
      background-color: #21517a;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      max-height: 70vh;
      overflow-y: auto;
    }

    h1 {
      text-align: center;
      color: #2c3e50;
      margin-top: 0;
      color: white;
    }

    .result-box {
      background-color: #318cc9;
      padding: 20px; 
      border-left: 5px solid #ecf0f1;
      margin-top: 20px;
      color:white;
    }

    .career-suggestion {
      font-size: 1.2em;
      color: #deecfa;
    }

    .description {
      margin-top: 10px;
      line-height: 1.6;
    }

    .btn {
      display: inline-block;
      margin-top: 30px;
      padding: 10px 20px;
      background-color: #3498db;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      text-align: center;
    }

    .btn:hover {
      background-color: #2980b9;
    }

    @media (max-width: 600px) {
      header img {
        width: 90px;
      }

      .logout-btn {
        padding: 8px 16px;
        font-size: 13px;
      }
    }
  </style>
</head>
<body>

  <header>
    <div class="header-content">
      <img src="logo.png" alt="Logo" />
      <a href="login.html" class="logout-btn">Logout</a>
    </div>
  </header>

  <div class="container">
    <h1>Career Assessment Result</h1>

    <div class="result-box">
      <div class="career-suggestion">Suggested Career Path: <strong>Software Developer</strong></div>
      <div class="description">
        Based on your interests, skills, and preferences, a career in software development could be a great fit for you.
        This field allows you to solve problems, build digital tools, and work in a variety of industries.
      </div>
    </div>

    <div class="result-box">
      <div class="career-suggestion">Secondary Suggestion: <strong>Data Analyst</strong></div>
      <div class="description">
        You also showed strong analytical and logical thinking skills. As a Data Analyst, you can interpret data to help
        organizations make informed decisions.
      </div>
    </div>

    <div style="text-align: center;">
      <a href="quizz.html" class="btn">Retake Assessment</a>
    </div>
  </div>

</body>
</html>
