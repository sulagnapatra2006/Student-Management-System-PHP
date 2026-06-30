<?php

session_start();

include 'db.php';

if(isset($_POST['name']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $sql = "INSERT INTO students(name, email, course)
            VALUES('$name', '$email', '$course')";

    if(mysqli_query($conn, $sql))
    {
        $_SESSION['message'] = "Student Added Successfully";
    }
    else
    {
        $_SESSION['message'] = "Failed to Add Student";
    }

    header("Location: index.php");
    exit();
}

?>
