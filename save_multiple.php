<?php

include 'db.php';

$names = $_POST['name'];
$emails = $_POST['email'];
$courses = $_POST['course'];

for($i = 0; $i < count($names); $i++)
{
    $name = $names[$i];
    $email = $emails[$i];
    $course = $courses[$i];

    if($name != "")
    {
        mysqli_query(
            $conn,
            "INSERT INTO students(name,email,course)
             VALUES('$name','$email','$course')"
        );
    }
}

header("Location: view.php");

?>