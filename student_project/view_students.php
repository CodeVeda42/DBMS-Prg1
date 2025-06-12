<?php
include 'db.php';
$result = $conn->query("SELECT * FROM students");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>View Students</title>
   <link rel="stylesheet" href="style_view.css">
</head>
<body>
<header>
  <h1>Student Management System</h1>
</header>
<h2>Student List</h2>
<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
      <td><?= $row["id"] ?></td>
      <td><?= $row["name"] ?></td>
      <td><?= $row["email"] ?></td>
      <td><?= $row["phone"] ?></td>
      <td class="actions">
        <a href="edit_student.php?id=<?= $row["id"] ?>">Edit</a>
        <a href="delete_student.php?id=<?= $row["id"] ?>" onclick="return confirm('Delete this student?')" class="confirm-delete">Delete</a>
      </td>
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>
         <div class="button-wrapper">
  <a href="home.html" class="button">Home</a>
</div>
</body>
</html>
