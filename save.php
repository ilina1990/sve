<?php
    include('base.php');
    $task_name=$_POST['task_name'];
    

    $sql = "INSERT INTO `lista` (`id`, `name`, `inprogres`, `done`) 
    VALUES (NULL, '{$task_name}', '0', '0')";

    if ($mysqli->query($sql) === TRUE) {
    echo ("<script>
    window.alert('Uspesan upis');
    window.location.href='index.php'; 
    </script>");
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
    $mysqli->close();   
?>