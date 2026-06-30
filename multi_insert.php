<!DOCTYPE html>
<html>
<head>
    <title>Add Multiple Students</title>
</head>
<body>

<h2>Add Multiple Students</h2>

<form action="save_multiple.php" method="POST">

<?php
for($i=1; $i<=10; $i++)
{
?>
    <h3>Student <?php echo $i; ?></h3>

    Name:
    <input type="text" name="name[]">

    Email:
    <input type="email" name="email[]">

    Course:
    <input type="text" name="course[]">

    <br><br>

<?php
}
?>

<button type="submit">
Save All
</button>

</form>

</body>
</html>