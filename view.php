<?php

include 'db.php';

if(isset($_GET['search']))
{
    $search = $_GET['search'];

    $result = mysqli_query(
        $conn,
        "SELECT * FROM students
         WHERE name LIKE '%$search%'
         OR email LIKE '%$search%'
         OR course LIKE '%$search%'"
    );
}
else
{
    $result = mysqli_query(
        $conn,
        "SELECT * FROM students"
    );
}

?>

<!DOCTYPE html>

<html>

<head>

```
<title>View Students</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
```

</head>

<body class="bg-light">

<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <span class="navbar-brand">
            Student Management System
        </span>
    </div>
</nav>

<div class="container mt-5">

```
<h2 class="text-center text-primary mb-4">
    Student List
</h2>

<form method="GET" class="mb-3">

    <div class="row">

        <div class="col-md-9">
            <input type="text"
                   name="search"
                   class="form-control"
                   placeholder="Search Student">
        </div>

        <div class="col-md-3">
            <button class="btn btn-primary w-100">
                Search
            </button>
        </div>

    </div>

</form>

<a href="index.php"
   class="btn btn-success mb-3">
    Add New Student
</a>

<table class="table table-bordered table-hover shadow">

    <thead class="table-dark">

    <tr>
        <th>SL No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Course</th>
        <th>Action</th>
    </tr>

    </thead>

    <tbody>

    <?php $sl = 1; ?>

    <?php while($row = mysqli_fetch_assoc($result)) { ?>

    <tr>

        <td><?php echo $sl++; ?></td>

        <td><?php echo $row['name']; ?></td>

        <td><?php echo $row['email']; ?></td>

        <td><?php echo $row['course']; ?></td>

        <td>

            <a href="edit.php?id=<?php echo $row['id']; ?>"
               class="btn btn-primary btn-sm">
                Edit
            </a>

            <a href="delete.php?id=<?php echo $row['id']; ?>"
               class="btn btn-danger btn-sm"
               onclick="return confirm('Delete this student?')">
                Delete
            </a>

        </td>

    </tr>

    <?php } ?>

    </tbody>

</table>

<div class="text-center mt-4">
    Developed by Sulagna Patra
</div>
```

</div>

</body>

</html>
