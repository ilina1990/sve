<?php

include('base.php');
$id=$_GET['id'];

$delete_sql="DELETE FROM lista WHERE id='{$id}'";

if ($mysqli->query($delete_sql) === TRUE) {
    echo "bla";
    echo ("<script>
    window.alert('Uspesano uradjeno');
    window.location.href='index.php'; 
    </script>");
    }
    $mysqli->close();   

?>