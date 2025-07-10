<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Task List</title>
  <style>
    body {
      font-family: 'Comic Sans MS', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #ffeef8;
      padding: 40px 20px;
      display: flex;
      justify-content: center;
    }

    .table-container {
      width: 100%;
      max-width: 900px;
      background-color: #fff0f6;
      border: 2px solid #ffc1e3;
      border-radius: 20px;
      padding: 30px;
      box-shadow: 0 10px 25px rgba(255, 105, 180, 0.2);
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #d63384;
      font-size: 26px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    thead {
      background-color: #ff69b4;
      color: white;
    }

    th, td {
      padding: 14px 16px;
      border-bottom: 1px solid #fcddec;
      text-align: left;
      font-size: 15px;
    }

    tbody tr:hover {
      background-color: #ffe4f2;
    }

    a {
      text-decoration: none;
      color: white;
      padding: 6px 12px;
      border-radius: 10px;
      margin-right: 6px;
      font-size: 13px;
    }

    .btn-delete {
      background-color: #ff6b81;
    }

    .btn-update {
      background-color: #c77dff;
    }

    .btn-delete:hover {
      background-color: #ff4d6d;
    }

    .btn-update:hover {
      background-color: #a855f7;
    }
  </style>
</head>
<body>

<div class="table-container">
  <h2>🌸 My Task List</h2>
  <table>
    <thead>
      <tr>
        <th>Serial No</th>
        <th>Task</th>
        <th>Day</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

      <?php
        include 'config.php';

        $query = "SELECT * FROM task_add";
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {
      ?>
          <tr>
            <td><?php echo $row['serial_notasks']; ?></td>
            <td><?php echo $row['tasks']; ?></td>
            <td><?php echo $row['day']; ?></td>
            <td>
              <a class="btn-delete" href="delete.php?id=<?php echo $row['serial_notasks']; ?>">Delete</a>
              <a class="btn-update" href="update.php?id=<?php echo $row['serial_notasks']; ?>">Update</a>
            </td>
          </tr>
      <?php
        }
      ?>

    </tbody>
  </table>
</div>

</body>
</html>
