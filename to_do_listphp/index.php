<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>To-Do List</title>
  <style>
    body {
      font-family: 'Comic Sans MS', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #ffeef8;
      display: flex;
      justify-content: center;
      align-items: flex-start;
      padding: 60px 20px;
    }

    .todo-container {
      background-color: #fff0f6;
      padding: 40px 30px;
      width: 100%;
      max-width: 550px;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(255, 105, 180, 0.2);
      border: 2px solid #ffc1e3;
    }

    h2 {
      text-align: center;
      color: #d63384;
      margin-bottom: 25px;
      font-size: 28px;
      font-weight: bold;
      letter-spacing: 1px;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    input[type="text"] {
      padding: 12px;
      border: 2px solid #ffb6d9;
      border-radius: 12px;
      font-size: 16px;
      background-color: #fff;
      transition: border-color 0.3s;
    }

    input[type="text"]:focus {
      border-color: #ff69b4;
      outline: none;
    }

    input[type="submit"] {
      background-color: #ff69b4;
      color: white;
      padding: 12px;
      font-size: 16px;
      border: none;
      border-radius: 12px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
      background-color: #e0559e;
    }

    a {
      display: inline-block;
      text-align: center;
      margin-top: 12px;
      padding: 10px 0;
      background-color: #c77dff;
      color: white;
      text-decoration: none;
      border-radius: 12px;
      font-size: 16px;
      transition: background-color 0.3s;
    }

    a:hover {
      background-color: #a855f7;
    }
  </style>
</head>
<body>

<?php
include 'add_task.php';
?>

<div class="todo-container">
  <h2>🌸 To-Do List</h2>

  <form action="add_task.php" method="POST">
    <input type="text" name="task" placeholder="Enter a new task..." required>
    <input type="text" name="day" placeholder="Enter the day" required>
    <input type="submit" value="Add" name="sbutton">
    <a href="view.php">🌼 Show List</a>
  </form>
</div>

</body>
</html>
