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
      position: absolute;
      top:50%;
      left: 50%;
      transform: translate(-50%, -50%);
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
      color: #f7f732;
      margin-top: 0;
    }

    p1 {
        text-align:center; 
        display:flex;
        flex-direction: column;
        align-items: center;
        color: white;
        margin-top: 0;
        font-size: 1.1em;
        line-height: 1.9em;
    }

    .result-box {
      background-color: #ecf0f1;
      padding: 20px;
      border-left: 5px solid #3498db;
      margin-top: 20px;
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
    <div>
    <h1>Welcome to the Job Assessment</h1>
    <p1>Need assistance for your future job choice? In Job Assessment we got your back. If you’re undecided or not yet know on what program to take on college check out our assessment sheets. Job Assessment is made to assist upcoming SHS graduates to find the suitable programs for them base on their skill sets and other things.</p1>
   
  </div>
  <div style="text-align: center;">
    <a href="quizz.html" class="btn">Take Assessment</a>
  </div>
    </div>


  
    

   

</body>
</html>