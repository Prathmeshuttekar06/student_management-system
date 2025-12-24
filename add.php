<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
<title>Add Student</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
<h2>Add Student</h2>

<form method="POST">
<input type="text" name="name" class="form-control mb-2" placeholder="Name" required>
<input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
<input type="text" name="course" class="form-control mb-2" placeholder="Course" required>
<input type="number" name="age" class="form-control mb-2" placeholder="Age" required>

<button name="save" class="btn btn-success">Save</button>
<a href="index.php" class="btn btn-secondary">Back</a>
</form>

<?php
if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];
    $age = $_POST['age'];

    $query = "INSERT INTO students VALUES('', '$name', '$email', '$course', '$age')";
    mysqli_query($conn, $query);
    echo "<div class='alert alert-success mt-3'>Student Added Successfully</div>";
}
?>

</div>
</body>
</html>