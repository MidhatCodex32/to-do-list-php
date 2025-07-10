<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Task</title>
  <style>
    body {
      font-family: 'Comic Sans MS', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #ffeef8;
      display: flex;
      justify-content: center;
      align-items: flex-start;
      padding: 60px 20px;
    }

    .update-container {
      background-color: #fff0f6;
      padding: 40px 30px;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(255, 105, 180, 0.2);
      border: 2px solid #ffc1e3;
      width: 100%;
      max-width: 500px;
    }

    h2 {
      text-align: center;
      color: #d63384;
      margin-bottom: 25px;
      font-size: 26px;
      font-weight: bold;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    input[type="number"],
    input[type="text"] {
      padding: 12px;
      font-size: 16px;
      border: 2px solid #ffb6d9;
      border-radius: 12px;
      background-color: #fff;
      transition: border-color 0.3s;
    }

    input[type="number"]:focus,
    input[type="text"]:focus {
      border-color: #ff69b4;
      outline: none;
    }

    input[type="submit"] {
      padding: 12px;
      background-color: #ff69b4;
      color: white;
      font-size: 16px;
      border: none;
      border-radius: 12px;
      cursor: pointer;
      transition: background-color 0.3s ease-in-out;
    }

    input[type="submit"]:hover {
      background-color: #e0559e;
    }
  </style>
</head>
<body>

<?php
$connection = mysqli_connect('localhost', 'root', '', 'to_do_list');

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $q = mysqli_query($connection, "SELECT * FROM task_add WHERE serial_notasks='$id'");
  $data = mysqli_fetch_assoc($q);
}
?>

<div class="update-container">
  <h2>🌼 Update Your Task</h2>

  <form method="post">
    <input type="number" readonly name="textid" value="<?php echo $data['serial_notasks'] ?>">
    <input type="text" name="task" value="<?php echo $data['tasks'] ?>" required>
    <input type="text" name="Day" value="<?php echo $data['day'] ?>" required>
    <input type="submit" name="btnupdate" value="Update Record">
  </form>
</div>

<?php
if (isset($_POST['btnupdate'])) {
  $id = $_POST['textid'];
  $task = $_POST['task'];
  $day = $_POST['Day'];

  $query = mysqli_query($connection, "UPDATE task_add SET tasks='$task', day='$day' WHERE serial_notasks=$id");

  if ($query) {
    echo "<script>window.location.href='view.php'</script>";
  }
}
?>

</body>
</html>
