<?php

include 'db.php';

if(isset($_GET['id']))
{
    $id = $_GET['id'];

    $sql = "DELETE FROM students WHERE id=$id";

    if(mysqli_query($conn, $sql))
    {
        header("Location: view.php");
        exit();
    }
    else
    {
        echo "Failed to delete student.";
    }
}

?>
