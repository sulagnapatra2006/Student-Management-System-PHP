<?php
session_start();
?>

<!DOCTYPE html>

<html>
<head>
    <title>Student Management System</title>

```
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
```

</head>

<body class="bg-light">

<div class="container mt-5">

```
<h2 class="text-center text-primary mb-4">
    Student Management System
</h2>

<?php
if(isset($_SESSION['message']))
{
?>
    <div class="alert alert-success">
        <?php
        echo $_SESSION['message'];
        unset($_SESSION['message']);
        ?>
    </div>
<?php
}
?>

<div class="card shadow p-4">

    <h4 class="mb-3">Add Student</h4>

    <form action="insert.php" method="POST">

        <div class="mb-3">
            <label>Name</label>
            <input type="text"
                   name="name"
                   class="form-control"
                   required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email"
                   name="email"
                   class="form-control"
                   required>
        </div>

        <div class="mb-3">
            <label>Course</label>
            <input type="text"
                   name="course"
                   class="form-control"
                   required>
        </div>

        <button type="submit"
                class="btn btn-primary">
            Save Student
        </button>

        <a href="view.php"
           class="btn btn-success">
            View Students
        </a>

    </form>

</div>
```

</div>

</body>
</html>
