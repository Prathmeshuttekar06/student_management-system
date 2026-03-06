<?php
include 'db.php';
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM students WHERE id=$id"));
?>

<form method="POST" class="container mt-5">
<h2>Update Student</h2>

<input type="text" name="name" value="<?= $data['name'] ?>" class="form-control mb-2">
<input type="email" name="email" value="<?= $data['email'] ?>" class="form-control mb-2">
<input type="text" name="course" value="<?= $data['course'] ?>" class="form-control mb-2">
<input type="number" name="age" value="<?= $data['age'] ?>" class="form-control mb-2">

<button name="update" class="btn btn-primary">Update</button>
</form>

<?php
if (isset($_POST['update'])) {
mysqli_query($conn, "UPDATE students SET 
name='$_POST[name]', email='$_POST[email]', course='$_POST[course]', age='$_POST[age]' 
WHERE id=$id");
header("Location:view_student.php");
}
?>