<?php

session_start();

if(!isset($_SESSION['user']))
{
    header("Location: login.php");
    exit();
}

include 'db.php';

$result = mysqli_query(
    $conn,
    "SELECT COUNT(*) AS total FROM students"
);

$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>

<head>

    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <span class="navbar-brand">
            Student Management System
        </span>

        <a href="logout.php" class="btn btn-danger">
            Logout
        </a>
    </div>
</nav>

<div class="container mt-5">

    <div class="card shadow p-5 text-center">

        <h2 class="text-primary mb-4">
            Dashboard
        </h2>

        <h3>
            Total Students:
            <?php echo $row['total']; ?>
        </h3>

        <div class="mt-4">

            <a href="index.php"
               class="btn btn-success">
                Add Student
            </a>

            <a href="view.php"
               class="btn btn-primary">
                View Students
            </a>

        </div>

    </div>

</div>

</body>

</html>