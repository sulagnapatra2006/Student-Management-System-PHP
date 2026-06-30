<?php

include 'db.php';

$id = $_GET['id'];

$result = mysqli_query($conn,
"SELECT * FROM students WHERE id=$id");

$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>

<html>

<head>

```
<title>Edit Student</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
```

</head>

<body class="bg-light">

<div class="container mt-5">

```
<div class="card shadow p-4">

    <h2 class="text-center text-primary mb-4">
        Edit Student
    </h2>

    <form action="update.php" method="POST">

        <input type="hidden"
               name="id"
               value="<?php echo $row['id']; ?>">

        <div class="mb-3">

            <label class="form-label">
                Name
            </label>

            <input type="text"
                   name="name"
                   class="form-control"
                   value="<?php echo $row['name']; ?>"
                   required>

        </div>

        <div class="mb-3">

            <label class="form-label">
                Email
            </label>

            <input type="email"
                   name="email"
                   class="form-control"
                   value="<?php echo $row['email']; ?>"
                   required>

        </div>

        <div class="mb-3">

            <label class="form-label">
                Course
            </label>

            <input type="text"
                   name="course"
                   class="form-control"
                   value="<?php echo $row['course']; ?>"
                   required>

        </div>

        <button type="submit"
                class="btn btn-primary">
            Update Student
        </button>

        <a href="view.php"
           class="btn btn-secondary">
            Back
        </a>

    </form>

</div>
```

</div>

</body>

</html>
