<?php include 'db.php'; ?>
<div class="container mt-5">
<h2>Search Student</h2>

<form method="POST">
<input type="text" name="search" class="form-control mb-2" placeholder="Enter name">
<button class="btn btn-info">Search</button>
</form>

<?php
if (isset($_POST['search'])) {
$name = $_POST['search'];
$result = mysqli_query($conn, "SELECT * FROM students WHERE name LIKE '%$name%'");
while ($row = mysqli_fetch_assoc($result)) {
echo "<p>{$row['name']} - {$row['course']}</p>";
}
}
?>
</div>