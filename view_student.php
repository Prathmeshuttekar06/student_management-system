<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>View Students</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
<h2>Student List</h2>

<table class="table table-bordered table-hover">
<tr class="table-dark">
<th>ID</th><th>Name</th><th>Email</th><th>Course</th><th>Age</th><th>Action</th>
</tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM students");
while ($row = mysqli_fetch_assoc($result)) {
?>
<tr>
<td><?= $row['id'] ?></td>
<td><?= $row['name'] ?></td>
<td><?= $row['email'] ?></td>
<td><?= $row['course'] ?></td>
<td><?= $row['age'] ?></td>
<td>
<a href="update_student.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
<a href="delete_student.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
</td>
</tr>
<?php } ?>
</table>

<a href="index.php" class="btn btn-secondary">Back</a>
</div>
</body>
</html>