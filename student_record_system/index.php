<!DOCTYPE html>
<html>
<head>
    <title>Student Record System</title>
</head>
<body>

<h2>Add New Student</h2>
<form method="post" action="add_student.php">
    First Name: <input type="text" name="first_name" required><br><br>
    Last Name: <input type="text" name="last_name" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    Phone: <input type="text" name="phone"><br><br>
    <input type="submit" value="Add Student">
</form>

<h2>View Students</h2>
<a href="view_students.php">View All Students</a>

</body>
</html>