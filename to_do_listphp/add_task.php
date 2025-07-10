    <?php
    $connection = mysqli_connect('localhost','root','','to_do_list');

    if(isset($_POST['sbutton'])){
        $task = $_POST['task'];
        $day = $_POST['day'];

        $query = "Insert into task_add(tasks,day) values('$task','$day')";

        mysqli_query($connection,$query);

    
    

      if ($query) {
        echo "<script>window.location.href='index.php'</script>";
      }
    }

    ?>