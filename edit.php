<?php
include 'db.php';
$id = $_GET['id'];

$data = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT * FROM students WHERE student_id=$id")
);

if (isset($_POST['update'])) {
    mysqli_query($conn, "UPDATE students SET
        name='$_POST[name]',
        email='$_POST[email]',
        mobile='$_POST[mobile]',
        course='$_POST[course]',
        address='$_POST[address]'
        WHERE student_id=$id");

    header("Location: index.php");
}
?>

<form method="post">
    Name: <input type="text" name="name" value="<?= $data['name']; ?>"><br><br>
    Email: <input type="email" name="email" value="<?= $data['email']; ?>"><br><br>
    Mobile: <input type="text" name="mobile" value="<?= $data['mobile']; ?>"><br><br>
    Course: <input type="text" name="course" value="<?= $data['course']; ?>"><br><br>
    Address: <textarea name="address"><?= $data['address']; ?></textarea><br><br>
    <button name="update">Update</button>
</form>