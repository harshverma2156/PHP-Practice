<!DOCTYPE html>
<html>
<head>
    <title>Student Form</title>
</head>
<body>

    <h2>Student Information Form</h2>

    <form method="POST">

        <label>Student Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Age:</label><br>
        <input type="number" name="age" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Course:</label><br>
        <input type="text" name="course" required><br><br>

        <input type="submit" name="submit" value="Submit">

    </form>

    <hr>

<?php

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    echo "<h2>Student Details</h2>";

    echo "Name: " . $name . "<br><br>";
    echo "Age: " . $age . "<br><br>";
    echo "Email: " . $email . "<br><br>";
    echo "Course: " . $course . "<br><br>";
}

?>

</body>
</html>