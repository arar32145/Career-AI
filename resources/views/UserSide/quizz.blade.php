<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Job Assessment Quiz</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #11314d;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #324961;
      width: 100%;
      padding: 1.5em 0;
      text-align: center;
      position: fixed;
      top: 0;
      left: 0;
      z-index: 100;
    }

    .header-content {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 1em;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo img {
      width: 50px;
      height: auto;
      border-radius: 50%;
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

    .quiz-container {
      background-color: #21517a;
      opacity: 0.;
      width: 100%;
      max-width: 700px;
      margin: 120px auto 30px;
      padding: 2em;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      max-height: none;
      height: auto;
      overflow-y: auto;
    }

    h1 {
      text-align: center;
      color: #ffffff;
      font-size: 1.7em;
      margin-bottom: 1em;
    }

    .question-container {
      display: flex;
      flex-direction: column;
      padding: 1em 0;
      border-bottom: 1px solid #ddd;
    }

    .question {
      font-size: 1.1em;
      line-height: 1.4;
      color: white;
      margin-bottom: 0.5em;
    }

    .answers {
      display: flex;
      gap: 1em;
      align-items: center;
    }

    label {
      font-size: 0.99em;
      color: hsl(0, 100%, 100%);
      display: flex;
      align-items: center;
      gap: 0.3em;
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
      margin-top: 1.5em;
      transition: background-color 0.3s;
    }

    .button:hover {
      background-color: #2980b9;
    }

    @media (max-width: 768px) {
      h1 {
        font-size: 1.4em;
      }

      .quiz-container {
        margin: 100px 1em 30px;
        padding: 1.5em;
        overflow-y: auto;
      }
    }

    @media (max-width: 480px) {
      html, body {
        overflow: hidden;
        height: auto;
      }

      h1 {
        
        font-size: 1.2em;
      }

      .question {
        font-size: 0.95em;
      }

      label input[type="checkbox"] {
        width: 20px;
        height: 20px;
        font-size: 0.9em;
      }

      .button {
        padding: 0.8em;
        font-size: 0.95em;
      }

      .logo img {
        width: 60px;
      }

      .quiz-container {
        max-height: none;
        height: auto;
        overflow: visible;
        overflow-y: auto;
        margin: 100px 0 30px;
        border-radius: 0;
        box-shadow: none;
      }
    }
  </style>
</head>
<body>

<header>
  <div class="header-content">
    <div class="logo">
      <img src="your-logo.png" alt="Logo" />
    </div>
    <a href="login.html" class="logout-btn">Logout</a>
  </div>
</header>

<div class="quiz-container">
  <h1>Job Assessment Quiz</h1>
  <div id="quizContent">
    <!-- Questions will be inserted dynamically -->
  </div>
  <button class="button" onclick="submitQuiz()">Submit Quiz</button>
</div>

<script>
  const questions = [
    "Do you have experience with JavaScript?",
    "Are you familiar with responsive design?",
    "Have you worked with a team on a project before?",
    "Do you know how to use Git for version control?",
    "Are you comfortable with remote work?",
    "Do you have experience with front-end frameworks like React or Vue?",
    "Have you worked with databases such as MySQL or MongoDB?",
    "Do you have experience in writing unit tests?",
    "Are you familiar with Agile methodology?",
    "Have you contributed to an open-source project?",
    "Do you have experience with backend development?",
    "Are you familiar with cloud platforms like AWS or Azure?",
    "Do you have experience working with APIs?",
    "Are you comfortable working under tight deadlines?",
    "Do you enjoy problem-solving and debugging code?"
  ];

  function showQuestions() {
    const quizContent = document.getElementById('quizContent');
    quizContent.innerHTML = '';

    questions.forEach((question, index) => {
      const questionContainer = document.createElement('div');
      questionContainer.classList.add('question-container');

      const questionText = document.createElement('div');
      questionText.classList.add('question');
      questionText.textContent = question;

      const answers = document.createElement('div');
      answers.classList.add('answers');

      const yesLabel = document.createElement('label');
      const yesInput = document.createElement('input');
      yesInput.type = 'checkbox';
      yesInput.name = 'question' + index;
      yesInput.value = 'yes';

      yesLabel.appendChild(yesInput);
      yesLabel.appendChild(document.createTextNode('Yes'));

      answers.appendChild(yesLabel);
      questionContainer.appendChild(questionText);
      questionContainer.appendChild(answers);

      quizContent.appendChild(questionContainer);
    });
  }

  function submitQuiz() {
    const allAnswers = [];
    questions.forEach((question, index) => {
      const checkbox = document.querySelector(`input[name="question${index}"]`);
      allAnswers.push({
        question,
        answer: checkbox?.checked ? 'yes' : 'no'
      });
    });

    const answersString = encodeURIComponent(JSON.stringify(allAnswers));
    window.location.href = `result.html?answers=${answersString}`;
  }

  showQuestions();
</script>

</body>
</html>
