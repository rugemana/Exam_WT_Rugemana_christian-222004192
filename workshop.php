<!DOCTYPE html>
<html>
<head>
    <title>Workshops Form</title>
</head>
<body>
    <h2>Workshops Form</h2>
    <form method="post" action="workshops_form.php">
        Instructor ID: <input type="number" name="instructor_id" required><br>
        Title: <input type="text" name="title" required><br>
        Description: <textarea name="description" required></textarea><br>
        Start Date: <input type="datetime-local" name="start_date" required><br>
        End Date: <input type="datetime-local" name="end_date" required><br>
        Location: <input type="text" name="location" required><br>
        Capacity: <input type="number" name="capacity" required><br>
        Status: <input type="text" name="status" required><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        include 'db_connect.php';

        $instructor_id = $_POST['instructor_id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        $location = $_POST['location'];
        $capacity = $_POST['capacity'];
        $status = $_POST['status'];

        $sql = "INSERT INTO workshops (instructor_id, title, description, start_date, end_date, location, capacity, status)
                VALUES ('$instructor_id', '$title', '$description', '$start_date', '$end_date', '$location', '$capacity', '$status')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?>
</body>
</html>
